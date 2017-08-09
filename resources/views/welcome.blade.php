<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Finder - Portfolio Gallery</title>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
<header>
    <h1>Finder Girls <br> <span>[ Portfolio Gallery ]</span></h1>
    <p>Powered by <a href="http://www.amlun.com/" target="_blank">Amlun</a></p>
</header>
<div id="top"></div>
<section class="gallery">
    <div class="row">
        <ul>
            <a href="#" class="close"></a>
            @foreach($photos as $photo)
            <li>
                <a href="#{{ $photo->id }}">
                    <img src="{{ url( '/storage/resize/medium/' . $photo->path) }}" alt="">
                </a>
            </li>
            @endforeach
        </ul>
    </div> <!-- / row -->
    @foreach($photos as $photo)
    <div id="{{ $photo->id }}" class="port">
        <div class="row">
            <div class="description">
                <h1>标题</h1>
                <p>说明</p>
            </div>
            <img src="{{ url( '/storage/resize/large/' . $photo->path) }}" alt="">
        </div>
    </div> <!-- / row -->
    @endforeach

</section> <!-- / projects -->

<section class="page">
    <div class="row">
        {{ $photos->links() }}
    </div>
</section>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--<script src="{{ asset('js/app.js')}}"></script>-->
<script src="{{ asset('js/index.js')}}"></script>

</body>
</html>