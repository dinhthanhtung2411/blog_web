<?php

namespace App\Http\Controllers;

use App\Contract\Blog\BlogServiceInterface;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    protected  $blogService;

    public function __construct(BlogServiceInterface $blogService)
    {
        $this->blogService = $blogService;
    }


    public function index(){
        $posts = DB::table('post')->paginate(3 );
        return view('layout/blog', compact('posts'));
    }
}
