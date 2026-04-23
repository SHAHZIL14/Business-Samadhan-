<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<?php $company = "Business Samadhan"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $company; ?></title>
  <link rel="stylesheet" href="assets/style.css">
  <style>
    #brand-anchor {
      text-decoration: none;
      color: var(--primary);
    }
  </style>
</head>

<body>

  <header class="navbar">
    <div class="logo"><a id="brand-anchor" href="index.php"><?php echo $company; ?></a></div>
    <nav>
      <a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a>

      <a href="services.php" class="<?= ($currentPage == 'services.php') ? 'active' : '' ?>">Services</a>

      <a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>">About</a>

      <a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Contact</a>
    </nav>
  </header>