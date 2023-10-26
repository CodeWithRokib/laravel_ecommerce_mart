@extends('admin.master')

@section('title')
    Create Product
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
                    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product</a></li>
                    <li class="breadcrumb-item active">Create Product</li>
                </ol>
            </div>
            <h4 class="page-title">Create Product</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="col-lg-12 px-4">
    <div class="card" style="border:1px solid white">
        <div class="card-header"><strong>Create Product</strong></div>
        <div class="card-body card-block">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label for="name" class=" form-control-label">Product Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter name" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label for="categoryId" class=" form-control-label">Category Name</label>
                    <select name="category_id" id="categoryId" class="form-control select2" data-toggle="select2" data-placeholder="Select a category">
                        <option selected>Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="subCategory" class=" form-control-label">Sub Category Name</label>
                    <select name="sub_category_id" id="subCategory" class="form-control select2" data-toggle="select2" data-placeholder="Select a sub category">
                        <option selected>Select a sub category</option>
                        @foreach($SubCategories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="subSubCategory" class=" form-control-label">Sub Category Name</label>
                    <select name="sub_sub_category_id" id="subSubCategory" class="form-control select2" data-toggle="select2" data-placeholder="Select a sub sub category">
                        <option selected>Select a sub sub category</option>
                        @foreach($SubSubCategories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="enterprise_id" class=" form-control-label">Entreprenerus Name</label>
                    <select name="enterprise_id" id="enterprise_id" class="form-control select2" data-toggle="select2" data-placeholder="Select Entreprenerus">
                        <option></option>
                        @foreach($enterprises as $enterprise)
                            <option value="{{ $enterprise->id }}">{{ $enterprise->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="price" class=" form-control-label">Product Price</label>
                    <input type="text" id="price" name="price" placeholder="Enter price" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label for="quantity" class=" form-control-label">Product Quantity</label>
                    <input type="text" id="quantity" name="quantity" placeholder="Enter quantity" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label for="sku" class=" form-control-label">Product SKU</label>
                    <input type="text" id="sku" name="sku" placeholder="Enter sku" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label for="code" class=" form-control-label">Product Code</label>
                    <input type="text" id="code" name="code" placeholder="Enter code" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label for="discount" class=" form-control-label">Product Discount</label>
                    <input type="text" id="discount" name="discount" placeholder="Enter discount" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label for="description" class=" form-control-label">Description</label>
                    <textarea name="description" id="bios" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group mb-2">
                    <label for="image" class=" form-control-label">Image</label>
                    <input type="file" id="image" name="image" class="form-control">
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
    </div>
</div>
@endsection

@section('script')
    <script>
        $(document).on('change', '#categoryId', function () {
            var categoryId = $(this).val();
            console.log(categoryId);
            $.ajax({
                url: "{{ route('get-sub-category') }}",
                method: "POST",
                dataType: "json",
                data: {
                    category_id: categoryId,
                },
                success: function (data) {
                    console.log(data);
                    var option = '';
                    option += '<option>Select a sub category</option>';
                    $.each(data, function (key, value) {
                        option += '<option value="' + value.id + '">' + value.name + '</option>';
                    });
                    $('#subCategory').empty().append(option);
                }
            });
        });

        $(document).on('change', '#subCategory', function () {
            var subCategoryId = $(this).val();
            console.log(subCategoryId);
            $.ajax({
                url: "{{ route('get-sub-sub-category') }}",
                method: "POST",
                dataType: "json",
                data: {
                    sub_category_id: subCategoryId,
                },
                success: function (data) {
                    console.log(data);
                    var option = '';
                    option += '<option disabled>Select a sub sub category</option>';
                    $.each(data, function (key, value) {
                        option += '<option value="' + value.id + '">' + value.name + '</option>';
                    });
                    $('#subSubCategory').empty().append(option);
                }
            });
        });
    </script>
    <script>
        CKEDITOR.replace( 'address' );
        CKEDITOR.replace( 'bios' );
    </script>
@endsection
