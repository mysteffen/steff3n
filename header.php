<header class="cd-main-header animate-search">
    <div class="cd-logo"><a href="#0">
            <img src="src/img/logo.png" alt="Logo"></a>
    </div>
    <nav class="cd-main-nav-wrapper">


        <a href="#search" class="cd-search-trigger cd-text-replace">Search</a>
        <div class="social-wrapper">
            <li>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>
        </div>
        
        <ul class="cd-main-nav">
            <li><a href="#0">Home</a></li>
            <li><a href="#0">About Me</a></li>
            <li><a href="#0">Portfolio</a></li>
            <li><a href="#0">Blog</a></li>
            <li><a href="#0">Kontakt</a></li>
        </ul>
    </nav>

    <a href="#0" class="cd-nav-trigger cd-text-replace">Menu<span></span></a>
</header>

<main class="cd-main-content">
    <div class="content-center">
        <?php include ("content.php"); ?>
    </div>
</main>

<div id="search" class="cd-main-search">
    <form>
        <input type="search" placeholder="Search...">

        <div class="cd-select">
            <span>in</span>
            <select name="select-category">
                <option value="all-categories">all Categories</option>
                <option value="category1">Category 1</option>
                <option value="category2">Category 2</option>
                <option value="category3">Category 3</option>
            </select>
            <span class="selected-value">all Categories</span>
        </div>
    </form>

    <div class="cd-search-suggestions">
        <div class="news">
            <h3>News</h3>
            <ul>
                <li>
                    <a class="image-wrapper" href="#0"><img src="img/placeholder.png" alt="News image"></a>
                    <h4><a class="cd-nowrap" href="#0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
                    <time datetime="2016-01-12">Feb 03, 2016</time>
                </li>

                <li>
                    <a class="image-wrapper" href="#0"><img src="img/placeholder.png" alt="News image"></a>
                    <h4><a class="cd-nowrap" href="#0">Incidunt voluptatem adipisci voluptates fugit beatae culpa eum, distinctio, assumenda est ad</a></h4>
                    <time datetime="2016-01-12">Jan 28, 2016</time>
                </li>

                <li>
                    <a class="image-wrapper" href="#0"><img src="img/placeholder.png" alt="News image"></a>
                    <h4><a class="cd-nowrap" href="#0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, esse.</a></h4>
                    <time datetime="2016-01-12">Jan 12, 2016</time>
                </li>
            </ul>
        </div>

        <div class="quick-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#0">Start</a></li>
                <li><a href="#0">Portfolio</a></li>
                <li><a href="#0">Blog</a></li>
                <li><a href="#0">Kontakt</a></li>
            </ul>
        </div>

    <a href="#0" class="close cd-text-replace">Close Form</a>
</div>

<div class="cd-cover-layer"></div>