@extends('home')
@push('title')
    <title>Student Details Page</title>
@endpush
@section('main-section')
    <table class="table table-striped table-inverse table-responsive mt-5 container-fluid text-center">
        {{-- {{$students}} --}}
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone No.</th>
                <th>Age</th>
                <th>Email</th>
                <th>Class</th>
                <th class="text-center">Edit</th>
                <th>Delete</th>
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
                  <td> <a href="/update/{{$item->stud_id}}"class='btn btn-warning'>Edit</a></td>
                  <td> <a href="/delete/{{$item->stud_id}}"class='btn btn-danger'>Delete</a></td>
                </tr>
                @endforeach
            </tbody>
    </table>
@endsection