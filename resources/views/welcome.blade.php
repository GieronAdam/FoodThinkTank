<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Food Think Tank</title>

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Hind+Siliguri%7CPoppins%3A500&ver=1499783230" rel="stylesheet" type="text/css">
    <!-- Styles -->
</head>
<body class="header-style-1">
<div class="main-wrapper clearfix">

    {{-- Header --}}
    <header id="header" class="header-style-1-wrap inner-head-wrap clearfix">
        <div class="container clearfix">
            <div class="header-clear clearfix">
                <div class="fl horizontal clearfix">
                    <div class="logo head-item">
                        <div class="logo-title">
                            <h2 class="site-title">
                                <a href="http://www.foodthinktank.pl/" title="Food Think Tank" class="header-logo">Food Think Tank</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="fc horizontal clearfix"></div>
                <div class="fr vertical clearfix"><input id="main-menu-state" type="checkbox">
                    <label class="main-menu-btn sub-menu-triger" for="main-menu-state">
                        <span class="main-menu-btn-icon"></span> </label>
                    <nav id="primary-menu" class="menu main-menu head-item">
                        <ul id="menu-menu" class="sm sm-clean" data-smartmenus-id="15031397111633599">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"> <!-- dla aktywnego ".current-menu-item" -->
                                <a href="#">Projekty</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="#">Ludzie</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="#">Działania dodatkowe</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="#">Pracownia</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="#">Inicjatywy</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="#">Kontakt</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="search-wrap head-item">
                        <button id="btn-search"><i class="icon-simple-line-icons-143"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- SEARCH --}}
    <div class="search">
        <button id="btn-search-close" class="btn--search-close"><i class="icon-themify-14"></i></button>

        <form method="get" class="searchform  search__form" action="http://www.foodthinktank.pl/" role="search">
            <input type="search" class="field search__input" name="s" value="" id="s" placeholder="Search">
            <button type="submit" class="submit search-button" value=""><i class="icon-simple-line-icons-143"></i></button>
        </form>
        <span class="search__info">Hit enter to search or ESC to close</span>

        <div class="search__related">
            <div class="search__suggestion">
            </div>
        </div>
    </div>

    {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
            {{--@if (Auth::check())--}}
                {{--<a href="{{ url('/admin') }}">Admin panel</a>--}}
            {{--@else--}}
                {{--<a href="{{ url('/login') }}">Login</a>--}}
                {{--<a href="{{ url('/register') }}">Register</a>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--@endif--}}
</div>
@extends('layouts.app')
</body>
</html>
