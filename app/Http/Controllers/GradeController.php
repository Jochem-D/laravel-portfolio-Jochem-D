<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * show function
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function index()
    {
        $grades = Grade::latest()->get();

        return view('grades.index', ['grades' => $grades]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Grade $grade)
    {
        return view('grades.show', ['grade' => $grade]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('grades.create');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validatedAttributes = $request->validate([
            'course_name' => 'required',
            'test_name' => 'required',
            'lowest_passing_grade' => 'required'
        ]);

        Faq::create($validatedAttributes);

        return redirect('/grade');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Grade $grade)
    {
        return view('grades.edit', ['grade' => $grade]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Grade $grade, Request $request)
    {
        $validatedAttributes = $request->validate([
            'course_name' => 'required',
            'test_name' => 'required',
            'lowest_passing_grade' => 'required'
        ]);

        $grade->update($validatedAttributes);

        return redirect('/grade');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Grade $grade)
    {
        $grade->delete();

        return redirect('/grade');
    }
}
