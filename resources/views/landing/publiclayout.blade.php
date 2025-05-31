<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        a {
            text-decoration: none;
        }
        /* Navbar Styles */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: linear-gradient(180deg, #1a1a1a 0%, #000000 100%);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        header nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1.5rem;
            height: 64px;
            max-width: 1400px;
            margin: 0 auto;
        }
        header .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: #fff;
            border: 2px solid #f1683a;
            padding: 0.25rem 0.75rem;
            transition: color 0.3s, border-color 0.3s;
        }
        header .logo:hover {
            color: #f1683a;
            border-color: #fff;
        }
        header .nav-links {
            display: flex;
            gap: 1.5rem;
        }
        header .nav-links a {
            color: #fff;
            font-size: 1rem;
            font-weight: 500;
            transition: color 0.3s, transform 0.3s;
        }
        header .nav-links a:hover {
            color: #f1683a;
            transform: translateY(-2px);
        }
        header .search-container {
            display: flex;
            align-items: center;
            background: #2d2d2d;
            border-radius: 20px;
            padding: 0.25rem 0.75rem;
            width: 200px;
        }
        header .search-container i {
            color: #fff;
            font-size: 1rem;
            margin-right: 0.5rem;
        }
        header .search-container input {
            background: transparent;
            border: none;
            color: #fff;
            font-size: 0.9rem;
            width: 100%;
            outline: none;
        }
        header .search-container input::placeholder {
            color: #aaa;
        }
        header .auth-buttons {
            display: flex;
            gap: 1rem;
            align-items: center;
        }
        header .auth-buttons a {
            color: #fff;
            font-size: 0.9rem;
            font-weight: 500;
            transition: color 0.3s;
        }
        header .auth-buttons a:hover {
            color: #f1683a;
        }
        header .auth-buttons button {
            background: #f1683a;
            color: #000;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            border: none;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }
        header .auth-buttons button:hover {
            background: #e55a2c;
            transform: scale(1.05);
        }
        header .mobile-toggle {
            display: none;
            color: #fff;
            font-size: 1.5rem;
            cursor: pointer;
        }
        header .mobile-menu {
            display: none;
            background: #1a1a1a;
            padding: 1rem;
            text-align: center;
        }
        header .mobile-menu.active {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        header .mobile-menu a {
            color: #fff;
            font-size: 1.2rem;
            font-weight: 500;
            padding: 0.5rem 0;
            transition: color 0.3s;
        }
        header .mobile-menu a:hover {
            color: #f1683a;
        }
        header .mobile-menu .mobile-search {
            display: flex;
            align-items: center;
            background: #2d2d2d;
            border-radius: 20px;
            padding: 0.25rem 0.75rem;
            margin: 0.5rem auto;
            width: 80%;
        }
        header .mobile-menu .mobile-search i {
            color: #fff;
            font-size: 1rem;
            margin-right: 0.5rem;
        }
        header .mobile-menu .mobile-search input {
            background: transparent;
            border: none;
            color: #fff;
            font-size: 0.9rem;
            width: 100%;
            outline: none;
        }
        header .mobile-menu .mobile-search input::placeholder {
            color: #aaa;
        }
        header .mobile-menu .auth-form {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-top: 0.5rem;
            padding: 0.5rem;
            background: #2d2d2d;
            border-radius: 10px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        header .mobile-menu .auth-form a {
            color: #fff;
            font-size: 1rem;
            font-weight: 500;
            text-align: center;
            padding: 0.5rem;
            border: 1px solid #f1683a;
            border-radius: 10px;
            transition: background 0.3s, color 0.3s;
        }
        header .mobile-menu .auth-form a:hover {
            background: #f1683a;
            color: #000;
        }
        header .mobile-menu .auth-form button {
            background: #f1683a;
            color: #000;
            font-weight: 600;
            padding: 0.5rem;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s, transform 0.3s;
        }
        header .mobile-menu .auth-form button:hover {
            background: #e55a2c;
            transform: scale(1.05);
        }
        @media (max-width: 1024px) {
            header .nav-links {
                display: none;
            }
            header .search-container {
                display: none;
            }
            header .auth-buttons {
                display: none;
            }
            header .mobile-toggle {
                display: block;
            }
        }
        @media (max-width: 768px) {
            header .mobile-menu .auth-form {
                width: 90%;
                padding: 0.75rem;
            }
            header .mobile-menu .auth-form a,
            header .mobile-menu .auth-form button {
                font-size: 0.9rem;
                padding: 0.4rem;
            }
        }
        @media (max-width: 480px) {
            header .mobile-menu .auth-form {
                width: 95%;
                padding: 0.5rem;
            }
            header .mobile-menu .auth-form a,
            header .mobile-menu .auth-form button {
                font-size: 0.8rem;
                padding: 0.3rem;
            }
            header .mobile-menu .mobile-search {
                width: 90%;
            }
        }
        /* Carousel Styles (unchanged) */
        .carousel {
            height: 400px;
            width: 100vw;
            overflow: hidden;
            position: relative;
            top: 64px;
        }
        .carousel .list .item {
            width: 100%;
            height: 100%;
            position: absolute;
            inset: 0;
        }
        .carousel .list .item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .carousel .list .item .content {
            position: absolute;
            top: 15%;
            width: 800px;
            max-width: 70%;
            left: 50%;
            transform: translateX(-50%);
            padding-right: 20%;
            box-sizing: border-box;
            color: #fff;
            text-shadow: 0 3px 6px rgba(0, 0, 0, 0.25);
        }
        .carousel .list .item .author {
            font-weight: bold;
            letter-spacing: 5px;
            font-size: 0.8em;
        }
        .carousel .list .item .title,
        .carousel .list .item .topic {
            font-size: 2.5em;
            font-weight: bold;
            line-height: 1.2em;
        }
        .carousel .list .item .topic {
            color: #f1683a;
        }
        .carousel .list .item .des {
            font-size: 0.9em;
            margin-top: 5px;
        }
        .carousel .list .item .buttons {
            display: grid;
            grid-template-columns: repeat(2, 100px);
            grid-template-rows: 30px;
            gap: 5px;
            margin-top: 10px;
        }
        .carousel .list .item .buttons button {
            border: none;
            background-color: #eee;
            letter-spacing: 2px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 0.8em;
            cursor: pointer;
            border-radius: 5px;
        }
        .carousel .list .item .buttons button:nth-child(2) {
            background-color: transparent;
            border: 1px solid #fff;
            color: #eee;
        }
        .carousel .thumbnail {
            position: absolute;
            bottom: 20px;
            left: 80%;
            transform: translateX(-50%);
            width: max-content;
            z-index: 100;
            display: flex;
            gap: 10px;
        }
        .carousel .thumbnail .item {
            width: 100px;
            height: 150px;
            flex-shrink: 0;
            position: relative;
        }
        .carousel .thumbnail .item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
        .carousel .thumbnail .item .content {
            color: #fff;
            position: absolute;
            bottom: 5px;
            left: 5px;
            right: 5px;
        }
        .carousel .thumbnail .item .content .title {
            font-weight: 500;
            font-size: 0.8em;
        }
        .carousel .thumbnail .item .content .description {
            font-weight: 300;
            font-size: 0.7em;
        }
        .carousel .arrows {
            position: absolute;
            top: 85%;
            right: 50%;
            transform: translateX(50%);
            z-index: 100;
            width: 200px;
            max-width: 20%;
            display: flex;
            gap: 8px;
            align-items: center;
        }
        .carousel .arrows button {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: rgba(238, 238, 238, 0.4);
            border: none;
            color: #fff;
            font-family: monospace;
            font-weight: bold;
            font-size: 0.9em;
            cursor: pointer;
            transition: all 0.3s;
        }
        .carousel .arrows button:hover {
            background-color: #fff;
            color: #000;
        }
        .carousel .list .item:nth-child(1) {
            z-index: 1;
        }
        .carousel .list .item:nth-child(1) .content .author,
        .carousel .list .item:nth-child(1) .content .title,
        .carousel .list .item:nth-child(1) .content .topic,
        .carousel .list .item:nth-child(1) .content .des,
        .carousel .list .item:nth-child(1) .content .buttons {
            transform: translateY(30px);
            filter: blur(10px);
            opacity: 0;
            animation: showContent 0.5s 0.8s linear forwards;
        }
        @keyframes showContent {
            to {
                transform: translateY(0);
                filter: blur(0);
                opacity: 1;
            }
        }
        .carousel .list .item:nth-child(1) .content .title {
            animation-delay: 1s;
        }
        .carousel .list .item:nth-child(1) .content .topic {
            animation-delay: 1.2s;
        }
        .carousel .list .item:nth-child(1) .content .des {
            animation-delay: 1.4s;
        }
        .carousel .list .item:nth-child(1) .content .buttons {
            animation-delay: 1.6s;
        }
        .carousel.next .list .item:nth-child(1) img {
            width: 100px;
            height: 150px;
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 15px;
            animation: showImage 0.5s linear forwards;
        }
        @keyframes showImage {
            to {
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100%;
                transform: translateX(0);
                border-radius: 0;
            }
        }
        .carousel.next .thumbnail .item:nth-last-child(1) {
            overflow: hidden;
            animation: showThumbnail 0.5s linear forwards;
        }
        .carousel.prev .list .item img {
            z-index: 100;
        }
        @keyframes showThumbnail {
            from {
                transform: scale(0);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
        .carousel.next .thumbnail {
            animation: effectNext 0.5s linear forwards;
        }
        @keyframes effectNext {
            from {
                transform: translateX(100px);
            }
            to {
                transform: translateX(-50%);
            }
        }
        .carousel .time {
            position: absolute;
            z-index: 1000;
            width: 0;
            height: 2px;
            background-color: #f1683a;
            left: 0;
            top: 0;
        }
        .carousel.next .time,
        .carousel.prev .time {
            animation: runningTime 3s linear forwards;
        }
        @keyframes runningTime {
            from {
                width: 100%;
            }
            to {
                width: 0;
            }
        }
        .carousel.prev .list .item:nth-child(2) {
            z-index: 2;
        }
        .carousel.prev .list .item:nth-child(2) img {
            animation: outFrame 0.5s linear forwards;
            position: absolute;
            bottom: 0;
            left: 0;
        }
        @keyframes outFrame {
            to {
                width: 100px;
                height: 150px;
                bottom: 20px;
                left: 50%;
                transform: translateX(-50%);
                border-radius: 10px;
            }
        }
        .carousel.prev .thumbnail .item:nth-child(1) {
            overflow: hidden;
            opacity: 0;
            animation: showThumbnail 0.5s linear forwards;
        }
        .carousel.next .arrows button,
        .carousel.prev .arrows button {
            pointer-events: none;
        }
        .carousel.prev .list .item:nth-child(2) .content .author,
        .carousel.prev .list .item:nth-child(2) .content .title,
        .carousel.prev .list .item:nth-child(2) .content .topic,
        .carousel.prev .list .item:nth-child(2) .content .des,
        .carousel.prev .list .item:nth-child(2) .content .buttons {
            animation: contentOut 1s linear forwards;
        }
        @keyframes contentOut {
            to {
                transform: translateY(-100px);
                filter: blur(10px);
                opacity: 0;
            }
        }
         /* Carousel Media Queries */
    @media screen and (max-width: 1024px) {
        .carousel {
            height: 350px;
        }
        .carousel .list .item .content {
            top: 10%;
            max-width: 80%;
            padding-right: 10%;
        }
        .carousel .list .item .author {
            font-size: 0.7em;
            letter-spacing: 3px;
        }
        .carousel .list .item .title,
        .carousel .list .item .topic {
            font-size: 2em;
        }
        .carousel .list .item .des {
            font-size: 0.85em;
        }
        .carousel .list .item .buttons {
            grid-template-columns: repeat(2, 90px);
            grid-template-rows: 28px;
        }
        .carousel .list .item .buttons button {
            font-size: 0.75em;
        }
        .carousel .thumbnail {
            left: 50%;
            bottom: 15px;
            gap: 8px;
        }
        .carousel .thumbnail .item {
            width: 90px;
            height: 135px;
        }
        .carousel .thumbnail .item .content .title {
            font-size: 0.75em;
        }
        .carousel .thumbnail .item .content .description {
            font-size: 0.65em;
        }
        .carousel .arrows {
            top: 80%;
            width: 180px;
            max-width: 25%;
        }
        .carousel .arrows button {
            width: 28px;
            height: 28px;
            font-size: 0.85em;
        }
    }
    @media screen and (max-width: 768px) {
        .carousel {
            height: 300px;
        }
        .carousel .list .item .content {
            top: 8%;
            max-width: 85%;
            padding-right: 0;
            text-align: center;
        }
        .carousel .list .item .author {
            font-size: 0.65em;
            letter-spacing: 2px;
        }
        .carousel .list .item .title,
        .carousel .list .item .topic {
            font-size: 1.8em;
        }
        .carousel .list .item .des {
            font-size: 0.8em;
        }
        .carousel .list .item .buttons {
            grid-template-columns: repeat(2, 80px);
            grid-template-rows: 25px;
        }
        .carousel .list .item .buttons button {
            font-size: 0.7em;
        }
        .carousel .thumbnail {
            left: 50%;
            bottom: 10px;
            gap: 6px;
        }
        .carousel .thumbnail .item {
            width: 80px;
            height: 120px;
        }
        .carousel .thumbnail .item .content .title {
            font-size: 0.7em;
        }
        .carousel .thumbnail .item .content .description {
            font-size: 0.6em;
        }
        .carousel .arrows {
            top: 75%;
            width: 150px;
            max-width: 30%;
        }
        .carousel .arrows button {
            width: 25px;
            height: 25px;
            font-size: 0.8em;
        }
    }
    @media screen and (max-width: 480px) {
        .carousel {
            height: 250px;
        }
        .carousel .list .item .content {
            top: 5%;
            max-width: 90%;
        }
        .carousel .list .item .author {
            font-size: 0.6em;
            letter-spacing: 1px;
        }
        .carousel .list .item .title,
        .carousel .list .item .topic {
            font-size: 1.5em;
        }
        .carousel .list .item .des {
            font-size: 0.75em;
        }
        .carousel .list .item .buttons {
            grid-template-columns: repeat(2, 70px);
            grid-template-rows: 22px;
        }
        .carousel .list .item .buttons button {
            font-size: 0.65em;
        }
        .carousel .thumbnail {
            left: 67%;
            bottom: 7px;
            gap: 5px;
        }
        .carousel .thumbnail .item {
            width: 60px;
            height: 80px;
        }
        .carousel .thumbnail .item .content .title {
            font-size: 0.50em;
        }
        .carousel .thumbnail .item .content .description {
            font-size: 0.40em;
        }
        .carousel .arrows {
            top: 70%;
            width: 120px;
            max-width: 35%;
        }
        .carousel .arrows button {
            width: 22px;
            height: 22px;
            font-size: 0.75em;
        }
    }
    </style>
</head>
<body class="bg-gray-100">
    <header>
        <nav>
            <a href="#" class="logo">Go Fit</a>
            <ul class="nav-links hidden lg:flex">
                <li><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#category">Category</a></li>
                <li><a href="#products">Products</a></li>
            </ul>
            <div class="search-container hidden lg:flex">
                <i class="fas fa-search"></i>
                <input type="search" placeholder="Search products...">
            </div>
            <div class="auth-buttons hidden lg:flex">
                <a href="">Login</a>
                <button onclick="window.location.href=''">Sign Up</button>
            </div> //
            <div id="mobile-toggle" class="mobile-toggle lg:hidden">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
        <div id="mobile-menu" class="mobile-menu hidden lg:hidden">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#category">Category</a></li>
                <li><a href="#products">Products</a></li>
            </ul>
            <div class="mobile-search">
                <i class="fas fa-search"></i>
                <input type="search" placeholder="Search products...">
            </div>
            <div class="auth-form">
                <a href="">Login</a>
                <button onclick="window.location.href=''">Sign Up</button>
            </div>
        </div>
    </header>
    @section('content')
    @show
    <script>
        const mobileToggle = document.getElementById('mobile-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
            console.log('Mobile menu toggled:', mobileMenu.classList.contains('active'));
        });
    </script>
</body>
</html>