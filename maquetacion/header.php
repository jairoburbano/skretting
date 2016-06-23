<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		skretting
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link href='https://fonts.googleapis.com/css?family=Chivo' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <?php include('svg-defs.svg'); ?>
        <div class="page-wrap">
            <header class="header">
                <div class="header--top">
                    <div class="wrap">
                        <div class="header__menu__icon">
                            <div class="menu-icon">
                                <svg><use xlink:href="#shape-icon-menu" /></svg>
                                <svg><use xlink:href="#shape-icon-close" /></svg>
                            </div><!-- /.menu-icon -->
                            <p>Menu</p>
                        </div><!-- /.header__menu__icon -->
                        <div class="header__logo">
                            <a href="index.php" title="Skretting">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="161px" height="40px" viewBox="0 0 161 40" enable-background="new 0 0 161 40" xml:space="preserve"><defs><symbol  id="icon_x5F_search" viewBox="-9.8 -9.5 19.6 18.9"><path fill="#DC2F34" d="M9.5-7.8L5.7-3.9c1,1.4,1.5,3.1,1.5,4.9c0,4.7-3.8,8.5-8.5,8.5S-9.8,5.7-9.8,1S-6-7.5-1.3-7.5 c2.2,0,4.1,0.8,5.6,2.1l3.8-3.8c0.2-0.2,0.5-0.3,0.7-0.3s0.5,0.1,0.7,0.3C9.9-8.8,9.9-8.1,9.5-7.8z M-1.3-5.5 c-3.6,0-6.5,2.9-6.5,6.5s2.9,6.5,6.5,6.5S5.2,4.5,5.2,1S2.3-5.5-1.3-5.5z"/></symbol></defs><g id="header_x5F_desk_copia"><g><g><g><path d="M1.1,5.1c0,1.3,1.2,1.6,2.3,1.6c1.1,0,2-0.4,2-1.2c0-0.7-0.5-0.9-1.4-1.1L2.4,4.1C1.5,4,0.2,3.6,0.2,2.2 c0-1.3,1-2.2,2.9-2.2c1.5,0,3,0.5,3.1,2.3H5.1C5.1,1.7,4.7,0.9,3,0.9c-0.8,0-1.7,0.3-1.7,1.2c0,0.4,0.3,0.8,1.2,1l1.8,0.3 c0.6,0.1,2.2,0.4,2.2,1.9c0,1.8-1.7,2.4-3.1,2.4C1.7,7.6,0,7.1,0,5.1H1.1z"/><path d="M10.2,3.9L8.9,5.1v2.4H7.8V0.2h1.1v3.6l4.1-3.6h1.5l-3.4,3l3.6,4.2h-1.5L10.2,3.9z"/><path d="M15.8,0.2h4.5c1.5,0,2,1,2,1.9c0,0.9-0.4,1.5-1.2,1.8v0c0.6,0.1,1,0.7,1.1,1.5c0.1,1.4,0.1,1.7,0.3,2 h-1.1c-0.2-0.2-0.2-0.5-0.2-1.4c-0.1-1.3-0.5-1.7-1.4-1.7h-2.8v3.1h-1.1V0.2z M19.9,3.4c1.1,0,1.3-0.6,1.3-1.1 c0-0.7-0.4-1.2-1.3-1.2h-3v2.3H19.9z"/><path d="M23.9,0.2h5.8v0.9h-4.8v2.1h4.6v0.9h-4.6v2.3h4.9v0.9h-5.9V0.2z"/><path d="M33.3,1.1h-2.7V0.2h6.6v0.9h-2.7v6.3h-1.1V1.1z"/><path d="M40.3,1.1h-2.7V0.2h6.6v0.9h-2.7v6.3h-1.1V1.1z"/><path d="M45.3,0.2h1.1v7.3h-1.1V0.2z"/><path d="M49.5,1.7L49.5,1.7l0,5.8h-1.1V0.2h1.3L54.4,6h0V0.2h1.1v7.3h-1.3L49.5,1.7z"/><path d="M61.4,3.5h3.3v3.9h-0.8l-0.2-1C63.3,7,62.5,7.6,61,7.6c-2.9,0-3.8-2.1-3.8-3.7c0-2.8,1.9-3.9,3.8-3.9 c1.5,0,3.2,0.5,3.6,2.5h-1.1c-0.3-1-1.1-1.5-2.5-1.5c-1.9,0-2.8,1.4-2.8,2.9c0,2.1,1.3,2.8,2.8,2.8c1.6,0,2.6-0.9,2.7-2.2h-2.4 V3.5z"/></g></g><g><g class="icon--change"><path  d="M0.7,11h4.2v28.3H0.7V11z"/><path  d="M11.5,18.5h4v3.1h0.1c1.9-2.9,5.2-3.8,8.1-3.8c5,0,8.7,2.1,8.7,7.3v14.2h-4V25.9c0-3.1-1.9-4.8-6.1-4.8 c-3.6,0-6.8,2.1-6.8,6.2v12h-4V18.5z"/><path  d="M39.2,15.4c0-3.8,2.4-5.2,6.4-5.2c1.2,0,2.3,0.2,3.4,0.3v3.1c-0.8,0-1.5-0.1-2.2-0.1 c-2.6,0-3.6,0.3-3.6,2v2.9h5.9v3.1h-5.9v17.7h-4V21.6H35v-3.1h4.2V15.4z"/><path  d="M63.2,17.8c8.1,0,12.1,5.1,12.1,11.1S71.3,40,63.2,40s-12.1-5.1-12.1-11.1S55.1,17.8,63.2,17.8z M63.2,21.1c-5.7,0-7.9,4-7.9,7.8s2.1,7.8,7.9,7.8s7.9-4,7.9-7.8S68.9,21.1,63.2,21.1z"/><path  d="M79.9,18.5h4v3.8H84c1.9-3.3,4.5-4.5,7.1-4.5c1,0,1.5,0,2.3,0.2v4.3c-1-0.2-1.7-0.4-2.8-0.4 c-3.9,0-6.7,2.3-6.7,6.8v10.5h-4V18.5z"/><path  d="M128.4,26.1c0-3.8-2.4-5-5-5c-3.6,0-6.8,1.7-6.8,5.6v12.6h-4V26.1c0-3.8-2.4-5-5-5 c-3.6,0-6.8,2.1-6.8,6.2v12h-4V18.5h4v3.1h0.1c1.9-2.9,5.2-3.8,8.1-3.8c2.7,0,5.4,1.1,7.1,3.8c1.9-2.4,4.4-3.8,8.4-3.8 c2.1,0,7.9,1,7.9,7.3v14.2h-4V26.1z"/><path  d="M138,25c0.5-5.2,4.1-7.2,10.3-7.2c4.2,0,9.6,1.1,9.6,5.9v11.2c0,1.2,0.6,1.8,1.8,1.8 c0.4,0,1-0.1,1.4-0.2v2.8c-1,0.2-2.1,0.2-3.1,0.2c-2,0-3.3-0.6-3.6-2.9c-1.6,2.1-5.5,3.4-8.8,3.4c-6.9,0-8.4-3.6-8.4-6.3 c0-3.8,2.3-5.7,8.9-6.5l4.5-0.5c2.2-0.2,3.6-0.6,3.6-2.5c0-2.9-2.8-3.4-6-3.4c-3.4,0-6.3,0.9-6.4,4.1H138z M154.1,28.4 c-0.6,0.7-1.7,1-3.9,1.2l-4.5,0.6c-3.1,0.4-4.7,1.2-4.7,3.4c0,1.9,1.9,3.3,4.8,3.3c4.5,0,8.2-2.4,8.2-5.8V28.4z"/></g></g></g></g></svg>


                            </a>
                        </div><!-- /.header__logo -->
                        <form action="page-result.php" class="header__search">
                            <div class="header__search__close js-search-close">
                                <svg><use xlink:href="#shape-icon-close" /></svg>
                            </div><!-- /.header__search__close -->
                            <div class="input-group">
                                <input type="text" placeholder="Buscar">
                            </div><!-- /.input-group -->
                            <div class="send-group">
                                <input type="submit" value=" ">
                            </div><!-- /.send-group -->
                            <div class="header__search__icon js-search">
                                <svg><use xlink:href="#shape-icon-magnifier" /></svg>
                            </div><!-- /.header__search__icon -->
                        </form><!-- /.header__search -->
                    </div><!-- /.wrap -->
                </div><!-- /.header--top -->
                <div class="header--bottom">
                    <div class="nav__container">
                        <ul class="nav">
                            <li class="menu-item current-menu-item">
                                <a href="category.php" title="Análisis Productivo">Análisis Productivo</a>
                            </li><!-- /.nav__item -->
                            <li class="menu-item">
                                <a href="category.php" title="Innovación">Innovación</a>
                            </li><!-- /.nav__item -->
                            <li class="menu-item">
                                <a href="category.php" title="Actividades">Actividades</a>
                            </li><!-- /.nav__item -->
                            <li class="menu-item">
                                <a href="category.php" title="Actividades">Asistencia Técnica</a>
                            </li><!-- /.nav__item -->
                            <li class="menu-item">
                                <a href="category.php" title="Skretting en el mundo">Skretting en el mundo</a>
                            </li><!-- /.nav__item -->
                        </ul><!-- /.nav -->
                        <nav class="nav--top">
                            <a href="http://www.skretting.com/es-CL/" class="menu-item" target="_blank" title="Skretting Chile">Skretting Chile</a>
                            <a href="page-anteriores.php" class="js-light menu-item" title="Ediciones anteriores">Ediciones anteriores</a>
                            <a href="page-contacto.php" title="Contacto" class="menu-item current-menu-item">Contacto</a>
                        </nav><!-- /.nav--top -->
                    </div><!-- /.nav__container -->
                </div><!-- /.header--bottom -->
            </header><!-- /.header -->