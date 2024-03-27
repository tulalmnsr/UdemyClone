
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        .quote-box {
            padding: 30px;
            position: relative; /* For positioning the book icon */
            overflow: hidden; /* To contain the book icon */
        }


        .quote-content {
            margin-bottom: 20px;
        }

        .quote-content blockquote {
            font-size: 18px;
            font-style: italic;
            color: #555; /* Dark grey color for quote text */
        }

        .contact-info-list {
            list-style-type: none;
            padding: 0;
        }

        .contact-info-list li {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .contact-info-list li i {
            margin-right: 10px;
            color: #555; /* Dark grey color for icon */
        }
    </style>
</head>
<body>
<section class="category-header-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('home'); ?>"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">
                            <a href="#">
                                <?php echo $page_title; ?>
                            </a>
                        </li>
                    </ol>
                </nav>
                <h1 class="category-name">
                    <?php echo $page_title; ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="category-course-list-area">
    <div class="container">
        <div class="row">
            <div class="col" style="padding: 35px;">
                <div class="about-us-content" style="font-size: 18px; font-family: Arial, sans-serif;">
                    <h1 style="font-size: 32px; font-weight: bold;">Welcome to Our Academy</h1><br>
                    <p style="font-size: 18px;">At Our Academy, we're dedicated to revolutionizing education through innovative online learning experiences. Our platform is designed to empower learners of all backgrounds to reach their full potential.</p>
                    <p style="font-size: 18px;">With a diverse range of courses taught by industry experts, we provide a dynamic and interactive learning environment. Whether you're looking to acquire new skills, advance your career, or pursue personal interests, Academia offers the resources and support you need to succeed.</p>
                    <p style="font-size: 18px;">Join our global community of learners today and embark on a journey of discovery, growth, and endless possibilities.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-info-section">
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <div class="quote-box">
                <div class="quote-content">
                    <blockquote>
                        <p>"Education is the passport to the future, for tomorrow belongs to those who prepare for it today." - Malcolm X</p>
                    </blockquote>
                </div>
                <div class="contact-info">
                    <ul class="contact-info-list">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Street Name, City, Country</li>
                        <li><i class="fas fa-phone"></i> +1234567890</li>
                        <li><i class="fas fa-envelope"></i> info@example.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>