@extends('layouts.backend')
@section('content')
<style>
    .exp_text {
        width: 100%;
        /* Full width of the parent container */
        max-width: 100%;
        /* Prevent exceeding the container */
        min-width: 100%;
        /* Prevent shrinking smaller than the container */
        min-height: 50px;
        /* Ensure a reasonable minimum height */
        resize: both;
        /* Allow manual resizing */
        overflow: auto;
        /* Ensure scrollbar if content exceeds height */
    }
</style>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-11 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{!empty($category) && $category->id ? "Edit" : "Create"}} Blog Category
                        {{!empty($category->name) ? " : " . $category->name : ""}}
                    </h4>
                    @include('backend.errors.formErrors')
                    <form method="POST" action="/blogSettings/categories/store" enctype="multipart/form-data"
                        class="forms-sample">

                        @if (!empty($category->id))
                            <input type="text" name="id" value="{{!empty($category) && $category->id ? $category->id : null}}"
                                class="form-control" id="exampleInputUsername1" hidden>
                        @endif

                        @csrf

                        <div class="col" style="margin: 20px;">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Name</label>
                                <input type="text" name="name"
                                    value="{{!empty($category) && $category->name ? $category->name : old('name')}}"
                                    class="form-control" id="exampleInputUsername1">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputUsername1">Description</label>
                                <textarea class="exp_text" name="description" rows="5"
                                    id="content">{{!empty($category) && $category->description ? $category->description : old('description')}}</textarea>
                            </div>

                            
                            
                            <div class="form-group">

                                <label for="exampleSelectGender">Status</label>
                                <select name="active" class="form-select" id="exampleSelectGender">
                                    <option selected>Select Active</option>
                                    <option value="1" @if( isset($category) && $category->active == 1) selected
                                    @endif>Yes
                                    </option>
                                    <option value="0" @if(isset($category) && $category->active == 0) selected
                                    @endif>No
                                    </option>
                                </select>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    // JavaScript for Adding Dynamic Inputs
    document.getElementById('add-more-meta-tags').addEventListener('click', function (e) {
        e.preventDefault();

        // Create a new div for the meta-tag pair
        const metaTagPair = document.createElement('div');
        metaTagPair.classList.add('meta-tag-pair');
        metaTagPair.style.marginBottom = '10px';

        // Create the 'name' input
        const nameInput = document.createElement('input');
        nameInput.type = 'text';
        nameInput.name = 'pro_params[][name]';
        nameInput.placeholder = 'Param Name';
        nameInput.classList.add('form-control');
        nameInput.style.marginRight = '10px';

        // Create the 'value' input
        const valueInput = document.createElement('input');
        valueInput.type = 'text';
        valueInput.name = 'pro_params[][value]';
        valueInput.placeholder = 'Param Value';
        valueInput.classList.add('form-control');

        // Append inputs to the metaTagPair div
        metaTagPair.appendChild(nameInput);
        metaTagPair.appendChild(valueInput);

        // Append the metaTagPair div to the container
        document.getElementById('meta-tags-container').appendChild(metaTagPair);
    });
</script>

@endsection