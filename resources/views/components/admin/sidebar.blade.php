<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
 <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">

        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="text-secondary small text-uppercase fw-bold">Core</div>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('admini.dashboard') }}"> <i class="fa-solid fa-gauge"></i> Dashboard</a>
                </li>
                <li class="nav-item my-0">
                    <hr>
                </li>
                <li class="nav-item">
                    <div class="text-secondary small text-uppercase fw-bold">Inventory</div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link active sidebar-link" data-bs-toggle="collapse" href="#catmgmt" role="button"
                        aria-expanded="false" aria-controls="catmgmt">
                        <i class="fas fa-dumbbell"></i>
                        Manage Category <span class="right-icon float-end"><i class="fa-solid  fa-chevron-down "></i></span>
                    </a>
                    <div class="collapse" id="catmgmt">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="{{ route('categories.create') }}" class="nav-link"><i class="fa-solid fa-plus me-2"></i> Add New</a>
                            </li>
                            <li>
                                <a href="{{ route('categories.index') }}" class="nav-link"><i class="fa-solid fa-list-check me-2"></i> Manage All</a>
                            </li>
                        </ul>
                    </div>

                </li>
                <li class="nav-item ">
                    <a class="nav-link active sidebar-link" data-bs-toggle="collapse" href="#pmgmt" role="button"
                        aria-expanded="false" aria-controls="pmgmt">
                        <i class="fas fa-shopping-cart"></i>

                        Manage Products <span class="right-icon float-end"><i class="fa-solid  fa-chevron-down "></i></span>
                    </a>
                    <div class="collapse" id="pmgmt">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="" class="nav-link"><i class="fa-solid fa-plus me-2"></i> Add New</a>
                            </li>
                            <li>
                                <a href="" class="nav-link"><i class="fa-solid fa-list-check me-2"></i> Manage All</a>
                            </li>
                        </ul>
                    </div>

                </li>
                <li class="nav-item my-0">
                    <hr>
                </li>
                <li class="nav-item">
                    <div class="text-secondary small text-uppercase fw-bold">Business</div>
                </li>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active sidebar-link" data-bs-toggle="collapse" href="#ogmt" role="button"
                        aria-expanded="false" aria-controls="ogmt">
                      <i class="fas fa-file-invoice"></i>

                        Orders <span class="right-icon float-end"><i class="fa-solid  fa-chevron-down "></i></span>
                    </a>
                    <div class="collapse" id="ogmt">
                        <ul class="navbar-nav ps-3">
                           
                            <li>
                                <a href="" class="nav-link"><i class="fa-solid fa-list-check me-2"></i> Manage All</a>
                            </li>
                        </ul>
                    </div>

                </li>
                   <li class="nav-item my-0">
                    <hr>
                </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"> <i class="fa-solid fa-right-from-bracket me-2"></i> LogOut</a>
                </li>

            </ul>
        </div>
    </div>
</div>