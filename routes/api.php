<?php

use App\Models\Department;
use App\Models\Ticket;
use App\Http\Resources\Ticket as TicketResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::get('/tickets', function (Request $request) {
    return response()->json([
        'ticket'=> Ticket::all()
    ]);
});

Route::post('/tickets', function (Request $request) {
    
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
    $create->title = $request->input('title');
    $create->summary = $request->input('summery');
    $create->build_platform = $request->input('build');
    $create->steps_reproduce = $request->input('steps');
    $create->expected_result = $request->input('expected');
    $create->actual_result = $request->input('actual');
    $create->new_or_repeated = $repeat;
    $create->support_documentation = $request->input('support');

     $department = Department::where('name', $request->input('deprartment'))->first();
        if ($department) {
            $create->department = $department->id;
        } else {
            $department = new Department;
            $department->name = $request->input('deprartment');
            $department->save();
            $create->department = $department->id;
        }

   $image = $request->file('img');
        $video = $request->file('videos');


        if($image != ""){
            // Get the original filename without extension
            $originalFilenameimg = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            // Get the file extension
            $extensionimg = $image->getClientOriginalExtension();
            // Generate a unique filename using the original filename and extension
            $imageName = $originalFilenameimg . '.' . $extensionimg;
            $image->storeAs('assets-ticket', $imageName); // Adjust path as needed
            if($video != ""){
            // Get the original filename without extension
            $originalFilenamevid = pathinfo($video->getClientOriginalName(), PATHINFO_FILENAME);
            // Get the file extension
            $extensionvid = $video->getClientOriginalExtension();
            // Generate a unique filename using the original filename and extension
            $videoname = $originalFilenamevid . '.' . $extensionvid;
            $video->storeAs('assets-ticket', $videoname); // Adjust path as needed
            $Name = $imageName . " , " . $videoname;
            $create->image = $Name;  // Store only the generated filename
            }
            else{
            $Name = $imageName;
            $create->image = $Name; 
            }
        }

    $create->save();
    $data = new TicketResource($create);
    return $data->response()->setStatusCode('200');
    
});

Route::post('/table',[TicketController:: class,'store'])->name('new-ticket.store');

