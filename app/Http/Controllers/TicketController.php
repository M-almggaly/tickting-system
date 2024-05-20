<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket = Ticket::all(); // Replace with your model name and query
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
            $repeat = 'old';
        } else {
            $repeat = "new";
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

        if ($image) {
            // Get the original filename without extension
            $originalFilenameimg = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
    
            // Get the file extension
            $extensionimg = $image->getClientOriginalExtension();
            // Generate a unique filename using the original filename and extension
            $imageName = $originalFilenameimg . '.' . $extensionimg;
    
            $image->storeAs('assets-ticket', $imageName); // Adjust path as needed
            $Name = $imageName;
            $create->image = $Name;  // Store only the generated filename
        }
        $create->user_id = 1;

        // Check if department already exists using first()
        if(Department::where('name', $request->input('deprartment'))->first()){
            $create->department = strip_tags($request->input('deprartment'));
        }
        else{
            $department = new Department;
            $department->id = "0";
            $department->name = strip_tags($request->input('deprartment'));
            $department->save();
            $create->department = strip_tags($request->input('deprartment'));
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
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
