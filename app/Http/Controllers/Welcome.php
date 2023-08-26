<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class Welcome extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        return view('pages.welcome');
    }
}
