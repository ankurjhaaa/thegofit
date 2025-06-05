@extends('admin.adminlayout')
@section('title', 'managecategory')

@section('content')
    <!-- sidebar start -->


    <x-admin.sidebar />


    <!-- sidebar end -->
    <!-- main content start -->
    <main class="mt-1 pt-3">
        <div class="container-fluid">
            <!-- card start -->
            <div class="row">
                <div class="col-md-12">
                    <h4 class="fw-bold text-uppercase">Add Category Here</h4>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Fill The Form
                            </div>
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data" action="{{ route("categories.store") }}">
                                    @csrf
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if (session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>There were some errors:</strong>
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Category Name</label>
                                                <input type="text" class="form-control" value="{{ old('name') }}" id="name"
                                                    aria-describedby="" name="name">
                                                <div id="" class="form-text">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Descriptin</label>
                                                <textarea name="description" class="form-control" rows="2"
                                                    id="">{{ old('description') }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="">Upload Images</label>
                                                <input type="file" class="form-control" value="{{ old('icon') }}"
                                                    name="icon" id="">
                                                @error('icon')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="">Status</label>
                                                <select name="status" class="form-select" required>
                                                    <option value="">Select Status</option>
                                                    <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active
                                                    </option>
                                                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive
                                                    </option>
                                                </select>


                                                @error('status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror



                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" value="Save" class="btn btn-success">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



@endsection