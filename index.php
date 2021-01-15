<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GameRanker</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Ranking.php">Ranking</a>
        </li>
        <?php
        session_start();
        if(!isset($_SESSION["gatekeeper"])){
          echo '<li class="nav-item">
          <a class="nav-link" href="Account/Login.php">Login</a>
        </li>';
        echo '<li class="nav-item">
          <a class="nav-link" href="Account/Signup.php">Sign up</a>
        </li>';
        }else{
          echo '<li class="nav-item">
          <a class="nav-link" href="Account/Logout.php">Log out</a>
        </li>';
        }
        ?>
      </ul>
      <form class="d-flex" method="get" action="Search.php">
        <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<h2>Welcome to the Game Ranker</h2>
<p style="font-size: large;">Here we aim to rank all video games based on sales, well as ranking the games based on what our users rank the game <br> 
if you sign up you can leave comments on a game and also like it to rises its rank
</p>

<h4 style="text-align: center;">Here are some of our Top 4 games of all time ranked by Sales </h4>

<div class="row">
    <?php
    include("functions.php");
    connect();
    Top3();
    ?>
</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>

