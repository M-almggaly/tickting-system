<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Carbon\Carbon;
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket = Ticket::with('user')->get();
        return view('customer.show-ticket', compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all(); // Replace with your model name and query
        return view('customer.new-ticket', compact('departments'));
    }

    public function showTicket(Request $request)
    {
        $ticketId = $request->input('id');
        $ticket = Ticket::with('Department')->findOrFail($ticketId);
        // Fetch the ticket data and return it as a response
        return view('customer.model-show-ticket', compact('ticket'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'summery' => 'required',
            'build' => 'required',
            'steps' => 'required',
            'expected' => 'required',
            'actual' => 'required',
            'deprartment' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg'
        ]);
    
        if ($request->input('reparted') == 'on') {
            $repeat = 'حدثت من قبل';
        } else {
            $repeat = "جديد";
        }

        $create = new Ticket;
        $create->summary = strip_tags($request->input('summery'));
        $create->build_platform = strip_tags($request->input('build'));
        $create->steps_reproduce = strip_tags($request->input('steps'));
        $create->expected_result = strip_tags($request->input('expected'));
        $create->actual_result = strip_tags($request->input('actual'));
        $create->new_or_repeated = strip_tags($repeat);
        $create->title = strip_tags($request->input('title'));
        $create->support_documentation = strip_tags($request->input('support'));

        $image = $request->file('img');
        $img2 = $request->file('img2');


        if($image != ""){
            // Get the original filename without extension
            $originalFilenameimg = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            // Get the file extension
            $extensionimg = $image->getClientOriginalExtension();
            // Generate a unique filename using the original filename and extension
            $imageName = rand(1,99999).'_'.ltrim($originalFilenameimg) . '.' . $extensionimg;
            $image->storeAs('/public/assets-ticket', $imageName); // Adjust path as needed
            if($img2 != ""){
            // Get the original filename without extension
            $originalFilenamevid = pathinfo($img2->getClientOriginalName(), PATHINFO_FILENAME);
            // Get the file extension
            $extensionvid = $img2->getClientOriginalExtension();
            // Generate a unique filename using the original filename and extension
            $img2name = rand(1,99999).'_'.ltrim($originalFilenamevid) . '.' . $extensionvid;
            $img2->storeAs('/public/assets-ticket', $img2name); // Adjust path as needed
            $Name = $imageName . "," . $img2name;
            $create->image = $Name;  // Store only the generated filename
            }
            else{
            $Name = $imageName;
            $create->image = $Name; 
            }
        }
        $create->user_id = auth()->user()->id;

        // Check if department already exists using first()
        $department = Department::where('name', $request->input('deprartment'))->first();
        if ($department) {
            $create->department = $department->id;
        } else {
            $department = new Department;
            $department->name = $request->input('deprartment');
            $department->save();
            $create->department = $department->id;
        }
    
        if ($create->save()) {
            return response()->json(['success' => true], 200, ['Content-Type' => 'application/json']);
        } else {
            return response()->json('Fail', 400);
        }//
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    
        // Find the ticket by ID
        $ticket = Ticket::findOrFail($id);
        $ticket->severity = $request->input('severe');
        $ticket->status = $request->input('sat');
        $ticket->new_or_repeated = $request->has('reparted') ? 'حدثت من قبل' : 'جديدة';
        $ticket->save();
        
        if ($ticket->wasChanged()) {
            return redirect()->route('admin')->with('success', 'تم تعديل المشكلة بنجاح .');
        } else {
            return back()->withInput()->withErrors($request->validate());
        } 

    }

    /**
     * Remove the specified resource from storage.
     */
 // في TicketController
 public function destroy($id)
 {
     $ticket = Ticket::findOrFail($id);
     $ticket->delete();
 
     // Return a JSON response
     return response()->json(['success', 'تم الحذف المشكلة بنجاح .']);
 }

}
