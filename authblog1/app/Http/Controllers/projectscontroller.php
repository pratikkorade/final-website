<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;

class projectscontroller extends Controller
{

public function __construct()
{
  $this->Middleware('auth')->only(['create']);
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $projects=project::all();

      return view('project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      project::create([
      'firstname'=>request('fname'),
      'lastname'=>request('lname'),
      'phoneno'=>request('phoneno'),
      'emailid'=>request('emailid'),
      'user_id'=>auth()->id(),
      'description'=>Request('description'),
    ]);

    return redirect('/project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        return view ('project.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
      return view ('project.edit',compact('project'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(project $project)
    {
        $project->update(request(['description']));
    //  $project->description=request('description');
        $project->save();
        return redirect ('/project');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        $project->delete();
        return redirect("/project");
    }
}
