@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Reports</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/create">Create a new Report</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                @foreach($expenseReports as $report)
                    <tr>
                        <td>{{$report->title}}</td>
                        <td>
                            <a class="btn btn-info" href="/expense_reports/{{$report->id}}">Details</a>
                            <a class="btn btn-warning" href="/expense_reports/{{$report->id}}/edit">Edit</a>
                            <a class="btn btn-danger" href="/expense_reports/{{$report->id}}/confirmDelete">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection