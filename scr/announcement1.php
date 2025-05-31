<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="images/biglogo.png">
  <!-- Title Page-->
  <title>Announcement</title>
  <style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    button {
      font-family: inherit;
      font-size: inherit;
      background-color: transparent;
      color: inherit;
      border-width: 0;
      padding: 0;
      margin: 0;
      cursor: pointer;
      text-align: inherit;
    }

    a {
      text-decoration: none;
      color: inherit;
      cursor: pointer;
    }

    /* Native CSS variables */
    :root {
      /* colors */
      --main-color: #1877f2;
      --text-color: #050505;
      --full-color: 255 255 255;
      --empty-color: 0 0 0;

      /* white default*/
      --abalance1: rgba(var(--full-color) / 1);
      --abalance80: rgba(var(--full-color) / 0.80);

      /* black default*/
      --balance1: rgb(var(--empty-color) / 0.05);
      --balance2: rgb(var(--empty-color) / 0.10);
      --balance3: rgb(var(--empty-color) / 0.15);
      --balance4: rgb(var(--empty-color) / 0.20);
      --balance8: rgb(var(--empty-color) / 0.60);
      --balance10: rgb(var(--empty-color) / 0.80);
      --balance-full: #f0f2f5;

      /* sizes */
      --height-header: 40px;

      /* common sizes */
      --size1: 4px;
      --size2: calc(var(--size1) * 2);
      --size3: calc(var(--size1) * 3);
      --size4: calc(var(--size1) * 4);
    }

    /* utilities classes (always with !important)*/
    .u-flex {
      display: flex !important;
    }

    .u-hide {
      display: none !important;
    }

    .u-margin-inline-start {
      margin-inline-start: auto !important;
    }

    .common-more {
      background-color: var(--balance1);
      border-radius: var(--size2);
      height: 36px;
      width: calc(100% - var(--size4));
      margin: var(--size2);
      text-align: center;

      .text {
        font-weight: bold;
      }

      .icon {
        font-size: 12rem;
        filter: grayscale(100%);
        opacity: 0.8;
      }

      &:hover,
      &:focus {
        background-color: var(--balance2);
      }
    }

    /* post parts */
    .common-post {
      padding: var(--size3) var(--size4);
      padding-block-end: var(--size1);
      margin-block-end: var(--size4);
      background-color: var(--abalance1);
      border-radius: var(--size2);
      box-shadow: 0 1px 2px var(--balance4);

      &-header {
        margin-bottom: var(--size2);
      }
    }

    .user-and-group {
      font-weight: bold;

      .icon-arrow-block-end {
        margin-inline-start: var(--size2);
      }
    }

    .time-and-privacy {
      font-size: 13rem;

      >*:not(:first-child)::before {
        content: "";
        vertical-align: bottom;
        display: inline-block;
        width: 2px;
        height: 2px;
        background-color: var(--balance10);
        margin: var(--size2);
      }
    }


    .main-feed,
    .common-post {
      margin-bottom: 20px;
    }
  </style>
  <?php require 'header.php'; ?>
</head>


<body style="background:lightgray;">

  <div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <?php require 'nav_mobile.php'; ?>
    <?php require 'sidebar/user-sidebar.php'; ?>
  </div>
  <!-- END HEADER MOBILE-->

  <!-- PAGE CONTAINER-->


  <!-- MAIN CONTENT-->


  <div class="main-content"  style="margin-left:-310px; " >
    <?php

    include 'connection/db_connection.php';
    $sqlget51 = "SELECT * FROM post ORDER BY post_id DESC";
    $sqldata51 = mysqli_query($connection, $sqlget51) or die('Error Displaying Data' . mysqli_connect_error());
    while ($row51 = mysqli_fetch_assoc($sqldata51)) {


      $sqlget5 = "SELECT * FROM users where role = 'admin'";
      $sqldata5 = mysqli_query($connection, $sqlget5) or die('Error Displaying Data' . mysqli_connect_error());
      while ($row5 = mysqli_fetch_assoc($sqldata5)) {
    ?>
        <main class="main-feed " style="width:1000px; margin-left:350px;">
          <article class="common-post">
            <header class="common-post-header u-flex">
              <div class="common-post-info">
                <div class="user-and-group u-flex" >
                  <a style="font-size:19px; font-weight:bold;" href="https://www.facebook.com/eladsc" target="_blank"><?php echo $row5['first_name']; ?> <?php echo $row5['last_name']; ?></a>
                </div>
                <div class="user-and-group u-flex">
                  <div class="time-and-privacy" style="font-size:14px;"><time datetime=""><b>Sports Committee Head</b></time><span class="icon icon-privacy"></span></div>
                </div>

                <div class="time-and-privacy" style="font-size:10px;"><time datetime=""><b><?php echo $row51['datetime']; ?></b></time><span class="icon icon-privacy"></span></div>
              </div>
              <button class="icon-button-2 u-margin-inline-start" aria-label="more options"><span class="icon-menu"></span></button>
            </header>
            <div class="common-post-content common-content" ><br>
              <p style="font-size:19px; font-family: Verdana;">
                <?php echo $row51['post']; ?>
              </p>
            </div>
            <div class="summary u-flex">
              <div class="total-comments u-margin-inline-start">

                </section>
          </article>
        </main>
      <?php
      }
      ?>
    <?php
    }
    ?>


  </div>

  <!-- END MAIN CONTENT-->
  <!-- END PAGE CONTAINER-->


  <?php require 'footer.php'; ?>