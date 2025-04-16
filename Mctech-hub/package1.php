<?php
$title = "Mctech-hub - Services";
$description = "Our Services";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#4CAF50">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="description" content="<?php echo $description; ?>">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <div id="loader-wrapper">
        <div class="loader"></div>
    </div>
    <header>
        <nav>
            <div class="logo">Mctech-hub</div>
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
    <div class="packages-section">
        <div class="container">
            <div class="package-header">
                <h1 class="section-title">Choose Your Perfect Plan</h1>
                <p class="section-description">Tailored solutions for businesses of all sizes</p>
            </div>
            <div class="packages-grid">
                <?php
                $plans = [
                    [
                        'name' => 'BASIC PLAN',
                        'target' => 'FOR SMALL BUSINESSES',
                        'price' => '600,000',
                        'features' => ['FREE DOMAIN', 'HOSTING', '4 PAGES', 'LIMITED SUPPORT']
                    ],
                    [
                        'name' => 'STANDARD PLAN',
                        'target' => 'FOR MEDIUM SIZE BUSINESS',
                        'price' => '750,000',
                        'features' => ['FREE DOMAIN', 'HOSTING', '8 PAGES', '6 MONTHS SUPPORT']
                    ],
                    [
                        'name' => 'ADVANCED PLAN',
                        'target' => 'FOR LARGE SCALE BUSINESS',
                        'price' => '1,000,000',
                        'features' => ['FREE DOMAIN', 'PREMIUM HOSTING', 'UNLIMITED MAIL', 'UNLIMITED SUPPORT']
                    ],
                    [
                        'name' => 'PREMIUM PLAN',
                        'target' => 'FOR ENTERPRISES',
                        'price' => '1,500,000',
                        'features' => ['FREE DOMAIN', 'PREMIUM HOSTING', 'UNLIMITED MAIL', '24/7 SUPPORT']
                    ],
                    [
                        'name' => 'ULTIMATE PLAN',
                        'target' => 'FOR LARGE ENTERPRISES',
                        'price' => '2,000,000',
                        'features' => ['FREE DOMAIN', 'PREMIUM HOSTING', 'UNLIMITED MAIL', '24/7 PRIORITY SUPPORT']
                    ]
                ];
                ?>
                <?php foreach ($plans as $plan): ?>
                <div class="package-card">
                    <div class="package-header">
                        <h2><?php echo $plan['name']; ?></h2>
                        <p class="package-target"><?php echo $plan['target']; ?></p>
                    </div>
                    <div class="package-price">
                        <div class="price-wrapper">
                            <span class="currency">UGX</span>
                            <span class="amount"><?php echo $plan['price']; ?></span>
                            <span class="period">/YEAR</span>
                        </div>
                    </div>
                    <div class="package-features">
                        <?php foreach ($plan['features'] as $feature): ?>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span><?php echo $feature; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="https://wa.me/+256743483280" class="package-button">Get Started</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <button class="chat-button" onclick="openChat()">💬</button>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Mctech-hub</h3>
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
            <p>&copy; 2025 Mctech-hub. All rights reserved.</p>
        </div>
    </footer>
    <script src="script.js"></script>
    <script>
        function openChat() {
            window.open('https://wa.me/+256743483280?text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services.', '_blank');
        }
    </script>
</body>
</html>
