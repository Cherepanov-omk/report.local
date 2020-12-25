<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{


    /**
     * Display a listing of the resource.
     *s\MethodicalRequest
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::orderBy('school', 'asc')
                        ->orderBy('semestr', 'asc')
                        ->orderBy('students.five', 'asc')
                        ->orderBy('students.four', 'asc')
                        ->orderBy('students.three', 'asc')
                        ->orderBy('students.two', 'asc')
                        ->orderBy('procent.five', 'asc')
                        ->orderBy('procent.four', 'asc')
                        ->orderBy('procent.three', 'asc')
                        ->orderBy('procent.two', 'asc')
                        ->orderBy('kpy', 'asc')
                        ->orderBy('py', 'asc')
                        ->orderBy('ca', 'asc');

        return view('reports.index', compact('reports'));
    }

    public function about()
    {
        return view('about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return redirect()->route('reports.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reports = Report::findOrFail($id);

        return view('reports.show', compact('reports'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reports = Report::findOrFail($id);

        return view('reports.edit', compact('reports'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $reports = Report::findOrFail($id);

        return redirect()->route('reports.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reports = Report::findOrFail($id);
        $reports->delete();

        return redirect()->route('reports.index');
    }
}
