<?php

namespace App\Http\Controllers;

use App\Expense;
use App\ExpenseReport;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @param  \App\ExpenseReport  $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function index(ExpenseReport $expenseReport)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\ExpenseReport  $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function create(ExpenseReport $expenseReport)
    {
        return view('expense.create',compact('expenseReport'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExpenseReport  $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ExpenseReport $expenseReport)
    {
        $expense = new Expense();
        $expense->description = $request->get('description');
        $expense->amount = $request->get('amount');
        $expense->expense_report_id = $expenseReport->id;
        $expense->save();
        return redirect("/expense_reports/$expenseReport->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExpenseReport  $expenseReport
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport, Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExpenseReport  $expenseReport
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseReport $expenseReport, Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExpenseReport  $expenseReport
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpenseReport $expenseReport, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExpenseReport  $expenseReport
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseReport $expenseReport, Expense $expense)
    {
        //
    }
}
