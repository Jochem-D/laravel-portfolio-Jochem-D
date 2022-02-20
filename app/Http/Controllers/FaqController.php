<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController
{
    /**
     * show function
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function index()
    {
        $faqs = Faq::latest()->get();

        return view('faqs.index', ['faqs' => $faqs]);
    }

    public function show($id)
    {
        $faq = Faq::find($id);

        return view('faqs.show', ['faq' => $faq]);
    }

    public function create()
    {
      return view('faqs.create');
    }

    public function store()
    {
        $faq = new Faq();

        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');

        $faq->save();

        return redirect('/faq');
    }
}
