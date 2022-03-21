<?php

namespace App\Http\Controllers;

use App\Models\todoit;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class TodoitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todolist = Todoit::all();
        return view('home', compact('todolist'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required'
        ]);
        $task = new todoit();
        $task->task= $request->task;
        $task->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\todoit  $todoit
     * @return \Illuminate\Http\Response
     */
    public function show(todoit $todoit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todoit  $todoit
     * @return \Illuminate\Http\Response
     */
    public function edit(todoit $todoit,$id)
    {
        $todolist = Todoit::all();

        $task = todoit::find($id);
        return view('edit',compact('todolist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todoit  $todoit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, todoit $todoit,$id)
    {
        $request->validate([
            'task' => 'required'
        ]);
        $todolist = Todoit::all();

        $task= todoit::find($id);
        $task->task = $request->task;
        $task->save();
        return view('home', compact('todolist'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todoit  $todoit
     * @return \Illuminate\Http\Response
     */
    public function destroy(todoit $todoit)
    {
        $todoit->delete();
        return back();
    
    }
   /* public function edit($id)
    {

    }
    public function update(Request $request, $id)
    {

        $task = todoit::find($id);

        $task->task = $request->nom_client;
        $task->site = $request->site;
        
       


        $client->save();
        return view('admin');
            }
*/



}
