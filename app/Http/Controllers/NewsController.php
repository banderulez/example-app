<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
    // Показать новости
    return view('News/index', [
        'news'=>$this->newsList
    ]);
    }

    public function show(int $id)
    {
    return view('news/show', [
        'id' => $id
    ]);
    }
}
