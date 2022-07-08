

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=  fontawesome("css/brands.css") ?>" />
  <link rel="stylesheet" href="<?= fontawesome("css/solid.css") ?>" />
  <link rel="stylesheet" href="<?=  fontawesome("css/fontawesome.css") ?>" />
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
  $role=$this->session->userdata("ROLE");
  switch($role){
      case "administrator":
      break;
      case "owner":
      break;
      default:
          redirect(base_url("account/admin/login"));
      break;
  }
  // if(!$this->session->has_userdata("ROLE", "administrator")){
  //   // redirect(base_url("account/admin/login"));
  // } ?>
<?php endif; ?>
