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
<div class="col-11 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <h4 class="card-title">Enquiry</h4>

            </div>
            <div class="card-body">
                <!-- Basic Enquiry Information -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <p><strong>Name:</strong> {{$enquiry->name??""}}</p>

                        <p><strong>Subject:</strong> {{$enquiry->subject??""}}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Email:</strong> {{$enquiry->email??""}}</p>
                        <p><strong>Date:</strong> {{$enquiry->created_at??""}}</p>

                    </div>
                    <div class="col-12">
                        <p><strong>Message:</strong> {{$enquiry->message??""}}</p>
                    </div>
                </div>



            </div>
        </div>
    </div>
    @endsection