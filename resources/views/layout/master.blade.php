<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SunainaTexGlobal</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    <script src="/js/index.js"></script>

    <link rel="icon" href="/images/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">



    <link rel="stylesheet" href="/css/index.css">
</head>

<!-- style="background-image: url('images/background.jpg');" -->

<body onload="welcome();" data-spy="scroll" data-target=".navbar" data-offset="50">
    <div class="container">
        {{-- header  --}}
        {{View::make('layout/header')}}


        {{-- body  --}}
        @yield('content')


        {{-- footer  --}}
        {{View::make('layout/footer')}}

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>