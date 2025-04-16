<?php
require_once 'config/config.php';
require_once 'includes/team.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#4CAF50">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="description" content="Best Web Development Company in Uganda">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        .testimonial-section {
            padding: 50px 20px;
            background-color: #f9f9f9;
            text-align: center;
            animation: fadeInUp 1s ease;
        }

        .testimonial-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
            padding: 20px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .testimonial-card {
            flex: 1 1 350px;
            max-width: 400px;
            min-width: 280px;
            background-color: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
            text-align: left;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 10px;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .author-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .author-info {
            text-align: left;
        }

        .author-name {
            font-size: 1.1em;
            font-weight: bold;
        }

        .author-position {
            font-size: 0.9em;
            color: #666;
        }

        .testimonial-content p {
            font-size: 1em;
            margin: 10px 0;
        }

        .testimonial-rating {
            margin-top: 10px;
        }

        .testimonial-rating .star {
            color: #FFD700;
        }

        .testimonial-date {
            font-size: 0.8em;
            color: #999;
            margin-top: 10px;
        }

        @media (max-width: 1200px) {
            .testimonial-grid {
                padding: 15px;
            }
            
            .testimonial-card {
                flex: 1 1 300px;
            }
        }

        @media (max-width: 768px) {
            .testimonial-card {
                flex: 1 1 100%;
                max-width: 500px;
                margin: 10px auto;
            }
            
            .testimonial-author {
                flex-direction: row;
                align-items: center;
            }
        }

        @media (max-width: 480px) {
            .testimonial-card {
                padding: 20px 15px;
            }
            
            .author-image {
                width: 45px;
                height: 45px;
            }
            
            .author-name {
                font-size: 1em;
            }
            
            .author-position {
                font-size: 0.8em;
            }
            
            .testimonial-content p {
                font-size: 0.9em;
            }
        }

        @media (max-width: 768px) {
            .testimonial-card {
                flex: 1 1 calc(50% - 40px);
                max-width: calc(50% - 40px);
            }
        }

        @media (max-width: 480px) {
            .testimonial-card {
                flex: 1 1 100%;
                max-width: 100%;
            }
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
    </style>
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
    <div class="hero-slider">
        <div class="hero-slide">
            <div class="hero-content">
                <h1>Transform Your Digital Presence</h1>
                <div class="typing-container">
                    <span class="typing-text"></span>
                    <span class="typing-cursor">|</span>
                </div>
                <div class="hero-buttons">
                    <a href="services.php" class="button">Our Services</a>
                    <a href="contact.php" class="button button-outline">Get Started</a>
                </div>
            </div>
        </div>
    </div>
    <main>
        <!-- About section with enhanced content -->
        <section id="about" class="animate__animated animate__fadeInUp">
            <h2>Why Choose Mctech-hub?</h2>
            <div class="feature-grid">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Fast Development</h3>
                    <p>Quick turnaround time without compromising quality</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Secure Solutions</h3>
                    <p>Built-in security features to protect your data</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <h3>Regular Updates</h3>
                    <p>Continuous support and maintenance</p>
                </div>
            </div>
        </section>

        <!-- Client Logos Section -->
        <section class="client-logos">
            <div class="client-section-header">
                <h2>Trusted By Leading Companies</h2>
                <p>We're proud to work with innovative businesses across various industries</p>
            </div>
            <div class="logo-grid">
                <div class="client-card">
                    <i class="fab fa-microsoft client-icon"></i>
                    <h4 class="client-name">Microsoft</h4>
                    <p class="client-description">Cloud solutions and enterprise software development</p>
                </div>
                <div class="client-card">
                    <i class="fab fa-google client-icon"></i>
                    <h4 class="client-name">Google</h4>
                    <p class="client-description">AI and machine learning implementations</p>
                </div>
                <div class="client-card">
                    <i class="fab fa-amazon client-icon"></i>
                    <h4 class="client-name">Amazon</h4>
                    <p class="client-description">E-commerce platform development</p>
                </div>
                <div class="client-card">
                    <i class="fab fa-apple client-icon"></i>
                    <h4 class="client-name">Apple</h4>
                    <p class="client-description">iOS app development and integration</p>
                </div>
                <div class="client-card">
                    <i class="fab fa-facebook client-icon"></i>
                    <h4 class="client-name">Meta</h4>
                    <p class="client-description">Social media and VR applications</p>
                </div>
            </div>
        </section>

        <!-- Enhanced Services Section -->
        <section id="services-overview" class="animate__animated animate__fadeInUp">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-code"></i>
                    <h3>Web Development</h3>
                    <p>Custom websites built with modern technologies</p>
                    <div class="service-details">
                        <ul class="service-feature-list">
                            <li><i class="fas fa-check-circle"></i>Responsive Design</li>
                            <li><i class="fas fa-check-circle"></i>SEO Optimization</li>
                            <li><i class="fas fa-check-circle"></i>Performance Tuning</li>
                            <li><i class="fas fa-check-circle"></i>CMS Integration</li>
                        </ul>
                    </div>
                    <a href="services.php#web" class="button">Learn more</a>
                </div>

                <div class="service-card">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Mobile App Development</h3>
                    <p>Native and cross-platform mobile solutions</p>
                    <div class="service-details">
                        <ul class="service-feature-list">
                            <li><i class="fas fa-check-circle"></i>iOS & Android Apps</li>
                            <li><i class="fas fa-check-circle"></i>React Native</li>
                            <li><i class="fas fa-check-circle"></i>Flutter Development</li>
                            <li><i class="fas fa-check-circle"></i>App Store Publishing</li>
                        </ul>
                    </div>
                    <a href="services.php#mobile" class="button">Learn more</a>
                </div>

                <div class="service-card">
                    <i class="fas fa-cart-shopping"></i>
                    <h3>E-Commerce Solutions</h3>
                    <p>Complete online store development</p>
                    <div class="service-details">
                        <ul class="service-feature-list">
                            <li><i class="fas fa-check-circle"></i>Custom Shopping Cart</li>
                            <li><i class="fas fa-check-circle"></i>Payment Integration</li>
                            <li><i class="fas fa-check-circle"></i>Inventory Management</li>
                            <li><i class="fas fa-check-circle"></i>Order Processing</li>
                        </ul>
                    </div>
                    <a href="services.php#ecommerce" class="button">Learn more</a>
                </div>

                <div class="service-card">
                    <i class="fas fa-server"></i>
                    <h3>Backend Development</h3>
                    <p>Robust server-side solutions</p>
                    <div class="service-details">
                        <ul class="service-feature-list">
                            <li><i class="fas fa-check-circle"></i>API Development</li>
                            <li><i class="fas fa-check-circle"></i>Database Design</li>
                            <li><i class="fas fa-check-circle"></i>Cloud Integration</li>
                            <li><i class="fas fa-check-circle"></i>Scalable Architecture</li>
                        </ul>
                    </div>
                    <a href="services.php#backend" class="button">Learn more</a>
                </div>

                <div class="service-card">
                    <i class="fas fa-pen-ruler"></i>
                    <h3>UI/UX Design</h3>
                    <p>User-centered design solutions</p>
                    <div class="service-details">
                        <ul class="service-feature-list">
                            <li><i class="fas fa-check-circle"></i>User Research</li>
                            <li><i class="fas fa-check-circle"></i>Wireframing</li>
                            <li><i class="fas fa-check-circle"></i>Prototyping</li>
                            <li><i class="fas fa-check-circle"></i>Visual Design</li>
                        </ul>
                    </div>
                    <a href="services.php#design" class="button">Learn more</a>
                </div>

                <div class="service-card">
                    <i class="fas fa-magnifying-glass-chart"></i>
                    <h3>SEO Services</h3>
                    <p>Boost your online visibility</p>
                    <div class="service-details">
                        <ul class="service-feature-list">
                            <li><i class="fas fa-check-circle"></i>Keyword Research</li>
                            <li><i class="fas fa-check-circle"></i>On-Page SEO</li>
                            <li><i class="fas fa-check-circle"></i>Technical SEO</li>
                            <li><i class="fas fa-check-circle"></i>Performance Optimization</li>
                        </ul>
                    </div>
                    <a href="services.php#seo" class="button">Learn more</a>
                </div>

                <div class="service-card">
                    <i class="fas fa-cloud"></i>
                    <h3>Cloud Solutions</h3>
                    <p>Scalable cloud infrastructure</p>
                    <div class="service-details">
                        <ul class="service-feature-list">
                            <li><i class="fas fa-check-circle"></i>AWS Integration</li>
                            <li><i class="fas fa-check-circle"></i>Cloud Migration</li>
                            <li><i class="fas fa-check-circle"></i>DevOps Services</li>
                            <li><i class="fas fa-check-circle"></i>Server Management</li>
                        </ul>
                    </div>
                    <a href="services.php#cloud" class="button">Learn more</a>
                </div>

                <div class="service-card">
                    <i class="fas fa-shield-halved"></i>
                    <h3>Cybersecurity</h3>
                    <p>Protect your digital assets</p>
                    <div class="service-details">
                        <ul class="service-feature-list">
                            <li><i class="fas fa-check-circle"></i>Security Audits</li>
                            <li><i class="fas fa-check-circle"></i>Penetration Testing</li>
                            <li><i class="fas fa-check-circle"></i>SSL Implementation</li>
                            <li><i class="fas fa-check-circle"></i>Data Protection</li>
                        </ul>
                    </div>
                    <a href="services.php#security" class="button">Learn more</a>
                </div>

                <div class="service-card">
                    <i class="fas fa-robot"></i>
                    <h3>AI & Machine Learning</h3>
                    <p>Intelligent solutions for your business</p>
                    <div class="service-details">
                        <ul class="service-feature-list">
                            <li><i class="fas fa-check-circle"></i>Chatbot Development</li>
                            <li><i class="fas fa-check-circle"></i>Predictive Analytics</li>
                            <li><i class="fas fa-check-circle"></i>Data Processing</li>
                            <li><i class="fas fa-check-circle"></i>AI Integration</li>
                        </ul>
                    </div>
                    <a href="services.php#ai" class="button">Learn more</a>
                </div>
            </div>
        </section>

        <!-- Technology Stack Section -->
        <section class="tech-stack">
            <h2>Technologies We Master</h2>
            <p class="tech-description">Our expertise spans across various modern technologies and frameworks</p>
            <div class="tech-grid">
                <div class="tech-item">
                    <i class="fab fa-react"></i>
                    <h3>React.js</h3>
                    <p>Modern UI Development</p>
                </div>
                <div class="tech-item">
                    <i class="fab fa-node-js"></i>
                    <h3>Node.js</h3>
                    <p>Backend Development</p>
                </div>
                <div class="tech-item">
                    <i class="fab fa-python"></i>
                    <h3>Python</h3>
                    <p>AI & Data Science</p>
                </div>
                <div class="tech-item">
                    <i class="fab fa-angular"></i>
                    <h3>Angular</h3>
                    <p>Enterprise Applications</p>
                </div>
                <div class="tech-item">
                    <i class="fab fa-vuejs"></i>
                    <h3>Vue.js</h3>
                    <p>Progressive Web Apps</p>
                </div>
                <div class="tech-item">
                    <i class="fab fa-aws"></i>
                    <h3>AWS</h3>
                    <p>Cloud Infrastructure</p>
                </div>
                <div class="tech-item">
                    <i class="fab fa-laravel"></i>
                    <h3>Laravel</h3>
                    <p>PHP Development</p>
                </div>
                <div class="tech-item">
                    <i class="fab fa-docker"></i>
                    <h3>Docker</h3>
                    <p>Container Solutions</p>
                </div>
                <div class="tech-item">
                    <i class="fab fa-android"></i>
                    <h3>Android</h3>
                    <p>Mobile Development</p>
                </div>
                <div class="tech-item">
                    <i class="fab fa-apple"></i>
                    <h3>iOS</h3>
                    <p>Apple Development</p>
                </div>
                <div class="tech-item">
                    <i class="fab fa-wordpress"></i>
                    <h3>WordPress</h3>
                    <p>CMS Solutions</p>
                </div>
                <div class="tech-item">
                    <i class="fab fa-git-alt"></i>
                    <h3>Git</h3>
                    <p>Version Control</p>
                </div>
            </div>
        </section>

        <!-- Enhanced Project Showcase -->
        <section id="projects" class="projects-section">
            <h2>Featured Portfolio Projects</h2>
            <p class="projects-intro">Transforming ideas into powerful digital solutions</p>
            
            <div class="project-grid">
                <!-- Digital Commerce Project -->
                <div class="project-card">
                    <div class="project-icon-wrapper">
                        <i class="fas fa-store-alt project-icon"></i>
                        <span class="project-icon-title">Digital Commerce</span>
                    </div>
                    <div class="project-content">
                        <div class="project-category">
                            <span class="category-tag">E-Commerce</span>
                            <span class="project-year">2023</span>
                        </div>
                        <h3>MarketPlace Elite</h3>
                        <p class="project-title">Enterprise E-commerce Solution</p>
                        <div class="project-brief">
                            <p class="project-subtitle">Premium Digital Marketplace</p>
                            <p class="project-description">Developed for UgandaMart, this multi-vendor platform revolutionizes online retail with advanced features and seamless integration.</p>
                        </div>
                        <div class="project-tech">
                            <span><i class="fab fa-react"></i> React.js</span>
                            <span><i class="fab fa-node-js"></i> Node.js</span>
                            <span><i class="fas fa-database"></i> MongoDB</span>
                        </div>
                        <div class="project-links">
                            <a href="portfolio.php" class="button button-outline">View Case Study</a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Healthcare Project -->
                <div class="project-card">
                    <div class="project-icon-wrapper">
                        <i class="fas fa-heartbeat project-icon"></i>
                        <span class="project-icon-title">Healthcare Solutions</span>
                    </div>
                    <div class="project-content">
                        <div class="project-category">
                            <span class="category-tag">Healthcare</span>
                            <span class="project-year">2023</span>
                        </div>
                        <h3>MediCare Connect</h3>
                        <p class="project-title">Digital Health Platform</p>
                        <div class="project-brief">
                            <p class="project-subtitle">Modern Healthcare Solution</p>
                            <p class="project-description">Built for Kampala Hospital, enabling seamless virtual consultations and patient care management.</p>
                        </div>
                        <div class="project-tech">
                            <span><i class="fab fa-flutter"></i> Flutter</span>
                            <span><i class="fas fa-server"></i> Firebase</span>
                            <span><i class="fas fa-shield-alt"></i> HIPAA</span>
                        </div>
                        <div class="project-links">
                            <a href="portfolio.php" class="button button-outline">View Case Study</a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>

                <!-- FinTech Project -->
                <div class="project-card">
                    <div class="project-icon-wrapper">
                        <i class="fas fa-chart-line project-icon"></i>
                        <span class="project-icon-title">Financial Analytics</span>
                    </div>
                    <div class="project-content">
                        <div class="project-category">
                            <span class="category-tag">FinTech</span>
                            <span class="project-year">2023</span>
                        </div>
                        <h3>FinFlow Analytics</h3>
                        <p class="project-title">Financial Intelligence Platform</p>
                        <div class="project-brief">
                            <p class="project-subtitle">Smart Financial Analytics</p>
                            <p class="project-description">Created for East African Bank, providing real-time financial insights and predictive analytics.</p>
                        </div>
                        <div class="project-tech">
                            <span><i class="fab fa-python"></i> Python</span>
                            <span><i class="fab fa-vuejs"></i> Vue.js</span>
                            <span><i class="fas fa-brain"></i> ML</span>
                        </div>
                        <div class="project-links">
                            <a href="portfolio.php" class="button button-outline">View Case Study</a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Education Project -->
                <div class="project-card">
                    <div class="project-icon-wrapper">
                        <i class="fas fa-graduation-cap project-icon"></i>
                        <span class="project-icon-title">Education Tech</span>
                    </div>
                    <div class="project-content">
                        <div class="project-category">
                            <span class="category-tag">EdTech</span>
                            <span class="project-year">2023</span>
                        </div>
                        <h3>EduTech Pro</h3>
                        <p class="project-title">Learning Management System</p>
                        <div class="project-brief">
                            <p class="project-subtitle">Digital Education Platform</p>
                            <p class="project-description">Developed for African Educational Institute, revolutionizing online learning with interactive features.</p>
                        </div>
                        <div class="project-tech">
                            <span><i class="fab fa-angular"></i> Angular</span>
                            <span><i class="fab fa-java"></i> Spring</span>
                            <span><i class="fas fa-database"></i> SQL</span>
                        </div>
                        <div class="project-links">
                            <a href="portfolio.php" class="button button-outline">View Case Study</a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="view-more-projects">
                <a href="portfolio.php" class="button">Explore Full Portfolio</a>
            </div>
        </section>

        <!-- Enhanced Stats Section -->
        <section id="stats" class="stats-section">
            <h2>Our Achievements</h2>
            <div class="stat-item">
                <h3>200+</h3>
                <p>Projects Completed</p>
            </div>
            <div class="stat-item">
                <h3>50+</h3>
                <p>Happy Clients</p>
            </div>
            <div class="stat-item">
                <h3>5+</h3>
                <p>Years Experience</p>
            </div>
            <div class="stat-item">
                <h3>24/7</h3>
                <p>Support</p>
            </div>
        </section>

        <!-- New Process Section -->
        <section id="process" class="process-section">
            <h2>Our Development Process</h2>
            <div class="process-grid">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Planning</h3>
                    <p>Detailed project analysis and strategy development</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Design</h3>
                    <p>Creative and user-focused interface design</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Development</h3>
                    <p>Clean and efficient code implementation</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Testing</h3>
                    <p>Thorough quality assurance and testing</p>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <h3>Launch</h3>
                    <p>Smooth deployment and ongoing support</p>
                </div>
                <div class="process-step">
                    <div class="step-number">6</div>
                    <h3>Maintenance</h3>
                    <p>Regular updates and performance monitoring</p>
                </div>
                <div class="process-step">
                    <div class="step-number">7</div>
                    <h3>Optimization</h3>
                    <p>Performance tuning and speed enhancement</p>
                </div>
                <div class="process-step">
                    <div class="step-number">8</div>
                    <h3>Support</h3>
                    <p>24/7 technical assistance and maintenance</p>
                </div>
            </div>
        </section>

        <!-- Enhanced CTA Section -->
        <section class="cta-section">
            <div class="cta-content">
                <h2>Ready to Transform Your Digital Presence?</h2>
                <p>Let's create something amazing together</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="button">Start Your Project</a>
                    <a href="portfolio.php" class="button button-outline">View Our Work</a>
                </div>
            </div>
        </section>

        <section id="team">
            <h2>Our Team</h2>
            <div class="team-grid">
                <?php foreach($team_members as $member): ?>
                    <div class="team-member">
                        <img src="<?php echo htmlspecialchars($member['image']); ?>" 
                             alt="<?php echo htmlspecialchars($member['alt']); ?>">
                        <h3><?php echo htmlspecialchars($member['name']); ?></h3>
                        <p><?php echo htmlspecialchars($member['role']); ?></p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <section id="cta" class="cta-section">
            <h2>Ready to Start Your Project</h2>
            <a href="mailto:<?php echo SITE_EMAIL; ?>" class="join-team-button">Join Our Team</a>
            <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>" class="join-team-button">Join via WhatsApp</a>
        </section>
        <section id="testimonials" class="testimonial-section">
            <div class="testimonial-header">
                <h2>What Our Clients Say</h2>
                <p>Trusted by businesses worldwide</p>
            </div>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-author">
                        <img src="./assets/wang.jpeg" alt="Mr WangShen" class="author-image">
                        <div class="author-info">
                            <h4 class="author-name">Mr. Wangzhen</h4>
                            <p class="author-position">CEO, Tech Solutions Ltd</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>"Mctech-hub transformed our online presence with their exceptional web development services. Their attention to detail and innovative solutions helped us achieve our digital goals."</p>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                    </div>
                    <span class="testimonial-date">January 2024</span>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-author">
                        <img src="./assets/client2.jpg" alt="John Smith" class="author-image">
                        <div class="author-info">
                            <h4 class="author-name">John Smith</h4>
                            <p class="author-position">CTO, Digital Dynamics</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>"Working with Mctech-hub was a game-changer for our business. Their expertise in mobile app development helped us launch a successful product that our users love."</p>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star-half-alt star"></i>
                    </div>
                    <span class="testimonial-date">December 2023</span>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-author">
                        <img src="./assets/ap.jpeg" alt="Mrs. Kayongo Mariam" class="author-image">
                        <div class="author-info">
                            <h4 class="author-name">Mrs. Kayongo Mariam</h4>
                            <p class="author-position">Marketing Director, Innovation Hub</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>"Professional, reliable, and incredibly talented team. They delivered our e-commerce platform ahead of schedule and exceeded our expectations in every way."</p>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                    </div>
                    <span class="testimonial-date">November 2023</span>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-author">
                        <img src="./assets/download.jpeg" alt="Mr. Denis K" class="author-image">
                        <div class="author-info">
                            <h4 class="author-name">Mr. Denis K</h4>
                            <p class="author-position">Founder, StartUp Vision</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>"The team at Mctech-hub understands modern web development perfectly. They built us a lightning-fast, secure, and scalable platform that helps us serve thousands of customers."</p>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                    </div>
                    <span class="testimonial-date">October 2023</span>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-author">
                        <img src="./assets/sarah.jpeg" alt="Sarah Chen" class="author-image">
                        <div class="author-info">
                            <h4 class="author-name">Sarah Chen</h4>
                            <p class="author-position">CIO, Global Solutions Inc</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>"Mctech-hub's AI integration solutions have revolutionized our business processes. Their innovative approach and technical expertise have helped us achieve a 40% increase in operational efficiency."</p>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                    </div>
                    <span class="testimonial-date">February 2024</span>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-author">
                        <img src="./assets/robert.jpeg" alt="Robert Mukasa" class="author-image">
                        <div class="author-info">
                            <h4 class="author-name">Robert Mukasa</h4>
                            <p class="author-position">CEO, TechEast Africa</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>"The cybersecurity solutions implemented by Mctech-hub have given us peace of mind. Their proactive approach to security and outstanding support have made them our long-term technology partner."</p>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star-half-alt star"></i>
                    </div>
                    <span class="testimonial-date">March 2024</span>
                </div>
            </div>
        </section>
        <section id="contact-form">
            <h2>Contact Us</h2>
            <div class="contact-form-container">
                <form action="submit_form.php" method="post">
                    <div class="contact-form-grid">
                        <div class="contact-input-group">
                            <input type="text" id="name" name="name" class="contact-input" placeholder=" " required>
                            <label for="name" class="contact-label">Full Name</label>
                        </div>
                        <div class="contact-input-group">
                            <input type="email" id="email" name="email" class="contact-input" placeholder=" " required>
                            <label for="email" class="contact-label">Email Address</label>
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
    </main>
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
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
        </div>
    </footer>
    <script src="script.js"></script>
    <script src="js/typed.js"></script>
</body>
</html>
