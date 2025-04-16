<?php
    // Initialize session if needed
    session_start();
    
    // Define some variables
    $company_name = "Mctech-hub";
    $year = date("Y");
    $whatsapp_number = "+256743483280";
    
    // Include header
    include 'header.php';
?>

<div class="app-plans">
    <div class="animated-heading">Application Development Plans</div>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="segment">
                    <h1>BASIC APP PLAN</h1>
                    <p><b>FOR SMALL APPLICATIONS</b></p>
                </div>
                <div class="segment"><h3><b>UGX 1,000,000/YEAR</b></h3></div>
                <div class="segment"><h3><b>FREE DOMAIN</b></h3></div>
                <div class="segment"><h3><b>HOSTING</b></h3></div>
                <div class="segment"><h3><b>4 SCREENS</b></h3></div>
                <div class="segment"><h3><b>LIMITED SUPPORT</b></h3></div>
                <a href="https://wa.me/<?php echo $whatsapp_number; ?>" class="button">ORDER NOW</a>
            </div>
            <div class="card">
                <div class="segment">
                    <h1>STANDARD APP PLAN</h1>
                    <p><b>FOR MEDIUM APPLICATIONS</b></p>
                </div>
                <div class="segment"><h3><b>UGX 2,000,000/YEAR</b></h3></div>
                <div class="segment"><h3><b>FREE DOMAIN</b></h3></div>
                <div class="segment"><h3><b>HOSTING</b></h3></div>
                <div class="segment"><h3><b>8 SCREENS</b></h3></div>
                <div class="segment"><h3><b>6 MONTHS SUPPORT</b></h3></div>
                <a href="https://wa.me/<?php echo $whatsapp_number; ?>" class="button">ORDER NOW</a>
            </div>
            <div class="card">
                <div class="segment">
                    <h1>ADVANCED APP PLAN</h1>
                    <p><b>FOR LARGE APPLICATIONS</b></p>
                </div>
                <div class="segment"><h3><b>UGX 3,500,000/YEAR</b></h3></div>
                <div class="segment"><h3><b>FREE DOMAIN</b></h3></div>
                <div class="segment"><h3><b>PREMIUM HOSTING</b></h3></div>
                <div class="segment"><h3><b>12 SCREENS</b></h3></div>
                <div class="segment"><h3><b>UNLIMITED SUPPORT</b></h3></div>
                <a href="https://wa.me/<?php echo $whatsapp_number; ?>" class="button">ORDER NOW</a>
            </div>
            <div class="card">
                <div class="segment">
                    <h1>PREMIUM APP PLAN</h1>
                    <p><b>FOR ENTERPRISE APPLICATIONS</b></p>
                </div>
                <div class="segment"><h3><b>UGX 5,000,000/YEAR</b></h3></div>
                <div class="segment"><h3><b>FREE DOMAIN</b></h3></div>
                <div class="segment"><h3><b>PREMIUM HOSTING</b></h3></div>
                <div class="segment"><h3><b>20 SCREENS</b></h3></div>
                <div class="segment"><h3><b>24/7 SUPPORT</b></h3></div>
                <a href="https://wa.me/<?php echo $whatsapp_number; ?>" class="button">ORDER NOW</a>
            </div>
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
        <p>&copy; <?php echo date('Y'); ?> <?php echo $company_name; ?>. All rights reserved.</p>
    </div>
</footer>

<script>
    function openChat() {
        window.open('https://wa.me/<?php echo $whatsapp_number; ?>?text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services.', '_blank');
    }
</script>
