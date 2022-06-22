@extends('home')
@push('title')
    <title>Student Details Page</title>
@endpush
@section('main-section')
    <table class="table table-striped table-inverse table-responsive mt-5 container-fluid">
        {{-- {{$students}} --}}
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone No.</th>
                <th>Age</th>
                <th>Email</th>
                <th>Class</th>
                <th class="text-center">Actions</th>
                {{-- <th>Delete</th> --}}
            </tr>
            </thead>
            <tbody>
                @foreach ($students as $key=>$item)
                <tr>
                    <td scope="row">{{++$key}}</td>
                   <td>{{$item->fname}}</td>
                   <td>{{$item->phno}}</td>
                   <td>{{$item->age}}</td>
                   <td>{{$item->email}}</td>
                   <td>{{$item->class}}</td>
                   <td class="btn btn-warning">Edit</td>
                   <td class="btn btn-danger">Delete</td>
                </tr>
                @endforeach
            </tbody>
    </table>
@endsection