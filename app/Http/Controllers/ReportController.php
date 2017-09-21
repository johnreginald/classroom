<?php

namespace App\Http\Controllers;

use App\Report;

use App\Student;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::latest()->get();
        $finance = [
            'submitted' => Report::where("status", "SUBMITTED")->sum('fee'),
            'pending' => Report::where("status", "PENDING")->sum('fee')
        ];

        return view("reports.index", compact("reports", 'finance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $student = Student::findOrFail($id);
        return view('reports.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $student_id)
    {
        // Create a Payment Report
        Report::create([
            'fee' => $request->fee,
            'status' => $request->status,
            'student_id' => $student_id,
            'batch_id' => $request->batch_id
        ]);

        // Update Batch 
        $student = Student::findOrFail($student_id);
        $student->batch_id = $request->batch_id;
        $student->save(); 

        return redirect()->action(
            'StudentController@show', ['id' => $student_id]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    { 
        return view('reports.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $report->update( $request->all() );
        return redirect('report');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        $report->delete();
        return redirect('report');
    }
}
