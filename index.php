<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Courier Services</title>
    <style>
        /* Add a background image with a blur effect */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #FFFFFF;
        }

        /* Background image styling */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('images/AdobeStock_448938910-Low-web-scaled.jpg') no-repeat center center/cover;
            filter: blur(8px);
            z-index: -1; /* Ensure background stays behind the content */
        }

        /* Overlay to make the text more readable */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: -1; /* Keep the overlay behind content */
        }

        /* Center content inside a container */
        .container {
            max-width: 900px;
            width: 100%;
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 4em;
            color: #00BFFF;
            margin: 0;
            text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.6);
            animation: fadeIn 1s ease-in-out;
        }

        h2 {
            font-size: 2.5em;
            margin: 10px 0;
            color: #FFFFFF;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
            animation: fadeIn 1.5s ease-in-out;
        }

        h2 .highlight {
            color: #FFD700;
        }

        /* CMS Info section styling */
        .courier_db-info {
            font-size: 1.2em;
            line-height: 1.7;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 20px;
            margin: 20px 0;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 2s ease-in-out;
        }

        /* Button styling */
        a {
            font-size: 1.5em;
            color: #FFFFFF;
            text-decoration: none;
            background-color: #00BFFF;
            padding: 15px 40px;
            border-radius: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-top: 25px;
            display: inline-block;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        a:hover {
            background-color: #FFD700;
            transform: scale(1.05);
        }

        /* Animation for smooth content appearance */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            h1 {
                font-size: 3em;
            }

            h2 {
                font-size: 2em;
            }

            .cms-info {
                font-size: 1em;
                padding: 15px;
            }

            a {
                font-size: 1.2em;
                padding: 10px 25px;
            }
        }
    </style>
</head>
<body>

    <div class="overlay"></div>

    <!-- Center everything inside a container -->
    <div class="container">
        <h1>WELCOME</h1>
        <h2>to the project on</h2>
        <h2><b>|C<span class="highlight">M</span>S|<br> COURIER SERVICES</b></h2>

        <!-- CMS Project Info Section -->
        <div class="courier_db-info">
            <p><strong>About CMS Courier Services:</strong></p>
            <p>
                CMS Courier Services is an innovative platform designed to simplify the management of courier consignments. Our system offers real-time tracking, secure communication, and seamless operations to ensure fast and reliable deliveries.
            </p>
            <p>
                Whether you're sending packages locally or internationally, CMS provides a user-friendly interface, detailed tracking updates, and smooth interactions between senders and recipients.
            </p>
        </div>

        <a href="login.html">Click here to continue with the courier system...</a>
    </div>

</body>
</html>
