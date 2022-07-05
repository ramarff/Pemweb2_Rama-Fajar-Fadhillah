

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/solid.css" integrity="sha384-DhmF1FmzR9+RBLmbsAts3Sp+i6cZMWQwNTRsew7pO/e4gvzqmzcpAzhDIwllPonQ" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous"/>
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- Booststrap -->
  <link rel="stylesheet" href="<?= base_url('assets/admin-lte/plugins/bootstrap/css/bootstrap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/admin-lte/dist/css/adminlte.min.css')?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
  <style>
     a, a:hover, a:focus, a:active {
     text-decoration: none;
     color: inherit;
     }
  </style>
</head>
<?php if($title === "Login" || $title === "Buat Akun") : ?>
  <body class="hold-transition login-page">
<?php else : ?>
  <body class="hold-transition sidebar-mini layout-fixed">
  <?php 
  if(!$this->session->has_userdata("USERNAME")){
    redirect(base_url("account/login"));
  } ?>
<?php endif; ?>
