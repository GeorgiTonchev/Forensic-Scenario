<?php


echo'
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner m-0 p-0 w-100">
                    <div class="item active">
                        <img src="http://placehold.it/1200x500/3498db/2980b9"  class="img-fluid" alt="First slide">
                        <div class="carousel-caption">
                            <h3>
                                First slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://placehold.it/1200x500/9b59b6/8e44ad" class="img-fluid" alt="Second slide">
                        <div class="carousel-caption">
                            <h3>
                                Second slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://placehold.it/1200x500/34495e/2c3e50" class="img-fluid" alt="Third slide">
                        <div class="carousel-caption">
                            <h3>
                                Third slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control m-0 p-0" href="#carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control m-0 p-0"
                        href="#carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
                <div class="main-text hidden-xs position-absolute">
                    <div class="col-md-12 text-center main-text">
                        <h1>
                        Static Headline And Content
                        </h1>
                        <h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </h3>
                        <div class="">
                                <a class="btn btn-clear btn-sm btn-min-block" href="http://www.jquery2dotnet.com/">Login</a><a class="btn btn-clear btn-sm btn-min-block"
                                href="http://www.jquery2dotnet.com/">Registration</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>';


?>