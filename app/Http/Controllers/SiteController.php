<?php

namespace App\Http\Controllers;
use App\Setting;
use App\Category;
use App\Tag;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $first_post = Post::first();

        return view('index')->with('blog_name', Setting::first()->blog_name) 
        ->with('categories', Category::take(5)->get())
        ->with('tags', Tag::take(13)->get())
        ->with('first_post',$first_post)
        ->with('first_post', Post::orderBy('created_at','desc')->first()) 
        ->with('second_post', Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
        ->with('third_post', Post::orderBy('created_at','desc')->skip(2)->take(2)->get()->first())
        ->with('posts', Post::orderBy('created_at','desc')->take(4)->get())
        ->with('postspops', Post::orderBy('created_at','desc')->take(5)->get())
        ->with('posts1', Post::orderBy('created_at','desc')->take(3)->get())
        ->with('posts2', Post::orderBy('created_at','desc')->skip(3)->take(6)->get())
        ->with('posts3', Post::orderBy('created_at','desc')->skip(6)->take(9)->get())
        ->with('postsinsts', Post::orderBy('created_at','desc')->take(9)->get())
        ->with('postsifoots', Post::orderBy('created_at','desc')->take(5)->get())
        ->with('python', Category::find(1))
        ->with('laravel', Category::find(2))  
        ->with('django', Category::find(4))
        ->with('settings', Setting::first());
         

    }

    public function showPost($slug)
    {
       $post      = Post::where('slug',$slug)->first();
       $next_page = Post::where('id','>',$post->id)->min('id');
       $prev_page = Post::where('id','<',$post->id)->max('id');

        return view('posts.show')
                                 ->with('tags', Tag::take(13)->get())
                                 ->with('post',$post) 
                                 ->with('title',$post->title) 
                                 ->with('next',Post::find($next_page)) 
                                 ->with('prev',Post::find($prev_page))
                                 ->with('setting',Setting::first()) 
                                 ->with('categories',Category::take(5)->get())
                                 ->with('blog_name', Setting::first()->blog_name)
                                 ->with('settings', Setting::first())
                                 ->with('tags', Tag::take(13)->get());


                            
         

    }


    public function showCategory($id)
    {
        $category = Category::find($id);

        return view('categories.show')
                                 ->with('title',$category->name)
                                 ->with('category',$category)
                                 ->with('categories',Category::take(5)->get())
                                 ->with('blog_name', Setting::first()->blog_name)
                                 ->with('settings', Setting::first())
                                 ->with('name',$category->name)
                                 ->with('tags', Tag::all());
                             


                            
         

    }

                                                        
    public function showTag($id)
    {
        $tag = Tag::find($id);   
                                                   

        return view('tags.show')
                                 ->with('title',$tag->tag)
                                 ->with('categories',Category::take(5)->get())
                                 ->with('blog_name', Setting::first()->blog_name)
                                 ->with('settings', Setting::first())
                                 ->with('name',$tag->tag)
                                 ->with('tags', Tag::all())
                                 ->with('tag',$tag);
                              
                             


                            
         

    }
    public function search(){

        $tag = Tag::all();   

    $post = Post::where('title','like','%' . request('search') . '%')->get();
    return view('results.results')
    ->with('posts', $post)
    ->with('title', 'Result:' . request('search')) 
    ->with('settings',Setting::first()) 
    ->with('blog_name',Setting::first()->blog_name) 
    ->with('categories',Category::take(5)->get())
    ->with('query', request('search'))
    ->with('tags', Tag::all())
    ->with('tag',$tag); ;

}
}