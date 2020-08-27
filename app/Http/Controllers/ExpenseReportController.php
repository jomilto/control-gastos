<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpenseReport;
use Illuminate\Support\Facades;

class ExpenseReportController extends Controller
{
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
        $expenseReports = ExpenseReport::all();
        return view('expenseReport.index',compact('expenseReports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required|min:3'
        ]);

        $report = new ExpenseReport();
        $report->title = $validData['title'];
        $report->save();
        
        return redirect('/expense_reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport)
    {
        return view('expenseReport.show',compact('expenseReport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseReport $expenseReport)
    {
        return view('expenseReport.edit',compact('expenseReport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpenseReport $expenseReport)
    {
        $validData = $request->validate([
            'title' => 'required|min:3'
        ]);

        $expenseReport->title = $validData['title'];
        $expenseReport->save();

        return redirect('/expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseReport $expenseReport)
    {
        $expenseReport->delete();
        return redirect('/expense_reports');
    }

    public function confirmDelete(ExpenseReport $expenseReport)  
    {
        return view('expenseReport.confirmDelete',compact('expenseReport'));
    }

    public function confirmSendMail(ExpenseReport $expenseReport)  
    {
        return view('expenseReport.confirmSendMail',compact('expenseReport'));
    }

    public function sendEmail(ExpenseReport $expenseReport)
    {
        Mail::to($request->get('email'))->send(new SummaryReport($expenseReport));
        return redirect("/expense_reports/$expenseReports->id");
    }
}
