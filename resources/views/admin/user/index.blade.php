@extends('layouts.master')


@section('content')



    <table class="table">
        <thead>

        <tr>
            <th scope="col">ردیف</th>
            <th scope="col">نام</th>
            <th scope="col">ایمیل</th>
        </tr>
        </thead>

        <tbody>
        @foreach($user as $user)
        <tr>

            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr>

        @endforeach
        </tbody>



@endsection
