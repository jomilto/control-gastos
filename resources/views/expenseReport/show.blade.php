@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Report ID {{$report->id}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Go Back</a>
            <a class="btn btn-info" href="/expense_reports/{{$report->id}}/edit">Edit</a>
            <a class="btn btn-danger" href="/expense_reports/{{$report->id}}/confirmDelete">Delete</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <tr>
                    <td>{{$report->title}}</td>
                    <td>{{$report->title}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection