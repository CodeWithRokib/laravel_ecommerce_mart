@extends('admin.master')

@section('title')
    Service
@endsection

@section('style')

@endsection

@section('body')
<div class="breadcrumbs mb-5">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Service</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                            {{-- <li><a href="#">Settings</a></li> --}}
                            <li class="active">Service</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card" style="border:1px solid white">
        <div class="card-header">
            <strong class="card-title">Service Table</strong>
            <span class="float-right"><a href="{{ route('service.create') }}" class="btn btn-primary">Add Service</a></span>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th> Service Name</th>
                        <th>Description</th>
                        @if ($section->status == 1)
                            <th>{{ $section->name }}</th>                            
                        @endif    
                        <th>Validity </th>
                        <th>Location </th>
                        <th>Image </th>
                        <th>Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->description }}</td>
                            @if ($section->status == 1)
                                <td>{{ $service->price }}</td>
                            @endif
                            <td>{{ \Carbon\Carbon::parse($service->date)->format('d-m-Y') }}</td>
                            <td>{{ $service->location }}</td>
                            <td><img src="{{ asset($service->image) }}" alt="" width="100px"></td>
                            <td>
                                <form action="{{ route('service.destroy', $service->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('service.edit', $service->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('service.show', $service->id) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="ti-trash"></i></button>
                                </form>
                                
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