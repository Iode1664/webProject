@extends('Classique-template')
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
@section('contenu')
<div id="ourCarousel" class="carousel slide" data-ride="carousel">

    <!--Carousel indicators-->
    <ol class="carousel-indicators">
        <li data-target="#ourCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#ourCarousel" data-slide-to="1"></li>
        <li data-target="#ourCarousel" data-slide-to="2"></li>
    </ol>
    <!--Carousel items-->
    <div class="carousel-inner">
        <div class="item active">
            <img src="/../webProject/public/images/gallery/poney1.jpg" width="100%"/>
        </div>

        <div class="item">
            <img src="/../webProject/public/images/gallery/poney2.jpg" width="100%"/>
        </div>

        <div class="item">
            <img src="/../webProject/public/images/gallery/poney3.jpg" width="100%"/>
        </div>
    </div>

    <!--Carousel navigation-->
    <a class="carousel-control left" href="#ourCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    </a>

    <a class="carousel-control right" href="#ourCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>

</div>
@endsection