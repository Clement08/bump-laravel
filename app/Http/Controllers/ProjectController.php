<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
        //$this->middleware('isadmin')->only('index', 'show', 'edit', 'destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Project::paginate(5);
        return view('projects.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'project_name' => 'required',
            'customer_infos' => 'required',
            'customer_adress' => 'required',
            'customer_email' => 'required',
            'customer_numberphone' => 'required',
            'contact_infos' => 'required',
            'contact_adress' => 'required',
            'contact_email' => 'required',
            'contact_numberphone' => 'required',
            'identity_sheet' => 'required',
            'project_type' => 'required',
            'context' => 'required',
            'request' => 'required',
            'goals' => 'required',
            'constraints' => 'required'
        ]);
        $project = new Project();
        $input = $request->input();
        $input['user_id'] = Auth::user()->id;
        $project->fill($input)->save();
        return redirect()->back()->with('success', 'Votre projet a été soumis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $project = Project::findOrFail($id);
        $input = $request->input();
        $project->fill($input)->save();
        return redirect()->back()->with('success', 'Votre projet a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $project->delete();

        return redirect()->route('project.index')->with('success', 'Votre projet a été supprimé');
    }

}