<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		<meta name="author" content="templatemo">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?=  fontawesome("css/brands.css") ?>" />
        <link rel="stylesheet" href="<?= fontawesome("css/solid.css") ?>" />
        <link rel="stylesheet" href="<?=  fontawesome("css/fontawesome.css") ?>" />
        <link rel="stylesheet" href="<?= css("bootstrap.min.css") ?>">
        <link rel="stylesheet" href="<?= css("animate.css") ?> ">
        <link rel="stylesheet" href="<?= css("templatemo_style.css") ?>">
        <link rel="stylesheet" href="<?= css("templatemo_misc.css") ?>">
        <style>
            /* body{margin-top:20px;} */
            .content-item {
                padding:30px 0;
                background-color:#FFFFFF;
            }

            .content-item.grey {
                background-color:#F0F0F0;
                padding:50px 0;
                height:100%;
            }

            .content-item h2 {
                font-weight:700;
                font-size:35px;
                line-height:45px;
                text-transform:uppercase;
                margin:20px 0;
            }

            .content-item h3 {
                font-weight:400;
                font-size:20px;
                color:#555555;
                margin:10px 0 15px;
                padding:0;
            }

            .content-headline {
                height:1px;
                text-align:center;
                margin:20px 0 70px;
            }

            .content-headline h2 {
                background-color:#FFFFFF;
                display:inline-block;
                margin:-20px auto 0;
                padding:0 20px;
            }

            .grey .content-headline h2 {
                background-color:#F0F0F0;
            }

            .content-headline h3 {
                font-size:14px;
                color:#AAAAAA;
                display:block;
            }


            #comments {
                box-shadow: 0 -1px 6px 1px rgba(0,0,0,0.1);
                background-color:#FFFFFF;
            }

            #comments form {
                margin-bottom:30px;
            }

            #comments .btn {
                margin-top:7px;
            }

            #comments form fieldset {
                clear:both;
            }

            #comments form textarea {
                height:100px;
            }

            #comments .media {
                border-top:1px dashed #DDDDDD;
                padding:20px 0;
                margin:0;
            }

            #comments .media > .pull-left {
                margin-right:20px;
            }

            #comments .media img {
                max-width:100px;
            }

            #comments .media h4 {
                margin:0 0 10px;
            }

            #comments .media h4 span {
                font-size:14px;
                float:right;
                color:#999999;
            }

            #comments .media p {
                margin-bottom:15px;
                text-align:justify;
            }

            #comments .media-detail {
                margin:0;
            }

            #comments .media-detail li {
                color:#AAAAAA;
                font-size:12px;
                padding-right: 10px;
                font-weight:600;
            }

            #comments .media-detail a:hover {
                text-decoration:underline;
            }

            #comments .media-detail li:last-child {
                padding-right:0;
            }

            #comments .media-detail li i {
                color:#666666;
                font-size:15px;
                margin-right:10px;
            }
        </style>

        <script src="<?= js("vendor/modernizr-2.6.1-respond-1.1.0.min.js"); ?>"></script>
    </head>
    <body>

    <?php 
  $role=$this->session->userdata("role");
  switch($role){
      case "publik":
      break;
      default:
          redirect(base_url("account/login"));
      break;
  }
?>