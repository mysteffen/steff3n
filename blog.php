<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Steffen</title>

    <!-- Bootstrap Core CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom LESS -->
    <link href="src/less/all.css" rel="stylesheet">

    <link rel="stylesheet" href="src/css/font-awesome.min.css">
    <link rel="stylesheet" href="src/css/style.css">
    <script src="src/js/modernizr.js"></script>



</head>

<body>

<?php include ("header.php"); ?>

<main class="cd-main-content">
    <div class="headline-wrapper">
        <span class="headline">Blog</span>
    </div>
    <div id="posts" class="container">

        <section class="col-md-8 col-xs-12 section-container">
            <div class="post">
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <img src="img/photos/DeathtoStock_EnergyandSerenity31.jpg" class="img-responsive">
                    </div>
                    <div class="col-md-6 col-xs-6 caption">
                        <span class="post-date">Dezember 15, 2016</span>
                        <a href="#" class="post-title">Don't look at me</a>
                        <p class="post-description description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis <a href="#">parturient montes</a>, nascetur ridiculus mus. Aenean commodo ligula eget dolor.</p>
                        <div class="tags">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <span class="post-tag">#Surfing // #Mavericks</span>
                        </div>
                        <button type="submit" class="btn btn-primary">Zum Artikel</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="col-md-4 col-xs-12 wow fadeIn">
            <div class="post">
                <div class="caption caption--variant-two">

                    <div class="post-thumb">
                        <img src="img/photos/DeathtoStock_EnergyandSerenity31.jpg" class="img-responsive">
                    </div>

                    <span class="post-date">13 June 2015</span>
                    <a href="post-image.html" class="post-title">Leave it alone</a>
                    <p class="post-description description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                        Cum sociis natoque penatibus et magnis dis parturient montes magnis dis parturient montes, nascetur ridiculus mus. Aenean commodo <a href="#">ligula eget dolor</a>.</p>
                    <div class="tags">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <span class="post-tag">#Summer // #Beach</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Zum Artikel</button>
                </div>
            </div>
        </section>

        <div class="col-xs-12">
            <div class="text-center">
                <a href="#" class="btn btn-ada-light load-more">Older posts</a>
            </div>
        </div>

    </div>
</main>

<?php include ("footer.php"); ?>



<script src="src/js/jquery-2.1.4.js"></script>
<script src="src/js/main.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


</body>

</html>







