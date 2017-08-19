<?php

namespace FootThinkTank\Http\Controllers;

use FootThinkTank\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemsPerPage = 3;
        $projects = Projects::orderBy('created_at', 'desc')->paginate($itemsPerPage);

        return view('pages.projects', array('projects' => $projects, 'title' => 'Projects Display'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create', array('title' => 'Add Project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
                'title' => 'required',
                'slug' => 'required',
                'short_description' => 'required',
                'full_content' => 'required',
            )
        );

        $input = $request->all();
        Projects::create($input);
        Session::flash('flash_message', 'Project added successfully!');
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Projects::where('slug', $slug)->first();
        return view('projects.show', array('project' => $project));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Projects::findOrFail($id);

        return view('projects.edit', array('project' => $project, 'title' => 'Edit Project'));
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
        $project = Projects::findOrFail($id);

        $this->validate($request, array(
                'title' => 'required',
                'slug' => 'required',
                'short_description' => 'required',
                'full_content' => 'required',
            )
        );

        $input = $request->all();

        $project->fill($input)->save();

        Session::flash('flash_message', 'Project updated successfully!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Projects::findOrFail($id);

        $project->delete();

        Session::flash('flash_message', 'Project deleted successfully!');

        return redirect()->route('projects.index');
    }

}
