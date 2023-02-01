<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light">
  <div class="container-fluid">
    <a class="navbar-brand link-dark logo" href="/"></a>

    <button class="navbar-toggler btn-main" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
      </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">

      <ul class="navbar-nav me-auto mb-2 mb-md-0">

        <?php include 'site-links.inc.php'; ?>

      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>