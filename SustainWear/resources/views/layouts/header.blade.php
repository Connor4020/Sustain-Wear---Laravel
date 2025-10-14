<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <h2>S.W.</h2>
        <div id='hamburgerIcon'>
            <a href='javascript:void(0);' class='icon' onclick='generateHamburgerLinks()'>
                <i class='fa fa-bars'></i>
            </a>
        </div>

    </header>
    <hr class='divider'>

    <div id='hamburgerLinksVisor'>
        <div id='hamburgerLinks'>
            <a href='{{ url('/donor_register') }}'>Donate!</a>
            <a href='{{ url('/donations') }}'>About</a>
            <a href='{{ url('/about-us') }}'>Settings</a>
        </div>
    </div>