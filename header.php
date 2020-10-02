<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E - commerce</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- OWL CAROUSEL -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="style.css">

  <?php require ("functions.php"); ?>
</head>

<body>

<header id="header">

  <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
    <p class="font-rale font-size-12 text-black-50 m-0">Jordan Calderon 430-985 Eleifend St. Dulutch Washington
      92611 (427) 930-5255</p>
    <div class="font-rale font-size-14">
      <a href="#" class="px-3 border-right border-left text-dark">Login</a>
      <a href="#" class="px-3 border-right text-dark">Whishlist (0)</a>
    </div>
  </div>

  <!-- PRIMARY NAVIGATION -->
  <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
    <a class="navbar-brand" href="#">Mobile Shopee</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto font-rubik" style="margin-left: auto;">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">On Sale</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Coming Soon</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
      </ul>
      <form action="#" class="font-size-14 font-rale">
        <a href="#" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white">
                            <i class="fas fa-shopping-cart"></i>
                        </span>
          <span class="px-3 py-2 rounded-pill text-dark bg-light">
                            0
                        </span>
        </a>
      </form>
    </div>
  </nav>
  <!-- PRIMARY NAVIGATION -->
</header>

<main id="main-site">