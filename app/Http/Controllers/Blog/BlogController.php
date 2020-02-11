<?php

namespace App\Http\Controllers\Blog;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;
Use App\Http\Controllers\Controller;
class BlogController extends Controller
{
    public function category($slug) {

        $category = Category::where('slug', $slug)->first();

        return view('blog.category', [
            'category' => $category,
            'articles' => $category->articles()->where('published', 1)->paginate(12)
        ]);
    }

    public function article($slug) {
        return view('blog.article', [
            'article' => Article::where('slug', $slug)->first()
        ]);
    }
    public function categoryShow(){
        $cat = Category::all();
        return view('layouts.header-mini', ['cat' => $cat]);

    }
}
