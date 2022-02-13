<?php

namespace App\Http\Controllers;

use App\Models\Post;

class WelcomeController
{
    /**
     * show function
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function show()
    {
        return view('welcome');
    }
}
