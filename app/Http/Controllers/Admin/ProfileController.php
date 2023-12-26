<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller {

    public function index(Request $request) {
        return view('profile', [
            "title" => "Profile",
            "request" => $request,
            "name" => auth()->user()->name,
            "email" => auth()->user()->email,
            "avatar" => auth()->user()->avatar,
        ]);
    }

}