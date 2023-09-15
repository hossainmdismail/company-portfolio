<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Photo;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $product = Product::all();

        $query = Project::query();
        if(!$request->input('product')){
            $project = $query->select('id','title','seo_title','seo_description','seo_tags','status','thumbnail','created_at')->paginate(15);
        }else{
            $project = $query->select('id','title','seo_title','seo_description','seo_tags','status','thumbnail','created_at')->where('product_id',$request->product)->get();
        }

        // $project = Project::all();
        return view('backend.pages.Project.list',[
            'data' => $project,
            'product' => $product,
        ]);
    }

    public function create()
    {
        $product = Product::all();
        return view('backend.pages.Project.create',['product' => $product]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product'       => 'required|integer',
            'title'       => 'required|string',
            'content'       => 'required',
            'thumbnail'       => 'required',
        ]);
        if(Project::where('slugs',Str::slug($request->title))->exists()){
            return back()->with('err','Title is already exits');
         } //checking slugs copy

        Photo::upload($request->thumbnail ,'uploads/project','PROJECT',['1200','900']);

        Project::insert([
            'user_id'           => 1, //user will be added
            'product_id'        => $request->product,
            'title'             => $request->title,
            'slugs'             => Str::slug($request->title),
            'thumbnail'         => Photo::$name,
            'budget'            => $request->budget,
            'client'            => $request->client,
            'content'           => $request->content,
            'seo_title'         => $request->seo_title,
            'seo_description'   => $request->seo_description,
            'seo_tags'          => $request->seo_tags,
            'created_at'        => Carbon::now(),
        ]);
        return back()->with('succ','Create post successfully');
    }

    public function show(Project $project)
    {
        //
    }

    public function edit(Project $project)
    {
        $product = Product::select('id','service')->where('status',1)->get();
        return view('backend.pages.Project.edit',[
            'product'  => $product,
            'project'  => $project,
        ]);
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'product'       => 'required|integer',
            'title'         => 'required|string',
            'content'       => 'required',
        ]);

        if (!empty($request->thumbnail)) {
            Photo::delete('uploads/project',$project->thumbnail);
            Photo::upload($request->thumbnail ,'uploads/project','PROJECT',['1200','900']);
        }

        Project::find($project->id)->update([
            'product_id'        => $request->product,
            'title'             => $request->title,
            'slugs'             => Str::slug($request->title),
            'thumbnail'         => !empty($request->thumbnail)?Photo::$name:$project->thumbnail,
            'budget'            => $request->budget,
            'client'            => $request->client,
            'content'           => $request->content,
            'seo_title'         => $request->seo_title,
            'seo_description'   => $request->seo_description,
            'seo_tags'          => $request->seo_tags,
            'created_at'        => Carbon::now(),
        ]);
        return redirect()->route('project.index')->with('succ','Update post successfully');
    }

    public function destroy(Project $project)
    {
        Photo::delete('uploads/project',$project->thumbnail);
        Project::find($project->id)->delete();
        return back()->with('succ','delete successfully');
    }
}
