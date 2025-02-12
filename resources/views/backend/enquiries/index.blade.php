@extends('layouts.backend')
@section('content')

<div class="pagetitle">
    <h1>Enquiries</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Enquiries</a></li>
            <li class="breadcrumb-item active">All Enquiries</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">General Settings</h5>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($queries as $key=>$query)
                            <tr>
                                <th scope="row">{{$query->id}}</th>
                                <td>{{$query->name}}</td>
                                <td>{{$query->email}}</td>
                                <td>{{$query->subject}}</td>
                                <td>
                                    <a href="/viewEnquiry/{{$query->id}}" class="btn btn-primary">View</a>
                                    <a href="/deleteEnquiry/{{$query->id}}" class="btn btn-danger">Delete
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection