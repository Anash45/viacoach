<?php
print_r($_REQUEST);
if (isset($_REQUEST['get_quote'])) {
    $name = $_REQUEST['name'] ?? null;
    $email = $_REQUEST['email'] ?? null;
    $phone = $_REQUEST['phone'] ?? null;
    $to = $_REQUEST['to'] ?? null;
    $to_lat = $_REQUEST['to_lat'] ?? null;
    $to_lng = $_REQUEST['to_lng'] ?? null;
    $from = $_REQUEST['from'] ?? null;
    $from_lat = $_REQUEST['from_lat'] ?? null;
    $from_lng = $_REQUEST['from_lng'] ?? null;
    $pickup_date = $_REQUEST['pickup_date'] ?? null;
    $pickup_time = $_REQUEST['pickup_time'] ?? null;
    $return_dropoff_date = $_REQUEST['return_dropoff_date'] ?? null;
    $return_dropoff_time = $_REQUEST['return_dropoff_time'] ?? null;
    $return_passengers = $_REQUEST['return_passengers'] ?? 0;
    $passengers = $_REQUEST['passengers'] ?? 0;
    // Which can be edited in this page.
    $cabin_bags = $_REQUEST['cabin_bags'] ?? 0;
    $luggage_bags = $_REQUEST['luggage_bags'] ?? 0;
    $hire_reason = $_REQUEST['hire_reason'] ?? '';
    $vehicle_size = $_REQUEST['vehicle_size'] ?? '';
    $additional_info = $_REQUEST['additional_info'] ?? '';
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
        <link rel="stylesheet" href="./assets/css/style.css?v=10">
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
        <main class="main-1 main-2">
            <section class="booking-sec">
                <div class="container">
                    <ul class="nav nav-pills steps-nav sn" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="1-tab" onclick="window.location='./index.php'">
                                <div class="d-flex align-items-center gap-10px">
                                    <span>
                                        <svg width="50" height="50" class="sn-icon" viewBox="0 0 50 50" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="25" cy="25" r="24.5" fill="#3C4154" stroke="#3C4154" />
                                            <path
                                                d="M17 30C17 30.5304 17.2107 31.0391 17.5858 31.4142C17.9609 31.7893 18.4696 32 19 32C19.5304 32 20.0391 31.7893 20.4142 31.4142C20.7893 31.0391 21 30.5304 21 30C21 29.4696 20.7893 28.9609 20.4142 28.5858C20.0391 28.2107 19.5304 28 19 28C18.4696 28 17.9609 28.2107 17.5858 28.5858C17.2107 28.9609 17 29.4696 17 30Z"
                                                stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M29 30C29 30.5304 29.2107 31.0391 29.5858 31.4142C29.9609 31.7893 30.4696 32 31 32C31.5304 32 32.0391 31.7893 32.4142 31.4142C32.7893 31.0391 33 30.5304 33 30C33 29.4696 32.7893 28.9609 32.4142 28.5858C32.0391 28.2107 31.5304 28 31 28C30.4696 28 29.9609 28.2107 29.5858 28.5858C29.2107 28.9609 29 29.4696 29 30Z"
                                                stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M17 30H15V19C15 18.7348 15.1054 18.4804 15.2929 18.2929C15.4804 18.1054 15.7348 18 16 18H30C31.3261 18 32.5979 18.7375 33.5355 20.0503C34.4732 21.363 35 23.1435 35 25V30H33M29 30H21"
                                                stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M29 18L30.5 25H35" stroke="white" stroke-width="1.4"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15 23H30" stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M20 18V23" stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M25 18V23" stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="d-flex flex-column sn-text">
                                        <span class="fw-bold lh-1">Journey</span>
                                        <span class="lh-1">Details</span>
                                    </span>
                                </div>
                            </button>
                        </li>
                        <li class="sn-progress-pill"></li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="2-tab" data-bs-toggle="tab" data-bs-target="#2"
                                type="button" role="tab" aria-controls="2" aria-selected="true">
                                <div class="d-flex align-items-center gap-10px">
                                    <span>
                                        <svg width="50" height="50" class="sn-icon" viewBox="0 0 50 50" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="25" cy="25" r="24.5" fill="#3C4154" stroke="#3C4154" />
                                            <path
                                                d="M17 30C17 30.5304 17.2107 31.0391 17.5858 31.4142C17.9609 31.7893 18.4696 32 19 32C19.5304 32 20.0391 31.7893 20.4142 31.4142C20.7893 31.0391 21 30.5304 21 30C21 29.4696 20.7893 28.9609 20.4142 28.5858C20.0391 28.2107 19.5304 28 19 28C18.4696 28 17.9609 28.2107 17.5858 28.5858C17.2107 28.9609 17 29.4696 17 30Z"
                                                stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M29 30C29 30.5304 29.2107 31.0391 29.5858 31.4142C29.9609 31.7893 30.4696 32 31 32C31.5304 32 32.0391 31.7893 32.4142 31.4142C32.7893 31.0391 33 30.5304 33 30C33 29.4696 32.7893 28.9609 32.4142 28.5858C32.0391 28.2107 31.5304 28 31 28C30.4696 28 29.9609 28.2107 29.5858 28.5858C29.2107 28.9609 29 29.4696 29 30Z"
                                                stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M17 30H15V19C15 18.7348 15.1054 18.4804 15.2929 18.2929C15.4804 18.1054 15.7348 18 16 18H30C31.3261 18 32.5979 18.7375 33.5355 20.0503C34.4732 21.363 35 23.1435 35 25V30H33M29 30H21"
                                                stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M29 18L30.5 25H35" stroke="white" stroke-width="1.4"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15 23H30" stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M20 18V23" stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M25 18V23" stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="d-flex flex-column sn-text">
                                        <span class="fw-bold lh-1">Additional </span>
                                        <span class="lh-1">Details</span>
                                    </span>
                                </div>
                            </button>
                        </li>
                        <li class="sn-progress-pill"></li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="4-tab" data-bs-toggle="tab" data-bs-target="#4" type="button"
                                role="tab" aria-controls="4" aria-selected="false">
                                <div class="d-flex align-items-center gap-10px">
                                    <span>
                                        <svg width="50" height="50" class="sn-icon" viewBox="0 0 50 50" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="25" cy="25" r="24.5" fill="#3C4154" stroke="#3C4154" />
                                            <path
                                                d="M17 30C17 30.5304 17.2107 31.0391 17.5858 31.4142C17.9609 31.7893 18.4696 32 19 32C19.5304 32 20.0391 31.7893 20.4142 31.4142C20.7893 31.0391 21 30.5304 21 30C21 29.4696 20.7893 28.9609 20.4142 28.5858C20.0391 28.2107 19.5304 28 19 28C18.4696 28 17.9609 28.2107 17.5858 28.5858C17.2107 28.9609 17 29.4696 17 30Z"
                                                stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M29 30C29 30.5304 29.2107 31.0391 29.5858 31.4142C29.9609 31.7893 30.4696 32 31 32C31.5304 32 32.0391 31.7893 32.4142 31.4142C32.7893 31.0391 33 30.5304 33 30C33 29.4696 32.7893 28.9609 32.4142 28.5858C32.0391 28.2107 31.5304 28 31 28C30.4696 28 29.9609 28.2107 29.5858 28.5858C29.2107 28.9609 29 29.4696 29 30Z"
                                                stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M17 30H15V19C15 18.7348 15.1054 18.4804 15.2929 18.2929C15.4804 18.1054 15.7348 18 16 18H30C31.3261 18 32.5979 18.7375 33.5355 20.0503C34.4732 21.363 35 23.1435 35 25V30H33M29 30H21"
                                                stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M29 18L30.5 25H35" stroke="white" stroke-width="1.4"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15 23H30" stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M20 18V23" stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M25 18V23" stroke="white" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="d-flex flex-column sn-text">
                                        <span class="fw-bold lh-1">Confirm </span>
                                        <span class="lh-1">Journey</span>
                                    </span>
                                </div>
                            </button>
                        </li>
                    </ul>
                </div>
                <form method="POST" id="booking-form" action="./booking-confirmation.php" novalidate>
                    <div class="tab-content dtc" id="myTabContent">
                        <div class="tab-pane fade show active" id="2" role="tabpanel" aria-labelledby="2-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="details-form">
                                            <div class="d-flex flex-column df-flex-1">
                                                <input type="hidden" name="name" value="<?php echo $name; ?>">
                                                <input type="hidden" name="email" value="<?php echo $email; ?>">
                                                <input type="hidden" name="phone" value="<?php echo $phone; ?>">
                                                <input type="hidden" name="to" value="<?php echo $to; ?>">
                                                <input type="hidden" name="to_lat" value="<?php echo $to_lat; ?>">
                                                <input type="hidden" name="to_lng" value="<?php echo $to_lng; ?>">
                                                <input type="hidden" name="from" value="<?php echo $from; ?>">
                                                <input type="hidden" name="from_lat" value="<?php echo $from_lat; ?>">
                                                <input type="hidden" name="from_lng" value="<?php echo $from_lng; ?>">
                                                <input type="hidden" name="pickup_date"
                                                    value="<?php echo $pickup_date; ?>">
                                                <input type="hidden" name="pickup_time"
                                                    value="<?php echo $pickup_time; ?>">
                                                <input type="hidden" name="return_dropoff_date"
                                                    value="<?php echo $return_dropoff_date; ?>">
                                                <input type="hidden" name="return_dropoff_time"
                                                    value="<?php echo $return_dropoff_time; ?>">
                                                <input type="hidden" name="return_passengers"
                                                    value="<?php echo $return_passengers; ?>">
                                                <input type="hidden" name="passengers"
                                                    value="<?php echo $passengers; ?>">
                                                <h5 class="fw-medium mb-0 df-title text-main">Additional Information
                                                </h5>
                                                <div class="d-flex flex-column gap-4">
                                                    <div class="d-flex flex-column gap-10px">
                                                        <div class="df-group p-4 d-flex flex-column gap-3">
                                                            <div class="d-flex flex-column gap-3">
                                                                <div class="d-flex flex-column gap-10px">
                                                                    <label class="fw-bold df-label">Outbound extra
                                                                        pickups</label>
                                                                    <div class="d-flex align-items-center gap-4">
                                                                        <label
                                                                            class="d-flex align-items-center gap-10px">
                                                                            <input type="radio"
                                                                                class="form-check-input dfc-inp"
                                                                                value="Yes" name="outbound_pickup">
                                                                            <span
                                                                                class="lh-1 dfci-text inter">Yes</span>
                                                                        </label>
                                                                        <label
                                                                            class="d-flex align-items-center gap-10px">
                                                                            <input type="radio"
                                                                                class="form-check-input dfc-inp"
                                                                                value="No" required checked
                                                                                name="outbound_pickup">
                                                                            <span class="lh-1 dfci-text inter">No</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="addition_pickups_cont additional_cont d-flex flex-column">
                                                                    <div class="row">
                                                                        <div class="col-xl-7">
                                                                            <div class="hff-box">
                                                                                <div class="hff-group hfg-to">
                                                                                    <label class="hff-label fw-bold">
                                                                                        Please fill out the text box per
                                                                                        extra pickups.</label>
                                                                                    <div
                                                                                        class="d-flex align-items-center gap-2">
                                                                                        <span>
                                                                                            <svg width="20" height="20"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <g
                                                                                                    clip-path="url(#clip0_8_2856)">
                                                                                                    <path
                                                                                                        d="M15.9083 11.6668H16.6667C16.8877 11.6668 17.0996 11.579 17.2559 11.4227C17.4122 11.2664 17.5 11.0544 17.5 10.8334V2.50008C17.5 2.27907 17.4122 2.06711 17.2559 1.91083C17.0996 1.75455 16.8877 1.66675 16.6667 1.66675H4.76667C4.59196 1.6663 4.42154 1.72077 4.27948 1.82245C4.13741 1.92414 4.03091 2.0679 3.975 2.23342L2.5 6.54175L2.45833 6.80008V10.8334C2.45833 11.0544 2.54613 11.2664 2.70241 11.4227C2.85869 11.579 3.07065 11.6668 3.29167 11.6668H4.05"
                                                                                                        stroke="#656E77"
                                                                                                        stroke-width="0.833333"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round" />
                                                                                                    <path
                                                                                                        d="M17.5 6.66675H2.5M7.55 11.6667H12.4333M14.1667 10.0001C14.4963 10.0001 14.8185 10.0978 15.0926 10.281C15.3667 10.4641 15.5803 10.7244 15.7065 11.0289C15.8326 11.3335 15.8656 11.6686 15.8013 11.9919C15.737 12.3152 15.5783 12.6122 15.3452 12.8453C15.1121 13.0783 14.8151 13.2371 14.4918 13.3014C14.1685 13.3657 13.8334 13.3327 13.5289 13.2065C13.2243 13.0804 12.964 12.8668 12.7809 12.5927C12.5977 12.3186 12.5 11.9964 12.5 11.6667C12.5 11.2247 12.6756 10.8008 12.9882 10.4882C13.3007 10.1757 13.7246 10.0001 14.1667 10.0001ZM5.83333 10.0001C6.16297 10.0001 6.4852 10.0978 6.75928 10.281C7.03337 10.4641 7.24699 10.7244 7.37313 11.0289C7.49928 11.3335 7.53228 11.6686 7.46798 11.9919C7.40367 12.3152 7.24493 12.6122 7.01184 12.8453C6.77876 13.0783 6.48179 13.2371 6.15848 13.3014C5.83518 13.3657 5.50007 13.3327 5.19553 13.2065C4.89098 13.0804 4.63069 12.8668 4.44755 12.5927C4.26442 12.3186 4.16667 11.9964 4.16667 11.6667C4.16667 11.2247 4.34226 10.8008 4.65482 10.4882C4.96738 10.1757 5.39131 10.0001 5.83333 10.0001ZM12.5 6.66675H7.5V1.66675H12.5V6.66675Z"
                                                                                                        stroke="#656E77"
                                                                                                        stroke-width="0.833333"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round" />
                                                                                                    <path
                                                                                                        d="M0.625 16.6406C6.88984 16.6406 13.1547 16.6406 19.6094 16.6406C19.6094 17.0256 19.6094 17.4106 19.6094 17.8073C13.3445 17.8073 7.07969 17.8073 0.625 17.8073C0.625 17.4223 0.625 17.0373 0.625 16.6406Z"
                                                                                                        fill="#656E77" />
                                                                                                </g>
                                                                                                <defs>
                                                                                                    <clipPath
                                                                                                        id="clip0_8_2856">
                                                                                                        <rect width="20"
                                                                                                            height="20"
                                                                                                            fill="white" />
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <div
                                                                                            class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                                            <input type="text"
                                                                                                name="add_from[]"
                                                                                                placeholder="Pickup location..."
                                                                                                class="hf-inp loc-inp p-0 border-0">
                                                                                            <input type="hidden"
                                                                                                name="add_from_lat[]"
                                                                                                class="hidden_lat"
                                                                                                value="">
                                                                                            <input type="hidden"
                                                                                                name="add_from_lng[]"
                                                                                                class="hidden_lng"
                                                                                                value="">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-5">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="hff-box">
                                                                                        <div class="hff-group hfg-from">
                                                                                            <label
                                                                                                class="hff-label fw-bold">
                                                                                                Drop-off date </label>
                                                                                            <div
                                                                                                class="d-flex align-items-center gap-2">
                                                                                                <span>
                                                                                                    <svg width="18"
                                                                                                        height="19"
                                                                                                        viewBox="0 0 18 19"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M12 2V5M6 2V5M2.25 8H15.75M3.75 3.5H14.25C15.0784 3.5 15.75 4.17157 15.75 5V15.5C15.75 16.3284 15.0784 17 14.25 17H3.75C2.92157 17 2.25 16.3284 2.25 15.5V5C2.25 4.17157 2.92157 3.5 3.75 3.5Z"
                                                                                                            stroke="#656E77"
                                                                                                            stroke-width="1.2"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round" />
                                                                                                    </svg>
                                                                                                </span>
                                                                                                <div
                                                                                                    class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                                                    <input type="text"
                                                                                                        class="hf-date hf-inp p-0 border-0"
                                                                                                        placeholder="eg: 20 Jan 25"
                                                                                                        name="add_from_date[]">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="hff-box">
                                                                                        <div class="hff-group hfg-from">
                                                                                            <label
                                                                                                class="hff-label fw-bold">
                                                                                                Drop-off time </label>
                                                                                            <div
                                                                                                class="d-flex align-items-center gap-2">
                                                                                                <span>
                                                                                                    <svg width="17"
                                                                                                        height="18"
                                                                                                        viewBox="0 0 17 18"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <g
                                                                                                            clip-path="url(#clip0_734_5155)">
                                                                                                            <path
                                                                                                                d="M2.125 8.79639C2.125 9.63356 2.28989 10.4625 2.61027 11.236C2.93064 12.0094 3.40022 12.7122 3.99219 13.3042C4.58417 13.8962 5.28694 14.3657 6.06039 14.6861C6.83384 15.0065 7.66282 15.1714 8.5 15.1714C9.33718 15.1714 10.1662 15.0065 10.9396 14.6861C11.7131 14.3657 12.4158 13.8962 13.0078 13.3042C13.5998 12.7122 14.0694 12.0094 14.3897 11.236C14.7101 10.4625 14.875 9.63356 14.875 8.79639C14.875 7.95921 14.7101 7.13023 14.3897 6.35678C14.0694 5.58333 13.5998 4.88055 13.0078 4.28858C12.4158 3.69661 11.7131 3.22703 10.9396 2.90665C10.1662 2.58628 9.33718 2.42139 8.5 2.42139C7.66282 2.42139 6.83384 2.58628 6.06039 2.90665C5.28694 3.22703 4.58417 3.69661 3.99219 4.28858C3.40022 4.88055 2.93064 5.58333 2.61027 6.35678C2.28989 7.13023 2.125 7.95921 2.125 8.79639Z"
                                                                                                                stroke="#656E77"
                                                                                                                stroke-width="1.2"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                d="M8.5 8.79639H10.9792"
                                                                                                                stroke="#656E77"
                                                                                                                stroke-width="1.2"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                d="M8.5 5.25464V8.79631"
                                                                                                                stroke="#656E77"
                                                                                                                stroke-width="1.2"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                        </g>
                                                                                                        <defs>
                                                                                                            <clipPath
                                                                                                                id="clip0_734_5155">
                                                                                                                <rect
                                                                                                                    width="17"
                                                                                                                    height="17"
                                                                                                                    fill="white"
                                                                                                                    transform="translate(0 0.296387)" />
                                                                                                            </clipPath>
                                                                                                        </defs>
                                                                                                    </svg>
                                                                                                </span>
                                                                                                <div
                                                                                                    class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                                                    <select
                                                                                                        class="hf-inp hfi-select hfi-time p-0 border-0 form-control"
                                                                                                        name="add_from_time[]">
                                                                                                        <option
                                                                                                            value="">
                                                                                                            Select
                                                                                                            time...
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button type="button"
                                                                    class="btn btn-additional btna-pickups">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-center gap-2">
                                                                        <span class="lh-1">Add more</span>
                                                                        <span>
                                                                            <svg width="20" height="21"
                                                                                viewBox="0 0 20 21" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g clip-path="url(#clip0_734_4738)">
                                                                                    <path d="M10 5.00806V16.6747"
                                                                                        stroke="black"
                                                                                        stroke-width="1.6"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M4.16797 10.8413H15.8346"
                                                                                        stroke="black"
                                                                                        stroke-width="1.6"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_734_4738">
                                                                                        <rect width="20" height="20"
                                                                                            fill="white"
                                                                                            transform="translate(0 0.841309)" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div class="df-border my-1"></div>
                                                            <div class="d-flex flex-column gap-3">
                                                                <div class="d-flex flex-column gap-10px">
                                                                    <label class="fw-bold df-label">Return extra
                                                                        drop-offs</label>
                                                                    <div class="d-flex align-items-center gap-4">
                                                                        <label
                                                                            class="d-flex align-items-center gap-10px">
                                                                            <input type="radio"
                                                                                class="form-check-input dfc-inp"
                                                                                value="Yes" name="return_pickup">
                                                                            <span
                                                                                class="lh-1 dfci-text inter">Yes</span>
                                                                        </label>
                                                                        <label
                                                                            class="d-flex align-items-center gap-10px">
                                                                            <input type="radio"
                                                                                class="form-check-input dfc-inp"
                                                                                value="No" required checked
                                                                                name="return_pickup">
                                                                            <span class="lh-1 dfci-text inter">No</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="addition_dropoffs_cont additional_cont d-flex flex-column">
                                                                    <div class="row position-relative">
                                                                        <div class="col-xl-7">
                                                                            <div class="hff-box">
                                                                                <div class="hff-group hfg-to">
                                                                                    <label class="hff-label fw-bold">
                                                                                        Please fill out the text box per
                                                                                        extra drop-offs.</label>
                                                                                    <div
                                                                                        class="d-flex align-items-center gap-2">
                                                                                        <span>
                                                                                            <svg width="20" height="20"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <g
                                                                                                    clip-path="url(#clip0_8_2856)">
                                                                                                    <path
                                                                                                        d="M15.9083 11.6668H16.6667C16.8877 11.6668 17.0996 11.579 17.2559 11.4227C17.4122 11.2664 17.5 11.0544 17.5 10.8334V2.50008C17.5 2.27907 17.4122 2.06711 17.2559 1.91083C17.0996 1.75455 16.8877 1.66675 16.6667 1.66675H4.76667C4.59196 1.6663 4.42154 1.72077 4.27948 1.82245C4.13741 1.92414 4.03091 2.0679 3.975 2.23342L2.5 6.54175L2.45833 6.80008V10.8334C2.45833 11.0544 2.54613 11.2664 2.70241 11.4227C2.85869 11.579 3.07065 11.6668 3.29167 11.6668H4.05"
                                                                                                        stroke="#656E77"
                                                                                                        stroke-width="0.833333"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round" />
                                                                                                    <path
                                                                                                        d="M17.5 6.66675H2.5M7.55 11.6667H12.4333M14.1667 10.0001C14.4963 10.0001 14.8185 10.0978 15.0926 10.281C15.3667 10.4641 15.5803 10.7244 15.7065 11.0289C15.8326 11.3335 15.8656 11.6686 15.8013 11.9919C15.737 12.3152 15.5783 12.6122 15.3452 12.8453C15.1121 13.0783 14.8151 13.2371 14.4918 13.3014C14.1685 13.3657 13.8334 13.3327 13.5289 13.2065C13.2243 13.0804 12.964 12.8668 12.7809 12.5927C12.5977 12.3186 12.5 11.9964 12.5 11.6667C12.5 11.2247 12.6756 10.8008 12.9882 10.4882C13.3007 10.1757 13.7246 10.0001 14.1667 10.0001ZM5.83333 10.0001C6.16297 10.0001 6.4852 10.0978 6.75928 10.281C7.03337 10.4641 7.24699 10.7244 7.37313 11.0289C7.49928 11.3335 7.53228 11.6686 7.46798 11.9919C7.40367 12.3152 7.24493 12.6122 7.01184 12.8453C6.77876 13.0783 6.48179 13.2371 6.15848 13.3014C5.83518 13.3657 5.50007 13.3327 5.19553 13.2065C4.89098 13.0804 4.63069 12.8668 4.44755 12.5927C4.26442 12.3186 4.16667 11.9964 4.16667 11.6667C4.16667 11.2247 4.34226 10.8008 4.65482 10.4882C4.96738 10.1757 5.39131 10.0001 5.83333 10.0001ZM12.5 6.66675H7.5V1.66675H12.5V6.66675Z"
                                                                                                        stroke="#656E77"
                                                                                                        stroke-width="0.833333"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round" />
                                                                                                    <path
                                                                                                        d="M0.625 16.6406C6.88984 16.6406 13.1547 16.6406 19.6094 16.6406C19.6094 17.0256 19.6094 17.4106 19.6094 17.8073C13.3445 17.8073 7.07969 17.8073 0.625 17.8073C0.625 17.4223 0.625 17.0373 0.625 16.6406Z"
                                                                                                        fill="#656E77" />
                                                                                                </g>
                                                                                                <defs>
                                                                                                    <clipPath
                                                                                                        id="clip0_8_2856">
                                                                                                        <rect width="20"
                                                                                                            height="20"
                                                                                                            fill="white" />
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <div
                                                                                            class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                                            <input type="text"
                                                                                                name="add_to[]"
                                                                                                placeholder="Drop-off location..."
                                                                                                class="hf-inp loc-inp p-0 border-0">
                                                                                            <input type="hidden"
                                                                                                name="add_to_lat[]"
                                                                                                class="hidden_lat"
                                                                                                value="">
                                                                                            <input type="hidden"
                                                                                                name="add_to_lng[]"
                                                                                                class="hidden_lng"
                                                                                                value="">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-5">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="hff-box">
                                                                                        <div class="hff-group hfg-from">
                                                                                            <label
                                                                                                class="hff-label fw-bold">
                                                                                                Pickup date </label>
                                                                                            <div
                                                                                                class="d-flex align-items-center gap-2">
                                                                                                <span>
                                                                                                    <svg width="18"
                                                                                                        height="19"
                                                                                                        viewBox="0 0 18 19"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M12 2V5M6 2V5M2.25 8H15.75M3.75 3.5H14.25C15.0784 3.5 15.75 4.17157 15.75 5V15.5C15.75 16.3284 15.0784 17 14.25 17H3.75C2.92157 17 2.25 16.3284 2.25 15.5V5C2.25 4.17157 2.92157 3.5 3.75 3.5Z"
                                                                                                            stroke="#656E77"
                                                                                                            stroke-width="1.2"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round" />
                                                                                                    </svg>
                                                                                                </span>
                                                                                                <div
                                                                                                    class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                                                    <input type="text"
                                                                                                        class="hf-date hf-inp p-0 border-0"
                                                                                                        placeholder="eg: 20 Jan 25"
                                                                                                        name="add_to_date[]">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="hff-box">
                                                                                        <div class="hff-group hfg-from">
                                                                                            <label
                                                                                                class="hff-label fw-bold">
                                                                                                Pickup time </label>
                                                                                            <div
                                                                                                class="d-flex align-items-center gap-2">
                                                                                                <span>
                                                                                                    <svg width="17"
                                                                                                        height="18"
                                                                                                        viewBox="0 0 17 18"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <g
                                                                                                            clip-path="url(#clip0_734_5155)">
                                                                                                            <path
                                                                                                                d="M2.125 8.79639C2.125 9.63356 2.28989 10.4625 2.61027 11.236C2.93064 12.0094 3.40022 12.7122 3.99219 13.3042C4.58417 13.8962 5.28694 14.3657 6.06039 14.6861C6.83384 15.0065 7.66282 15.1714 8.5 15.1714C9.33718 15.1714 10.1662 15.0065 10.9396 14.6861C11.7131 14.3657 12.4158 13.8962 13.0078 13.3042C13.5998 12.7122 14.0694 12.0094 14.3897 11.236C14.7101 10.4625 14.875 9.63356 14.875 8.79639C14.875 7.95921 14.7101 7.13023 14.3897 6.35678C14.0694 5.58333 13.5998 4.88055 13.0078 4.28858C12.4158 3.69661 11.7131 3.22703 10.9396 2.90665C10.1662 2.58628 9.33718 2.42139 8.5 2.42139C7.66282 2.42139 6.83384 2.58628 6.06039 2.90665C5.28694 3.22703 4.58417 3.69661 3.99219 4.28858C3.40022 4.88055 2.93064 5.58333 2.61027 6.35678C2.28989 7.13023 2.125 7.95921 2.125 8.79639Z"
                                                                                                                stroke="#656E77"
                                                                                                                stroke-width="1.2"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                d="M8.5 8.79639H10.9792"
                                                                                                                stroke="#656E77"
                                                                                                                stroke-width="1.2"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                            <path
                                                                                                                d="M8.5 5.25464V8.79631"
                                                                                                                stroke="#656E77"
                                                                                                                stroke-width="1.2"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round" />
                                                                                                        </g>
                                                                                                        <defs>
                                                                                                            <clipPath
                                                                                                                id="clip0_734_5155">
                                                                                                                <rect
                                                                                                                    width="17"
                                                                                                                    height="17"
                                                                                                                    fill="white"
                                                                                                                    transform="translate(0 0.296387)" />
                                                                                                            </clipPath>
                                                                                                        </defs>
                                                                                                    </svg>
                                                                                                </span>
                                                                                                <div
                                                                                                    class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                                                    <select
                                                                                                        class="hf-inp hfi-select hfi-time p-0 border-0 form-control"
                                                                                                        name="add_to_time[]">
                                                                                                        <option
                                                                                                            value="">
                                                                                                            Select
                                                                                                            time...
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="remove-additional">
                                                                            <img src="./assets/img/circle-minus.svg"
                                                                                alt="Minus" height="20">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button type="button"
                                                                    class="btn btn-additional btna-dropoffs">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-center gap-2">
                                                                        <span class="lh-1">Add more</span>
                                                                        <span>
                                                                            <svg width="20" height="21"
                                                                                viewBox="0 0 20 21" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g clip-path="url(#clip0_734_4738)">
                                                                                    <path d="M10 5.00806V16.6747"
                                                                                        stroke="black"
                                                                                        stroke-width="1.6"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M4.16797 10.8413H15.8346"
                                                                                        stroke="black"
                                                                                        stroke-width="1.6"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_734_4738">
                                                                                        <rect width="20" height="20"
                                                                                            fill="white"
                                                                                            transform="translate(0 0.841309)" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column gap-10px">
                                                        <div class="d-flex flex-column gap-1">
                                                            <h5 class="lh-sm text-main fw-bold df-subtitle mb-0">Luggage
                                                                Requirements*</h5>
                                                            <p class="mb-0 df-note">Please specify the total number of
                                                                hand luggage and suitcase you will need for all
                                                                passengers for your trip</p>
                                                        </div>
                                                        <div class="d-flex flex-column hff-flex-1">
                                                            <div
                                                                class="hff-row d-flex flex-md-row flex-column hff-flex-1">
                                                                <div class="hff-box hfb-sm">
                                                                    <div class="hff-group hfg-from">
                                                                        <label class="hff-label fw-bold"> Cabin Luggage
                                                                            (optional) </label>
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <span>
                                                                                <svg width="19" height="19"
                                                                                    viewBox="0 0 19 19" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M5 6.5C5 6.10218 5.15804 5.72064 5.43934 5.43934C5.72064 5.15804 6.10218 5 6.5 5H12.5C12.8978 5 13.2794 5.15804 13.5607 5.43934C13.842 5.72064 14 6.10218 14 6.5V14C14 14.3978 13.842 14.7794 13.5607 15.0607C13.2794 15.342 12.8978 15.5 12.5 15.5H6.5C6.10218 15.5 5.72064 15.342 5.43934 15.0607C5.15804 14.7794 5 14.3978 5 14V6.5Z"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M7.25 5V4.25C7.25 3.85218 7.40804 3.47064 7.68934 3.18934C7.97064 2.90804 8.35218 2.75 8.75 2.75H10.25C10.6478 2.75 11.0294 2.90804 11.3107 3.18934C11.592 3.47064 11.75 3.85218 11.75 4.25V5"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M5 8H14" stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M5 12.5H14"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M7.25 15.5V16.25"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M11.75 15.5V16.25"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                            <div
                                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                                <input type="text"
                                                                                    class="hf-inp p-0 border-0 hf-number"
                                                                                    value="<?php echo $cabin_bags; ?>"
                                                                                    name="cabin_bags" id="cabin_bags">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="hff-box hfb-sm">
                                                                    <div class="hff-group hfg-from">
                                                                        <label class="hff-label fw-bold"> Large Luggage
                                                                            (optional) </label>
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <span>
                                                                                <svg width="19" height="19"
                                                                                    viewBox="0 0 19 19" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M5 6.5C5 6.10218 5.15804 5.72064 5.43934 5.43934C5.72064 5.15804 6.10218 5 6.5 5H12.5C12.8978 5 13.2794 5.15804 13.5607 5.43934C13.842 5.72064 14 6.10218 14 6.5V14C14 14.3978 13.842 14.7794 13.5607 15.0607C13.2794 15.342 12.8978 15.5 12.5 15.5H6.5C6.10218 15.5 5.72064 15.342 5.43934 15.0607C5.15804 14.7794 5 14.3978 5 14V6.5Z"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M7.25 5V4.25C7.25 3.85218 7.40804 3.47064 7.68934 3.18934C7.97064 2.90804 8.35218 2.75 8.75 2.75H10.25C10.6478 2.75 11.0294 2.90804 11.3107 3.18934C11.592 3.47064 11.75 3.85218 11.75 4.25V5"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M5 8H14" stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M5 12.5H14"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M7.25 15.5V16.25"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M11.75 15.5V16.25"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                            <div
                                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                                <input type="text"
                                                                                    class="hf-inp p-0 border-0 hf-number"
                                                                                    value="<?php echo $luggage_bags; ?>"
                                                                                    name="luggage_bags"
                                                                                    id="luggage_bags">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column gap-10px">
                                                        <div class="d-flex flex-column gap-1">
                                                            <h5 class="lh-sm text-main fw-bold df-subtitle mb-0">Vehicle
                                                                Info</h5>
                                                            <p class="mb-0 df-note">Please specify the type of vehicle
                                                                and reason to hire it.</p>
                                                        </div>
                                                        <div class="d-flex flex-column hff-flex-1">
                                                            <div
                                                                class="hff-row d-flex flex-sm-row flex-column hff-flex-1">
                                                                <div class="hff-box hfb-sm">
                                                                    <div class="hff-group hfg-from">
                                                                        <label class="hff-label fw-bold"> Vehicle Type*
                                                                        </label>
                                                                        <div
                                                                            class="d-flex align-items-center hff-flex-1">
                                                                            <span>
                                                                                <svg width="20" height="21"
                                                                                    viewBox="0 0 20 21" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g clip-path="url(#clip0_156_3951)">
                                                                                        <path
                                                                                            d="M4.09167 12.1668H3.33333C3.11232 12.1668 2.90036 12.079 2.74408 11.9227C2.5878 11.7664 2.5 11.5544 2.5 11.3334V3.00008C2.5 2.77907 2.5878 2.56711 2.74408 2.41083C2.90036 2.25455 3.11232 2.16675 3.33333 2.16675H15.2333C15.408 2.1663 15.5785 2.22077 15.7205 2.32245C15.8626 2.42414 15.9691 2.5679 16.025 2.73342L17.5 7.04175L17.5417 7.30008V11.3334C17.5417 11.5544 17.4539 11.7664 17.2976 11.9227C17.1413 12.079 16.9293 12.1668 16.7083 12.1668H15.95"
                                                                                            stroke="#656E77"
                                                                                            stroke-width="0.833333"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path
                                                                                            d="M2.5 7.16675H17.5M12.45 12.1667H7.56667M5.83333 10.5001C5.5037 10.5001 5.18146 10.5978 4.90738 10.781C4.6333 10.9641 4.41968 11.2244 4.29353 11.5289C4.16739 11.8335 4.13438 12.1686 4.19869 12.4919C4.263 12.8152 4.42173 13.1122 4.65482 13.3453C4.88791 13.5783 5.18488 13.7371 5.50818 13.8014C5.83148 13.8657 6.1666 13.8327 6.47114 13.7065C6.77568 13.5804 7.03598 13.3668 7.21912 13.0927C7.40225 12.8186 7.5 12.4964 7.5 12.1667C7.5 11.7247 7.3244 11.3008 7.01184 10.9882C6.69928 10.6757 6.27536 10.5001 5.83333 10.5001ZM14.1667 10.5001C13.837 10.5001 13.5148 10.5978 13.2407 10.781C12.9666 10.9641 12.753 11.2244 12.6269 11.5289C12.5007 11.8335 12.4677 12.1686 12.532 12.4919C12.5963 12.8152 12.7551 13.1122 12.9882 13.3453C13.2212 13.5783 13.5182 13.7371 13.8415 13.8014C14.1648 13.8657 14.4999 13.8327 14.8045 13.7065C15.109 13.5804 15.3693 13.3668 15.5524 13.0927C15.7356 12.8186 15.8333 12.4964 15.8333 12.1667C15.8333 11.7247 15.6577 11.3008 15.3452 10.9882C15.0326 10.6757 14.6087 10.5001 14.1667 10.5001ZM7.5 7.16675H12.5V2.16675H7.5V7.16675Z"
                                                                                            stroke="#656E77"
                                                                                            stroke-width="0.833333"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path
                                                                                            d="M0.625 17.1406C6.88984 17.1406 13.1547 17.1406 19.6094 17.1406C19.6094 17.5256 19.6094 17.9106 19.6094 18.3073C13.3445 18.3073 7.07969 18.3073 0.625 18.3073C0.625 17.9223 0.625 17.5373 0.625 17.1406Z"
                                                                                            fill="#656E77" />
                                                                                    </g>
                                                                                    <defs>
                                                                                        <clipPath id="clip0_156_3951">
                                                                                            <rect width="20" height="20"
                                                                                                fill="white"
                                                                                                transform="translate(0 0.5)" />
                                                                                        </clipPath>
                                                                                    </defs>
                                                                                </svg>
                                                                            </span>
                                                                            <div
                                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-center">
                                                                                <select
                                                                                    class="hf-inp hfi-select form-select px-0 border-0"
                                                                                    name="vehicle_size"
                                                                                    id="bp_vehicle_size">
                                                                                    <option value="">Select vehicle...
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="hff-box hfb-sm">
                                                                    <div class="hff-group hfg-from">
                                                                        <label class="hff-label fw-bold"> Hire Reason*
                                                                        </label>
                                                                        <div
                                                                            class="d-flex align-items-center hff-flex-1">
                                                                            <span>
                                                                                <svg width="18" height="19"
                                                                                    viewBox="0 0 18 19" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M2.25 15.5C4.00184 13.6419 6.38026 12.5 9 12.5C11.6197 12.5 13.9982 13.6419 15.75 15.5"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M9 9.5C10.864 9.5 12.375 7.98896 12.375 6.125C12.375 4.26104 10.864 2.75 9 2.75C7.13604 2.75 5.625 4.26104 5.625 6.125C5.625 7.98896 7.13604 9.5 9 9.5Z"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                            <div
                                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-center">
                                                                                <select id="hire_reason"
                                                                                    name="hire_reason"
                                                                                    class="hf-inp hfi-select events_inp bp-select form-select p-0 border-0">
                                                                                    <option value=""> Select reason
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column gap-10px">
                                                        <div class="d-flex flex-column gap-1">
                                                            <h5 class="lh-sm text-main fw-bold df-subtitle mb-0">
                                                                Additional Journey Information*</h5>
                                                            <p class="mb-0 df-note">Please provide additional details
                                                                for your trip.</p>
                                                        </div>
                                                        <textarea name="additional_info"
                                                            class="df-textarea form-control no-box" required rows="4"
                                                            placeholder="Please add additional details here"
                                                            id="additional_info"><?php echo $additional_info; ?></textarea>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type="button"
                                                        class="btn hff-submit-btn df-btn btn-ferozi fw-bold"
                                                        onclick="switchTab('4-tab')">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="details-card">
                                            <div class="d-flex flex-column dc-flex">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h5 class="dc-title mb-0 fw-bold">Journey Details</h5>
                                                    <div class="d-flex gap-1 flex-column">
                                                        <div class="d-flex dc-row">
                                                            <span class="dc-dark figtree fw-semibold">No. of
                                                                passengers</span>
                                                            <span class="dc-light jd_passengers">--</span>
                                                        </div>
                                                        <div class="d-flex dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Pickup</span>
                                                            <span class="dc-light jd_pickup">--</span>
                                                        </div>
                                                        <div class="d-flex dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Drop-off</span>
                                                            <span class="dc-light jd_dropoff">--</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dc-border"></div>
                                                <div class="d-flex flex-column gap-10px">
                                                    <h5 class="dc-title mb-0 fw-bold">Outbound Journey Details</h5>
                                                    <div class="d-flex gap-1 flex-column">
                                                        <div class="d-flex dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Pickup Date &
                                                                Time:</span>
                                                            <span class="dc-light jd_pickup_date_time">--</span>
                                                        </div>
                                                        <div class="d-flex dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Pickup
                                                                address</span>
                                                            <span class="dc-light jd_pickup">--</span>
                                                        </div>
                                                        <div class="d-flex flex-column gap-1 jd_extra_pickup_details">
                                                            <div class="d-flex dc-row">
                                                                <span class="dc-dark figtree fw-semibold">Extra pickup
                                                                    details 1</span>
                                                                <span class="dc-light">--</span>
                                                            </div>
                                                            <div class="d-flex dc-row">
                                                                <span class="dc-dark figtree fw-semibold">Extra pickup
                                                                    details 2</span>
                                                                <span class="dc-light">--</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dc-border"></div>
                                                <div class="d-flex flex-column gap-10px">
                                                    <h5 class="dc-title mb-0 fw-bold">Additional Info</h5>
                                                    <div class="d-flex gap-1 flex-column">
                                                        <div class="d-flex dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Vehicle
                                                                size:</span>
                                                            <span class="dc-light jd_vehicle_size">--</span>
                                                        </div>
                                                        <div class="d-flex dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Purpose:</span>
                                                            <span class="dc-light jd_hire_reason">--</span>
                                                        </div>
                                                        <div class="d-flex dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Small
                                                                luggage:</span>
                                                            <span class="dc-light jd_cabin_bags">--</span>
                                                        </div>
                                                        <div class="d-flex dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Large
                                                                luggage:</span>
                                                            <span class="dc-light jd_luggage_bags">--</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dc-border"></div>
                                                <div class="d-flex flex-column gap-10px">
                                                    <h5 class="dc-title mb-0 fw-bold">Return Journey Details</h5>
                                                    <div class="d-flex gap-1 flex-column">
                                                        <div class="d-flex dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Drop-off Date &
                                                                Time:</span>
                                                            <span class="dc-light jd_dropoff_date_time">--</span>
                                                        </div>
                                                        <div class="d-flex dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Drop-off
                                                                address:</span>
                                                            <span class="dc-light jd_dropoff">--</span>
                                                        </div>
                                                        <div class="d-flex flex-column gap-1 jd_extra_dropoff_details">
                                                            <div class="d-flex dc-row">
                                                                <span class="dc-dark figtree fw-semibold">Extra drop-off
                                                                    details 1</span>
                                                                <span class="dc-light">--</span>
                                                            </div>
                                                            <div class="d-flex dc-row">
                                                                <span class="dc-dark figtree fw-semibold">Extra drop-off
                                                                    details 2</span>
                                                                <span class="dc-light">--</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dc-border"></div>
                                                <div class="d-flex flex-column gap-10px">
                                                    <h5 class="dc-title mb-0 fw-bold">Additional Journey Information
                                                    </h5>
                                                    <p class="mb-0 jd_additional_info jd-text w-100">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="4" role="tabpanel" aria-labelledby="4-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="details-form pe-xxl-4">
                                            <div class="d-flex flex-column df-flex-1">
                                                <div class="d-flex flex-column">
                                                    <h5 class="fw-medium mb-0 df-title text-main">Confirm Details</h5>
                                                    <p class="mb-0 df-note">Please confirm all the details you have
                                                        entered. You will get a quote based on these details. </p>
                                                </div>
                                                <div class="df-flex-1 d-flex flex-wrap">
                                                    <div class="d-flex flex-column gap-10px dfc-box">
                                                        <div class="d-flex flex-column gap-10px">
                                                            <h5 class="dc-title mb-0 fw-bold">Journey Details</h5>
                                                            <div class="d-flex gap-1 flex-column">
                                                                <div class="d-flex dc-row">
                                                                    <span class="dc-dark figtree fw-semibold">No. of
                                                                        passengers</span>
                                                                    <span class="dc-light jd_passengers">--</span>
                                                                </div>
                                                                <div class="d-flex dc-row">
                                                                    <span
                                                                        class="dc-dark figtree fw-semibold">Pickup</span>
                                                                    <span class="dc-light jd_pickup">--</span>
                                                                </div>
                                                                <div class="d-flex dc-row">
                                                                    <span
                                                                        class="dc-dark figtree fw-semibold">Drop-off</span>
                                                                    <span class="dc-light jd_dropoff">--</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column gap-10px dfc-box">
                                                        <div class="d-flex flex-column gap-10px">
                                                            <h5 class="dc-title mb-0 fw-bold">Outbound Journey Details
                                                            </h5>
                                                            <div class="d-flex gap-1 flex-column">
                                                                <div class="d-flex dc-row">
                                                                    <span class="dc-dark figtree fw-semibold">Pickup
                                                                        Date & Time:</span>
                                                                    <span class="dc-light jd_pickup_date_time">--</span>
                                                                </div>
                                                                <div class="d-flex dc-row">
                                                                    <span class="dc-dark figtree fw-semibold">Pickup
                                                                        address</span>
                                                                    <span class="dc-light jd_pickup">--</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column gap-10px dfc-box">
                                                        <div class="d-flex flex-column gap-10px">
                                                            <h5 class="dc-title mb-0 fw-bold">Additional Info</h5>
                                                            <div class="d-flex gap-1 flex-column">
                                                                <div class="d-flex dc-row">
                                                                    <span class="dc-dark figtree fw-semibold">Vehicle
                                                                        size:</span>
                                                                    <span class="dc-light jd_vehicle_size">--</span>
                                                                </div>
                                                                <div class="d-flex dc-row">
                                                                    <span
                                                                        class="dc-dark figtree fw-semibold">Purpose:</span>
                                                                    <span class="dc-light jd_hire_reason">--</span>
                                                                </div>
                                                                <div class="d-flex dc-row">
                                                                    <span class="dc-dark figtree fw-semibold">Small
                                                                        luggage:</span>
                                                                    <span class="dc-light jd_cabin_bags">--</span>
                                                                </div>
                                                                <div class="d-flex dc-row">
                                                                    <span class="dc-dark figtree fw-semibold">Large
                                                                        luggage:</span>
                                                                    <span class="dc-light jd_luggage_bags">--</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column gap-10px dfc-box">
                                                        <div class="d-flex flex-column gap-10px">
                                                            <h5 class="dc-title mb-0 fw-bold">Return Journey Details
                                                            </h5>
                                                            <div class="d-flex gap-1 flex-column">
                                                                <div class="d-flex dc-row">
                                                                    <span class="dc-dark figtree fw-semibold">Drop-off
                                                                        Date & Time:</span>
                                                                    <span
                                                                        class="dc-light jd_dropoff_date_time">--</span>
                                                                </div>
                                                                <div class="d-flex dc-row">
                                                                    <span class="dc-dark figtree fw-semibold">Drop-off
                                                                        address:</span>
                                                                    <span class="dc-light jd_dropoff">--</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column gap-10px dfc-box">
                                                        <div class="d-flex flex-column gap-10px">
                                                            <h5 class="dc-title mb-0 fw-bold">Outbound Extra Pickups
                                                                Info </h5>
                                                            <div class="d-flex gap-1 flex-column">
                                                                <div
                                                                    class="d-flex flex-column gap-1 jd_extra_pickup_details">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column gap-10px dfc-box">
                                                        <div class="d-flex flex-column gap-10px">
                                                            <h5 class="dc-title mb-0 fw-bold">Return Extra Drop-offs
                                                                Info </h5>
                                                            <div class="d-flex gap-1 flex-column">
                                                                <div
                                                                    class="d-flex flex-column gap-1 jd_extra_dropoff_details">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <id id="bf-error"></id>
                                                    <button type="submit"
                                                        class="btn hff-submit-btn df-btn btn-ferozi fw-bold">Get instant
                                                        quote</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
        <script>
            let $name = '<?php echo $name; ?>';
            let $email = '<?php echo $email; ?>';
            let $phone = '<?php echo $phone; ?>';
            let $to = '<?php echo $to; ?>';
            let $to_lat = '<?php echo $to_lat; ?>';
            let $to_lng = '<?php echo $to_lng; ?>';
            let $from = '<?php echo $from; ?>';
            let $from_lat = '<?php echo $from_lat; ?>';
            let $from_lng = '<?php echo $from_lng; ?>';
            let $pickup_date = '<?php echo $pickup_date; ?>';
            let $pickup_time = '<?php echo $pickup_time; ?>';
            let $return_dropoff_date = '<?php echo $return_dropoff_date; ?>';
            let $return_dropoff_time = '<?php echo $return_dropoff_time; ?>';
            let $return_passengers = '<?php echo $return_passengers; ?>';
            let $passengers = '<?php echo $passengers; ?>';
            let $cabin_bags = '<?php echo $cabin_bags; ?>';
            let $luggage_bags = '<?php echo $luggage_bags; ?>';
            let $hire_reason = '<?php echo $hire_reason; ?>';
            let $vehicle_size = '<?php echo $vehicle_size; ?>';
            let $additional_info = '<?php echo $additional_info; ?>';

            function updateValues() {
                $('.jd_pickup').html($from);
                $('.jd_dropoff').html($to);
                $('.jd_passengers').html($passengers);
                $('.jd_cabin_bags').html($cabin_bags);
                $('.jd_luggage_bags').html($luggage_bags);
                $('.jd_hire_reason').html($hire_reason);
                $('.jd_vehicle_size').html($vehicle_size);
                $('.jd_additional_info').html($additional_info);
                $('.jd_pickup_date_time').html(`${$pickup_date}, ${$pickup_time}`);
                $('.jd_dropoff_date_time').html(`${$return_dropoff_date}, ${$return_dropoff_time}`);

                let outbound_pickups = $('[name="outbound_pickup"]:checked');
                if (outbound_pickups.val() == 'Yes') {
                    $('.jd_extra_pickup_details').html('');
                    $('.jd_extra_pickup_details').show().addClass('d-flex');
                    let extra_pickups = $('.addition_pickups_cont>.row');
                    for (let index = 0; index < extra_pickups.length; index++) {
                        let element = extra_pickups[index];

                        // Debugging: log the elements and values to check
                        let add_from = $(element).find('[name="add_from[]"]').val();
                        let add_from_date = $(element).find('[name="add_from_date[]"]').val();
                        let add_from_time = $(element).find('[name="add_from_time[]"]').val();

                        console.log(`Row ${index + 1}: ${add_from}, ${add_from_date}, ${add_from_time}`);

                        $('.jd_extra_pickup_details').append(`<div class="d-flex dc-row">
                        <span class="dc-dark figtree fw-semibold">Extra pickup details ${index + 1}</span>
                        <span class="dc-light">${add_from}<br>${add_from_date}, ${add_from_time}</span>
                    </div>`);
                    }
                } else {
                    $('.jd_extra_pickup_details').hide().removeClass('d-flex');
                }

                let return_pickups = $('[name="return_pickup"]:checked');
                if (return_pickups.val() == 'Yes') {
                    $('.jd_extra_dropoff_details').html('');
                    $('.jd_extra_dropoff_details').show().addClass('d-flex');
                    let extra_dropoffs = $('.addition_dropoffs_cont>.row');
                    for (let index = 0; index < extra_dropoffs.length; index++) {
                        let element = extra_dropoffs[index];

                        // Debugging: log the elements and values to check
                        let add_to = $(element).find('[name="add_to[]"]').val();
                        let add_to_date = $(element).find('[name="add_to_date[]"]').val();
                        let add_to_time = $(element).find('[name="add_to_time[]"]').val();

                        console.log(`Row ${index + 1}: ${add_to}, ${add_to_date}, ${add_to_time}`);

                        $('.jd_extra_dropoff_details').each(function () {
                            $(this).append(`<div class="d-flex dc-row">
            <span class="dc-dark figtree fw-semibold">Extra dropoff details ${index + 1}</span>
            <span class="dc-light">${add_to}<br>${add_to_date}, ${add_to_time}</span>
        </div>`);
                        })
                    }
                } else {
                    $('.jd_extra_dropoff_details').hide().removeClass('d-flex');
                }
            }

            $(document).ready(function () {
                $('#booking-form').on('input', function () {
                    $hire_reason = $('#hire_reason').val();
                    $vehicle_size = $('#bp_vehicle_size').val();
                    $additional_info = $('#additional_info').val();
                    $cabin_bags = $('#cabin_bags').val();
                    $luggage_bags = $('#luggage_bags').val();
                    updateValues();
                })
                updateValues();
                $('#hire_reason').val($hire_reason);
                $('#hire_reason').trigger('change');
                $('#bp_vehicle_size').val($vehicle_size);
                $('#bp_vehicle_size').trigger('change');

                $('#booking-form').on('submit', function (e) {
                    e.preventDefault();
                    let $form = $(this);

                    $form.find('button[type="submit"]').prop('disabled', true).html('Processing quote...');
                    let formData = $form.serialize();
                    console.log(formData);
                    // AJAX request
                    $.ajax({
                        url: 'process-main.php', // URL to the PHP processing script
                        type: 'POST', // HTTP method
                        data: formData, // Data to send
                        success: function (response) {
                            // Handle success response
                            console.log(response);
                            response = JSON.parse(response);
                            if (response.status == 'success') {
                                window.location = 'booking-confirmation.php?success=1';
                            } else {
                                window.location = 'booking-confirmation.php?success=0';
                            }
                            $form.find('button[type="submit"]').prop('disabled', false).html('Get Instant Quote');
                        },
                        error: function (xhr, status, error) {
                            // Handle error response
                            console.error(xhr.responseText || error);
                            $form.find('button[type="submit"]').prop('disabled', false).html('Get Instant Quote');
                        }
                    });

                })
            })
        </script>
    </body>

</html>