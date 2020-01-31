<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    public function index(){

        $articles= DB::table('article')->paginate(24);
        return view('index', compact('articles'));



    }
    public function show($id){
        $article = Article::find($id);
        return view('posts.show', compact('article'));

    }
    public function create(){
        return view("posts.create", compact('article'));

    }
    public function store(){
        $this->validate(request(),[
            'title' => 'required|min:4',
            'slug' => 'required',
            'description_short' => 'required',
            'reviews' =>'required',
            'image'=>''

        ]);

        Post::create(
            request(array('title','slug','description_short','reviews', 'image'))
        );
        return redirect('/');

    }
    public function edit(Article $article){
        return view("posts.edit", compact('article'));

    }
    public function update(Article $article){
        $this->validate(request(),[
            'title' => 'required|min:4',
            'slug' => 'required',
            'description_short' => 'required',
            'reviews' =>'required',
            'image' => ''
        ]);
        $article->update(request(['title','slug','description_short','reviews','image']));
        return redirect('/');
    }
    public function destroy(Article $article){
        $article->delete();
        return redirect('/');
    }
}
