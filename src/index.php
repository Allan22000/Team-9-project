<!-- Contact Us PHP begings -->

<!-- Prashant created name and email functionality -->
<!-- Reng created message functionality -->
<!-- Database connection and closing was created jointly -->

<?php
// connecting to the database
include 'db.php';

// checking if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
// inserting form data into the table
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
        echo 'Message sent successfully';
    } else {
        echo 'Error inserting data: ' . mysqli_error($conn);
    }
}

// closing the database connection
// mysqli_close($conn);

// update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "UPDATE contact SET name='$name', email='$email', message='$message' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo 'Data updated successfully';
    } else {
        echo 'Error updating data: ' . mysqli_error($conn);
    }
}

// delete
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM contact WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo 'Data deleted successfully';
    } else {
        echo 'Error deleting data: ' . mysqli_error($conn);
    }
}
// closing the database connection
mysqli_close($conn);
?>
<!-- Contact us PHP ends -->

<!-- HTML begins -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>RealMadrid Trophies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <a href="#"><i class="ion-social-facebook" data-icon="ion-social-facebook"></i></a>
    <a href="#"><i class="icon iconify" data-icon="ion-social-twitter"></i></a>
    <a href="#"><i class="icon iconify" data-icon="ion-social-snapchat"></i></a>
    <a href="#"><i class="icon iconify" data-icon="ion-social-instagram"></i></a>
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" style="background-color: #282d32">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#home" style="color: #fff">RealMadrid Trophies</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0" style="color: #fff">
                    <li class="nav-item">
                        <a class="nav-link" style="color: #fff" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #fff" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #fff" href="#portfolio">Trophies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #fff" href="/timeline.php">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #fff" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" id="home">
        <div class="container px-4 px-lg-5 h-100"></div>
    </header>
    <section class="page-section" id="about">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Founding Real Madrid</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-8 col-md-8 text-center">
                    <div class="mt-5" style="text-align: justify">
                        <p class="text-muted mb-0">
                            Real Madrid Club de Fútbol, commonly referred to as Real Madrid
                            or simply as Real is a professional football club based in
                            Madrid, Spain.
                        </p>
                        <p class="text-muted mb-0">
                            <br> Real Madrid officially adopted its name in 1920, and has since
                            played its home matches in the Santiago Bernabéu Stadium.
                        </p>
                        <p class="text-muted mb-0">
                            <br> Real Madrid has been one of the most successful clubs in Europe
                            and in the world, having won a record 34 La Liga titles, 19 Copa
                            del Rey, 13 European Cup/UEFA Champions League titles, and 2
                            UEFA Cups.
                        </p>
                        <p class="text-muted mb-0">
                            <br> The club has also won several other trophies, including 4 UEFA
                            Super Cups and 7 FIFA Club World Cups.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="mt-5">
                        <p class="text-muted mb-0">
                            <img src="assets/logo.png" style="width: 300px" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="portfolio">
        <div class="container-fluid p-3">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6 p-2">
                    <a class="portfolio-box" href="assets/img/trophies/fullsize/7.jpeg"
                        title="The best club of the 20th century Fifa trophy">
                        <img class="img-fluid" src="assets/img/trophies/fullsize/7.jpeg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50"></div>
                            <div class="project-name">The best club of the 20th century Fifa trophy</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-2">
                    <a class="portfolio-box" href="assets/img/trophies/fullsize/8.jpeg"
                        title="18 Regional Championship">
                        <img class="img-fluid" src="assets/img/trophies/fullsize/8.jpeg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">18</div>
                            <div class="project-name">Regional Championship</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-2">
                    <a class="portfolio-box" href="assets/img/trophies/fullsize/1.jpeg" title="2 Uefa Cups">
                        <img class="img-fluid" src="assets/img/trophies/thumbnails/1.jpeg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">2</div>
                            <div class="project-name">Uefa Cups</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-2">
                    <a class="portfolio-box" href="assets/img/trophies/fullsize/10.jpeg" title="5 European Super Cups">
                        <img class="img-fluid" src="assets/img/trophies/fullsize/10.jpeg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">5</div>
                            <div class="project-name">European Super Cups</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-2">
                    <a class="portfolio-box" href="assets/img/trophies/fullsize/2.jpeg" title="14 European Cups">
                        <img class="img-fluid" src="assets/img/trophies/thumbnails/2.jpeg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">14</div>
                            <div class="project-name">European Cups</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-2">
                    <a class="portfolio-box" href="assets/img/trophies/fullsize/3.jpeg" title="5 Mancomunados Trophies">
                        <img class="img-fluid" src="assets/img/trophies/thumbnails/3.jpeg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">5</div>
                            <div class="project-name">Mancomunados Trophies</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-2">
                    <a class="portfolio-box" href="assets/img/trophies/fullsize/4.jpeg" title="35 National Leagues">
                        <img class="img-fluid" src="assets/img/trophies/thumbnails/4.jpeg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">35</div>
                            <div class="project-name">National Leagues</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-2">
                    <a class="portfolio-box" href="assets/img/trophies/fullsize/5.jpeg" title="19 Spanish Cups">
                        <img class="img-fluid" src="assets/img/trophies/thumbnails/5.jpeg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">19</div>
                            <div class="project-name">Spanish Cups</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-2">
                    <a class="portfolio-box" href="assets/img/trophies/fullsize/6.jpeg" title="12 Spanish Super Cups">
                        <img class="img-fluid" src="assets/img/trophies/thumbnails/6.jpeg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">12</div>
                            <div class="project-name">Spanish Super Cups</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-2">
                    <a class="portfolio-box" href="assets/img/trophies/fullsize/11.jpeg" title="7 Fifa Club World Cups">
                        <img class="img-fluid" src="assets/img/trophies/fullsize/11.jpeg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">7</div>
                            <div class="project-name">Fifa Club World Cups</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-2">
                    <a class="portfolio-box" href="assets/img/trophies/fullsize/12.jpeg" title="2 Small World Cups">
                        <img class="img-fluid" src="assets/img/trophies/fullsize/12.jpeg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">2</div>
                            <div class="project-name">Small World Cups</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-2">
                    <a class="portfolio-box" href="assets/img/trophies/fullsize/13.jpeg" title="1 League Cup">
                        <img class="img-fluid" src="assets/img/trophies/fullsize/13.jpeg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">1</div>
                            <div class="project-name">League Cup</div>
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact us begins -->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Let's Get In Touch!</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">
                        Send us a messages and we will get back to you as soon as
                        possible!
                    </p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <form id="contactForm" method="post" action="">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="name" id="name" type="text"
                                placeholder="Enter your name..." required />
                            <label for="name">Your full name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" id="email" type="email"
                                placeholder="name@example.com" required />
                            <label for="email">Your email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message" type="text"
                                placeholder="Enter your message here..." style="height: 10rem" maxlength="2000"
                                required></textarea>
                            <label for="message">Your message</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-xl" type="submit" name="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <!-- Contact us ends -->

        <div class="container-fluid pb-0 mb-0 justify-content-center text-light ">

            <div class="row my-5 justify-content-center py-5">
                <div class="col-11">
                    <div class="row">
                        <div class="col-xl-8 col-md-4 col-sm-4 col-12   my-auto mx-auto a">
                            <h3 class="text-muted mb-md-0 mb-5 bold-text">RealMadrid Trophies.</h3>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                            <h6 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h6>
                            <ul class="list-unstyled">
                                <li>
                                <li><a style="color: #627482  !important" href="#home">Home</a></li>
                                <li><a style="color: #627482  !important" href="#about">About</a></li>
                                <li><a style="color: #627482  !important" href="#portfolio">Trophies</a></li>
                                <li><a style="color: #627482  !important" href="/timeline.php">Timeline</a></li>
                                <li><a style="color: #627482  !important" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                            <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>ADDRESS</b></h6>
                            <li class="list-unstyled"><a style="color: #627482  !important"
                                    href="https://www.google.com/maps/place/Rauhankatu+22,+00170+Helsinki/@60.1713957,24.9489355,17z/data=!3m1!4b1!4m5!3m4!1s0x46920bce212f44e9:0x49e18b735b3e3e9c!8m2!3d60.171393!4d24.9511242"
                                    target="_blank">RAUHANKATU
                                    22 <br> 00170 HELSINKI <br> FINLAND </a></li>
                        </div>
                    </div>
                    <div class="row">
                        <div
                            class="col-xl-8 col-md-4 col-sm-4 col-auto  my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                            <p class="social text-muted mb-0 pb-0 bold-text"> <span class="mx-2"><i
                                        class="fa fa-facebook" aria-hidden="true"></i></span> <span class="mx-2"><i
                                        class="fa fa-linkedin-square" aria-hidden="true"></i></span> <span
                                    class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span> <span
                                    class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span> </p><small
                                class="rights"><span>&#174;</span> RealMadrid Trophies All Rights Reserved.</small>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
                            <h6 class="mt-55 mt-2 text-muted bold-text"><b>Email</b></h6><small> <span><i
                                        class="fa fa-envelope" aria-hidden="true"></i></span>
                                madrid@trophies.com</small>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3   ">
                            <h6 class="text-muted bold-text"><b>Phone</b></h6><small><span><i class="fa fa-envelope"
                                        aria-hidden="true"></i></span> +358 40 765 9927</small>
                        </div>
                    </div>
                </div>
            </div>
            <section>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <script src="js/scripts.js"></script>
</body>

</html>

<!-- HTML ends -->