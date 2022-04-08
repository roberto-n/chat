<?php

namespace App\Http\Controllers;

use Illuminate\Http;
use Inertia\Inertia;

class ChatController extends Controller
{
    public function view(){
       
      return inertia::render("view");
    }

    public function operacao(){
       
      return inertia::render("operacao");
    }
}
