@push('title')
    <title>Rainchem : Add Product</title>
@endpush
@extends('admin views.common.admin-main')
@section('main-section')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add New Product</h2>
            </div>

            {{-- <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>TASK INFOS</h2>
                            <ul class="header-dropdown m-r--5">
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
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Task</th>
                                            <th>Status</th>
                                            <th>Manager</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Task A</td>
                                            <td><span class="label bg-green">Doing</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62"
                                                        aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Task B</td>
                                            <td><span class="label bg-blue">To Do</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40"
                                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Task C</td>
                                            <td><span class="label bg-light-blue">On Hold</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-light-blue" role="progressbar"
                                                        aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 72%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Task D</td>
                                            <td><span class="label bg-orange">Wait Approvel</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-orange" role="progressbar"
                                                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 95%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Task E</td>
                                            <td>
                                                <span class="label bg-red">Suspended</span>
                                            </td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87"
                                                        aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->

            </div> --}}
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Fill all mandatory details</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation"
                                action="{{ $product->exists ? route('product.update') : route('product.create') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @if ($product->exists)
                                    @method('PUT')
                                    <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                @endif
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="product_name"
                                            value="{{ $product->product_name }}" required>
                                        <label class="form-label">Product Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="category_id" required>
                                            <option value="">-- Please Product Categories --</option>
                                            @foreach ($categories as $c)
                                                <option value="{{ $c->category_id }}"
                                                    {{ $product->category_id == $c->category_id ? 'selected' : '' }}>
                                                    {{ $c->categoryName }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="listPrice"
                                            value="{{ $product->listPrice }}" required>
                                        <label class="form-label">List Price (in Rs.)</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="ourPrice"
                                            value="{{ $product->ourPrice }}" required>
                                        <label class="form-label">Our Price (in Rs.)</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="sku"
                                            value="{{ $product->sku }}" required>
                                        <label class="form-label">SKU</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="stock"
                                            value="{{ $product->stock }}" required>
                                        <label class="form-label">Stock Left</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required>{{ $product->description }}</textarea>
                                        <label class="form-label">Description</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="activeStatus" required>
                                            @if (!$product)
                                                <option value="">-- Status --</option>
                                                <option value="1">Active</option>
                                                <option value="1">In Active</option>
                                            @else
                                                <option value="">-- Status --</option>
                                                <option value="1" {{ $product->activeStatus == 1 ? 'selected' : '' }}>
                                                    Active</option>
                                                <option value="0" {{ $product->activeStatus == 0 ? 'selected' : '' }}>
                                                    In Active</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <h3>click to upload image.</h3>
                                        <div class="fallback">
                                            <input name="image" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
