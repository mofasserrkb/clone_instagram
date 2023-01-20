<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            {{-- {{ config('app.name', 'Laravel') }} --}}
            Clone Instagram
        </title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!--bootstrap cdn-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
        .profileUrl{
            text-decoration: none;
        }

        </style>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="font-sans antialiased">

<div class="container">
    <div class="row">
        <div class="col col-12 col-md-3  p-5">
            <img src="{{asset('mofasser.jpg')}}" class="rounded-circle"  alt="">
        </div>
        <div class="col col-12 col-md-9   pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
           <h1>{{$user->username}} </h1>
           <h2>Hossain</h2>
          <button class="btn btn-primary">follow</button>

            </div>
          <div class="d-flex">
                <div class="p-3"><strong>234</strong>post</div>
                <div class="p-3"><strong>234</strong>followers</div>
                <div class="p-3"><strong>234</strong>following</div>
           </div>
                <div class="pt-4 fw-bold">mofasserinfo.com</div>
                <div>I am full stack developer. I love problem solving. I am working now with php,laravel, javascript, Vue.js. I love doing single page applications</div>
                <div> <a href="#" class="profileUrl">www.mofasserinfo.com </a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4"> <img src="{{asset('mofasser.jpg')}}"   alt=""> </div>
        <div class="col-4"> <img src="{{asset('mofasser1.jpg')}}"   alt=""> </div>
        <div class="col-4"> <img src="{{asset('mofasser.jpg')}}"   alt=""> </div>
    </div>
</div>
</body>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
</html>

