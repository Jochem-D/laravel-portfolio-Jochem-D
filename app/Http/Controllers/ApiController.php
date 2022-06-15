<?php

namespace App\Http\Controllers;

use App\Models\Post;

class ApiController
{
    /**
     * show function
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function show()
    {
        return view('kitsu');
    }
}
