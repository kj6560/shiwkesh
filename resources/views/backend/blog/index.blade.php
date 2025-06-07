@extends('layouts.backend')
@section('content')
  <div class="pagetitle">
    <h1>Blog Posts</h1>
    <div class="col-sm-12">
    <a class="btn btn-primary" href="/blogSettings/blogs/create"><i class="fa fa-solid fa-plus"></i>
      New Blog</a>
    <a class="btn btn-primary" href="/blogSettings/categories"><i class="fa fa-solid fa-plus"></i>
      Blog Categories</a>
    <a class="btn btn-primary" href="/blogSettings/tags"><i class="fa fa-solid fa-plus"></i>
      Blog Tags</a>
    </div>
    <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Blog Posts</a></li>
      <li class="breadcrumb-item active">All Posts</li>
    </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
    <div class="col-lg-12">

      <div class="card">
      <div class="card-body">
        <h5 class="card-title">Blog Posts</h5>
        <table class="table table-bordered" id="posts-table">
        <thead>
          <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Category</th>
          <th>Status</th>
          <th>Actions</th>
          </tr>
        </thead>
        </table>
      </div>
      </div>

    </div>
    </div>
  </section>
@endsection

@section('custom_javascript')
  <script>
    $(function () {
    $('#posts-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: window.location.pathname,
      columns: [
      { data: 'id', name: 'id' },
      { data: 'title', name: 'title' },
      { data: 'category', name: 'category' },
      { data: 'status', name: 'status' },
      {
        data: 'action',
        name: 'action',
        orderable: false,
        searchable: false
      }
      ]
    });
    });
  </script>
@endsection