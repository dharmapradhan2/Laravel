@include('header')
@push('title')
    <title>Student Management</title>
@endpush
<div class="container-fluid">
    @yield('main-section')
</div>
@include('footer')