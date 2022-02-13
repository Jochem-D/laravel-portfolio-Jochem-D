<?php

namespace App\Http\Controllers;

use App\Models\Post;

class EasterEggController
{
    /**
     * show function
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function show()
    {
        return view('easteregg');
    }
}
