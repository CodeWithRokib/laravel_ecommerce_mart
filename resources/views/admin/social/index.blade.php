@extends('admin.master')

@section('title')
    Social Feed
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
                    <li class="breadcrumb-item active">Social Feed</li>
                </ol>
            </div>
            <h4 class="page-title">Social Feed</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Social Feed Table</strong>
                <span class="ms-auto" style="float: right"><a href="{{ route('social.create') }}" class="btn btn-primary">Add Social Feed</a></span>
            </div>
            <div class="card-body">
                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Social Name</th>
                            <th>Link</th>
                            <th>Icon</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($socials as $social)
                        <tr>
                            <td>{{ $social->name }}</td>
                            <td>{{ $social->link }}</td>
                            <td>{{ $social->icon }}</td>
                            <td>
                                @if ($social->status == 1)
                                    <span class="badge bg-success">Published</span>
                                @else
                                    <span class="badge bg-danger">UnPublished</span>
                                @endif
                            <td>
                                <form action="{{ route('social.destroy', $social->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('social.edit', $social->id) }}" class="btn btn-primary btn-sm"><i class="uil-edit"></i></a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="uil-trash-alt"></i></button>
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
