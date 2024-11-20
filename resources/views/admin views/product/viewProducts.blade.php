@push('title')
    <title>
        Rainchem : View Products</title>
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
                            <h2>Existing Products</h2>
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
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>SKU</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Description</th>
                                            <th>Active Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $p)
                                            <tr>


                                                <td>{{ $p->product_id }}</td>
                                                <td><img class="img-responsive thumbnail" alt="No Img Uploaded"
                                                        src="{{ Storage::url($p->imgUrl) }}" alt=""></td>
                                                <td>{{ $p->product_name }}</td>
                                                <td>{{ $p->sku }}</td>
                                                <td>&#8377;{{ $p->ourPrice }}</td>
                                                <td>{{ $p->stock }}</td>
                                                <td>{{ $p->description }}</td>
                                                <td>
                                                    @if ($p->activeStatus == 1)
                                                        <span class="label bg-green">Active</span>
                                                    @else
                                                        <span class="label bg-red">In Active</span>
                                                    @endif
                                                </td>
                                                <td><a href="/admin/edit-product/{{ $p->product_id }}"
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
