@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Send Report To...</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/{{$expenseReport->id}}">Go Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/expense_reports/{{$expenseReport->id}}/sendMail" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Type a email" value="{{old('email')}}">
                </div>
                <button class="btn btn-primary" type="submit">SendMail</button>
            </form>
        </div>
    </div>

@endsection