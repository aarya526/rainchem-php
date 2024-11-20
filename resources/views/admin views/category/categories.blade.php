@push('title')
    <title>
        Rainchem : View Categories</title>
@endpush
@extends('admin views.common.admin-main')
@section('main-section')
    <section class="content">
        <div class="container-fluid">
            {{-- <div class="block-header">
                <h2>Existing Products</h2>
            </div> --}}
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @if (session('success'))
                        <div class="alert alert-success">
                            <div>{{ session('success') }}</div>
                        </div>
                    @endif
                    <div class="card">
                        <div class="header">
                            <h2>Existing Categories</h2>
                            {{-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            {{-- <th>Price</th>
                                            <th>Stock</th>
                                            <th>Description</th>
                                            <th>Active Status</th>
                                            <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $c)
                                            <tr>


                                                <td>{{ $c->category_id }}</td>
                                                <td>{{ $c->categoryName }}</td>
                                                <td>
                                                    @if ($c->isActive == 1)
                                                        <span class="label bg-green">Active</span>
                                                    @else
                                                        <span class="label bg-red">In Active</span>
                                                    @endif
                                                </td>
                                                <td><a href="/admin/edit-category/{{ $c->category_id }}"
                                                        class="btn btn-primary">Edit</a></td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
        </div>
    </section>
@endsection
