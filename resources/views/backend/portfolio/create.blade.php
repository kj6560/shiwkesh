@extends('layouts.backend')
@section('content')
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{!empty($portfolio->id) ?"Edit ":"Create "}}Portfolio</h5>

          <!-- General Form Elements -->
          <form action="/portfolioSettings/store" enctype="multipart/form-data" method="POST">
            @if(!empty($portfolio->id))
            <input type="text" name="id" value="{{$portfolio->id}}" hidden class="form-control">
            @endif
            @csrf
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Client Name</label>
              <div class="col-sm-10">
                <input type="text" name="client_name" value="{{$portfolio->client_name??''}}" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Select Work Type</label>
              <div class="col-sm-10">
                <select class="form-select" name="work_type" aria-label="Default select example">
                  <option selected>Select Work Type</option>
                  <option value="1" @if(!empty($portfolio->id) && $portfolio->work_type==1) selected @else "" @endif>Website</option>
                  <option value="2" @if(!empty($portfolio->id) && $portfolio->work_type==2) selected @else "" @endif>Mobile Application</option>
                  <option value="3" @if(!empty($portfolio->id) && $portfolio->work_type==3) selected @else "" @endif>Backend Utility</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Work Url</label>
              <div class="col-sm-10">
                <input type="text" name="work_url" value="work_url" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Select Work Status</label>
              <div class="col-sm-10">
                <select class="form-select" name="status" aria-label="Default select example">
                  <option selected>Select Work Status</option>
                  <option value="1" @if(!empty($portfolio->id) && $portfolio->status==1) selected @else "" @endif>Ongoing</option>
                  <option value="2" @if(!empty($portfolio->id) && $portfolio->status==1) selected @else "" @endif>Pending</option>
                  <option value="3" @if(!empty($portfolio->id) && $portfolio->status==1) selected @else "" @endif>Completed</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Work Image Upload</label>
              <div class="col-sm-10">
                <input class="form-control" name="work_image" type="file" id="formFile">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Select Active</label>
              <div class="col-sm-10">
                <select class="form-select" name="is_active" aria-label="Default select example">
                  <option selected>Select Active</option>
                  <option value="1" @if(!empty($portfolio->id) && $portfolio->is_active==1) selected @else "" @endif>Yes</option>
                  <option value="0" @if(!empty($portfolio->id) && $portfolio->is_active==0) selected @else "" @endif>No</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>


  </div>
</section>
@endsection