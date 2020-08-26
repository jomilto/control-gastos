@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Edit Report ID {{$report->id}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Go Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{$report->id}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Type a title" value="{{old()}}">
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>

@endsection