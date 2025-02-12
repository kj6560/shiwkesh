@extends('layouts.backend')
@section('content')

<div class="pagetitle">
    <h1>General Settings</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Website Settings</a></li>
            <li class="breadcrumb-item active">General Settings</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">@if(!empty($setting->id)) Edit @else Create @endif Settings</h5>

                    <!-- General Form Elements -->
                    <form action="/storeGeneralSettings" method="POST" enctype="multipart/form-data">
                        @if(!empty($setting->id))
                        <input type="hidden" name="id" value="{{$setting->id}}">
                        @endif
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Settings Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="settings_name" value="{{$setting->settings_name??old('settings_name')}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Settings Value</label>
                            <div class="col-sm-10">
                                <input type="text" name="settings_value" value="{{$setting->settings_value??old('settings_value')}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Select</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="is_active" aria-label="Default select example">
                                    <option selected>Select Status</option>
                                    <option value="1" @if(!empty($setting->is_active) && $setting->is_active == 1) selected @endif>Yes</option>
                                    <option value="0" @if(!empty($setting->is_active) && $setting->is_active == 0) selected @endif>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-10">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>


    </div>
</section>


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
                                <th scope="col">Settings Name</th>
                                <th scope="col">Settings Value</th>
                                <th scope="col">Active</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($settings as $key=>$setting)
                            <tr>
                                <th scope="row">{{$setting->id}}</th>
                                <td>{{$setting->settings_name}}</td>
                                <td>{{$setting->settings_value}}</td>
                                <td>{{$setting->is_active==1 ?"Yes":"No"}}</td>
                                <td>
                                    <a href="/editGeneralSettings/{{$setting->id}}" class="btn btn-primary">Edit</a>
                                    <a href="/deleteGeneralSettings/{{$setting->id}}" class="btn btn-danger">Delete</a>
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