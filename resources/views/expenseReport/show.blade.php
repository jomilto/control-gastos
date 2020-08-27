@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Report: {{$expenseReport->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Go Back</a>
            <a class="btn btn-info" href="/expense_reports/{{$expenseReport->id}}/expenses/create">Add Expense</a>
            <a class="btn btn-primary" href="/expense_reports/{{$expenseReport->id}}/confirmSendMail">Send Email</a>
            <a class="btn btn-warning" href="/expense_reports/{{$expenseReport->id}}/edit">Edit</a>
            <a class="btn btn-danger" href="/expense_reports/{{$expenseReport->id}}/confirmDelete">Delete</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Details</h3>
            <table class="table">
                <thead>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Amount</th>
                </thead>
                @foreach($expenseReport->expenses as $expense)
                    <tr>
                        <td>{{$expense->description}}</td>
                        <td>{{$expense->created_at}}</td>
                        <td>{{$expense->amount}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection