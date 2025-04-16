<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#4CAF50">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="description" content="Application Development Plans">
    <title>Mctech-hub - App Development Plans</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        .nav-list a.active {
            background: rgba(255,255,255,0.2);
            border-radius: 25px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo"><a href="index.php" style="color: white; text-decoration: none;"><?php echo isset($company_name) ? $company_name : 'Mctech-hub'; ?></a></div>
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-list">
                <li><a href="index.php" <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'class="active"' : ''; ?>>Home</a></li>
                <li><a href="services.php" <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'class="active"' : ''; ?>>Services</a></li>
                <li><a href="portfolio.php" <?php echo basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'class="active"' : ''; ?>>Portfolio</a></li>
                <li><a href="contact.php" <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'class="active"' : ''; ?>>Contact</a></li>
                <li><a href="app.php" <?php echo basename($_SERVER['PHP_SELF']) == 'app.php' ? 'class="active"' : ''; ?>>App Development</a></li>
            </ul>
        </nav>
    </header>

    <script>
        document.getElementById('mobile-menu').addEventListener('click', function() {
            document.querySelector('.nav-list').classList.toggle('active');
            this.classList.toggle('active');
        });
    </script>
</body>
</html>
