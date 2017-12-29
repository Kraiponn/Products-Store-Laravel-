<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;
use APp\Products;
use App\Http\Requests\StoreProjectPost;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Projects::with('products')->orderBy('id', 'asc')->paginate(3);
        return view('projects.index', [
            'projects' => $project
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectPost $request)
    {
        $project = new Projects();
        $project->project_name = $request->project_name;
        $project->customer = $request->customer;
        $project->price = $request->price;
        $project->product_id = $request->product_id;
        $project->save();

        $request->session()->flash('status', 'Add item success');
        return redirect()->action('ProjectController@index');

        // return $request->project_name.$request->customer.$request->product_id.$request->price;
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
        $project = Projects::find($id);
        return view('projects.edit', [
            'projects' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProjectPost $request, $id)
    {
        $project = Projects::find($id);
        $project->project_name = $request->project_name;
        $project->customer = $request->customer;
        $project->price = $request->price;
        $project->product_id = $request->product_id;
        $project->save();

        $request->session()->flash('status', 'Update item success!');
        return redirect()->action('ProjectController@index');
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

    public function delete($id)
    {
        $project = Projects::find($id);
        $project->delete();

        session()->flash('status', 'Delete item success!');
        return redirect()->action('ProjectController@index');
        // return 'delete id '.$id;
    }

}
