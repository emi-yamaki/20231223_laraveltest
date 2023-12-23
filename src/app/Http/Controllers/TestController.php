<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view ('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['name1', 'name2', 'gender','email', 'tel1', 'tel2', 'tel3','address1','address2', 'item', 'content']);

        return view('confirm', ['contact' => $contact]);
    }
    
    public function store(Request $request)
    {
        $contact = $request->only('name', 'choices', 'email', 'tel', 'address', 'address2', 'content', 'content2');
    }
}
