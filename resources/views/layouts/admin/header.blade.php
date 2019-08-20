<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Fixed Header Menu | Admire</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('pageTitle')</title>

    @include('layouts.admin.css')
    <link rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of global styles-->
</head>
<body class="fixedMenu_header fixed_header">
     <div class="preloader" style=" position: fixed;
       width: 100%;
       height: 100%;
       top: 0;
       left: 0;
       z-index: 100000;
       backface-visibility: hidden;
       background: #ffffff;">
        <div class="preloader_img" style="width: 200px;
       height: 200px;
       position: absolute;
       left: 48%;
       top: 48%;
       background-position: center;
     z-index: 999999">
             <img src="{{ asset('/images/images/loader.gif') }}" alt="loading...">
        </div>
     </div>
