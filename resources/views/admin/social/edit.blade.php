@extends('admin.master')

@section('title')
    Edit Social Feed
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
                    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Social Feed</a></li>
                    <li class="breadcrumb-item active">Edit Social Feed</li>
                </ol>
            </div>
            <h4 class="page-title">Edit Social Feed</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Edit Social Feed</strong></div>
            <div class="card-body card-block">
                <form action="{{ route('social.update', $social->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Social Feed Name</label>
                        <input type="text" id="name" name="name" value="{{ $social->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="link" class=" form-control-label">Social Feed Link</label>
                        <input type="text" id="link" name="link" value="{{ $social->link }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="icon" class=" form-control-label">Social Feed Icon</label>
                        <input type="text" id="icon" name="icon" value="{{ $social->icon }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="status" class=" form-control-label">Status: </label>
                        <label ><input type="radio" name="status" value="1" {{ $social->status == 1 ? 'checked' : '' }} > Published</label>
                        <label ><input type="radio" name="status" value="2" {{ $social->status == 2 ? 'checked' : '' }} > UnPublished</label>
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
    CKEDITOR.replace( 'description' );
</script>
@endsection
