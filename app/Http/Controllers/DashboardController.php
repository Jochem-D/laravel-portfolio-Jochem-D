<?php

namespace App\Http\Controllers;

use App\Models\Post;

class DashboardController
{
    /**
     * show function
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function show()
    {
        return view('dashboard');
    }
}
