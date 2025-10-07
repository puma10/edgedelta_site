<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" lang="en-US"> <![endif]-->
<!--[if IE 9]><html class="ie9" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)] lang="en-US"><![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#040b05" />

    <title><?php wp_title(); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
    <style>
        .admin-bar .ed-banner {
            margin-top: 32px;
        }

        .padding-section-medium.z-index-2 {
            padding: 1rem;
            bottom: auto;
            padding-bottom: 2rem;
        }
    </style>
</head>

<body <?php body_class($class) ?>>
    <div class="page-wrapper">
        <!-- main -->
        <main class="main-wrapper">