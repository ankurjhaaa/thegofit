@extends('admin.adminlayout')
@section('title')
    Admin Dashboard

@endsection
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
                    <h4 class="fw-bold text-uppercase">Dashboard</h4>
                    <p class="">Statistic Of the system</p>
                </div>
                <div class="col-md-3 d-flex gap-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h6 class="card-title text-uppercase text-muted">Total Categories</h6>

                            <h1>130</h1>
                            <a href="#" class="card-link link-underline-light">View More</a>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex gap-3 ">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h6 class="card-title text-uppercase text-muted">Total Products</h6>

                            <h1>130</h1>
                            <a href="#" class="card-link link-underline-light">View More</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex gap-3 ">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h6 class="card-title text-uppercase text-muted">Total Orders</h6>

                            <h1>130</h1>
                            <a href="#" class="card-link link-underline-light">View More</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex gap-3 ">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h6 class="card-title text-uppercase text-muted">Total Users</h6>

                            <h1>130</h1>
                            <a href="#" class="card-link link-underline-light">View More</a>

                        </div>
                    </div>
                </div>

            </div>
            <!-- card end -->
            <!-- tabs start -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active text-uppercase" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">New Category</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-uppercase" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                                aria-selected="false">New Products</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category Title</th>

                                        <th scope="col">Descripton</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Protine</td>
                                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, ipsa!</td>
                                        <td><span class="badge text-bg-danger">Active</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Protine</td>
                                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, ipsa!</td>
                                        <td><span class="badge text-bg-danger">Active</span></td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">


                        </div>

                    </div>
                </div>
            </div>
            <!-- tabs end -->
        </div>
    </main>

    <!-- main content end -->



@endsection