<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(){    
        return Article::select('id', 'title', 'content', 'created_at')->latest()->get();  
    }


}
