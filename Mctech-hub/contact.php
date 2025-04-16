<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#4CAF50">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="description" content="Contact Us">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mctech-hub - Contact</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="faq-styles.css">
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
    <main>
        <!-- Business Hours Section -->
        <section id="business-hours" class="animate__animated animate__fadeIn">
            <h2>Business Hours</h2>
            <div class="hours-container">
                <div class="hours-card">
                    <h3>Weekdays</h3>
                    <p>Monday - Friday: 8:00 AM - 6:00 PM</p>
                </div>
                <div class="hours-card">
                    <h3>Weekends</h3>
                    <p>Saturday: 9:00 AM - 2:00 PM</p>
                    <p>Sunday: Closed</p>
                </div>
            </div>
        </section>

        <!-- Contact Information Cards -->
        <section id="contact-info" class="animate__animated animate__fadeIn">
            <div class="info-cards">
                <div class="info-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Visit Us</h3>
                    <p>Plot 123, Kampala Road</p>
                    <p>Kampala, Uganda</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-phone"></i>
                    <h3>Call Us</h3>
                    <p>+256 743 483 280</p>
                    <p>+256 789 123 456</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@mctech-hub.com</p>
                    <p>support@mctech-hub.com</p>
                </div>
            </div>
        </section>

        <!-- Location section with enhanced description -->
        <section id="location">
            <h2>Our Location</h2>
            <p class="location-desc">Find us in the heart of Kampala, easily accessible from all major routes.</p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4363098811981!
                2d32.57105261349141!3d0.34678749931083563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb8661e6b291%3A0x2344421bc1c7ca52!2sMctech-hub!5e0!3m2!1sen!2sug!4v1736272999248!5m2!1sen!2sug"
                width="100%" height="450" margin-top="30px" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <!-- Enhanced Contact form section -->
        <section id="contact" class="animate__animated animate__fadeInUp">
            <h2>Contact Us</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $subject = $_POST['subject'];
                $service = $_POST['service'];
                $message = $_POST['message'];
                
                // You can add email sending functionality here
                // For now, just show a success message
                echo "<div class='success-message'>Thank you for your message!</div>";
            }
            ?>
            <div class="contact-form-container">
                <form id="contact-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="contact-form-grid">
                        <div class="contact-input-group">
                            <input type="text" id="name" name="name" class="contact-input" placeholder=" " required>
                            <label for="name" class="contact-label">Full Name</label>
                        </div>
                        <div class="contact-input-group">
                            <input type="email" id="email" name="email" class="contact-input" placeholder=" " required>
                            <label for="email" class="contact-label">Email Address</label>
                        </div>
                        <div class="contact-input-group">
                            <input type="tel" id="phone" name="phone" class="contact-input" placeholder=" " required>
                            <label for="phone" class="contact-label">Phone Number</label>
                        </div>
                        <div class="contact-input-group">
                            <input type="text" id="subject" name="subject" class="contact-input" placeholder=" " required>
                            <label for="subject" class="contact-label">Subject</label>
                        </div>
                        <div class="contact-input-group contact-form-full">
                            <select id="service" name="service" class="contact-input" required>
                                <option value="">Select a Service</option>
                                <option value="web">Web Development</option>
                                <option value="app">App Development</option>
                                <option value="design">UI/UX Design</option>
                                <option value="marketing">Digital Marketing</option>
                            </select>
                            <label for="service" class="contact-label">Service Interest</label>
                        </div>
                        <div class="contact-input-group contact-form-full">
                            <textarea id="message" name="message" class="contact-textarea" placeholder=" " rows="5" required></textarea>
                            <label for="message" class="contact-label message">Message</label>
                        </div>
                    </div>
                    <button type="submit" class="contact-submit">Send Message</button>
                </form>
            </div>
        </section>

        <!-- FAQ Section -->
        <section id="faq" class="animate__animated animate__fadeIn faq-section">
            <h2 class="faq-title">Frequently Asked Questions</h2>
            <div class="faq-container">
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-question">
                        <h3>What are your typical project timelines?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Project timelines vary based on complexity. Simple websites typically take 2-4 weeks, while complex applications may take 2-6 months.</p>
                    </div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-question">
                        <h3>Do you offer maintenance services?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer various maintenance packages to keep your website or application running smoothly.</p>
                    </div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-question">
                        <h3>What is your payment structure?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>We typically require a 50% deposit to begin work, with the remaining balance due upon project completion.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Floating Buttons -->
    <div class="floating-buttons">
        <a href="tel:+256743483280" class="floating-button animate__animated animate__bounceIn">
            <i class="fas fa-phone"></i>
        </a>
        <a href="sms:+256743483280" class="floating-button animate__animated animate__bounceIn animate__delay-1s">
            <i class="fas fa-envelope"></i>
        </a>
    </div>

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
</body>

</html>