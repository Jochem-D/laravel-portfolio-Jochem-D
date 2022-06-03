<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Faq;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

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

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Faq $faq)
    {
        return view('faqs.show', ['faq' => $faq]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validatedAttributes = $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => 'nullable'
        ]);

        Faq::create($validatedAttributes);

        return redirect('/faq');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Faq $faq)
    {
        return view('faqs.edit', ['faq' => $faq]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(faq $faq, Request $request)
    {
        $validatedAttributes = $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => 'nullable'
        ]);

        $faq->update($validatedAttributes);

        return redirect('/faq');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Faq $faq)
    {
        $faq->delete();

        return redirect('/faq');
    }
}
