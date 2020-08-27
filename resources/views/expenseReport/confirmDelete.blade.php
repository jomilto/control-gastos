@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Want to Delete Report ID {{$expenseReport->id}}... ?</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Go Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{$expenseReport->id}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection