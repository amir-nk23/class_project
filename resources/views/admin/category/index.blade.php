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
        @foreach($category as $category)
        <tr>

            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->status}}</td>
        </tr>

        @endforeach
        </tbody>



@endsection
