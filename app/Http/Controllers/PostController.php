<?php

namespace App\Http\Controllers;

Use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index(){

        $posts = Post::where('status', 2)->latest('id')->paginate(8);

        return view('posts.index', compact('posts'));

    }

    public function show(Post $post){

       return view('posts.show', compact('post'));

    }

    public function category(Category $category){

        $posts = Post::where('category_id', $category->id)
                        ->where('status', 2)
                        ->latest('id')
                        ->paginate(6);

        return view('posts.category', compact('posts', 'category'));
 
     }

     public function tag(Tag $tag){

        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(6);

        return view('posts.tag', compact('posts', 'tag'));
 
     }
}
