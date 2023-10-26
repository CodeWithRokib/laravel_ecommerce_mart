@extends('admin.master')

@section('title')
    Create Sub Sub Category
@endsection

@section('style')

@endsection

@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-light" id="dash-daterange">
                        <span class="input-group-text bg-primary border-primary text-white">
                            <i class="mdi mdi-calendar-range font-13"></i>
                        </span>
                    </div>
                    <a href="javascript: void(0);" class="btn btn-primary ms-2">
                        <i class="mdi mdi-autorenew"></i>
                    </a>
                    <a href="javascript: void(0);" class="btn btn-primary ms-1">
                        <i class="mdi mdi-filter-variant"></i>
                    </a>
                </form>
            </div>
            <h4 class="page-title">Sub Sub Category</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Create Sub Sub Category</strong></div>
            <div class="card-body card-block">
                <form action="{{ route('sub-sub-category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name" class=" form-control-label">Sub Sub Category Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter Sub Sub Category name" class="form-control">
                    </div>
                
                    <div class="form-group mb-2">
                        <label for="subCategory" class=" form-control-label">Sub Category Name</label>
                        <select name="sub_category_id" id="subCategory" class="form-control select2" data-toggle="select2" data-placeholder="Select a sub category">
                            <option disabled>Select a sub category</option>
                            <option>Select sub Category</option>
                            @foreach($subCategories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
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
                $('#subCategory').empty().append(option);            }
        });
    });
</script>
@endsection
