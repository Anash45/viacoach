<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input data
    $outbound_pickup = htmlspecialchars(trim($_POST['outbound_pickup'] ?? 'No'));
    $outbound_pickup_location = htmlspecialchars(trim($_POST['outbound_pickup_location'] ?? ''));
    $return_pickup = htmlspecialchars(trim($_POST['return_pickup'] ?? 'No'));
    $return_pickup_location = htmlspecialchars(trim($_POST['return_pickup_location'] ?? ''));
    $small_luggage = intval($_POST['small_luggage'] ?? 0);
    $large_luggage = intval($_POST['large_luggage'] ?? 0);
    $vehicle_type = htmlspecialchars(trim($_POST['vehicle_type'] ?? ''));
    $additional = htmlspecialchars(trim($_POST['additional'] ?? ''));
    $first_name = htmlspecialchars(trim($_POST['first_name'] ?? ''));
    $last_name = htmlspecialchars(trim($_POST['last_name'] ?? ''));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone_number = htmlspecialchars(trim($_POST['phone_number'] ?? ''));

    // Prepare email
    $to = "futuretest45@gmail.com"; // Replace with the recipient's email
    $subject = "Viacoach - New Booking Request";
    $headers = "From: Viacoach webmaster - <webmaster@travelviacoach.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Email body in HTML format
    $message = "
    <html>
        <head>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    margin: 0;
                    padding: 0;
                }
                .container {
                    max-width: 600px;
                    margin: 20px auto;
                    padding: 20px;
                    background-color: #ffffff;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }
                .header {
                    background-color: rgb(0, 31, 63);
                    padding: 20px;
                    text-align: center;
                    color: #ffffff;
                    border-radius: 8px 8px 0 0;
                }
                .content {
                    padding: 20px;
                    color: #333333;
                }
                .footer {
                    text-align: center;
                    font-size: 12px;
                    margin-top: 10px;
                    color: #777777;
                }
                .button {
                    display: inline-block;
                    padding: 10px 20px;
                    margin-top: 10px;
                    background-color: #ec4621;
                    color: white;
                    text-decoration: none;
                    border-radius: 5px;
                    font-weight: bold;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Viacoach</h2>
                </div>
                <div class='content'>
                    <p><strong>Name:</strong> {$first_name} {$last_name}</p>
                    <p><strong>Email:</strong> {$email}</p>
                    <p><strong>Phone:</strong> {$phone_number}</p>
                    <p><strong>Outbound Pickup:</strong> {$outbound_pickup} - {$outbound_pickup_location}</p>
                    <p><strong>Return Pickup:</strong> {$return_pickup} - {$return_pickup_location}</p>
                    <p><strong>Small Luggage:</strong> {$small_luggage}</p>
                    <p><strong>Large Luggage:</strong> {$large_luggage}</p>
                    <p><strong>Vehicle Type:</strong> {$vehicle_type}</p>
                    <p><strong>Additional Info:</strong> {$additional}</p>
                    <a href='mailto:{$email}' class='button'>Reply to {$first_name}</a>
                </div>
                <div class='footer'>
                    <p>&copy; Viacoach. All rights reserved.</p>
                </div>
            </div>
        </body>
    </html>";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        $info = '<h2 class="fw-medium text-main mb-0 bs-title">Booking Success</h2>
                        <p class="mb-0 bs-text">Check your email for booking details</p>';
    } else {
        $info = '<h2 class="fw-medium text-main mb-0 bs-title">Booking Failed</h2>
                        <p class="mb-0 bs-text">Contact the administrator.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VIACOACH</title>
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./assets/css/slick.css">
        <link rel="stylesheet" href="./assets/css/select2.min.css">
        <link rel="stylesheet" href="./assets/css/jquery-ui.css">
        <link rel="stylesheet" href="./assets/css/style.css?v=2">
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
                            <button class="btn btn-dark btn-navbar">
                                <div class="bn-inner">
                                    <div class="d-flex align-items-center gap-3">
                                        <span>Login</span>
                                        <span class="ms-1">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.495 8.49497C15.7683 8.22161 15.7683 7.77839 15.495 7.50502L11.0402 3.05025C10.7668 2.77688 10.3236 2.77688 10.0503 3.05025C9.77689 3.32362 9.77689 3.76683 10.0503 4.0402L14.0101 8L10.0503 11.9598C9.77689 12.2332 9.77689 12.6764 10.0503 12.9497C10.3236 13.2231 10.7668 13.2231 11.0402 12.9497L15.495 8.49497ZM1 8.7L15 8.7L15 7.3L1 7.3L1 8.7Z"
                                                    fill="#191919" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        <main class="main-1">
            <section class="booking-sec">
                <div class="d-flex flex-column gap-4 text-center align-items-center">
                    <div class="d-flex flex-column align-items-center">
                        <?php echo $info; ?>
                    </div>
                    <div>
                        <a href="./index.php" class="btn hff-submit-btn df-btn btn-ferozi fw-bold">Go home</a>
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
        <footer class="py-4 px-4">
            <div class="footer-container py-3">
                <div class="d-flex flex-column gap-4">
                    <div class="foot-top mb-3">
                        <div class="d-flex gap-5 justify-content-between flex-wrap">
                            <div class="d-flex flex-column gap-5 foot-sec-1">
                                <a href="./index.php">
                                    <img src="./assets/img/logo-dark.png" alt="Logo Dark" class="foot-logo" height="76">
                                </a>
                                <p class="mb-0 foot-desc"> your go-to platform for planning and booking unforgettable
                                    travel experiences. Whether you're dreaming of a relaxing beach vacation, an
                                    adventurous mountain trek, or a vibrant city escape, we make it easy for you to find
                                    and book the perfect trip. </p>
                            </div>
                            <div class="d-flex fs-links flex-column gap-2">
                                <span class="fw-medium text-white">About Us</span>
                                <a href="#" class="fs-link">About Us</a>
                                <a href="#" class="fs-link">Download</a>
                                <a href="#" class="fs-link">Blog</a>
                            </div>
                            <div class="d-flex fs-links flex-column gap-2">
                                <span class="fw-medium text-white">Support</span>
                                <a href="#" class="fs-link">Contact Us</a>
                                <a href="#" class="fs-link">FAQ</a>
                            </div>
                            <div class="d-flex fs-links flex-column gap-2">
                                <span class="fw-medium text-white">Get Update</span>
                                <div class="d-flex flex-wrap gap-4">
                                    <span class="py-2 pe-2 ps-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_8_2085)">
                                                <path
                                                    d="M24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 17.9895 4.3882 22.954 10.125 23.8542V15.4688H7.07812V12H10.125V9.35625C10.125 6.34875 11.9166 4.6875 14.6576 4.6875C15.9701 4.6875 17.3438 4.92188 17.3438 4.92188V7.875H15.8306C14.34 7.875 13.875 8.80008 13.875 9.75V12H17.2031L16.6711 15.4688H13.875V23.8542C19.6118 22.954 24 17.9895 24 12Z"
                                                    fill="#E4E7EC" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_8_2085">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="py-2 pe-2 ps-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.88806 10.068C9.20406 10.068 8.66406 10.668 8.66406 11.4C8.66406 12.132 9.21606 12.732 9.88806 12.732C10.5721 12.732 11.1121 12.132 11.1121 11.4C11.1241 10.668 10.5721 10.068 9.88806 10.068ZM14.2681 10.068C13.5841 10.068 13.0441 10.668 13.0441 11.4C13.0441 12.132 13.5961 12.732 14.2681 12.732C14.9521 12.732 15.4921 12.132 15.4921 11.4C15.4921 10.668 14.9521 10.068 14.2681 10.068Z"
                                                fill="#E4E7EC" />
                                            <path
                                                d="M20.1005 0H4.02055C2.66455 0 1.56055 1.104 1.56055 2.472V18.696C1.56055 20.064 2.66455 21.168 4.02055 21.168H17.6285L16.9925 18.948L18.5285 20.376L19.9805 21.72L22.5605 24V2.472C22.5605 1.104 21.4565 0 20.1005 0ZM15.4685 15.672C15.4685 15.672 15.0365 15.156 14.6765 14.7C16.2485 14.256 16.8485 13.272 16.8485 13.272C16.3565 13.596 15.8885 13.824 15.4685 13.98C14.8685 14.232 14.2925 14.4 13.7285 14.496C12.5765 14.712 11.5205 14.652 10.6205 14.484C9.93655 14.352 9.34855 14.16 8.85655 13.968C8.58055 13.86 8.28055 13.728 7.98055 13.56C7.94455 13.536 7.90855 13.524 7.87255 13.5C7.84855 13.488 7.83655 13.476 7.82455 13.464C7.60855 13.344 7.48855 13.26 7.48855 13.26C7.48855 13.26 8.06455 14.22 9.58855 14.676C9.22855 15.132 8.78455 15.672 8.78455 15.672C6.13255 15.588 5.12455 13.848 5.12455 13.848C5.12455 9.984 6.85255 6.852 6.85255 6.852C8.58055 5.556 10.2245 5.592 10.2245 5.592L10.3445 5.736C8.18455 6.36 7.18855 7.308 7.18855 7.308C7.18855 7.308 7.45255 7.164 7.89655 6.96C9.18055 6.396 10.2005 6.24 10.6205 6.204C10.6925 6.192 10.7525 6.18 10.8245 6.18C11.5565 6.084 12.3845 6.06 13.2485 6.156C14.3885 6.288 15.6125 6.624 16.8605 7.308C16.8605 7.308 15.9125 6.408 13.8725 5.784L14.0405 5.592C14.0405 5.592 15.6845 5.556 17.4125 6.852C17.4125 6.852 19.1405 9.984 19.1405 13.848C19.1405 13.848 18.1205 15.588 15.4685 15.672Z"
                                                fill="#E4E7EC" />
                                        </svg>
                                    </span>
                                    <span class="py-2 pe-2 ps-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_8_2089)">
                                                <path
                                                    d="M12 2.16094C15.2063 2.16094 15.5859 2.175 16.8469 2.23125C18.0188 2.28281 18.6516 2.47969 19.0734 2.64375C19.6313 2.85938 20.0344 3.12188 20.4516 3.53906C20.8734 3.96094 21.1313 4.35938 21.3469 4.91719C21.5109 5.33906 21.7078 5.97656 21.7594 7.14375C21.8156 8.40937 21.8297 8.78906 21.8297 11.9906C21.8297 15.1969 21.8156 15.5766 21.7594 16.8375C21.7078 18.0094 21.5109 18.6422 21.3469 19.0641C21.1313 19.6219 20.8687 20.025 20.4516 20.4422C20.0297 20.8641 19.6313 21.1219 19.0734 21.3375C18.6516 21.5016 18.0141 21.6984 16.8469 21.75C15.5813 21.8062 15.2016 21.8203 12 21.8203C8.79375 21.8203 8.41406 21.8062 7.15313 21.75C5.98125 21.6984 5.34844 21.5016 4.92656 21.3375C4.36875 21.1219 3.96563 20.8594 3.54844 20.4422C3.12656 20.0203 2.86875 19.6219 2.65313 19.0641C2.48906 18.6422 2.29219 18.0047 2.24063 16.8375C2.18438 15.5719 2.17031 15.1922 2.17031 11.9906C2.17031 8.78438 2.18438 8.40469 2.24063 7.14375C2.29219 5.97187 2.48906 5.33906 2.65313 4.91719C2.86875 4.35938 3.13125 3.95625 3.54844 3.53906C3.97031 3.11719 4.36875 2.85938 4.92656 2.64375C5.34844 2.47969 5.98594 2.28281 7.15313 2.23125C8.41406 2.175 8.79375 2.16094 12 2.16094ZM12 0C8.74219 0 8.33438 0.0140625 7.05469 0.0703125C5.77969 0.126563 4.90313 0.332812 4.14375 0.628125C3.35156 0.9375 2.68125 1.34531 2.01563 2.01562C1.34531 2.68125 0.9375 3.35156 0.628125 4.13906C0.332812 4.90313 0.126563 5.775 0.0703125 7.05C0.0140625 8.33437 0 8.74219 0 12C0 15.2578 0.0140625 15.6656 0.0703125 16.9453C0.126563 18.2203 0.332812 19.0969 0.628125 19.8563C0.9375 20.6484 1.34531 21.3188 2.01563 21.9844C2.68125 22.65 3.35156 23.0625 4.13906 23.3672C4.90313 23.6625 5.775 23.8687 7.05 23.925C8.32969 23.9812 8.7375 23.9953 11.9953 23.9953C15.2531 23.9953 15.6609 23.9812 16.9406 23.925C18.2156 23.8687 19.0922 23.6625 19.8516 23.3672C20.6391 23.0625 21.3094 22.65 21.975 21.9844C22.6406 21.3188 23.0531 20.6484 23.3578 19.8609C23.6531 19.0969 23.8594 18.225 23.9156 16.95C23.9719 15.6703 23.9859 15.2625 23.9859 12.0047C23.9859 8.74688 23.9719 8.33906 23.9156 7.05938C23.8594 5.78438 23.6531 4.90781 23.3578 4.14844C23.0625 3.35156 22.6547 2.68125 21.9844 2.01562C21.3188 1.35 20.6484 0.9375 19.8609 0.632812C19.0969 0.3375 18.225 0.13125 16.95 0.075C15.6656 0.0140625 15.2578 0 12 0Z"
                                                    fill="#E4E7EC" />
                                                <path
                                                    d="M12 5.83594C8.59688 5.83594 5.83594 8.59688 5.83594 12C5.83594 15.4031 8.59688 18.1641 12 18.1641C15.4031 18.1641 18.1641 15.4031 18.1641 12C18.1641 8.59688 15.4031 5.83594 12 5.83594ZM12 15.9984C9.79219 15.9984 8.00156 14.2078 8.00156 12C8.00156 9.79219 9.79219 8.00156 12 8.00156C14.2078 8.00156 15.9984 9.79219 15.9984 12C15.9984 14.2078 14.2078 15.9984 12 15.9984Z"
                                                    fill="#E4E7EC" />
                                                <path
                                                    d="M19.8469 5.59214C19.8469 6.38902 19.2 7.0312 18.4078 7.0312C17.6109 7.0312 16.9688 6.38433 16.9688 5.59214C16.9688 4.79526 17.6156 4.15308 18.4078 4.15308C19.2 4.15308 19.8469 4.79995 19.8469 5.59214Z"
                                                    fill="#E4E7EC" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_8_2089">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="py-2 pe-2 ps-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.55016 21.75C16.6045 21.75 21.5583 14.2467 21.5583 7.74186C21.5583 7.53092 21.5536 7.3153 21.5442 7.10436C22.5079 6.40746 23.3395 5.54425 24 4.5553C23.1025 4.9546 22.1496 5.21538 21.1739 5.32874C22.2013 4.71291 22.9705 3.74547 23.3391 2.60577C22.3726 3.17856 21.3156 3.58261 20.2134 3.80061C19.4708 3.01156 18.489 2.48912 17.4197 2.31405C16.3504 2.13899 15.2532 2.32105 14.2977 2.8321C13.3423 3.34314 12.5818 4.15471 12.1338 5.14131C11.6859 6.12792 11.5754 7.23462 11.8195 8.2903C9.86249 8.19209 7.94794 7.6837 6.19998 6.7981C4.45203 5.91249 2.90969 4.66944 1.67297 3.14952C1.0444 4.23324 0.852057 5.51565 1.13503 6.73609C1.418 7.95654 2.15506 9.02345 3.19641 9.71999C2.41463 9.69517 1.64998 9.48468 0.965625 9.10592V9.16686C0.964925 10.3041 1.3581 11.4066 2.07831 12.2868C2.79852 13.167 3.80132 13.7706 4.91625 13.995C4.19206 14.1931 3.43198 14.222 2.69484 14.0794C3.00945 15.0574 3.62157 15.9129 4.44577 16.5263C5.26997 17.1398 6.26512 17.4806 7.29234 17.5012C5.54842 18.8711 3.39417 19.6141 1.17656 19.6106C0.783287 19.61 0.390399 19.5859 0 19.5384C2.25286 20.9837 4.87353 21.7514 7.55016 21.75Z"
                                                fill="#E4E7EC" />
                                        </svg>
                                    </span>
                                    <span class="py-2 pe-2 ps-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.7609 7.20005C23.7609 7.20005 23.5266 5.54536 22.8047 4.8188C21.8906 3.86255 20.8688 3.85786 20.4 3.80161C17.0438 3.55786 12.0047 3.55786 12.0047 3.55786H11.9953C11.9953 3.55786 6.95625 3.55786 3.6 3.80161C3.13125 3.85786 2.10938 3.86255 1.19531 4.8188C0.473438 5.54536 0.24375 7.20005 0.24375 7.20005C0.24375 7.20005 0 9.14536 0 11.086V12.9047C0 14.8454 0.239062 16.7907 0.239062 16.7907C0.239062 16.7907 0.473437 18.4454 1.19062 19.1719C2.10469 20.1282 3.30469 20.0954 3.83906 20.1985C5.76094 20.3813 12 20.4375 12 20.4375C12 20.4375 17.0438 20.4282 20.4 20.1891C20.8688 20.1329 21.8906 20.1282 22.8047 19.1719C23.5266 18.4454 23.7609 16.7907 23.7609 16.7907C23.7609 16.7907 24 14.85 24 12.9047V11.086C24 9.14536 23.7609 7.20005 23.7609 7.20005ZM9.52031 15.1125V8.36724L16.0031 11.7516L9.52031 15.1125Z"
                                                fill="#E4E7EC" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="py-sm-3 foot-bottom d-flex align-items-center justify-content-between text-white flex-sm-row flex-column gap-3">
                        <span class="">&copy;2024 viacoach. All right reserved</span>
                        <a href="#" class="text-white text-decoration-none">Privacy Polcy</a>
                    </div>
                </div>
            </div>
        </footer>
        <aside class="aside">
            <div class="side-nav">
                <div class="h-100 snav-inner">
                    <div class="d-flex flex-column gap-4 ps-md-4 ms-lg-3 h-100">
                        <div class="d-flex align-items-center justify-content-between gap-3 mb-2">
                            <a href="./index.php">
                                <img src="./assets/img/logo-dark.png" alt="Logo" height="36">
                            </a>
                            <span class="close-menu cursor-pointer" onclick="closeSidebar()">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="18" cy="18" r="18" fill="#EFEFEF" />
                                    <g clip-path="url(#clip0_344_2788)">
                                        <path d="M24 12L12 24" stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12 12L24 24" stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_344_2788">
                                            <rect width="24" height="24" fill="white" transform="translate(6 6)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </div>
                        <div class="flex-grow-1 snav-links d-flex flex-column overflow-y-auto">
                            <a href="#destinations-sec" class="snav-link">Destinations</a>
                            <a href="#fleets-sec" class="snav-link">Fleet</a>
                            <a href="#tours-sec" class="snav-link">Tours</a>
                            <a href="#services-sec" class="snav-link">Services</a>
                            <a href="#offers-sec" class="snav-link">Offers</a>
                            <a href="#reviews-sec" class="snav-link">Reviews</a>
                            <a href="#faq" class="snav-link">FAQ</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <script src="./assets/js/jquery-3.7.1.min.js"></script>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/select2.min.js"></script>
        <script src="./assets/js/jquery-ui.min.js"></script>
        <script src="./assets/js/custom.js?v=2"></script>
    </body>

</html>