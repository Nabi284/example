<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Страница списка постов';
    }
    public function create()
    {
        return "Страница создания поста";
    }
    public function store()
    {

    }
    public function show()
    {
        return view('test',['surname'=>'Багиров', 'name'=>'Наби']);
    }
    public function edit ($post)
    {
        return "Страница изменения  поста {$post}";
    }
    public function update()
    {

    }
    public function delete()
    {

    }
    public function like()
    {

    }

}
