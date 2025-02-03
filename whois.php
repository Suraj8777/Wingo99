<?php
// This PHP file will render the required information for copyright and dispute resolution
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://soumyagamers.com/indiahost/icon.png" type="image/png">
    <title>Software Copyright Notice</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffffff;
            color: #333;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        header {
            background-color: #4a90e2;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            text-align: center;
        }

        .content h1 {
            font-size: 36px;
            color: #6a1b9a; /* Purple */
            margin-bottom: 20px;
        }

        .content p {
            font-size: 18px;
            margin: 10px 0;
            color: #333;
        }

        .content .highlight {
            color: #00c7ff; /* Blue */
            font-weight: bold;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #4a90e2;
            padding: 15px;
            text-align: center;
            font-size: 16px;
            color: #fff;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.3);
        }

        a {
            color: #00c7ff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #7bff6d; /* Green */
        }

        .highlighted-text {
            font-size: 20px;
            margin-top: 20px;
        }

        .highlighted-text a {
            font-size: 18px;
        }

        /* Responsive design for mobile */
        @media (max-width: 768px) {
            header {
                font-size: 20px;
            }

            .content h1 {
                font-size: 28px;
            }

            .content p {
                font-size: 16px;
            }

            .footer {
                font-size: 14px;
            }
        }

    </style>
</head>
<body>

<header>
    Software Copyright Information
</header>

<div class="content">
    <h1>Software is rented from <span class="highlight">https://91club.cam/</span></h1>
    <p>If you have any copyright infringement or dispute, kindly contact us at:</p>
    <p class="highlighted-text">
        <a href="mailto:dispute@91club.cam">dispute@91club.cam</a>
    </p>
    <p>This software is completely owned by <span class="highlight">Soumya Gamers Pvt Limited</span>.</p>
    <p>For cheap and reliable hosting, use <a href="https://indiahost.co" target="_blank">IndiaHost</a>.</p>
</div>

<div class="footer">
    <p>&copy; 2024 Soumya Gamers Pvt Limited | All Rights Reserved</p>
</div>

</body>
</html>
