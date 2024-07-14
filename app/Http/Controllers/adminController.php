<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Ticket;
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket = Ticket::all(); 
        return view('admin.index', compact('ticket'));
    }

    public function dangerous()
    {
        $ticket = Ticket::all(); 
        return view('admin.dangerous', compact('ticket'));
    }

    public function normal()
    {
        $ticket = Ticket::all(); 
        return view('admin.normal', compact('ticket'));
    }
    
    public function Urgent()
    {
        $ticket = Ticket::all(); 
        return view('admin.very-dangerous', compact('ticket'));
    }

    public function charts()
    {
        return view('admin.charts');
    }

    public function tables()
    {
        $ticket = Ticket::all(); 
        return view('admin.tables', compact('ticket'));
    }

    public function useradd()
    {
        return view('admin.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createe()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $ticket = Ticket::find($id);

        $pic = explode(',',$ticket->image);
        $pic1 = $pic[0];
        $pic2 = $pic[1];
       
        return view('admin.EditTicket', compact('ticket','pic1','pic2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
