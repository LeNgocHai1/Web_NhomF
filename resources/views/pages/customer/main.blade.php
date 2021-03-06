<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Điện Thoại Di Động</title>

    <!-- link icon -->

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>
    <sript src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Fonts -->
  
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">

    <!-- Styles -->
</head>

<body>
    <div>
        @include('pages.customer.header')
    </div>
    <div>
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{Session::get('success')}}
        </div>
        @endif
        @yield('content')
    </div>
    <scrollTop>
        <div class="scroll">
            <i class="fas fa-angle-double-up"></i>
        </div>
    </scrollTop>
    <div>
        @include('pages.customer.footer')
    </div>
    <script>
    /* Scroll */
    $(window).scroll(function() {
        var scrll = $('html,body').scrollTop();
        if (scrll > 300) {
            $('.nav_menu').addClass('navbar-sticker');
        } else {
            $('.nav_menu').removeClass('navbar-sticker');
        }
        if (scrll > 300) {
            $('.scroll').addClass('hien');
        } else {
            $('.scroll').removeClass('hien');
        }
    })
    $('.scroll').on('click', function() {
        $('html,body').animate({
            scrollTop: 0
        }, 500);
    })
    /* Scroll End */
    setTimeout(function() {
        $('close').click();
    }, 3000);


    //Hiển thị mật khẩu
    $('.btnPassword1').hover(function() {
        $('.form-control-mn1').attr('type', 'text');
    }, function() {
        $('.form-control-mn1').attr('type', 'password');
    });
    $('.btnPassword2').hover(function() {
        $('.form-control-mn2').attr('type', 'text');
    }, function() {
        $('.form-control-mn2').attr('type', 'password');
    });
    $('.btnPassword3').hover(function() {
        $('.form-control-mn3').attr('type', 'text');
    }, function() {
        $('.form-control-mn3').attr('type', 'password');
    });
    </script>


</body>

</html>