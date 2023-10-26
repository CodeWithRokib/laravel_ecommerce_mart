@extends('admin.master')

@section('title')
    Section
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
                </form>
            </div>
            <h4 class="page-title">Analytics</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="col-lg-12 px-4">
    <div class="card" style="border:1px solid white">
        <div class="card-header">
            <strong class="card-title">Section Table</strong>
            <span class="ms-auto float-right"><a href="{{ route('section.create') }}" class="btn btn-primary">Add Section</a></span>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sections as $section)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $section->name }}</td>
                        <td>{{ $section->status == 1 ? 'Show' : 'Hide' }}</td>
                        <td>
                            <form action="{{ route('section.destroy', $section->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('section.edit', $section->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <button type="submit" class="btn btn-danger btn-sm"><i class="ti-trash"></i></button>
                            </form>
                            {{-- <a href="{{ route('role.destroy', $role->id) }}" class="btn btn-danger btn-sm"><i class="ti-trash"></i></a>    --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection