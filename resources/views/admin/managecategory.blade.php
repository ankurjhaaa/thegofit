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
                    <h4 class="fw-bold text-uppercase">Manage Category</h4>

                </div>
                <div class="row">
                    {{-- Session Success/Error --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Validation Errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>There were some errors:</strong>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                All Category
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>

                                            <th scope="col">Descripton</th>
                                            <th scope="col">Images</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $key => $category)
                                            <tr>
                                                <td>{{ $categories->firstItem() + $key}}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->description }}</td>
                                                <td>
                                                    @if ($category->icon)
                                                        <img src="{{ asset('storage/' . $category->icon) }}" width="50">
                                                    @else
                                                        N/A
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($category->status == '1')
                                                        <span class="badge bg-success">{{ $category->status }}</span>
                                                    @else
                                                        <span class="badge bg-danger">{{ $category->status }}</span>
                                                    @endif


                                                </td>
                                                <td class="d-flex align-items-center">
                                                    <a href="" class="action-btn edit me-1" title="Edit">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>

                                                    <form action="{{ route('categories.destroy', $category ) }}" method="POST" class="m-0 p-0">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" class="action-btn delete" title="Delete">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>



                                        @endforeach


                                    </tbody>

                                </table>
                                <div class="mt-3">
                                    {{ $categories->links() }}
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



@endsection