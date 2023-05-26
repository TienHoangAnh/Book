
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<style>
    body {
      line-height: 1.7;
      color: #4d4d4d;
      font-weight: 400;
      font-size: 1rem; }

    ::selection {
      background: #47343467;
      color: #fff; }

    a {
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease; }
      a:hover {
        text-decoration: none; }

    h1, h2, h3, h4, h5,
    .h1, .h2, .h3, .h4, .h5 {
      font-family: "Nanum Gothic", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; }

    .text-black {
      color: #000 !important; }

    .color-black-opacity-5 {
      color: rgba(0, 0, 0, 0.5); }

    .site-navbar {
      margin-bottom: 0px;
      z-index: 1999;
      position: absolute;
      top: 20px;
      left: 50%;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%);
      width: 100%;
      border-radius: 4px; }
      @media (max-width: 767.98px) {
        .site-navbar {
          top: 0; } }
      .site-navbar .site-logo {
        position: relative;
        left: 0;
        top: -5px;
        text-transform: uppercase; }
        .site-navbar .site-logo a {
          font-size: 20px;
          font-weight: 900; }
      .site-navbar .site-navigation .site-menu {
        margin-bottom: 0; }
        .site-navbar .site-navigation .site-menu .active > a {
          color: #fff;
          border-radius: 30px;
          display: inline-block; }
        .site-navbar .site-navigation .site-menu .cta {
          margin-left: 30px; }
          .site-navbar .site-navigation .site-menu .cta span {
            padding: 12px 20px; }
        .site-navbar .site-navigation .site-menu a {
          text-decoration: none !important;
          display: inline-block; }
        .site-navbar .site-navigation .site-menu > li {
          display: inline-block; }
          .site-navbar .site-navigation .site-menu > li > a {
            color: #fff;
            text-decoration: none !important;
            padding: 20px 10px;
            display: inline-block;
            font-size: 15px; }
            .site-navbar .site-navigation .site-menu > li > a:hover {
              color: #fff;
              border-radius: 30px;
              display: inline-block; }
        .site-navbar .site-navigation .site-menu .has-children {
          position: relative; }
          .site-navbar .site-navigation .site-menu .has-children > a {
            position: relative;
            padding-right: 30px; }
            .site-navbar .site-navigation .site-menu .has-children > a:before {
              position: absolute;
              content: "\e313";
              font-size: 16px;
              top: 50%;
              right: 10px;
              -webkit-transform: translateY(-50%);
              -ms-transform: translateY(-50%);
              transform: translateY(-50%);
              font-family: 'icomoon'; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown {
            visibility: hidden;
            opacity: 0;
            top: 100%;
            position: absolute;
            text-align: left;
            border-top: 2px solid #2f89fc;
            -webkit-box-shadow: 0 2px 10px -2px rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 10px -2px rgba(0, 0, 0, 0.1);
            border-left: 1px solid #edf0f5;
            border-right: 1px solid #edf0f5;
            border-bottom: 1px solid #edf0f5;
            padding: 0px 0;
            margin-top: 20px;
            margin-left: 0px;
            background: #fff;
            -webkit-transition: 0.2s 0s;
            -o-transition: 0.2s 0s;
            transition: 0.2s 0s; }
            .site-navbar .site-navigation .site-menu .has-children .dropdown a {
              text-transform: none;
              letter-spacing: normal;
              -webkit-transition: 0s all;
              -o-transition: 0s all;
              transition: 0s all;
              color: #343a40; }
            .site-navbar .site-navigation .site-menu .has-children .dropdown .active > a {
              color: #2f89fc !important; }
            .site-navbar .site-navigation .site-menu .has-children .dropdown > li {
              list-style: none;
              padding: 0;
              margin: 0;
              min-width: 200px; }
              .site-navbar .site-navigation .site-menu .has-children .dropdown > li > a {
                padding: 9px 20px;
                display: block; }
                .site-navbar .site-navigation .site-menu .has-children .dropdown > li > a:hover {
                  background: #f4f5f9;
                  color: #25262a; }
              .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > a:before {
                content: "\e315";
                right: 20px; }
              .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > .dropdown, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > ul {
                left: 100%;
                top: 0; }
              .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:hover > a, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:active > a, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:focus > a {
                background: #f4f5f9;
                color: #25262a; }
          .site-navbar .site-navigation .site-menu .has-children:hover > a, .site-navbar .site-navigation .site-menu .has-children:focus > a, .site-navbar .site-navigation .site-menu .has-children:active > a {
            color: #fff; }
          .site-navbar .site-navigation .site-menu .has-children:hover, .site-navbar .site-navigation .site-menu .has-children:focus, .site-navbar .site-navigation .site-menu .has-children:active {
            cursor: pointer; }
            .site-navbar .site-navigation .site-menu .has-children:hover > .dropdown, .site-navbar .site-navigation .site-menu .has-children:focus > .dropdown, .site-navbar .site-navigation .site-menu .has-children:active > .dropdown {
              -webkit-transition-delay: 0s;
              -o-transition-delay: 0s;
              transition-delay: 0s;
              margin-top: 0px;
              visibility: visible;
              opacity: 1; }
</style>
<header class="site-navbar container py-0 " role="banner">

    <div class="row align-items-center">
    <div class="col-6 col-xl-2">
        <h1 class="mb-0 site-logo"><a href="" class="text-white mb-0">TineBookStore</a></h1>
    </div>
<div class="col-12 col-md-10 d-none d-xl-block">
<nav class="site-navigation position-relative text-right" role="navigation">
    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="">Books coming out</a></li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Book Types</a>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="#">Văn học</a>
            <a class="dropdown-item" href="#">Truyện tranh</a>
            <a class="dropdown-item" href="#">Truyện hành động</a>
            <a class="dropdown-item" href="#">Truyện ngôn tình</a>
            <a class="dropdown-item" href="#">Truyện thiếu nhi</a>
            <a class="dropdown-item" href="#">Truyện trinh thám</a>
            <a class="dropdown-item" href="#">Truyện cười</a>
            <form action="" method="" class="">
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</a>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="{{url("/books/")}}">View products list</a>
            <a class="dropdown-item" href="{{url("/books/create")}}" class="btn btn-warning>Add a new product">Add a new product</a>
            <form action="" method="" class="">
        </div>
    </li>
        <li class="mr-5"><a href="">Contact</a></li>
        <li><a href="register.html" class="cta"><span class="bg-primary text-white rounded">Log In/ Register</span></a></li>
        <form class="d-flex my-2 my-lg-0">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
    </ul>
</nav>
</div>
</div>
</header>
