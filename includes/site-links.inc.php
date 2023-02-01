<li class="nav-item"><a href="news" class="nav-link px-2 text-muted">News</a></li>
<li class="nav-item"><a href="features" class="nav-link px-2 text-muted">Features</a></li>
<li class="nav-item"><a href="pricing" class="nav-link px-2 text-muted">Pricing</a></li>
<li class="nav-item"><a href="faq" class="nav-link px-2 text-muted">FAQs</a></li>
<li class="nav-item"><a href="about" class="nav-link px-2 text-muted">About</a></li>

<?php
if (isset($_SESSION["userid"])) { // user loged in
    echo ("<li class='nav-item'><a href='logout' class='nav-link px-2 text-muted'>Logout</a></li>");
} else {
    echo ("<li class='nav-item'><a href='login' class='nav-link px-2 text-muted'>Login</a></li>");
};
?>