@extends('admin.master')

@section('title')
    Edit Sub Category
@endsection

@section('style')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboards</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('sub-sub-category.index') }}">Sub Sub Category</a></li>
                    <li class="breadcrumb-item active">Edit Sub Sub Category</li>
                </ol>
            </div>
            <h4 class="page-title">Edit Sub Sub Category</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Edit Sub Sub Category</strong></div>
            <div class="card-body card-block">
                <form action="{{ route('sub-sub-category.update', $subSubCategory->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Sub Sub Category Name</label>
                        <input type="text" id="name" name="name" value="{{ $subSubCategory->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="categoryId" class="form-control-label">Category Name</label>
                        <select name="category_id" id="categoryId" class="form-control select2" data-toggle="select2" data-placeholder="Select a category">
                            <option></option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $subSubCategory->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="category_id" class="form-control-label">Sub Category Name</label>
                        <select name="sub_category_id" id="subCategory" class="form-control select2" data-toggle="select2" data-placeholder="Select a sub category">
                            <option value="{{ $subSubCategory->subCategory->id }}">{{ $subSubCategory->subCategory->name }}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="status" class=" form-control-label">Status: </label>
                        <label ><input type="radio" name="status" value="1" {{ $subSubCategory->status == 1 ? 'checked' : '' }} > Published</label>
                        <label ><input type="radio" name="status" value="2" {{ $subSubCategory->status == 2 ? 'checked' : '' }} > UnPublished</label>
                    </div>
                    <div class="form-group">
                        <div class="from-group">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>

<!-- end row -->

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#categoryId').change(function(){
                var categoryId = $(this).val();
                console.log(categoryId);
                $.ajax({
                    url: "{{ route('get-sub-category') }}",
                    method: "POST",
                    dataType: "json",
                    data: {
                        category_id: categoryId,
                    },
                    success: function(data){
                        console.log(data);
                        var options = '';
                        options += '<option value="">Select a sub category</option>';
                        $.each(data, function(key, value){
                            options += '<option value="'+value.id+'">'+value.name+'</option>';
                        });
                        $('#subCategory').empty().append(options);
                    }

                });
            });
        });
    </script>
@endsection
