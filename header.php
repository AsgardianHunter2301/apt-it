<?php
// Start output buffering at the very beginning
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aptitude Innovations - AI and Related Domains">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aptitude Innovations</title>
    <!-- Favicon -->
    <link rel="icon" href="/images/apt-logo.png" type="image/png">

    <style>
        /* Reset and Base Styles */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .header {
            background: linear-gradient(to right, #4682B4 20%, #B0C4DE 60%, #ADD8E6 100%);
            color: white;
            display: flex;
            align-items: center; /* Vertically center logo and text */
            padding: 0.5em 1em; /* Add padding around the header */
            gap: 1em; /* Add space between the logo and the text */
        }
        
        .header img {
            max-height: 80px; /* Limit the logo height to fit inside the header */
            object-fit: contain; /* Ensure the logo scales correctly */
            cursor: pointer; /* Make the logo clickable if needed */
        }
        
        .header h1 {
            margin: 0;
            font-size: 1.8em;
            line-height: 1.2; /* Improve spacing if the text wraps */
        }


        /* Navbar Styling */
        .navbar {
            background-color: #333;
            color: white;
            padding: 1em 2em;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            border-bottom: 2px solid #ddd;
            flex-wrap: nowrap;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 0.5em 1em;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s ease;
            font-weight: bold;
        }

        .navbar a:hover,
        .navbar a:focus {
            background-color: #555;
            transform: scale(1.05);
        }

        .navbar a.active {
            background-color: #888;
        }

        /* General Link Styling */
        a {
            text-decoration: none;
            color: #0066cc;
            padding: 5px 10px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        /* Hover state for general links */
        a:hover {
            background-color: #0066cc;
            color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Active state for general links */
        a:active {
            background-color: #003366;
            color: #ffffff;
        }

        /* Container and Grid Layout */
        .container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1em;
            padding: 1em;
        }

        @media (min-width: 600px) {
            .container {
                grid-template-columns: 1fr 1fr;
            }
        }

        /* Domain Styles */
        .domain {
            padding: 1em;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: transform 0.3s;
        }

        .domain:hover {
            transform: translateY(-5px);
        }

        .domain img {
            margin: 0 auto;
        }

        /* Specific Domain Backgrounds */
        .domain1 {
            background: linear-gradient(to right, #B0C4DE, #f4f4f4);
        }

        .domain2 {
            background: linear-gradient(to right, #FFB6C1, #f4f4f4);
        }

        .domain3 {
            background: linear-gradient(to right, #98FB98, #f4f4f4);
        }

        .domain4 {
            background: linear-gradient(to right, #FFD700, #f4f4f4);
        }

        .domain5 {
            background: linear-gradient(to right, #FF6347, #f4f4f4);
        }

        .domain6 {
            background: linear-gradient(to right, #87CEFA, #f4f4f4);
        }

        /* Body Lower Styles */
        .bodylower {
            padding: 1em;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 1em;
        }

        .bodylowerimg1 {
            background: linear-gradient(to bottom, #B0C4DE, #f4f4f4);
        }

        .bodylowerimg2 {
            background: linear-gradient(to bottom, #87CEFA, #f4f4f4);
        }

        /* Divider and Welcome Section */
        .divider {
            border-top: 2px solid orange;
            margin: 1em 0;
            display: block;
        }

        .divider h2 {
            font-size: 2em;
            color: #333;
            text-align: center;
            margin: 0;
        }

        .welcome-text {
            background-color: #fff3e6;
            padding: 1em;
            font-size: 1.5em;
            text-align: center;
            margin: 0;
        }

        /* Footer Styling */
        .footer {
            background: linear-gradient(to right, #87CEFA, #f4f4f4);
            color: #2F4F4F;
            text-align: left;
            padding: 1em;
        }

        .footer img {
            width: 10%;
            height: auto;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 1em;
            }

            .navbar a {
                padding: 0.8em 1.5em;
                margin: 5px 0;
                text-align: center;
            }
        }
    </style>
</head>
<body>
<header class="header">
    <a href="/" aria-label="Go to homepage">
        <img src="/images/apt-logo.png" alt="Aptitude Innovations Logo">
    </a>
</header>
