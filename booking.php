<?php
print_r($_REQUEST);
if (isset($_REQUEST['get_quote'])) {
    $name = $_REQUEST['name'] ?? null;
    $email = $_REQUEST['email'] ?? null;
    $to = $_REQUEST['to'] ?? null;
    $from = $_REQUEST['from'] ?? null;
    $pickup_date = $_REQUEST['pickup-date'] ?? null;
    $return_date = $_REQUEST['return-date'] ?? null;
    $passengers = $_REQUEST['passengers'] ?? 0;
    $cabin_bags = $_REQUEST['cabin-bags'] ?? 0;
    $luggage_bags = $_REQUEST['luggage-bags'] ?? 0;
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
        <link rel="stylesheet" href="./assets/css/style.css?v=3">
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
                            <button class="nav-link" id="3-tab" data-bs-toggle="tab" data-bs-target="#3" type="button"
                                role="tab" aria-controls="3" aria-selected="false">
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
                                        <span class="fw-bold lh-1">Contact </span>
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
                                    <div class="col-xl-9 col-lg-8">
                                        <div class="details-form pe-xxl-4">
                                            <div class="d-flex flex-column df-flex-1">
                                            <input type="hidden" required name="to" value="<?php echo $to; ?>">
                                            <input type="hidden" required name="from" value="<?php echo $from; ?>">
                                                <h5 class="fw-medium mb-0 df-title text-main">Additional Information
                                                </h5>
                                                <div class="d-flex flex-column gap-4">
                                                    <div class="d-flex flex-column gap-10px">
                                                        <div class="df-group p-4 d-flex flex-column gap-4">
                                                            <div class="d-flex flex-column gap-10px">
                                                                <label class="fw-bold df-label">Outbound additional
                                                                    pickups?*</label>
                                                                <div class="d-flex align-items-center gap-4">
                                                                    <label class="d-flex align-items-center gap-10px">
                                                                        <input type="radio"
                                                                            class="form-check-input dfc-inp" value="Yes"
                                                                            name="outbound_pickup">
                                                                        <span class="lh-1 dfci-text inter">Yes</span>
                                                                    </label>
                                                                    <label class="d-flex align-items-center gap-10px">
                                                                        <input type="radio"
                                                                            class="form-check-input dfc-inp" value="No"
                                                                            required checked name="outbound_pickup">
                                                                        <span class="lh-1 dfci-text inter">No</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="hff-box">
                                                                <div class="hff-group hfg-from">
                                                                    <span class="lh-sm df-note">Please fill out the text
                                                                        box per additional Pickups.</span>
                                                                    <div class="d-flex align-items-center hff-flex-1">
                                                                        <span>
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g clip-path="url(#clip0_156_3598)">
                                                                                    <path
                                                                                        d="M4.09167 11.6668H3.33333C3.11232 11.6668 2.90036 11.579 2.74408 11.4227C2.5878 11.2664 2.5 11.0544 2.5 10.8334V2.50008C2.5 2.27907 2.5878 2.06711 2.74408 1.91083C2.90036 1.75455 3.11232 1.66675 3.33333 1.66675H15.2333C15.408 1.6663 15.5785 1.72077 15.7205 1.82245C15.8626 1.92414 15.9691 2.0679 16.025 2.23342L17.5 6.54175L17.5417 6.80008V10.8334C17.5417 11.0544 17.4539 11.2664 17.2976 11.4227C17.1413 11.579 16.9293 11.6668 16.7083 11.6668H15.95"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="0.833333"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M2.5 6.66675H17.5M12.45 11.6667H7.56667M5.83333 10.0001C5.5037 10.0001 5.18146 10.0978 4.90738 10.281C4.6333 10.4641 4.41968 10.7244 4.29353 11.0289C4.16739 11.3335 4.13438 11.6686 4.19869 11.9919C4.263 12.3152 4.42173 12.6122 4.65482 12.8453C4.88791 13.0783 5.18488 13.2371 5.50818 13.3014C5.83148 13.3657 6.1666 13.3327 6.47114 13.2065C6.77568 13.0804 7.03598 12.8668 7.21912 12.5927C7.40225 12.3186 7.5 11.9964 7.5 11.6667C7.5 11.2247 7.3244 10.8008 7.01184 10.4882C6.69928 10.1757 6.27536 10.0001 5.83333 10.0001ZM14.1667 10.0001C13.837 10.0001 13.5148 10.0978 13.2407 10.281C12.9666 10.4641 12.753 10.7244 12.6269 11.0289C12.5007 11.3335 12.4677 11.6686 12.532 11.9919C12.5963 12.3152 12.7551 12.6122 12.9882 12.8453C13.2212 13.0783 13.5182 13.2371 13.8415 13.3014C14.1648 13.3657 14.4999 13.3327 14.8045 13.2065C15.109 13.0804 15.3693 12.8668 15.5524 12.5927C15.7356 12.3186 15.8333 11.9964 15.8333 11.6667C15.8333 11.2247 15.6577 10.8008 15.3452 10.4882C15.0326 10.1757 14.6087 10.0001 14.1667 10.0001ZM7.5 6.66675H12.5V1.66675H7.5V6.66675Z"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="0.833333"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M0.625 16.6406C6.88984 16.6406 13.1547 16.6406 19.6094 16.6406C19.6094 17.0256 19.6094 17.4106 19.6094 17.8073C13.3445 17.8073 7.07969 17.8073 0.625 17.8073C0.625 17.4223 0.625 17.0373 0.625 16.6406Z"
                                                                                        fill="#656E77" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_156_3598">
                                                                                        <rect width="20" height="20"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                        </span>
                                                                        <div
                                                                            class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-center">
                                                                            <input type="text"
                                                                                class="hf-inp p-0 border-0" value=""
                                                                                readonly
                                                                                placeholder="Outbound pickup..."
                                                                                name="outbound_pickup_location"
                                                                                id="from-destination">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="df-group p-4 d-flex flex-column gap-4">
                                                            <div class="d-flex flex-column gap-10px">
                                                                <label class="fw-bold df-label">Return additional
                                                                    dropoffs?*</label>
                                                                <div class="d-flex align-items-center gap-4">
                                                                    <label class="d-flex align-items-center gap-10px">
                                                                        <input type="radio"
                                                                            class="form-check-input dfc-inp" value="Yes"
                                                                            name="return_pickup">
                                                                        <span class="lh-1 dfci-text inter">Yes</span>
                                                                    </label>
                                                                    <label class="d-flex align-items-center gap-10px">
                                                                        <input type="radio"
                                                                            class="form-check-input dfc-inp" value="No"
                                                                            required checked name="return_pickup">
                                                                        <span class="lh-1 dfci-text inter">No</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="hff-box">
                                                                <div class="hff-group hfg-from">
                                                                    <span class="lh-sm df-note">Please fill out the text
                                                                        box per additional Pickups.</span>
                                                                    <div class="d-flex align-items-center hff-flex-1">
                                                                        <span>
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g clip-path="url(#clip0_156_3623)">
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
                                                                                        d="M19.375 16.6406C13.1102 16.6406 6.84531 16.6406 0.390625 16.6406C0.390625 17.0256 0.390625 17.4106 0.390625 17.8073C6.65547 17.8073 12.9203 17.8073 19.375 17.8073C19.375 17.4223 19.375 17.0373 19.375 16.6406Z"
                                                                                        fill="#656E77" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath id="clip0_156_3623">
                                                                                        <rect width="20" height="20"
                                                                                            fill="white"
                                                                                            transform="matrix(-1 0 0 1 20 0)" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                        </span>
                                                                        <div
                                                                            class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-center">
                                                                            <input type="text"
                                                                                class="hf-inp p-0 border-0" value=""
                                                                                readonly placeholder="Return pickup..."
                                                                                name="return_pickup_location"
                                                                                id="to-destination">
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                                                class="hff-row d-flex flex-sm-row flex-column hff-flex-1">
                                                                <div class="hff-box hfb-sm">
                                                                    <div class="hff-group hfg-from">
                                                                        <label class="hff-label fw-bold"> Small Luggage
                                                                            (optional) </label>
                                                                        <div
                                                                            class="d-flex align-items-center hff-flex-1">
                                                                            <span>
                                                                                <svg width="18" height="19"
                                                                                    viewBox="0 0 18 19" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M2.25 7.25C2.25 6.85218 2.40804 6.47064 2.68934 6.18934C2.97064 5.90804 3.35218 5.75 3.75 5.75H14.25C14.6478 5.75 15.0294 5.90804 15.3107 6.18934C15.592 6.47064 15.75 6.85218 15.75 7.25V14C15.75 14.3978 15.592 14.7794 15.3107 15.0607C15.0294 15.342 14.6478 15.5 14.25 15.5H3.75C3.35218 15.5 2.97064 15.342 2.68934 15.0607C2.40804 14.7794 2.25 14.3978 2.25 14V7.25Z"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"></path>
                                                                                    <path
                                                                                        d="M6 5.75V4.25C6 3.85218 6.15804 3.47064 6.43934 3.18934C6.72064 2.90804 7.10218 2.75 7.5 2.75H10.5C10.8978 2.75 11.2794 2.90804 11.5607 3.18934C11.842 3.47064 12 3.85218 12 4.25V5.75"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"></path>
                                                                                    <path d="M9 9.5V9.5075"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"></path>
                                                                                    <path
                                                                                        d="M2.25 10.25C4.34369 11.305 6.65552 11.8546 9 11.8546C11.3445 11.8546 13.6563 11.305 15.75 10.25"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <div
                                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-center">
                                                                                <input type="number"
                                                                                    name="small_luggage"
                                                                                    class="hf-inp p-0 border-0" min="0"
                                                                                    value="<?php echo $cabin_bags; ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="hff-box hfb-sm">
                                                                    <div class="hff-group hfg-from">
                                                                        <label class="hff-label fw-bold"> Large Luggage
                                                                            (optional) </label>
                                                                        <div
                                                                            class="d-flex align-items-center hff-flex-1">
                                                                            <span>
                                                                                <svg width="19" height="19"
                                                                                    viewBox="0 0 19 19" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M5 6.5C5 6.10218 5.15804 5.72064 5.43934 5.43934C5.72064 5.15804 6.10218 5 6.5 5H12.5C12.8978 5 13.2794 5.15804 13.5607 5.43934C13.842 5.72064 14 6.10218 14 6.5V14C14 14.3978 13.842 14.7794 13.5607 15.0607C13.2794 15.342 12.8978 15.5 12.5 15.5H6.5C6.10218 15.5 5.72064 15.342 5.43934 15.0607C5.15804 14.7794 5 14.3978 5 14V6.5Z"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"></path>
                                                                                    <path
                                                                                        d="M7.25 5V4.25C7.25 3.85218 7.40804 3.47064 7.68934 3.18934C7.97064 2.90804 8.35218 2.75 8.75 2.75H10.25C10.6478 2.75 11.0294 2.90804 11.3107 3.18934C11.592 3.47064 11.75 3.85218 11.75 4.25V5"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"></path>
                                                                                    <path d="M5 8H14" stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"></path>
                                                                                    <path d="M5 12.5H14"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"></path>
                                                                                    <path d="M7.25 15.5V16.25"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"></path>
                                                                                    <path d="M11.75 15.5V16.25"
                                                                                        stroke="#656E77"
                                                                                        stroke-width="1.2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <div
                                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-center">
                                                                                <input type="number"
                                                                                    name="large_luggage"
                                                                                    class="hf-inp p-0 border-0" min="0"
                                                                                    value="<?php echo $luggage_bags; ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
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
                                                                                <select required
                                                                                    class="hf-inp bp-select form-select p-0 border-0"
                                                                                    name="vehicle_type"
                                                                                    id="bp_vehicle_type">
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
                                                                                    class="hf-inp bp-select form-select p-0 border-0">
                                                                                    <option value=""> Select reason
                                                                                    </option>
                                                                                    <option value="Airport Transfer">
                                                                                        Airport Transfer</option>
                                                                                    <option value="Home Transfer">Home
                                                                                        Transfer</option>
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
                                                        <textarea name="additional"
                                                            class="df-textarea form-control no-box" required rows="4"
                                                            placeholder="Please add additional details here"></textarea>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type="button"
                                                        class="btn hff-submit-btn df-btn btn-ferozi fw-bold"
                                                        onclick="switchTab('3-tab')">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4">
                                        <div class="details-card">
                                            <div class="d-flex flex-column dc-flex">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h5 class="dc-title mb-0 fw-bold">Journey Details</h5>
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">No. of
                                                                travelers</span>
                                                            <span class="dc-light not-detail">--</span>
                                                        </div>
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">From</span>
                                                            <span class="dc-light from-detail">--</span>
                                                        </div>
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">To</span>
                                                            <span class="dc-light to-detail">--</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column gap-10px">
                                                    <h5 class="dc-title mb-0 fw-bold">Outbound Journey Details</h5>
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Pickup Date &
                                                                Time:</span>
                                                            <span class="dc-light out-date-detail">--</span>
                                                        </div>
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Pickup
                                                                point</span>
                                                            <span class="dc-light out-pp-detail">--</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column gap-10px">
                                                    <h5 class="dc-title mb-0 fw-bold">Additional Info</h5>
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Vehicle
                                                                Type:</span>
                                                            <span class="dc-light vt-detail">--</span>
                                                        </div>
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Reason For
                                                                Travel:</span>
                                                            <span class="dc-light rft-detail">--</span>
                                                        </div>
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Number Of
                                                                Passenger:</span>
                                                            <span class="dc-light nop-detail">-</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column gap-10px">
                                                    <h5 class="dc-title mb-0 fw-bold">Return Journey Details</h5>
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Return Date &
                                                                Time:</span>
                                                            <span class="dc-light return-date-detail">--</span>
                                                        </div>
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Pickup
                                                                point</span>
                                                            <span class="dc-light return-pp-detail">--</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="3" role="tabpanel" aria-labelledby="3-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9 col-lg-8">
                                        <div class="details-form pe-xxl-4">
                                            <div class="d-flex flex-column df-flex-1">
                                                <div class="d-flex flex-column">
                                                    <h5 class="fw-medium mb-0 df-title text-main">Contact Information
                                                    </h5>
                                                    <p class="mb-0 df-note">Please enter your contact details where you
                                                        wish to get contacted later on. These details will be used for
                                                        all future communications.</p>
                                                </div>
                                                <div class="d-flex flex-column gap-4">
                                                    <div class="d-flex flex-column gap-10px">
                                                        <div class="d-flex flex-column hff-flex-1">
                                                            <div
                                                                class="hff-row d-flex flex-sm-row flex-column hff-flex-1">
                                                                <div class="hff-box hfb-sm">
                                                                    <div class="hff-group hfg-from">
                                                                        <label class="hff-label fw-bold"> First Name*
                                                                        </label>
                                                                        <div
                                                                            class="d-flex align-items-center hff-flex-1">
                                                                            <div
                                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-center">
                                                                                <input type="text"
                                                                                    class="hf-inp p-0 border-0"
                                                                                    name="first_name" id="first_name"
                                                                                    placeholder="eg: John"
                                                                                    value="<?php echo $name; ?>"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="hff-box hfb-sm">
                                                                    <div class="hff-group hfg-from">
                                                                        <label class="hff-label fw-bold"> Last Name*
                                                                        </label>
                                                                        <div
                                                                            class="d-flex align-items-center hff-flex-1">
                                                                            <div
                                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-center">
                                                                                <input type="text" name="last_name"
                                                                                    id="last_name"
                                                                                    class="hf-inp p-0 border-0"
                                                                                    placeholder="eg: Doe" value=""
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="hff-row d-flex flex-sm-row flex-column hff-flex-1">
                                                                <div class="hff-box hfb-sm">
                                                                    <div class="hff-group hfg-from">
                                                                        <label class="hff-label fw-bold"> Your Email*
                                                                        </label>
                                                                        <div
                                                                            class="d-flex align-items-center hff-flex-1">
                                                                            <div
                                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-center">
                                                                                <input type="email" name="email"
                                                                                    id="email"
                                                                                    class="hf-inp p-0 border-0"
                                                                                    placeholder="eg: abc@--.com"
                                                                                    value="<?php echo $email; ?>"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="hff-box hfb-sm">
                                                                    <div class="hff-group hfg-from">
                                                                        <label class="hff-label fw-bold"> Phone Number*
                                                                        </label>
                                                                        <div
                                                                            class="d-flex align-items-center hff-flex-1">
                                                                            <div
                                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-center">
                                                                                <input type="text"
                                                                                    class="hf-inp p-0 border-0"
                                                                                    name="phone_number"
                                                                                    id="phone_number"
                                                                                    placeholder="eg: +1 198 243 9824"
                                                                                    value="" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type="button"
                                                        class="btn hff-submit-btn df-btn btn-ferozi fw-bold"
                                                        onclick="switchTab('4-tab')">Go to final step</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4">
                                        <div class="details-card">
                                            <div class="d-flex flex-column dc-flex">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h5 class="dc-title mb-0 fw-bold">Journey Details</h5>
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">No. of
                                                                travelers</span>
                                                            <span class="dc-light not-detail">--</span>
                                                        </div>
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">From</span>
                                                            <span class="dc-light from-detail">--</span>
                                                        </div>
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">To</span>
                                                            <span class="dc-light to-detail">--</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column gap-10px">
                                                    <h5 class="dc-title mb-0 fw-bold">Outbound Journey Details</h5>
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Pickup Date &
                                                                Time:</span>
                                                            <span class="dc-light out-date-detail">--</span>
                                                        </div>
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Pickup
                                                                point</span>
                                                            <span class="dc-light">--</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column gap-10px">
                                                    <h5 class="dc-title mb-0 fw-bold">Additional Info</h5>
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Vehicle
                                                                Type:</span>
                                                            <span class="dc-light vt-detail">--</span>
                                                        </div>
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Reason For
                                                                Travel:</span>
                                                            <span class="dc-light rft-detail">--</span>
                                                        </div>
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Number Of
                                                                Passenger:</span>
                                                            <span class="dc-light nop-detail">-</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column gap-10px">
                                                    <h5 class="dc-title mb-0 fw-bold">Return Journey Details</h5>
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Return Date &
                                                                Time:</span>
                                                            <span class="dc-light return-date-detail">--</span>
                                                        </div>
                                                        <div class="d-flex align-items-center dc-row">
                                                            <span class="dc-dark figtree fw-semibold">Pickup
                                                                point</span>
                                                            <span class="dc-light">--</span>
                                                        </div>
                                                    </div>
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
                                    <div class="col-xl-8 col-lg-9">
                                        <div class="details-form pe-xxl-4">
                                            <div class="d-flex flex-column df-flex-1">
                                                <div class="d-flex flex-column">
                                                    <h5 class="fw-medium mb-0 df-title text-main">Confirm Details</h5>
                                                    <p class="mb-0 df-note">Please confirm all the details you have
                                                        entered. You will get a quote based on these details. </p>
                                                </div>
                                                <div class="df-flex-1 d-flex flex-wrap">
                                                    <div class="d-flex flex-column gap-10px dfc-box">
                                                        <h5 class="dc-title mb-0 fw-bold">Journey Details</h5>
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex align-items-center dc-row">
                                                                <span class="dc-dark figtree fw-semibold">No. of
                                                                    travelers</span>
                                                                <span class="dc-light not-detail">--</span>
                                                            </div>
                                                            <div class="d-flex align-items-center dc-row">
                                                                <span class="dc-dark figtree fw-semibold">From</span>
                                                                <span class="dc-light from-detail">--</span>
                                                            </div>
                                                            <div class="d-flex align-items-center dc-row">
                                                                <span class="dc-dark figtree fw-semibold">To</span>
                                                                <span class="dc-light to-detail">--</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column gap-10px dfc-box">
                                                        <h5 class="dc-title mb-0 fw-bold">Outbound Journey Details</h5>
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex align-items-center dc-row">
                                                                <span class="dc-dark figtree fw-semibold">Pickup Date &
                                                                    Time:</span>
                                                                <span class="dc-light return-date-detail">--</span>
                                                            </div>
                                                            <div class="d-flex align-items-center dc-row">
                                                                <span class="dc-dark figtree fw-semibold">Pickup
                                                                    point</span>
                                                                <span class="dc-light out-pp-detail">--</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column gap-10px dfc-box">
                                                        <h5 class="dc-title mb-0 fw-bold">Additional Info</h5>
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex align-items-center dc-row">
                                                                <span class="dc-dark figtree fw-semibold">Vehicle
                                                                    Type:</span>
                                                                <span class="dc-light vt-detail">--</span>
                                                            </div>
                                                            <div class="d-flex align-items-center dc-row">
                                                                <span class="dc-dark figtree fw-semibold">Reason For
                                                                    Travel:</span>
                                                                <span class="dc-light rft-detail">--</span>
                                                            </div>
                                                            <div class="d-flex align-items-center dc-row">
                                                                <span class="dc-dark figtree fw-semibold">Number Of
                                                                    Passenger:</span>
                                                                <span class="dc-light nop-detail"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column gap-10px dfc-box">
                                                        <h5 class="dc-title mb-0 fw-bold">Return Journey Details</h5>
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex align-items-center dc-row">
                                                                <span class="dc-dark figtree fw-semibold">Return Date &
                                                                    Time:</span>
                                                                <span class="dc-light return-date-detail">--</span>
                                                            </div>
                                                            <div class="d-flex align-items-center dc-row">
                                                                <span class="dc-dark figtree fw-semibold">Pickup
                                                                    point</span>
                                                                <span class="dc-light return-pp-detail">--</span>
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
        <!-- Modal -->
        <div class="modal fade" id="fromModal" tabindex="-1" aria-labelledby="fromModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="from-map"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="toModal" tabindex="-1" aria-labelledby="toModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="to-map"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="./assets/js/jquery-3.7.1.min.js"></script>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/select2.min.js"></script>
        <script src="./assets/js/jquery-ui.min.js"></script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCGxZXJ2gpN_is2UY1AXp98MN7sQHpIKk&callback=initMap&libraries=places"
            async defer></script>
        <script src="./assets/js/custom.js?v=3"></script>
        <script>
            let name = "<?php echo $name; ?>";
            let email = "<?php echo $email; ?>";
            let pp_date_detail = "<?php echo $pickup_date; ?>";
            let return_date_detail = "<?php echo $return_date; ?>";
            let from = "<?php echo $from; ?>";
            let to = "<?php echo $to; ?>";
            let outbound_pickup_location = "";
            let return_pickup_location = "";
            let passengers = "<?php echo $passengers; ?>";
            let cabin_bags = "<?php echo $cabin_bags; ?>";
            let luggage_bags = "<?php echo $luggage_bags; ?>";
            let vehicle_type = '';
            let reason_for_travel = '';

            function updateValues() {
                $('.from-detail').html(from);
                $('.to-detail').html(to);
                $('.out-pp-detail').html(outbound_pickup_location);
                $('.return-pp-detail').html(return_pickup_location);
                $('.out-date-detail').html(pp_date_detail);
                $('.return-date-detail').html(return_date_detail);
                $('.nop-detail,.not-detail').html(passengers);
                $('.rft-detail').html(reason_for_travel);
                $('.vt-detail').html(vehicle_type);
            }

            $(document).ready(function () {
                $('#booking-form').on('input', function () {
                    first_name = $('#first_name').val();
                    email = $('#email').val();
                    last_name = $('#last_name').val();
                    outbound_pickup_location = $('#from-destination').val();
                    return_pickup_location = $('#to-destination').val();
                    reason_for_travel = $('#hire_reason').val();
                    vehicle_type = $('#bp_vehicle_type').val();
                    updateValues();
                })
                updateValues();
            })
        </script>
    </body>

</html>