<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;
use App\Models\User;

class UploadPostCotroller extends Controller
{
    public function save(Request $request) {

        $request->validate([
            'title' => 'required',
            'image' =>  'required',
            'description' => 'required'
        ]);
        
        $imageName = time().$request->image->getClientOriginalName();

        $request->image->move(public_path('images'), $imageName);


        $post = new Post;
        $post->Title=$request->title;
        $post->Image=$imageName;
        $post->Description=$request->description;
        $post->user_id=Auth::id();
        $post->save();

        return redirect()->back()->with('message', 'file added successfully');
        
    }

    public function list()
    {
        $posts = Post::with('user')->get();
        return view('admin.list-post', compact('posts'));
    }

    public function getedit($id)
    {
        $post = Post::find($id);

        return view('admin.edit-post', compact('post'));
    }

    public function updatepost(Request $request)
    {
        $post = Post::find($request->id);
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        if($request->image) {
            $request->validate([
                'image' => 'required'
            ]);
            $imageName = time().$request->image->getClientOriginalName();

            $request->image->move(public_path('images'), $imageName);
        } else {
            $imageName = $post->Image;
        }    
        
        $post->Title=$request->title;
        $post->Image=$imageName;
        $post->Description=$request->description;

        $post->save();

        return redirect()->back()->with('message', 'file updated successfully');
    }

    public function deletepost($id)
    {
        $post = Post::find($id);

        $post->delete();
        
        return redirect()->back()->with('message', 'file deleted successfully');
    }
}
