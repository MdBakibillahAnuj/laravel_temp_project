<?php

namespace App\Http\Controllers\Font;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.contact');
    }
}
