<?php function url()
{
  // return "https://devopspro.agency/demo/dsu/";
  return "http://localhost/portfolio/";
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    dirname($_SERVER['REQUEST_URI']) . "/"
  );
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:image" content="<?php echo url(); ?>assets/images/site-icon.png">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="200">
  <meta property="og:image:height" content="200">
<title><?= htmlspecialchars($meta_title ?? $title) ?></title>
<meta name="description" content="<?= htmlspecialchars($meta_description ?? '') ?>">
  <meta name="Keywords" content="<?php echo $keywords; ?>">
<link rel="canonical" href="<?= htmlspecialchars($canonical ?? '') ?>">

  <meta name="robots" content="noindex" />
  <!--CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="<?php echo url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo url(); ?>assets/css/global.css?key=<?php echo time(); ?>" rel="stylesheet">
  <link href="<?php echo url(); ?>assets/css/style.css?key=<?php echo time(); ?>" rel="stylesheet">
  <link href="<?php echo url(); ?>assets/css/swiper.css?key=<?php echo time(); ?>" rel="stylesheet">
  <link href="<?php echo url(); ?>assets/css/aos.css?key=<?php echo time(); ?>" rel="stylesheet">
  <!--Favicon start-->
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo url(); ?>assets/images/main/favicon.svg">
  <!--Favicon start-->

</head>

<body class="<?php echo $pageclass; ?>">

<header class="header fixed-top top-0 w-100" data-aos="fade-down" data-aos-delay="400">
    <div class="container">
      <nav class="custom-navbar d-flex justify-content-between align-items-center">
      <a href="#" class="logo">
        <img src="<?php echo url(); ?>assets/images/main/main-logo.svg" class="img-fluid" alt="Shafeel A M">
      </a>
      <button class="menu-btn" id="menuToggle">
        <i class="bi bi-list"></i>
      </button>
      <div class="menu-box" id="menuBox">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </nav>
    </div>
</header>
  