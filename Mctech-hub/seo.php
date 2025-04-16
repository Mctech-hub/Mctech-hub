<?php
$siteName = "Mctech-hub";
$year = date("Y");
$whatsappNumber = "+256743483280";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#4CAF50">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="description" content="SEO & Digital Marketing Plans">
    <title><?php echo $siteName; ?> - SEO & Digital Marketing Plans</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
            margin: 20px;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }
        .card {
            flex: 1 1 calc(33.333% - 40px);
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInUp 1s ease;
        }
        .card:hover {
            transform: perspective(1000px) rotateY(10deg) rotateX(10deg);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .card .segment {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            width: 100%;
        }
        .card .segment:last-child {
            border-bottom: none;
        }
        .card .button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .card .button:hover {
            background-color: #45a049;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
            animation: fadeInUp 1s ease;
        }
        .footer-content {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .footer-section {
            flex: 1;
            padding: 10px;
            min-width: 200px;
        }
        .footer-links {
            list-style: none;
            padding: 0;
        }
        .footer-links li {
            margin: 5px 0;
        }
        .footer-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer-links a:hover {
            color: #4CAF50;
        }
        .social-links a {
            margin: 0 10px;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .social-links a:hover {
            color: #4CAF50;
        }
        .animated-heading {
            text-align: center;
            font-size: 3em;
            font-weight: bold;
            margin: 20px 0;
            animation: fadeIn 2s, bounce 2s infinite;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
        }
        @media (max-width: 768px) {
            .card {
                flex: 1 1 calc(100% - 40px);
            }
            .animated-heading {
                font-size: 2em; /* Adjust font size for mobile */
            }
        }
        @media (max-width: 480px) {
            .card {
                flex: 1 1 100%;
            }
            .animated-heading {
                font-size: 1.5em; /* Adjust font size for smaller screens */
            }
        }
        .chat-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            animation: pulse 2s infinite;
        }
        .chat-button:hover {
            background-color: #c7912d;
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo"><?php echo $siteName; ?></div>
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="package1.php">Packages</a></li>
                <li><a href="app.php">App Development</a></li>
            </ul>
        </nav>
    </header>
    <div class="animated-heading">SEO & Digital Marketing Plans</div>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="segment">
                    <h1>BASIC SEO PLAN</h1>
                    <p><b>FOR SMALL BUSINESSES</b></p>
                </div>
                <div class="segment"><h3><b>UGX 300,000/YEAR</b></h3></div>
                <div class="segment"><h3><b>KEYWORD RESEARCH</b></h3></div>
                <div class="segment"><h3><b>ON-PAGE SEO</b></h3></div>
                <div class="segment"><h3><b>MONTHLY REPORTS</b></h3></div>
                <div class="segment"><h3><b>LIMITED SUPPORT</b></h3></div>
                <a href="https://wa.me/<?php echo $whatsappNumber; ?>" class="button">ORDER NOW</a>
            </div>
            <div class="card">
                <div class="segment">
                    <h1>STANDARD SEO PLAN</h1>
                    <p><b>FOR MEDIUM BUSINESSES</b></p>
                </div>
                <div class="segment"><h3><b>UGX 600,000/YEAR</b></h3></div>
                <div class="segment"><h3><b>KEYWORD RESEARCH</b></h3></div>
                <div class="segment"><h3><b>ON-PAGE & OFF-PAGE SEO</b></h3></div>
                <div class="segment"><h3><b>MONTHLY REPORTS</b></h3></div>
                <div class="segment"><h3><b>6 MONTHS SUPPORT</b></h3></div>
                <a href="https://wa.me/<?php echo $whatsappNumber; ?>" class="button">ORDER NOW</a>
            </div>
            <div class="card">
                <div class="segment">
                    <h1>ADVANCED SEO PLAN</h1>
                    <p><b>FOR LARGE BUSINESSES</b></p>
                </div>
                <div class="segment"><h3><b>UGX 1,000,000/YEAR</b></h3></div>
                <div class="segment"><h3><b>KEYWORD RESEARCH</b></h3></div>
                <div class="segment"><h3><b>ON-PAGE & OFF-PAGE SEO</b></h3></div>
                <div class="segment"><h3><b>CONTENT MARKETING</b></h3></div>
                <div class="segment"><h3><b>MONTHLY REPORTS</b></h3></div>
                <div class="segment"><h3><b>UNLIMITED SUPPORT</b></h3></div>
                <a href="https://wa.me/<?php echo $whatsappNumber; ?>" class="button">ORDER NOW</a>
            </div>
            <div class="card">
                <div class="segment">
                    <h1>PREMIUM SEO PLAN</h1>
                    <p><b>FOR ENTERPRISES</b></p>
                </div>
                <div class="segment"><h3><b>UGX 1,500,000/YEAR</b></h3></div>
                <div class="segment"><h3><b>KEYWORD RESEARCH</b></h3></div>
                <div class="segment"><h3><b>ON-PAGE & OFF-PAGE SEO</b></h3></div>
                <div class="segment"><h3><b>CONTENT MARKETING</b></h3></div>
                <div class="segment"><h3><b>SOCIAL MEDIA MARKETING</b></h3></div>
                <div class="segment"><h3><b>24/7 SUPPORT</b></h3></div>
                <a href="https://wa.me/<?php echo $whatsappNumber; ?>" class="button">ORDER NOW</a>
            </div>
        </div>
    </div>
    <button class="chat-button" onclick="openChat()">💬</button>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3><?php echo $siteName; ?></h3>
                <p>Leading web development company in Uganda, offering top-notch web and application development services.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="services.php"><i class="fas fa-concierge-bell"></i>Services</a></li>
                    <li><a href="portfolio.php"><i class="fas fa-briefcase"></i>Portfolio</a></li>
                    <li><a href="contact.php"><i class="fas fa-envelope"></i>Contact</a></li>
                    <li><a href="package1.php"><i class="fas fa-box"></i>Packages</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo $year; ?> <?php echo $siteName; ?>. All rights reserved.</p>
        </div>
    </footer>
    <script src="script.js"></script>
    <script>
        function openChat() {
            window.open('https://wa.me/<?php echo $whatsappNumber; ?>?text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services.', '_blank');
        }
    </script>
</body>
</html>
