<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;// 

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.list', ['posts' => Post::orderBy('created_at', 'desc')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'         => 'required',
            'description'      => 'required'
            
        ]);

        $post = new Post;
        $post->name = $request->input('name');
        $post->slug = str_slug($request->input('name')); 
        $post->description = $request->input('description');
        $post->status = $request->input('status');
        $post->save();

        //wala ka kasi status dun sa html mo, maglagay ka ng select 
        // bale hidden lang po sir?
   

        return redirect()->route('admin.post.index')->with('success', 'Successfully created!');
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
        return view('admin.posts.edit', [
                                            'posts'          => Post::find($id),
                                            'roles'         => Role::all(),
                                            'user_role'     => User::find($id)->roles()->first()
                                        ]);
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
        $this->validate($request, [
            'name'         => 'required',
            'description'         => 'required'
        ]);

        $post           = User::find($id);
        $post->name     = $request->input('name');
        $post->description    = $request->input('text');


        if ($request->has('role')) {
            $post->detachAllRoles();
            $post->attachRole($request->input('role'));
        }

        $post->updated_at = date('Y-m-d');
        $post->save();

        return redirect()->route('admin.post.index')->with('success', 'Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Post::find($id);
        $user->delete();

        return redirect()->route('admin.post.index')->with('success', 'Successfully deleted!');
    }
}
