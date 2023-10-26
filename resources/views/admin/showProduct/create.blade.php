@extends('admin.master')

@section('title')
    Create Show Product
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
                    <li class="breadcrumb-item"><a href="{{ route('show-product.index') }}">Show Product</a></li>
                    <li class="breadcrumb-item active">Create Show Product</li>
                </ol>
            </div>
            <h4 class="page-title">Create Show Product</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Create Show Product</strong></div>
            <div class="card-body card-block">
                <form action="{{ route('show-product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="categoryId" class=" form-control-label">Category Name</label>
                        <select name="category_id" id="categoryId" class="form-control select2" data-toggle="select2" data-placeholder="Select a category">
                            <option></option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subCategory" class=" form-control-label">Sub Category Name</label>
                        <select name="sub_category_id" id="subCategory" class="form-control select2" data-toggle="select2" data-placeholder="Select a sub category">
                            <option disabled>Select a sub category</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image" class=" form-control-label">Image</label>
                        <input type="file" id="image" name="image" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="status" class=" form-control-label">Status: </label>
                        <label ><input type="radio" name="status" value="1" checked > Published</label>
                        <label ><input type="radio" name="status" value="0" > UnPublished</label>
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
    $(document).on('change', '#categoryId', function(){
        var categoryId = $(this).val();
        console.log(categoryId);
        $.ajax({
            url: "{{ route('get-sub-category') }}",
            method: "POST",
            dataTypes: "json",
            data: {category_id: categoryId},
            success: function(data){
                console.log(data);
                var option = '';
                option += '<option disabled>Select a sub category</option>';
                $.each(data, function(key, value){
                    option += '<option value="'+value.id+'">'+value.name+'</option>';
                });
                $('#subCategory').empty().append(option);            
            }
        });
    });
</script>
@endsection
