<nav class=" navbar navbar-dark navbar-expand-sm fixed-top bg-dark py-sm-3">
  <a class="navbar-brand" href="#">Jean Forteroche</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $router->getBaseURL() ?>/"><i class="fa fa-home" aria-hidden="true"></i>Accueil</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-file" aria-hidden="true"></i>Épisodes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

            <?php
                foreach ($posts as $postNav) {
            ?>
              <a class="dropdown-item"
                    href="<?php echo $router->getBaseURL() ?>/posts/<?php echo $postNav->getId() ?>"><?php echo $postNav->getTitle() ?></a>
            <?php
                }
            ?>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo $router->getBaseURL() ?>/connexion"><i class="fa fa-sign-in" aria-hidden="true"></i>
            <?php if (isset($_COOKIE["session"])) {
                echo 'Administration';
            } 
            else {
                echo 'Connexion';
            }
            ?>
        </a>
      </li>
    </ul>
  </div>
</nav>