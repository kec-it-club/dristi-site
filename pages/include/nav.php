<? defined("CHECK") OR ( header( 'Location: /' ) && exit ); ?>
<? 

require_once "base.php"; 
defined("PAGE") OR define("PAGE",Pages::__default);

?>
<nav style="top: 0;" class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Dristi <span>2.0</span></a>
        <button style="    right: 19px;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <? echo PAGE == Pages::HOME ? " active" : "" ?>"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item <? echo PAGE == Pages::EVENTS ? " active" : "" ?> "><a href="/events" class="nav-link">Events</a></li>
                <li class="nav-item <? echo PAGE == Pages::ABOUT ? " active" : "" ?> "><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item <? echo PAGE == Pages::CONTACT ? " active" : "" ?> "><a href="/contact-us" class="nav-link">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>