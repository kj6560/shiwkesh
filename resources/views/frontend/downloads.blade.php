@extends('layouts.frontend')
@section('content')
<div
    class="table-responsive">
    <table
        class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($downloads as $download)
            <tr class="">
                <td scope="row">{{$download->name}}</td>
                <td><a href="/downloadFile?file_name={{$download->path}}" target="_blank">Download</a><td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection