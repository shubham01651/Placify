<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Placement Portal</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@300;400;500;600;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Variables and Main CSS -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/_all-skins.min.css">
    <link rel="stylesheet" href="assets/css/chat.css">
</head>

<body>

    <?php include 'php/header.php'; ?>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-header">
                <h2><strong>Contact Us</strong></h2>
                <p>IIIT Allahabad</p>
            </div>

        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114395.16165309286!2d81.74662074318627!3d25.45596940752908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3985327d0760c7e3%3A0x81bcd5d98d4a3a4!2sIndian%20Institute%20of%20Information%20Technology%2C%20Allahabad!5e0!3m2!1sen!2sin!4v1717083644724!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container">
            <div class="row gy-5 gx-lg-5">
                <div class="col-lg-4">
                    <div class="info">
                        <h3>Get in touch</h3>
                        <p>Placement Cell</p>

                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>Indian Institute of Information Technology, Devghat, Jhalwa, Prayagraj, Uttar Pradesh 211015</p>
                            </div>
                        </div>

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>iit2023@gmail.com</p>
                            </div>
                        </div>

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>1234567890</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'php/footer.php'; ?>
</body>

</html>
