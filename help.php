<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FableForge Comics Help Center</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: stretch;
        }

        .container {
            margin:auto;
            max-width: 800px;
            padding: 30px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        .welcome-section {
            position: relative;
            padding: 60px 20px;
            border-radius: 8px;
            margin-bottom: 40px;
            color: #ffffff;
            text-align: center;
            overflow: hidden;
        }

        .welcome-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://hips.hearstapps.com/hmg-prod/images/mhcomics-landingpage-lead-6659f1a3c2a2d.jpg?crop=0.753xw:1.00xh;0.125xw,0&resize=1200:*') no-repeat center center/cover;
            opacity: 0.3; /* Adjust this value to control image opacity */
            z-index: 0;
        }

        .welcome-section::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
            z-index: 1;
        }

        .welcome-section h1,
        .welcome-section p {
            position: relative;
            z-index: 2;
        }

        .welcome-section h1 {
            font-size: 2.5em;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .welcome-section p {
            font-size: 1.1em;
            line-height: 1.6;
        }

        /* Section Headings */
        h2 {
            font-size: 1.8em;
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 5px;
            text-align: center;
        }

        /* Popular Topics */
        .popular-topics {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;
            text-align: center;
            margin-bottom: 40px;
        }

        .topic-item {
            display: block;
            background-color: #f5f5f5;
            border: 1px solid #e0e0e0;
            padding: 18px 20px;
            border-radius: 4px;
            margin: 8px auto;
            max-width: 600px;
            color: #e62429;
            font-weight: 600;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .topic-item:hover {
            background-color: #e0e0e0;
        }

        /* Get in Touch Button */
        .get-in-touch {
            position: relative;
            display: inline-block;
            background-color: #e62429;
            color: #ffffff;
            padding: 12px 24px;
            margin-top: 20px;
            font-size: 1.1em;
            font-weight: bold;
            text-decoration: none;
            overflow: hidden;
        }

        .get-in-touch::after {
            content: '';
            position: absolute;
            top: 0; left: 0;
            border-top: 20px solid white;
            border-right: 20px solid #e62429;
            width: 0;
        }

        .get-in-touch:hover {
            background-color: #c81e25;
        }

        /* Business Hours */
        .business-hours {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
        }

        .hours-list {
            list-style: none;
            padding-left: 0;
            font-size: 1.1em;
            color: #555;
            text-align: center;
        }

        .hours-item {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <!-- Welcome Section -->
        <section class="welcome-section">
            <h1>Welcome to FableForge Customer Support</h1>
            <p>Explore the world of FableForge, manage your subscriptions, and dive into exclusive content! We’re here to assist you every step of the way.</p>
        </section>

        <!-- Popular Topics Section -->
        <section class="popular-topics">
            <h2>POPULAR TOPICS</h2>
            
            <a href="#" class="topic-item">What is FableForge?</a>
            <a href="#" class="topic-item">How do I create an account?</a>
            <a href="#" class="topic-item">How can i upgrade my subscription?</a>
            <a href="#" class="topic-item">I want to learn more about purchased/redeemed digital comics.</a>

            <!-- Get in Touch Button -->
            <a href="touch.php" class="get-in-touch">GET IN TOUCH WITH US</a>
        </section>

        <!-- Business Hours Section -->
        <section class="business-hours">
            <h2>Business Hours</h2>
            <ul class="hours-list">
                <li class="hours-item">Monday - Friday: 9:00 AM - 5:00 PM (PST)</li>
                <li class="hours-item">Saturday: 10:00 AM - 2:00 PM (PST)</li>
                <li class="hours-item">Sunday: Closed</li>
            </ul>
        </section>
    </div>

<?php include 'footer.php'; ?>

</body>
</html>
