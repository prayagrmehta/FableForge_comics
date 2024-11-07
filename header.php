<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assests/images/logo.webp">
    <title>FableForge Comics</title>
    <style>
        /* Styles for Navbar */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #0d0d0d; /* Darker background for the body */
            color: #ffffff; /* Light text for contrast */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            display: flex;
            align-items: center; /* Center items vertically */
            background: #1a1a1a; /* Darker solid color for navbar */
            padding: 15px 30px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.7); /* Darker shadow for depth */
            transition: background 0.3s; /* Smooth transition for background */
        }

        .navbar:hover {
            background: #121212; /* Even darker on hover */
        }

        .navbar-logo img {
            height: 50px; /* Adjust as necessary for your logo size */
            margin-right: 20px; /* Space between logo and menu */
            border-radius: 10%;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .navbar-nav li {
            margin-right: 25px;
            position: relative; /* Relative position for dropdown */
        }

        .navbar-nav a {
            color: #ffffff; /* White text */
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s; /* Added transform for subtle effect */
            padding: 10px 0; /* Increased clickable area */
        }

        .navbar-nav a:hover {
            color: #ffdd57; /* Gold on hover */
            transform: scale(1.1); /* Scale effect on hover */
        }

        .search-bar {
            flex-grow: 1; /* Allows the search bar to take up space */
            display: flex;
            justify-content: flex-end;
            margin-left: 20px; /* Spacing from the menu */
        }

        .search-bar input[type="search"] {
            width: 220px;
            padding: 8px 10px;
            border: none;
            border-radius: 20px;
            outline: none;
            font-size: 14px;
            transition: box-shadow 0.3s, background 0.3s; /* Smooth transition */
            background-color: #333; /* Dark input background */
            color: #ffffff; /* White text in input */
        }

        .search-bar input[type="search"]:focus {
            box-shadow: 0px 0px 5px #ffdd57; /* Gold shadow on focus */
            background-color: #444; /* Slightly lighter on focus */
        }

        .user-account {
            margin-left: 20px; /* Spacing from the search bar */
        }

        .user-account a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
            border: 1px solid #ffdd57;
            border-radius: 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        .user-account a:hover {
            background-color: #ffdd57; /* Gold background on hover */
            color: #333; /* Dark text on gold background */
        }

        .navbar-nav li:hover .characters-dropdown {
            display: block; /* Show dropdown on hover */
        }

        /* More dropdown styling */
        .more .dropdown-menu {
            display: none; /* Hide by default */
            position: absolute; /* Position relative to parent */
            top: calc(100% + 5px); /* Align below the navbar */
            left: 0; /* Align to the left */
            background-color: #2a2a2a; /* Dark background */
            border-radius: 5px;
            margin-top: 5px; /* Small space between navbar and dropdown */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            z-index: 999; /* Ensure dropdown is above other content */
        }

        .more:hover .dropdown-menu {
            display: block; /* Show dropdown on hover */
        }

        .dropdown-menu li {
            padding: 10px;
        }

        .dropdown-menu li a {
            color: #ffffff; /* White text */
        }

        .dropdown-menu li a:hover {
            color: #ffdd57; /* Gold on hover */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-logo">
        <a href="Homepage.php">
            <img src="assests/images/logo.webp" alt="FableForge Logo">
        </a>
        </div>
        <ul class="navbar-nav">
            <li><a href="news.php">News</a></li>
            <li><a href="comics.php">Comics</a></li>
            <li><a href="chararcters.php">Characters</a></li>
            <li><a href="movies&tvshows.php">Movies & TV</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="#">Shop</a></li>
            <li class="more">
                <a href="#">More</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Videos</a></li>
                </ul>
            </li>
        </ul>
        <div class="search-bar">
            <input type="search" placeholder="Search FableForge">
        </div>
        <div class="user-account">
            <a href="#">Login | Join</a>
        </div>
    </div>
</body>
</html>
