<?php
session_start();
$info = '';
if (isset($_REQUEST['success']) ) {
    if ($_REQUEST['success'] == 1) {
        $info = '<h5 class="fw-medium mb-0 df-title-1 text-main">Booking Success </h5>
                    <p class="text-secondary qc-desc my-1"> Thank You! <br><br> We\'ve received your
                        request and reserved a slot for your journey. 🎉 <br> Our team is already
                        reviewing your details to provide the perfect quote tailored to your needs. <br>
                        We appreciate you choosing us and can\'t wait to help make your trip seamless!
                        You\'ll hear from us shortly. <br><br> 🚍 Your journey, our priority!<br>The Viacoach Team
                    </p>';
    } else {
        $info = '<h5 class="fw-medium mb-0 df-title-1 text-main">Provisional Booking Failed! </h5>
                    <p class="text-secondary qc-desc my-1"> Booking cannot be made at the moment, feel free to <a href="tel:+44208 050 0110">contact us</a>.<br>The Viacoach Team
                    </p>';
    }
}else{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VIACOACH</title>
        <link rel="shortcut icon" href="./assets/img/square-icon.png" type="image/x-icon">
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./assets/css/slick.css">
        <link rel="stylesheet" href="./assets/css/select2.min.css">
        <link rel="stylesheet" href="./assets/css/jquery-ui.css">
        <link rel="stylesheet" href="./assets/css/style.css?v=11">
    </head>

    <body>
        <div class="py-md-3 py-2 px-sm-0 px-2 position-relative">
            <header class="header-2">
                <nav class="navbar navbar-expand-lg py-0 navbar-light bg-light">
                    <div class="container py-3 my-0">
                        <div class="d-flex align-items-center gap-sm-3 gap-1">
                            <span class="me-1 menu-open cursor-pointer" onclick="openSidebar()">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_3_1383)">
                                        <path d="M20 6H4" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M17 12H4" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M14 18H4" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3_1383">
                                            <rect width="24" height="24" fill="white"
                                                transform="matrix(-1 0 0 1 24 0)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <a class="navbar-brand py-0" href="./index.php">
                                <img src="./assets/img/logo-light.png" alt="Logo" class="d-inline-block align-text-top">
                            </a>
                        </div>
                        <!-- Logo -->
                        <!-- Navigation items -->
                        <div class="ms-auto">
                            <a href="tel:+44208 050 0110"
                                class="d-flex align-items-center text-white gap-2 fw-bold nav-phone">
                                <span>
                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.7096" cy="16.2917" r="16.2917" fill="#0EE1E8" />
                                        <g clip-path="url(#clip0_734_5799)">
                                            <path
                                                d="M12.6332 10.3889H15.9388L17.5916 14.5209L15.5256 15.7604C16.4106 17.555 17.863 19.0074 19.6576 19.8924L20.8971 17.8264L25.0291 19.4792V22.7847C25.0291 23.2231 24.8549 23.6435 24.545 23.9534C24.235 24.2634 23.8146 24.4375 23.3763 24.4375C20.1528 24.2416 17.1124 22.8728 14.8288 20.5892C12.5452 18.3056 11.1764 15.2652 10.9805 12.0417C10.9805 11.6033 11.1546 11.183 11.4646 10.873C11.7745 10.563 12.1949 10.3889 12.6332 10.3889Z"
                                                stroke="#171717" stroke-width="1.41667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_734_5799">
                                                <rect width="19.8333" height="19.8333" fill="white"
                                                    transform="translate(8.5 7.08325)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="lh-1 ms-1 d-sm-block d-none">0208 050 0110</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        <main class="">
            <section class="booking-sec py-lg-5 py-4">
                <div class="container my-2 py-1">
                    <div class="row align-items-center flex-lg-row flex-column-reverse gap-lg-0 gap-4">
                        <div class="col-lg-8">
                            <div class="details-form pe-xxl-4">
                                <div class="d-flex flex-column gap-3">
                                    <?php echo $info; ?>
                                    <div>
                                        <a href="./index.php" class="btn hff-submit-btn df-btn btn-ferozi fw-bold">Go
                                            home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="details-card">
                                <div class="d-flex flex-column dc-flex">
                                    <div class="d-flex flex-column gap-10px">
                                        <div class="d-flex flex-column gap-1">
                                            <div class="d-flex align-items-center dc-row">
                                                <span class="dc-dark figtree fw-semibold">Name</span>
                                                <span class="dc-light to-detail"><?php echo $name = (isset($_SESSION['name'])) ? $_SESSION['name'] : ''; ?></span>
                                            </div>
                                            <div class="d-flex align-items-center dc-row">
                                                <span class="dc-dark figtree fw-semibold">Email</span>
                                                <span class="dc-light not-detail"><?php echo $email = (isset($_SESSION['email'])) ? $_SESSION['email'] : ''; ?></span>
                                            </div>
                                            <div class="d-flex align-items-center dc-row">
                                                <span class="dc-dark figtree fw-semibold">Phone number</span>
                                                <span class="dc-light from-detail"><?php echo $phone = (isset($_SESSION['phone'])) ? $_SESSION['phone'] : ''; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="footer-top">
                <div class="container">
                    <div class="d-flex flex-column mb-5">
                        <div
                            class="d-flex align-items-xl-center align-items-start justify-content-between flex-wrap mb-2 pb-1 flex-xl-row flex-column gap-4">
                            <h2 class="d-flex mb-0 flex-column gap-2 sec-title mb-xl-0 mb-md-3 mb-4">
                                <span class="lh-1 st-1 fw-medium">Deal - Offer - Coupon </span>
                                <span class="lh-1 st-2 fst-2 position-relative fst-italic ins-serif">
                                    <span class="lh-1 position-relative z-1">Follow us to get all</span>
                                    <img src="./assets/img/fst-icon.svg" alt="Icon" class="fst-icon">
                                </span>
                            </h2>
                            <div
                                class="social-icons flex-sm-nowrap justify-content-sm-start justify-content-center flex-wrap ms-md-auto mx-auto">
                                <a href="#">
                                    <img src="./assets/img/insta-icon.svg" alt="Icon" class="social-icon">
                                </a>
                                <a href="#">
                                    <img src="./assets/img/pinterest-icon.svg" alt="Icon" class="social-icon">
                                </a>
                                <a href="#">
                                    <img src="./assets/img/facebook-icon.svg" alt="Icon" class="social-icon">
                                </a>
                                <a href="#">
                                    <img src="./assets/img/linkedin-icon.svg" alt="Icon" class="social-icon">
                                </a>
                                <a href="#">
                                    <img src="./assets/img/youtube-icon.svg" alt="Icon" class="social-icon">
                                </a>
                                <a href="#">
                                    <img src="./assets/img/x-icon.svg" alt="Icon" class="social-icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-slider">
                    <div class="fs-item">
                        <a href="#" class="fsi-link">
                            <img src="./assets/img/insta-icon.svg" alt="Icon" class="fs-icon">
                        </a>
                        <img src="./assets/img/fs-1.png" alt="IMG" class="fs-img">
                    </div>
                    <div class="fs-item">
                        <a href="#" class="fsi-link">
                            <img src="./assets/img/insta-icon.svg" alt="Icon" class="fs-icon">
                        </a>
                        <img src="./assets/img/fs-2.png" alt="IMG" class="fs-img">
                    </div>
                    <div class="fs-item">
                        <a href="#" class="fsi-link">
                            <img src="./assets/img/insta-icon.svg" alt="Icon" class="fs-icon">
                        </a>
                        <img src="./assets/img/fs-3.png" alt="IMG" class="fs-img">
                    </div>
                    <div class="fs-item">
                        <a href="#" class="fsi-link">
                            <img src="./assets/img/insta-icon.svg" alt="Icon" class="fs-icon">
                        </a>
                        <img src="./assets/img/fs-4.png" alt="IMG" class="fs-img">
                    </div>
                    <div class="fs-item">
                        <a href="#" class="fsi-link">
                            <img src="./assets/img/insta-icon.svg" alt="Icon" class="fs-icon">
                        </a>
                        <img src="./assets/img/fs-1.png" alt="IMG" class="fs-img">
                    </div>
                </div>
            </section>
        </main>
        <?php
        include './footer.php';
        ?>
    </body>

</html>