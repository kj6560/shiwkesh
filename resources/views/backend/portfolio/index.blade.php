@extends('layouts.backend')
@section('content')
<div class="col-11 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <h4 class="card-title">Portfolios</h4>
        <div class="col-sm-12">
          <a class="btn btn-primary" href="/portfolioSettings/create"><i class="fa fa-solid fa-plus"></i>
            New Portfolio</a>
        </div>
      </div>
      <div class="table-responsive text-nowrap" style="margin: 10px;padding: 10px;">
        <table class="table datatable " id="portfolios">
          <thead>
            <tr class="text-nowrap">
              <th>Id</th>
              <th>Client Name</th>
              <th>Work Type</th>
              <th>Active</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($portfolios as $portfolio)
                <tr>
                    <td>{{ $portfolio->id }}</td>
                    <td>{{ $portfolio->client_name }}</td>
                    <td>{{ $portfolio->work_type }}</td>
                    <td>{{ $portfolio->is_active ==1 ? "YES":"No" }}</td>
                    <td></td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
@endsection
