<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\CommentStoreRequest;
use App\Models\Comment;
use App\Models\Post;
use http\Client\Curl\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {

    }

    public function show($id)
    {
        $post = Post::find($id);

        $post->load([
            'User'
        ]);



       $comment = Comment::where('post_id','=',$id)->get();
       $comment->load([
          'User'
       ]);




        return view('blog.index',compact('post','comment'));

    }

    public function storecomment (CommentStoreRequest $request ,$id)
    {
     $newcomment = new Comment([
         'comment_description'=> $request->comment_description,
         'post_id'=>$id,
         'user_id'=>auth()->user()->id

     ]);
     $newcomment->save();
     return redirect()->route('post.show',$id);
    }


    public function Adminindex()
    {
            return view('admin.index');
    }

    public function Userindex()
    {
        $user = User::all();
        return view('user.index',compact('user'));
    }

    public function categoryindex()
    {
        $category = User::all();
        return view('user.index',compact('category'));
    }
}


