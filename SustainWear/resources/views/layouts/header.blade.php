<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/desktop.css') }}" media="screen and (min-width: 769px)">
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}" media="screen and (max-width: 768px)">
    <script src="{{ asset('js/script.js') }}"></script>

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
            <a href='/login.php'>Log In</a>
            <a href='/donations.php'>Donate!</a>
            <a href='/about-us.php'>About</a>
        </div>
    </div>