<?php

namespace todo\Http\Controllers;

use Illuminate\Http\Request;
use todo\Http\Requests;
use todo\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index(){
      echo "<br> Hello World.";
    }
}
