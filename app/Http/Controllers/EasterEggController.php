<?php

namespace App\Http\Controllers;

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
