<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SAMPURNA COLLEGE OF IT & MANAGEMENT </title>
    <style>
        /* Reset */
        *, *::before, *::after {
            box-sizing: border-box;
        }```php
<?php include 'partials/header.php'; ?>
<body>
    <header>
        <div class="container">
            <nav>
                
            </nav>
        </div>
    </header>

    <section class="hero" style="background-image: linear-gradient(rgba(241, 245, 241, 0.7), rgba(13,110,253,0.85)), url('https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=1470&q=80');">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you</p>
    </section>

    <section>
        <div class="container">
            <h2>Get in Touch</h2>
            <form action="contact.php" method="post">
                <label for="name">Name *</label>
                <input type="text" id="name" name="name" required />

                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required />

                <label for="subject">Subject *</label>
                <input type="text" id="subject" name="subject" required />

                <label for="message">Message *</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <input type="submit" value="Send Message" />
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = htmlspecialchars(trim($_POST['name']));
                $email = htmlspecialchars(trim($_POST['email']));
                $subject = htmlspecialchars(trim($_POST['subject']));
                $message = htmlspecialchars(trim($_POST['message']));

                // Normally would send email or save message to DB
                echo '<p style="text-align:center; color: green; font-weight: 600; margin-top: 15px;">Thank you, ' . $name . '. Your message has been received.</p>';
            }
            ?>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>
</body>
</html>
``````php
<?php
// Add error logging
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', 'error.log');

// Add custom logging function
function log_message($message) {
    $log_file = 'log.txt';
    $timestamp = date('Y-m-d H:i:s');
    $log_message = "$timestamp - $message\n";
    file_put_contents($log_file, $log_message, FILE_APPEND);
}

// Example usage:
log_message('User submitted contact form');
?>
```
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background: #f4f6f8;
            color: #333;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        header {
            background-color: #0d6efd;
            color: #fff;
            padding: 5px 5px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        nav {
            display: flex;
            justify-content: space-between;
            text-align: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            letter-spacing: 2px;
            user-select: none;
        }
        .menu {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        .menu a {
            color: #fff;
            font-weight: 600;
            padding: 10px 5px;
            display: block;
        }
        .menu a.active,
        .menu a:hover {
            background-color: #0056b3;
            border-radius: 4px;
        }
        /* Hamburger Menu */
        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }
        .menu-toggle span {
            width: 25px;
            height: 3px;
            background: #fff;
            margin: 4px 0;
            border-radius: 2px;
            transition: 0.3s;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(6, 6, 6, 0.85), rgba(222, 226, 232, 0.85)), url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            color: #fff;
            height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
            user-select: none;
        }
        .hero p {
            font-size: 1.25rem;
            max-width: 700px;
            user-select: none;
        }
        /* Section Styling */
        section {
            padding: 40px 15px;
            background: #fff;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgb(0 0 0 / 0.05);
        }
        h2 {
            margin-top: 0;
            color: #0d6efd;
            text-align: center;
            margin-bottom: 1rem;
            user-select: none;
        }
        .text-center {
            text-align: center;
        }
        /* Footer */
        footer {
            background-color: #0d6efd;
            color: #fff;
            text-align: center;
            padding: 15px 10px;
            font-size: 0.9rem;
            user-select: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .menu {
                display: none;
                width: 100%;
                flex-direction: column;
                background-color: #0d6efd;
                border-radius: 5px;
                margin-top: 10px;
            }
            .menu.show {
                display: flex;
            }
            .menu a {
                padding: 12px;
                border-top: 1px solid rgba(255, 255, 255, 0.2);
            }
            .menu-toggle {
                display: flex;
            }
        }

        /* Courses grid */
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
            gap: 20px;
        }
        .course-card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgb(0 0 0 / 0.1);
            transition: transform 0.3s ease;
        }
        .course-card:hover {
            transform: translateY(-5px);
        }
        .course-card h3 {
            margin-top: 0;
            color: #0d6efd;
            user-select: none;
        }
        /* Faculty grid */
        .faculty-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(180px,1fr));
            gap: 15px;
            justify-items: center;
        }
        .faculty-card {
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
            text-align: center;
            transition: box-shadow 0.3s ease;
        }
        .faculty-card:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .faculty-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
            user-select: none;
        }
        .faculty-name {
            font-weight: 600;
            margin: 0.2rem 0 0.1rem;
            user-select: none;
        }
        .faculty-title {
            font-size: 0.9rem;
            color: #555;
            user-select: none;
        }

        /* Form Styling */
        form {
            max-width: 600px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            user-select: none;
        }
        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 15px;
            border: 1.8px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            resize: vertical;
            font-family: inherit;
        }
        input[type="submit"] {
            background-color: #0d6efd;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.3s ease;
            user-select: none;
        }
        input[type="submit"]:hover {
            background-color: #0a58ca;
        }
    </style>
    
</head>
<body>
 <header>
<header class="site-header">
  <div class="container">
    <nav>
      <div class="logo">
        <h1>SAMPURNA COLLEGE OF IT & MANAGEMENT</h1>
        <h3>Approved by AICTE</h3>
        <h4>Affiliated to Patliputra University</h4>
      </div>
      <div class="menu-toggle" id="menu-toggle" aria-label="Toggle menu" role="button" tabindex="0">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
  </div>
</header>


            <div class="menu" id="menu">
                <a href="index.php" <?php if(basename($_SERVER['PHP_SELF'])=='index.php'){echo 'class="active"';}?>>Home</a>
                <a href="about.php" <?php if(basename($_SERVER['PHP_SELF'])=='about.php'){echo 'class="active"';}?>>About</a>
                <a href="courses.php" <?php if(basename($_SERVER['PHP_SELF'])=='courses.php'){echo 'class="active"';}?>>Courses</a>
                <a href="faculty.php" <?php if(basename($_SERVER['PHP_SELF'])=='faculty.php'){echo 'class="active"';}?>>Faculty</a>
                <a href="admission.php" <?php if(basename($_SERVER['PHP_SELF'])=='admission.php'){echo 'class="active"';}?>>Admission</a>
                <a href="contact.php" <?php if(basename($_SERVER['PHP_SELF'])=='contact.php'){echo 'class="active"';}?>>Contact</a>
            </div> 
       
</body>
</html>




<section class="hero">
    <h1>WELCOME TO SAMPURNA COLLEGE OF IT & MANAGEMENT </h1>
    
</section>



<section>
    <div class="container">
        <h2>Why Choose Us?</h2>
        <ul style="max-width: 700px; margin: auto; list-style-type: disc; padding-left: 20px;">
            <li>Experienced Faculty with Industry Background</li>
            <li>Modern Infrastructure and Facilities</li>
            <li>Diverse Courses and Programs</li>
            <li>Strong Placement Support</li>
            <li>Vibrant Campus Life</li>
        </ul>
    </div>
</section>


</body>
</html>
</content>
</create_file>


<header>
    <div class="container">
        <nav>
           
        </nav>
    </div>
</header>


<div class="container">
    <h2>Enquiry Form</h2>
    <form action="admission.php" method="post">
        <label for="fullname">Full Name *</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required />

        <label for="email">Email Address *</label>
        <input type="email" id="email" name="email" placeholder="example@domain.com" required />

        <label for="phone">Phone Number *</label>
        <input type="text" id="phone" name="phone" placeholder="Enter your 10-digit phone number" required />

        <label for="course">Select Course *</label>
        <select id="course" name="course" required>
            <option value="">-- Select a Course --</option>
            <option value="BCA">Bachelor of Computer Application</option>
            <option value="BBA">Bachelor of Business Administration</option>
        </select>

        <label for="message">Additional Information</label>
        <textarea id="message" name="message" rows="4" placeholder="Write any questions or details here..."></textarea>

        <input type="submit" value="Submit Application" />
    </form>

</section>

<?php include 'partials/footer.php'; ?>
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    menuToggle.addEventListener('click', () => {
        menu.classList.toggle('show');
    });
    menuToggle.addEventListener('keydown', (e) => {
        if(e.key === 'Enter' || e.key === ' ') {
            menu.classList.toggle('show');
        }
    });
</script>
</body>
</html>
</content>
</create_file>

<create_file>
<path>college_website/contact.php</path>
<content>
<?php include 'partials/header.php'; ?>
<body>
<header>
    <div class="container">
        <nav>
            
        </nav>
    </div>
</header>

<section class="hero" style="background-image: linear-gradient(rgba(13,110,253,0.85), rgba(13,110,253,0.85)), url('https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=1470&q=80');">
    <h1>Contact Us</h1>
    <p>We'd love to hear from you</p>
</section>

<section>
    <div class="container">
        <h2>Get in Touch</h2>
        <form action="contact.php" method="post">
            <label for="name">Name *</label>
            <input type="text" id="name" name="name" required />

            <label for="email">Email *</label>
            <input type="email" id="email" name="email" required />

            <label for="subject">Subject *</label>
            <input type="text" id="subject" name="subject" required />

            <label for="message">Message *</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <input type="submit" value="Send Message" />
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['email']));
            $subject = htmlspecialchars(trim($_POST['subject']));
            $message = htmlspecialchars(trim($_POST['message']));

            // Normally would send email or save message to DB
            echo '<p style="text-align:center; color: green; font-weight: 600; margin-top: 15px;">Thank you, ' . $name . '. Your message has been received.</p>';
        }
        ?>
    </div>
</section>


</body>
</html>
</content>
</create_file>


