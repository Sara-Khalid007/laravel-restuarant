<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
 public function index() {
    return view("admin.login");
 }
 
 public function authenticate(){
   return redirect("admin.main");
 }
}