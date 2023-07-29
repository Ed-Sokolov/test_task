<?php

namespace App\Http\Controllers\Post\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke($name)
    {
        $category = Category::query()->where('name', $name)->first();

        $posts = $category->posts;

        $categories = Category::all();

        return view('posts.index', compact('posts', 'categories'));
    }
}
