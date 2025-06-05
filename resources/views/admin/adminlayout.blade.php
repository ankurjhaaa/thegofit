<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') {{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');

        body {
            font-family: "Lato", sans-serif;
            background-color: #f5f5f5;
        }

        :root {
            --ofcanvas-width: 270px;
            --topnavbarheight: 56px;
        }

        .user-icon {
            width: 30px;
            border-radius: 100%;

        }

        .sidebar-nav {
            width: var(--ofcanvas-width) !important;


        }

        .sidebar-link .right-icon {
            transition: all 0.5s;
        }

        .sidebar-link[aria-expanded="true"] .right-icon {
            transform: rotate(180deg);
        }

        @media (min-width: 992px) {
            .offcanvas-backdrop {
                display: none !important;



            }

            .sidebar-nav {
                transform: none !important;
                visibility: visible !important;
                top: var(--topnavbarheight) !important;

            }

            main {
                margin-left: var(--ofcanvas-width);

            }
        }

        /* Container for buttons */
        .d-flex.align-items-center {
            gap: 8px;
            /* Space between buttons */
        }

        /* General button styling */
        .action-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            /* For the edit link */
        }

        /* Edit button */
        .edit {
            background-color: #4CAF50;
            /* Green background */
            color: white;
        }

        .edit:hover {
            background-color: #45a049;
            /* Darker green on hover */
        }

        /* Delete button */
        .delete {
            background-color: #f44336;
            /* Red background */
            color: white;
        }

        .delete:hover {
            background-color: #da190b;
            /* Darker red on hover */
        }

        /* Icon styling */
        .action-btn i {
            font-size: 16px;
        }

        /* Remove default form styling */
        form.m-0.p-0 {
            margin: 0;
            padding: 0;
            display: inline;
        }
    </style>
</head>

<body>
    <!-- top nev bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <!-- off canvas toggle start -->
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- off canvas toggle start -->
            <a class="navbar-brand text-uppercase fw-bold me-auto" href="#">Go Fit | Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="d-flex ms-auto" role="search">
                    <div class="input-group my-3 my-lg-0">
                        <input type="text" class="form-control" placeholder="Serarch " aria-label="Recipient’s username"
                            aria-describedby="button-addon2">
                        <button class="btn btn-primary text-white" type="button" id="button-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>

                </form>
                <ul class="navbar-nav  mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{ Auth::check() && Auth::user()->image && file_exists(storage_path('app/public/' . Auth::user()->image)) ? asset('storage/' . Auth::user()->image) : asset('default/default.jpg') }}"
                                class="user-icon" alt="Profile" loading="lazy"
                                onerror="this.src='https://www.gravatar.com/avatar/00000000000000000000000000000000?s=40&d=mp'" />
                            Admin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- top nav bar end -->
    @section('content')

    @show







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>

</body>

</html>