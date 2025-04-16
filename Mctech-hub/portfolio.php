<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#4CAF50">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="description" content="Our Portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mctech-hub - Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        .projects-section {
            padding: 8rem 2rem;
            background: linear-gradient(145deg, #f9fafb 0%, #ffffff 100%);
            position: relative;
            z-index: 1;
        }

        .projects-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 25px 25px, rgba(0,0,0,0.05) 2%, transparent 0%),
                radial-gradient(circle at 75px 75px, rgba(0,0,0,0.05) 2%, transparent 0%);
            background-size: 100px 100px;
            opacity: 0.5;
            z-index: -1;
        }

        .projects-section h2 {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #2c3e50, #3498db);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
        }

        .projects-intro {
            text-align: center;
            color: #64748b;
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 4rem;
            line-height: 1.8;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 3rem;
            padding: 2rem;
            max-width: 1600px;
            margin: 0 auto;
        }

        .project-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .project-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }

        .project-content {
            padding: 2.5rem;
        }

        .project-icon-wrapper {
            margin-bottom: 2rem;
        }

        .project-icon {
            font-size: 2.5rem;
            background: linear-gradient(135deg, #2c3e50, #3498db);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .project-icon-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #2c3e50;
            margin-left: 1rem;
        }

        .project-category {
            margin-bottom: 1.5rem;
        }

        .category-tag {
            background: linear-gradient(135deg, #2c3e50, #3498db);
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 100px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .project-year {
            color: #64748b;
            font-weight: 500;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 2rem 0;
        }

        .project-tech span {
            background: rgba(44, 62, 80, 0.1);
            color: #2c3e50;
            padding: 0.7rem 1.4rem;
            border-radius: 100px;
            font-size: 0.9rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .project-tech span:hover {
            background: rgba(44, 62, 80, 0.15);
            transform: translateY(-2px);
        }

        .project-description {
            color: #64748b;
            font-size: 1.1rem;
            line-height: 1.7;
            margin: 1.5rem 0;
        }

        .project-links {
            display: flex;
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .button-outline {
            background: transparent;
            color: #2c3e50;
            border: 2px solid #2c3e50;
            padding: 1rem 2rem;
            border-radius: 100px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .button-outline:hover {
            background: #2c3e50;
            color: white;
            transform: translateY(-2px);
        }

        .project-link {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(44, 62, 80, 0.1);
            color: #2c3e50;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .project-link:hover {
            background: #2c3e50;
            color: white;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .projects-section h2 {
                font-size: 2.5rem;
            }

            .project-grid {
                grid-template-columns: 1fr;
                padding: 1rem;
                gap: 2rem;
            }

            .project-content {
                padding: 2rem;
            }
        }

        @media (max-width: 480px) {
            .projects-section h2 {
                font-size: 2rem;
            }

            .projects-intro {
                font-size: 1rem;
            }

            .project-icon-title {
                font-size: 1.1rem;
            }

            .project-description {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div id="loader-wrapper" aria-label="Loading content">
        <div class="loader" role="progressbar"></div>
        <div class="loader-text">Loading...</div>
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
        <!-- Featured Portfolio Projects Section -->
        <section id="featured-projects" class="projects-section">
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
                        <p class="project-description">Premium Digital Marketplace developed for UgandaMart, revolutionizing online retail with advanced features and seamless integration.</p>
                        <div class="project-tech">
                            <span><i class="fab fa-react"></i> React.js</span>
                            <span><i class="fab fa-node-js"></i> Node.js</span>
                            <span><i class="fas fa-database"></i> MongoDB</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="button button-outline">View Case Study</a>
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
                        <p class="project-description">Digital Health Platform built for Kampala Hospital, enabling seamless virtual consultations and patient care management.</p>
                        <div class="project-tech">
                            <span><i class="fab fa-flutter"></i> Flutter</span>
                            <span><i class="fas fa-server"></i> Firebase</span>
                            <span><i class="fas fa-shield-alt"></i> HIPAA</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="button button-outline">View Case Study</a>
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
                            <span class="project-year">2024</span>
                        </div>
                        <h3>EduTech Pro</h3>
                        <p class="project-description">Learning Management System developed for African Educational Institute, revolutionizing online learning with interactive features.</p>
                        <div class="project-tech">
                            <span><i class="fab fa-angular"></i> Angular</span>
                            <span><i class="fab fa-java"></i> Spring</span>
                            <span><i class="fas fa-database"></i> SQL</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="button button-outline">View Case Study</a>
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
                            <span class="project-year">2024</span>
                        </div>
                        <h3>FinFlow Analytics</h3>
                        <p class="project-description">Financial Intelligence Platform created for East African Bank, providing real-time financial insights and predictive analytics.</p>
                        <div class="project-tech">
                            <span><i class="fab fa-python"></i> Python</span>
                            <span><i class="fab fa-vuejs"></i> Vue.js</span>
                            <span><i class="fas fa-brain"></i> ML</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="button button-outline">View Case Study</a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Real Estate Project -->
                <div class="project-card">
                    <div class="project-icon-wrapper">
                        <i class="fas fa-home project-icon"></i>
                        <span class="project-icon-title">Real Estate</span>
                    </div>
                    <div class="project-content">
                        <div class="project-category">
                            <span class="category-tag">PropTech</span>
                            <span class="project-year">2024</span>
                        </div>
                        <h3>PropertyFinder Pro</h3>
                        <p class="project-description">Advanced real estate platform with virtual tours and AI-powered property matching for Uganda's leading real estate agency.</p>
                        <div class="project-tech">
                            <span><i class="fab fa-react"></i> React</span>
                            <span><i class="fab fa-node-js"></i> Express</span>
                            <span><i class="fas fa-cube"></i> Three.js</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="button button-outline">View Case Study</a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Travel Tech Project -->
                <div class="project-card">
                    <div class="project-icon-wrapper">
                        <i class="fas fa-plane project-icon"></i>
                        <span class="project-icon-title">Travel Tech</span>
                    </div>
                    <div class="project-content">
                        <div class="project-category">
                            <span class="category-tag">Travel</span>
                            <span class="project-year">2024</span>
                        </div>
                        <h3>TravelEase Hub</h3>
                        <p class="project-description">Comprehensive travel booking platform with AI-powered recommendations and real-time flight tracking for East African Airlines.</p>
                        <div class="project-tech">
                            <span><i class="fab fa-vuejs"></i> Vue.js</span>
                            <span><i class="fab fa-golang"></i> Go</span>
                            <span><i class="fas fa-map"></i> MapBox</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="button button-outline">View Case Study</a>
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>
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
            <p>&copy; 2025 Mctech-hub. All rights reserved.</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
