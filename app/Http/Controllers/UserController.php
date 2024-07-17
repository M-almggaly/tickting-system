<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket = Ticket::all(); // Replace with your model name and query
        return view('user.show-ticket', compact('ticket'));
    }

    public function newTick()
    {
        return view('user.new-ticket');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    
    {
        return view('admin.AddUser');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'password'=> 'required',
    
        ]);
   
        $create = new User;
        $create->name = $request->input('name');
        $create->email = $request->input('email');
        $create->password = $request->input('password');
        $create->save();
       return redirect()->route('showUser')->with('success','تم اضافة المستخدم بنجاح');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.EditUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            // Find the user by ID
            $user = User::findOrFail($id);
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->save();
            
            if ($user->wasChanged()) {
                return redirect()->route('showUser')->with('success', 'تم تعديل المستخدم بنجاح .');
            } else {
                return back()->withInput()->withErrors($request->validate());
            }  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $user = User::findOrFail($id);
        $user->visable = 0;
        $user->save();
        return back()->with('success','تم الحذف المستخدم بنجاح .');
        // Return a JSON response
        // return response()->json(['success', 'تم الحذف المستخدم بنجاح .']);
    }
}
