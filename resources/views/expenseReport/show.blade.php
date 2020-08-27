@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Report ID {{$expenseReport->id}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Go Back</a>
            <a class="btn btn-warning" href="/expense_reports/{{$expenseReport->id}}/edit">Edit</a>
            <a class="btn btn-danger" href="/expense_reports/{{$expenseReport->id}}/confirmDelete">Delete</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <tr>
                    <td>{{$expenseReport->title}}</td>
                    <td>{{$expenseReport->title}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection