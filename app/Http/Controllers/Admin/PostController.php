<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\post_blog;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= post_blog::all();
        return view('admin/post/show',compact('posts'));
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/post/post');
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
            'tittle'=>'required',
            'subtittle'=>'required',
            'slug'=>'required',
            'body'=>'required',
        ]);
        $post= new post_blog;
        $post ->tittle = $request->tittle;
        $post ->subtittle = $request->subtittle;
        $post ->slug = $request->slug;
        $post ->body = $request->body;
        $post->save();
        return redirect(route('post.index'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post_blog::where('id',$id)->first();
        return view('admin/post/edit',compact('post'));
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
        $this->validate($request,[
            'tittle'=>'required',
            'subtittle'=>'required',
            'slug'=>'required',
            'body'=>'required',
        ]);
        $post= post_blog::find($id);
        $post ->tittle = $request->tittle;
        $post ->subtittle = $request->subtittle;
        $post ->slug = $request->slug;
        $post ->body = $request->body;
        $post->save();
        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post_blog::where('id',$id)->delete();
        return redirect()->back();
    }
}
