@extends('admin.master')

@section('title')
    Banner
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
                    {{-- <li class="breadcrumb-item"><a href="{{ route('sub-sub-category.index') }}">Sub Sub Category</a></li> --}}
                    <li class="breadcrumb-item active">Banner</li>
                </ol>
            </div>
            <h4 class="page-title">Banner</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Banner Table</strong>
                <span class="ms-auto" style="float: right"><a href="{{ route('banner.create') }}" class="btn btn-primary">Add Banner</a></span>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Banner Title</th>
                            <th scope="col">Banner Subtitle</th>
                            <th scope="col">Banner url</th>
                            <th scope="col">Banner Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $banner->title }}</td>
                            <td>{{ $banner->subtitle }}</td>
                            <td>{{ $banner->url }}</td>
                            <td><img src="{{ asset($banner->image) }}" height="60px" width="100px" alt=""></td>
                            <td>
                                <form action="{{ route('banner.destroy', $banner->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-primary btn-sm"><i class="uil-edit"></i></a>
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="uil-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>

<!-- end row -->

@endsection

@section('script')

@endsection
