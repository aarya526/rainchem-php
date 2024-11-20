@push('title')
    <title>Rainchem : Add Category</title>
@endpush
@extends('admin views.common.admin-main')
@section('main-section')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add New Category</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Fill all mandatory details</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation"
                                action="{{ $category->exists ? route('category.update') : route('category.create') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @if ($category->exists)
                                    @method('PUT')
                                    <input type="hidden" name="category_id" value="{{ $category->category_id }}">
                                @endif
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="categoryName"
                                            value="{{ $category->categoryName }}" required>
                                        <label class="form-label">Category Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="categoryPageSubHeading"
                                            value="{{ $category->categoryPageSubHeading }}" required>
                                        <label class="form-label">Category Page Sub Heading</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="categoryPageMainHeading"
                                            value="{{ $category->categoryPageMainHeading }}" required>
                                        <label class="form-label">Category Page Main Heading</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="categoryDescription" cols="30" rows="20" class="form-control no-resize" required>{{ $category->categoryDescription }}</textarea>
                                        <label class="form-label">Category Description</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="isActive" required>
                                            @if (!$category->exists)
                                                <option value="" selected>-- Status --</option>
                                                <option value="1">Active</option>
                                                <option value="0">In Active</option>
                                            @else
                                                <option value="">-- Status --</option>
                                                <option value="1" {{ $category->isActive == 1 ? 'selected' : '' }}>
                                                    Active</option>
                                                <option value="0" {{ $category->isActive == 0 ? 'selected' : '' }}>
                                                    In Active</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <h3>click to upload paragraph image.</h3>
                                        <div class="fallback">
                                            <input name="categoryParagraphImage" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <h3>click to upload hero image.</h3>
                                        <div class="fallback">
                                            <input name="categoryHeroImage" type="file" />
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
