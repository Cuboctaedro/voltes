<!doctype html>
<html lang="<?= $kirby->language()->code() ?>">
<head>
    <title><?= e(!$page->isHomePage(), $page->title(). ' | ' , '') ?><?= $site->title() ?></title>
    <meta name="description" content="<?= e(!$page->isHomePage(), $page->metadescription() , $site->description() ) ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?= $page->url() ?>"/>
    <?php if($kirby->multilang()): ?>
        <?php foreach($kirby->languages() as $lang): ?>
            <link rel="alternate" hreflang="<?= $lang->code() ?>" href="<?= $page->url($lang->code()) ?>" />
        <?php endforeach; ?>
    <?php endif; ?>

    <?php snippet('meta');?>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=Gvbb507pA5">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=Gvbb507pA5">
    <link rel="icon" type="image/png" sizes="194x194" href="/favicon-194x194.png?v=Gvbb507pA5">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png?v=Gvbb507pA5">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=Gvbb507pA5">
    <link rel="manifest" href="/site.webmanifest?v=Gvbb507pA5">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=Gvbb507pA5" color="#3ab07e">
    <link rel="shortcut icon" href="/favicon.ico?v=Gvbb507pA5">
    <meta name="apple-mobile-web-app-title" content="Voltes ">
    <meta name="application-name" content="Voltes ">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png?v=Gvbb507pA5">
    <meta name="theme-color" content="#ffffff">
    <?php if ( 'prod' == option('voltes.env') ) : ?>

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <?php if($page->intendedTemplate() == 'contact'): ?>
            <script>
            function onSubmit(token) {
                document.getElementById("contactform").submit();
            }
            </script>
        <?php elseif ($page->intendedTemplate() == 'bookingform') : ?>
            <script>
            function onSubmit(token) {
                document.getElementById("bookingform").submit();
            }
            </script>
        <?php else: ?>
            <script>
            function onSubmit(token) {
                document.getElementById("newsletterform").submit();
            }
            </script>
        <?php endif; ?>

        <?php endif; ?>

        <link rel="stylesheet" href="https://use.typekit.net/zzs6sjg.css">

    <?= mix('/app.css') ?>

</head>
<body class="font-sans text-base text-black">
    <?php if($page->intendedTemplate() == 'reviews'): ?>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/el_GR/sdk.js#xfbml=1&version=v4.0&appId=1733102833479333&autoLogAppEvents=1"></script>
    <?php endif; ?>

    <a class="skip-link" href="#main">Skip to content</a>

    <div class=" ">

        <div class="h-12 bg-brand-600 c-white mb-12 shadow-xl fixed w-full flex flex-row justify-between items-center px-2 sm:px-6 z-50">

            <div class="flex flex-row items-center">

                <?php if($page->isHomePage()): ?>
                    <h1 class="font-titles  text-2xl pr-6 leading-none">
                        <a class="text-white hover:text-brand-200" href="<?= $site->url() ?>"><?= $site->title() ?></a>
                    </h1>
                <?php else: ?>
                    <div class="font-titles  text-2xl pr-6 leading-none">
                        <a class="text-white hover:text-brand-200" href="<?= $site->url() ?>"><?= $site->title() ?></a>
                    </div>
                <?php endif; ?>

                <nav aria-label="Main Menu" class="flex flex-row items-center">
                    <button aria-expanded="false" data-toggle-menu="#main-menu" class="flex flex-row xl:hidden text-white hover:text-brand-200 font-titles uppercase tracking-wide" aria-label="Menu">
                        <?php snippet('icons/burger'); ?>
                        <span class="hidden md:block pl-1">Menu</span>
                    </button>
                    <div class="hidden xl:block absolute xl:static bg-brand-600 xl:bg-transparent "  id="main-menu" style="top:50px; right:20px;left:20px;">
                        <ul class="flex flex-col xl:flex-row items-center shadow-xl xl:shadow-none">

                        <?php 
                      if ($site->mainmenu()->exists() && $site->mainmenu()->isNotEmpty() ) {
                            $menupages = $site->mainmenu()->toPages(); 
                        } else {
                            $menupages = $pages->listed();
                        } ?>
                        <?php foreach($menupages as $item): ?>
                            <li class="">
                                <a class="<?php e($item->isOpen(), ' text-brand-200 ', ' text-white ') ?> block p-6 md:p-2 text-center  hover:text-brand-200 font-titles uppercase tracking-wide" href="<?= $item->url() ?>"><?= $item->title() ?></a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </nav>

            </div>

            <?php snippet('social'); ?>

        </div>

        <?php if ($page->isHomePage()) {
            snippet('hero');
        } ?>


        <main class="flex-auto pt-24" id="main">
            <div class="container mb-24 px-4 ">
                <a class="" href="<?= $site->url() ?>" aria-label="Homepage">
                    <img data-src="<?= $kirby->url('assets') ?>/images/logo-horizontal.png" class="mx-auto lazyload" alt="Voltes Logo"  />
                </a>
            </div>
            <?php snippet('alert'); ?>
