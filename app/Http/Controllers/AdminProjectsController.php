<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;

class AdminProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('adminProject.create_project',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'thumbnail'=>'required',
            'description'=>'required',
            'github_link'=>'required',
            'youtube_link'=>'required',
            'skills'=>'required',
            'category_id'=>'required'
        ]);
        $project = new Project;
        if($file= $request->file('thumbnail')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $project->thumbnail = $name;
        }

        $project->title = $request->title;
        $project->description = $request->description;
        $project->github_link = $request->github_link;
        $project->youtube_link = $request->youtube_link;
        $project->skills = $request->skills;
        $project->category_id = $request->category_id;

        $project->save();

        return redirect()->route('admin.projects.create')->with('success','project created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
