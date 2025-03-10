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
        <link rel="stylesheet" href="./assets/css/style.css?v=12">
    </head>

    <body class="homepage">
        <div class="position-relative">
            <div class="header-cont">
                <header class="header-1">
                    <nav class="navbar navbar-expand-lg py-3 navbar-light bg-light">
                        <div class="container py-0 my-0">
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
                                    <img src="./assets/img/logo-light.png" alt="Logo"
                                        class="d-inline-block align-text-top">
                                </a>
                            </div>
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
                    <div class="container position-relative z-1">
                        <div class="hero-1-cont hero-cont flex-xl-row flex-column gap-xl-0 gap-4 pb-xl-4 pb-0"
                            id="hero">
                            <div class="hc-content mt-lg-5">
                                <h2 class="hcc-title fw-normal d-flex flex-column mb-3">
                                    <span class="lh-sm hcct-1 text-white"> Book the Best Tours </span>
                                    <span class="ins-serif hcct-2">
                                        <img src="./assets/img/ferozi-blob-1.png" alt="Blob" class="hcct-bg">
                                        <span class="position-relative z-1">Coach Hire In UK</span>
                                    </span>
                                </h2>
                                <p class="text-white mb-0 hc-desc">Book now a free executive coach upgrade</p>
                            </div>
                            <div class="header-form hf-vertical ms-xl-auto mx-auto">
                                <form action="./booking.php" class="p-4 pb-2 hf-form hff-single-trip gap-2"
                                    method="POST">
                                    <div class="d-flex flex-column gap-3">
                                        <div
                                            class="p-1 d-flex align-items-center justify-content-between hf-filter-btns mb-1">
                                            <button type="button" class="btn hff-btn active" data-form-type="one-way">
                                                One way </button>
                                            <button type="button" class="btn hff-btn" data-form-type="round-trip">
                                                Return </button>
                                        </div>
                                        <div class="hff-flex-1 d-flex flex-column">
                                            <div class="hff-row d-flex flex-md-row flex-column hff-flex-1">
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Name </label>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span>
                                                                <svg width="19" height="19" viewBox="0 0 19 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M2.75 15.5C4.50184 13.6419 6.88026 12.5 9.5 12.5C12.1197 12.5 14.4982 13.6419 16.25 15.5"
                                                                        stroke="#656E77" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M9.5 9.5C11.364 9.5 12.875 7.98896 12.875 6.125C12.875 4.26104 11.364 2.75 9.5 2.75C7.63604 2.75 6.125 4.26104 6.125 6.125C6.125 7.98896 7.63604 9.5 9.5 9.5Z"
                                                                        stroke="#656E77" stroke-width="1.2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                            <div
                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                <input type="text" class="hf-inp p-0 border-0"
                                                                    placeholder="eg: Alex M" name="name" id="name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Email </label>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span>
                                                                <svg width="19" height="19" viewBox="0 0 19 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_157_1026)">
                                                                        <path
                                                                            d="M2.75 5.75C2.75 5.35218 2.90804 4.97064 3.18934 4.68934C3.47064 4.40804 3.85218 4.25 4.25 4.25H14.75C15.1478 4.25 15.5294 4.40804 15.8107 4.68934C16.092 4.97064 16.25 5.35218 16.25 5.75V13.25C16.25 13.6478 16.092 14.0294 15.8107 14.3107C15.5294 14.592 15.1478 14.75 14.75 14.75H4.25C3.85218 14.75 3.47064 14.592 3.18934 14.3107C2.90804 14.0294 2.75 13.6478 2.75 13.25V5.75Z"
                                                                            stroke="#656E77" stroke-width="1.2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M2.75 5.75L9.5 10.25L16.25 5.75"
                                                                            stroke="#656E77" stroke-width="1.2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_157_1026">
                                                                            <rect width="18" height="18" fill="white"
                                                                                transform="translate(0.5 0.5)" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </span>
                                                            <div
                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                <input type="text" class="hf-inp p-0 border-0"
                                                                    placeholder="eg: alexdavid@gmail.com" name="email"
                                                                    id="email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hff-row d-flex flex-md-row flex-column hff-flex-1">
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Telephone number </label>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span>
                                                                <svg width="19" height="19" viewBox="0 0 19 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M2.75 15.5C4.50184 13.6419 6.88026 12.5 9.5 12.5C12.1197 12.5 14.4982 13.6419 16.25 15.5"
                                                                        stroke="#656E77" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M9.5 9.5C11.364 9.5 12.875 7.98896 12.875 6.125C12.875 4.26104 11.364 2.75 9.5 2.75C7.63604 2.75 6.125 4.26104 6.125 6.125C6.125 7.98896 7.63604 9.5 9.5 9.5Z"
                                                                        stroke="#656E77" stroke-width="1.2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                            <div
                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                <input type="text" class="hf-inp hf-number p-0 border-0"
                                                                    placeholder="eg: 12345674455" name="phone"
                                                                    id="phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Purpose </label>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span>
                                                                <svg width="18" height="19" viewBox="0 0 18 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M2.25 15.5C4.00184 13.6419 6.38026 12.5 9 12.5C11.6197 12.5 13.9982 13.6419 15.75 15.5"
                                                                        stroke="#656E77" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M9 9.5C10.864 9.5 12.375 7.98896 12.375 6.125C12.375 4.26104 10.864 2.75 9 2.75C7.13604 2.75 5.625 4.26104 5.625 6.125C5.625 7.98896 7.13604 9.5 9 9.5Z"
                                                                        stroke="#656E77" stroke-width="1.2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                            <div
                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-center">
                                                                <select id="hire_reason" name="hire_reason"
                                                                    class="hf-inp hfi-select events_inp bp-select form-select p-0 border-0">
                                                                    <option value=""> Select reason </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hff-box hfb-destinations position-relative">
                                                <div class="hff-group hfg-from">
                                                    <label class="hff-label fw-bold"> Pickup </label>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_8_2845)">
                                                                    <path
                                                                        d="M4.09167 11.6668H3.33333C3.11232 11.6668 2.90036 11.579 2.74408 11.4227C2.5878 11.2664 2.5 11.0544 2.5 10.8334V2.50008C2.5 2.27907 2.5878 2.06711 2.74408 1.91083C2.90036 1.75455 3.11232 1.66675 3.33333 1.66675H15.2333C15.408 1.6663 15.5785 1.72077 15.7205 1.82245C15.8626 1.92414 15.9691 2.0679 16.025 2.23342L17.5 6.54175L17.5417 6.80008V10.8334C17.5417 11.0544 17.4539 11.2664 17.2976 11.4227C17.1413 11.579 16.9293 11.6668 16.7083 11.6668H15.95"
                                                                        stroke="#656E77" stroke-width="0.833333"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M2.5 6.66675H17.5M12.45 11.6667H7.56667M5.83333 10.0001C5.5037 10.0001 5.18146 10.0978 4.90738 10.281C4.6333 10.4641 4.41968 10.7244 4.29353 11.0289C4.16739 11.3335 4.13438 11.6686 4.19869 11.9919C4.263 12.3152 4.42173 12.6122 4.65482 12.8453C4.88791 13.0783 5.18488 13.2371 5.50818 13.3014C5.83148 13.3657 6.1666 13.3327 6.47114 13.2065C6.77568 13.0804 7.03598 12.8668 7.21912 12.5927C7.40225 12.3186 7.5 11.9964 7.5 11.6667C7.5 11.2247 7.3244 10.8008 7.01184 10.4882C6.69928 10.1757 6.27536 10.0001 5.83333 10.0001ZM14.1667 10.0001C13.837 10.0001 13.5148 10.0978 13.2407 10.281C12.9666 10.4641 12.753 10.7244 12.6269 11.0289C12.5007 11.3335 12.4677 11.6686 12.532 11.9919C12.5963 12.3152 12.7551 12.6122 12.9882 12.8453C13.2212 13.0783 13.5182 13.2371 13.8415 13.3014C14.1648 13.3657 14.4999 13.3327 14.8045 13.2065C15.109 13.0804 15.3693 12.8668 15.5524 12.5927C15.7356 12.3186 15.8333 11.9964 15.8333 11.6667C15.8333 11.2247 15.6577 10.8008 15.3452 10.4882C15.0326 10.1757 14.6087 10.0001 14.1667 10.0001ZM7.5 6.66675H12.5V1.66675H7.5V6.66675Z"
                                                                        stroke="#656E77" stroke-width="0.833333"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M0.625 16.6406C6.88984 16.6406 13.1547 16.6406 19.6094 16.6406C19.6094 17.0256 19.6094 17.4106 19.6094 17.8073C13.3445 17.8073 7.07969 17.8073 0.625 17.8073C0.625 17.4223 0.625 17.0373 0.625 16.6406Z"
                                                                        fill="#656E77" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_8_2845">
                                                                        <rect width="20" height="20" fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </span>
                                                        <div
                                                            class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                            <input type="text" id="from-destination" name="from"
                                                                placeholder="From..."
                                                                class="hf-inp loc-inp p-0 border-0">
                                                            <input type="hidden" name="from_lat" class="hidden_lat"
                                                                value="">
                                                            <input type="hidden" name="from_lng" class="hidden_lng"
                                                                value="">
                                                            <!-- <span class="hff-small">Main stop</span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hffb-line"></div>
                                                <div class="hff-group hfg-to">
                                                    <label class="hff-label fw-bold"> Drop-off </label>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_8_2856)">
                                                                    <path
                                                                        d="M15.9083 11.6668H16.6667C16.8877 11.6668 17.0996 11.579 17.2559 11.4227C17.4122 11.2664 17.5 11.0544 17.5 10.8334V2.50008C17.5 2.27907 17.4122 2.06711 17.2559 1.91083C17.0996 1.75455 16.8877 1.66675 16.6667 1.66675H4.76667C4.59196 1.6663 4.42154 1.72077 4.27948 1.82245C4.13741 1.92414 4.03091 2.0679 3.975 2.23342L2.5 6.54175L2.45833 6.80008V10.8334C2.45833 11.0544 2.54613 11.2664 2.70241 11.4227C2.85869 11.579 3.07065 11.6668 3.29167 11.6668H4.05"
                                                                        stroke="#656E77" stroke-width="0.833333"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M17.5 6.66675H2.5M7.55 11.6667H12.4333M14.1667 10.0001C14.4963 10.0001 14.8185 10.0978 15.0926 10.281C15.3667 10.4641 15.5803 10.7244 15.7065 11.0289C15.8326 11.3335 15.8656 11.6686 15.8013 11.9919C15.737 12.3152 15.5783 12.6122 15.3452 12.8453C15.1121 13.0783 14.8151 13.2371 14.4918 13.3014C14.1685 13.3657 13.8334 13.3327 13.5289 13.2065C13.2243 13.0804 12.964 12.8668 12.7809 12.5927C12.5977 12.3186 12.5 11.9964 12.5 11.6667C12.5 11.2247 12.6756 10.8008 12.9882 10.4882C13.3007 10.1757 13.7246 10.0001 14.1667 10.0001ZM5.83333 10.0001C6.16297 10.0001 6.4852 10.0978 6.75928 10.281C7.03337 10.4641 7.24699 10.7244 7.37313 11.0289C7.49928 11.3335 7.53228 11.6686 7.46798 11.9919C7.40367 12.3152 7.24493 12.6122 7.01184 12.8453C6.77876 13.0783 6.48179 13.2371 6.15848 13.3014C5.83518 13.3657 5.50007 13.3327 5.19553 13.2065C4.89098 13.0804 4.63069 12.8668 4.44755 12.5927C4.26442 12.3186 4.16667 11.9964 4.16667 11.6667C4.16667 11.2247 4.34226 10.8008 4.65482 10.4882C4.96738 10.1757 5.39131 10.0001 5.83333 10.0001ZM12.5 6.66675H7.5V1.66675H12.5V6.66675Z"
                                                                        stroke="#656E77" stroke-width="0.833333"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M0.625 16.6406C6.88984 16.6406 13.1547 16.6406 19.6094 16.6406C19.6094 17.0256 19.6094 17.4106 19.6094 17.8073C13.3445 17.8073 7.07969 17.8073 0.625 17.8073C0.625 17.4223 0.625 17.0373 0.625 16.6406Z"
                                                                        fill="#656E77" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_8_2856">
                                                                        <rect width="20" height="20" fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </span>
                                                        <div
                                                            class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                            <input type="text" id="to-destination" name="to"
                                                                placeholder="To..." class="hf-inp loc-inp p-0 border-0">
                                                            <input type="hidden" name="to_lat" class="hidden_lat"
                                                                value="">
                                                            <input type="hidden" name="to_lng" class="hidden_lng"
                                                                value="">
                                                            <!-- <span class="hff-small">Airport stop</span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reverse-btn">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.2803 2.46967C12.9874 2.17678 12.5126 2.17678 12.2197 2.46967L9.21967 5.46967C8.92678 5.76256 8.92678 6.23744 9.21967 6.53033C9.51256 6.82322 9.98744 6.82322 10.2803 6.53033L12 4.81066L12 15C12 15.4142 12.3358 15.75 12.75 15.75C13.1642 15.75 13.5 15.4142 13.5 15V4.81066L15.2197 6.53033C15.5126 6.82322 15.9874 6.82322 16.2803 6.53033C16.5732 6.23744 16.5732 5.76256 16.2803 5.46967L13.2803 2.46967Z"
                                                            fill="white" />
                                                        <path
                                                            d="M6 3C6 2.58579 5.66421 2.25 5.25 2.25C4.83579 2.25 4.5 2.58579 4.5 3V13.1893L2.78033 11.4697C2.48744 11.1768 2.01256 11.1768 1.71967 11.4697C1.42678 11.7626 1.42678 12.2374 1.71967 12.5303L4.71967 15.5303C5.01256 15.8232 5.48744 15.8232 5.78033 15.5303L8.78033 12.5303C9.07322 12.2374 9.07322 11.7626 8.78033 11.4697C8.48744 11.1768 8.01256 11.1768 7.71967 11.4697L6 13.1893V3Z"
                                                            fill="white" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="hff-row d-flex flex-md-row flex-column hff-flex-1 hffr-row">
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Pickup date </label>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span>
                                                                <svg width="18" height="19" viewBox="0 0 18 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 2V5M6 2V5M2.25 8H15.75M3.75 3.5H14.25C15.0784 3.5 15.75 4.17157 15.75 5V15.5C15.75 16.3284 15.0784 17 14.25 17H3.75C2.92157 17 2.25 16.3284 2.25 15.5V5C2.25 4.17157 2.92157 3.5 3.75 3.5Z"
                                                                        stroke="#656E77" stroke-width="1.2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                            <div
                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                <input type="text" class="hf-date hf-inp p-0 border-0"
                                                                    placeholder="eg: 20 Jan 25" name="pickup_date"
                                                                    id="pickup_date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Pickup time </label>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span>
                                                                <svg width="17" height="18" viewBox="0 0 17 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_734_5155)">
                                                                        <path
                                                                            d="M2.125 8.79639C2.125 9.63356 2.28989 10.4625 2.61027 11.236C2.93064 12.0094 3.40022 12.7122 3.99219 13.3042C4.58417 13.8962 5.28694 14.3657 6.06039 14.6861C6.83384 15.0065 7.66282 15.1714 8.5 15.1714C9.33718 15.1714 10.1662 15.0065 10.9396 14.6861C11.7131 14.3657 12.4158 13.8962 13.0078 13.3042C13.5998 12.7122 14.0694 12.0094 14.3897 11.236C14.7101 10.4625 14.875 9.63356 14.875 8.79639C14.875 7.95921 14.7101 7.13023 14.3897 6.35678C14.0694 5.58333 13.5998 4.88055 13.0078 4.28858C12.4158 3.69661 11.7131 3.22703 10.9396 2.90665C10.1662 2.58628 9.33718 2.42139 8.5 2.42139C7.66282 2.42139 6.83384 2.58628 6.06039 2.90665C5.28694 3.22703 4.58417 3.69661 3.99219 4.28858C3.40022 4.88055 2.93064 5.58333 2.61027 6.35678C2.28989 7.13023 2.125 7.95921 2.125 8.79639Z"
                                                                            stroke="#656E77" stroke-width="1.2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 8.79639H10.9792" stroke="#656E77"
                                                                            stroke-width="1.2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 5.25464V8.79631" stroke="#656E77"
                                                                            stroke-width="1.2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_734_5155">
                                                                            <rect width="17" height="17" fill="white"
                                                                                transform="translate(0 0.296387)" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </span>
                                                            <div
                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                <select
                                                                    class="hf-inp hfi-select hfi-time p-0 border-0 form-control"
                                                                    name="pickup_time" id="pickup_time">
                                                                    <option value="">Select time...</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Passengers </label>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span>
                                                                <svg width="18" height="19" viewBox="0 0 18 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M2.25 15.5C4.00184 13.6419 6.38026 12.5 9 12.5C11.6197 12.5 13.9982 13.6419 15.75 15.5"
                                                                        stroke="#656E77" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M9 9.5C10.864 9.5 12.375 7.98896 12.375 6.125C12.375 4.26104 10.864 2.75 9 2.75C7.13604 2.75 5.625 4.26104 5.625 6.125C5.625 7.98896 7.13604 9.5 9 9.5Z"
                                                                        stroke="#656E77" stroke-width="1.2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                            <div
                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                <input type="text" name="passengers" id="passengers"
                                                                    class="hf-inp hf-number form-control p-0 border-0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hff-box hfb-round hfb-destinations position-relative">
                                                <div class="hff-group hfg-from">
                                                    <label class="hff-label fw-bold"> Return drop-off address (If
                                                        different from pickup address) </label>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_8_2845)">
                                                                    <path
                                                                        d="M4.09167 11.6668H3.33333C3.11232 11.6668 2.90036 11.579 2.74408 11.4227C2.5878 11.2664 2.5 11.0544 2.5 10.8334V2.50008C2.5 2.27907 2.5878 2.06711 2.74408 1.91083C2.90036 1.75455 3.11232 1.66675 3.33333 1.66675H15.2333C15.408 1.6663 15.5785 1.72077 15.7205 1.82245C15.8626 1.92414 15.9691 2.0679 16.025 2.23342L17.5 6.54175L17.5417 6.80008V10.8334C17.5417 11.0544 17.4539 11.2664 17.2976 11.4227C17.1413 11.579 16.9293 11.6668 16.7083 11.6668H15.95"
                                                                        stroke="#656E77" stroke-width="0.833333"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M2.5 6.66675H17.5M12.45 11.6667H7.56667M5.83333 10.0001C5.5037 10.0001 5.18146 10.0978 4.90738 10.281C4.6333 10.4641 4.41968 10.7244 4.29353 11.0289C4.16739 11.3335 4.13438 11.6686 4.19869 11.9919C4.263 12.3152 4.42173 12.6122 4.65482 12.8453C4.88791 13.0783 5.18488 13.2371 5.50818 13.3014C5.83148 13.3657 6.1666 13.3327 6.47114 13.2065C6.77568 13.0804 7.03598 12.8668 7.21912 12.5927C7.40225 12.3186 7.5 11.9964 7.5 11.6667C7.5 11.2247 7.3244 10.8008 7.01184 10.4882C6.69928 10.1757 6.27536 10.0001 5.83333 10.0001ZM14.1667 10.0001C13.837 10.0001 13.5148 10.0978 13.2407 10.281C12.9666 10.4641 12.753 10.7244 12.6269 11.0289C12.5007 11.3335 12.4677 11.6686 12.532 11.9919C12.5963 12.3152 12.7551 12.6122 12.9882 12.8453C13.2212 13.0783 13.5182 13.2371 13.8415 13.3014C14.1648 13.3657 14.4999 13.3327 14.8045 13.2065C15.109 13.0804 15.3693 12.8668 15.5524 12.5927C15.7356 12.3186 15.8333 11.9964 15.8333 11.6667C15.8333 11.2247 15.6577 10.8008 15.3452 10.4882C15.0326 10.1757 14.6087 10.0001 14.1667 10.0001ZM7.5 6.66675H12.5V1.66675H7.5V6.66675Z"
                                                                        stroke="#656E77" stroke-width="0.833333"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M0.625 16.6406C6.88984 16.6406 13.1547 16.6406 19.6094 16.6406C19.6094 17.0256 19.6094 17.4106 19.6094 17.8073C13.3445 17.8073 7.07969 17.8073 0.625 17.8073C0.625 17.4223 0.625 17.0373 0.625 16.6406Z"
                                                                        fill="#656E77" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_8_2845">
                                                                        <rect width="20" height="20" fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </span>
                                                        <div
                                                            class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                            <input type="text" name="return_dropoff" id="return_dropoff"
                                                                placeholder="Return drop-off..."
                                                                class="hf-inp loc-inp p-0 border-0">
                                                            <input type="hidden" name="return_lat" class="hidden_lat"
                                                                value="">
                                                            <input type="hidden" name="return_lng" class="hidden_lng"
                                                                value="">
                                                            <!-- <span class="hff-small">Main stop</span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="hff-row hfb-round d-flex flex-md-row flex-column hff-flex-1 hffr-row">
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Return Drop-off date </label>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span>
                                                                <svg width="18" height="19" viewBox="0 0 18 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 2V5M6 2V5M2.25 8H15.75M3.75 3.5H14.25C15.0784 3.5 15.75 4.17157 15.75 5V15.5C15.75 16.3284 15.0784 17 14.25 17H3.75C2.92157 17 2.25 16.3284 2.25 15.5V5C2.25 4.17157 2.92157 3.5 3.75 3.5Z"
                                                                        stroke="#656E77" stroke-width="1.2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                            <div
                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                <input type="text" class="hf-date hf-inp p-0 border-0"
                                                                    placeholder="eg: 20 Jan 25"
                                                                    name="return_dropoff_date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Return Drop-off time </label>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span>
                                                                <svg width="17" height="18" viewBox="0 0 17 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_734_5155)">
                                                                        <path
                                                                            d="M2.125 8.79639C2.125 9.63356 2.28989 10.4625 2.61027 11.236C2.93064 12.0094 3.40022 12.7122 3.99219 13.3042C4.58417 13.8962 5.28694 14.3657 6.06039 14.6861C6.83384 15.0065 7.66282 15.1714 8.5 15.1714C9.33718 15.1714 10.1662 15.0065 10.9396 14.6861C11.7131 14.3657 12.4158 13.8962 13.0078 13.3042C13.5998 12.7122 14.0694 12.0094 14.3897 11.236C14.7101 10.4625 14.875 9.63356 14.875 8.79639C14.875 7.95921 14.7101 7.13023 14.3897 6.35678C14.0694 5.58333 13.5998 4.88055 13.0078 4.28858C12.4158 3.69661 11.7131 3.22703 10.9396 2.90665C10.1662 2.58628 9.33718 2.42139 8.5 2.42139C7.66282 2.42139 6.83384 2.58628 6.06039 2.90665C5.28694 3.22703 4.58417 3.69661 3.99219 4.28858C3.40022 4.88055 2.93064 5.58333 2.61027 6.35678C2.28989 7.13023 2.125 7.95921 2.125 8.79639Z"
                                                                            stroke="#656E77" stroke-width="1.2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 8.79639H10.9792" stroke="#656E77"
                                                                            stroke-width="1.2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 5.25464V8.79631" stroke="#656E77"
                                                                            stroke-width="1.2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_734_5155">
                                                                            <rect width="17" height="17" fill="white"
                                                                                transform="translate(0 0.296387)" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </span>
                                                            <div
                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                <select
                                                                    class="hf-inp hfi-select hfi-time p-0 border-0 form-control"
                                                                    name="return_dropoff_time" id="return_dropoff_time">
                                                                    <option value="">Select time...</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Passengers </label>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span>
                                                                <svg width="18" height="19" viewBox="0 0 18 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M2.25 15.5C4.00184 13.6419 6.38026 12.5 9 12.5C11.6197 12.5 13.9982 13.6419 15.75 15.5"
                                                                        stroke="#656E77" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M9 9.5C10.864 9.5 12.375 7.98896 12.375 6.125C12.375 4.26104 10.864 2.75 9 2.75C7.13604 2.75 5.625 4.26104 5.625 6.125C5.625 7.98896 7.13604 9.5 9 9.5Z"
                                                                        stroke="#656E77" stroke-width="1.2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                            <div
                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                <input type="text" name="return_passengers"
                                                                    id="return_passengers"
                                                                    class="hf-inp hf-number form-control p-0 border-0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hff-row d-flex flex-md-row flex-column hff-flex-1">
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Vehicle Size </label>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span>
                                                                <svg width="20" height="21" viewBox="0 0 20 21"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_156_3951)">
                                                                        <path
                                                                            d="M4.09167 12.1668H3.33333C3.11232 12.1668 2.90036 12.079 2.74408 11.9227C2.5878 11.7664 2.5 11.5544 2.5 11.3334V3.00008C2.5 2.77907 2.5878 2.56711 2.74408 2.41083C2.90036 2.25455 3.11232 2.16675 3.33333 2.16675H15.2333C15.408 2.1663 15.5785 2.22077 15.7205 2.32245C15.8626 2.42414 15.9691 2.5679 16.025 2.73342L17.5 7.04175L17.5417 7.30008V11.3334C17.5417 11.5544 17.4539 11.7664 17.2976 11.9227C17.1413 12.079 16.9293 12.1668 16.7083 12.1668H15.95"
                                                                            stroke="#656E77" stroke-width="0.833333"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M2.5 7.16675H17.5M12.45 12.1667H7.56667M5.83333 10.5001C5.5037 10.5001 5.18146 10.5978 4.90738 10.781C4.6333 10.9641 4.41968 11.2244 4.29353 11.5289C4.16739 11.8335 4.13438 12.1686 4.19869 12.4919C4.263 12.8152 4.42173 13.1122 4.65482 13.3453C4.88791 13.5783 5.18488 13.7371 5.50818 13.8014C5.83148 13.8657 6.1666 13.8327 6.47114 13.7065C6.77568 13.5804 7.03598 13.3668 7.21912 13.0927C7.40225 12.8186 7.5 12.4964 7.5 12.1667C7.5 11.7247 7.3244 11.3008 7.01184 10.9882C6.69928 10.6757 6.27536 10.5001 5.83333 10.5001ZM14.1667 10.5001C13.837 10.5001 13.5148 10.5978 13.2407 10.781C12.9666 10.9641 12.753 11.2244 12.6269 11.5289C12.5007 11.8335 12.4677 12.1686 12.532 12.4919C12.5963 12.8152 12.7551 13.1122 12.9882 13.3453C13.2212 13.5783 13.5182 13.7371 13.8415 13.8014C14.1648 13.8657 14.4999 13.8327 14.8045 13.7065C15.109 13.5804 15.3693 13.3668 15.5524 13.0927C15.7356 12.8186 15.8333 12.4964 15.8333 12.1667C15.8333 11.7247 15.6577 11.3008 15.3452 10.9882C15.0326 10.6757 14.6087 10.5001 14.1667 10.5001ZM7.5 7.16675H12.5V2.16675H7.5V7.16675Z"
                                                                            stroke="#656E77" stroke-width="0.833333"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M0.625 17.1406C6.88984 17.1406 13.1547 17.1406 19.6094 17.1406C19.6094 17.5256 19.6094 17.9106 19.6094 18.3073C13.3445 18.3073 7.07969 18.3073 0.625 18.3073C0.625 17.9223 0.625 17.5373 0.625 17.1406Z"
                                                                            fill="#656E77" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_156_3951">
                                                                            <rect width="20" height="20" fill="white"
                                                                                transform="translate(0 0.5)" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </span>
                                                            <div
                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-center">
                                                                <select
                                                                    class="hf-inp hfi-select form-select px-0 border-0"
                                                                    name="vehicle_size" id="bp_vehicle_size">
                                                                    <option value="">Select vehicle... </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Extra Stops </label>
                                                        <div class="d-flex align-items-center gap-4 mt-1">
                                                            <label class="d-flex align-items-center gap-1">
                                                                <input type="radio"
                                                                    class="form-check-input dfc-inp dfc-inp-sm"
                                                                    value="Yes" name="extra_stops">
                                                                <span class="lh-1 dfci-text inter">Yes</span>
                                                            </label>
                                                            <label class="d-flex align-items-center gap-1">
                                                                <input type="radio"
                                                                    class="form-check-input dfc-inp dfc-inp-sm"
                                                                    value="No" checked name="extra_stops">
                                                                <span class="lh-1 dfci-text inter">No</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hff-row d-flex flex-md-row flex-column hff-flex-1">
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Cabin bag </label>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span>
                                                                <svg width="18" height="19" viewBox="0 0 18 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M2.25 7.25C2.25 6.85218 2.40804 6.47064 2.68934 6.18934C2.97064 5.90804 3.35218 5.75 3.75 5.75H14.25C14.6478 5.75 15.0294 5.90804 15.3107 6.18934C15.592 6.47064 15.75 6.85218 15.75 7.25V14C15.75 14.3978 15.592 14.7794 15.3107 15.0607C15.0294 15.342 14.6478 15.5 14.25 15.5H3.75C3.35218 15.5 2.97064 15.342 2.68934 15.0607C2.40804 14.7794 2.25 14.3978 2.25 14V7.25Z"
                                                                        stroke="#656E77" stroke-width="1.2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M6 5.75V4.25C6 3.85218 6.15804 3.47064 6.43934 3.18934C6.72064 2.90804 7.10218 2.75 7.5 2.75H10.5C10.8978 2.75 11.2794 2.90804 11.5607 3.18934C11.842 3.47064 12 3.85218 12 4.25V5.75"
                                                                        stroke="#656E77" stroke-width="1.2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M9 9.5V9.5075" stroke="#656E77"
                                                                        stroke-width="1.2" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M2.25 10.25C4.34369 11.305 6.65552 11.8546 9 11.8546C11.3445 11.8546 13.6563 11.305 15.75 10.25"
                                                                        stroke="#656E77" stroke-width="1.2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                            <div
                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                <input type="text" class="hf-inp hf-number p-0 border-0"
                                                                    value="1" name="cabin_bags" id="cabin_bags">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Luggage bag </label>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span>
                                                                <svg width="19" height="19" viewBox="0 0 19 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5 6.5C5 6.10218 5.15804 5.72064 5.43934 5.43934C5.72064 5.15804 6.10218 5 6.5 5H12.5C12.8978 5 13.2794 5.15804 13.5607 5.43934C13.842 5.72064 14 6.10218 14 6.5V14C14 14.3978 13.842 14.7794 13.5607 15.0607C13.2794 15.342 12.8978 15.5 12.5 15.5H6.5C6.10218 15.5 5.72064 15.342 5.43934 15.0607C5.15804 14.7794 5 14.3978 5 14V6.5Z"
                                                                        stroke="#656E77" stroke-width="1.2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M7.25 5V4.25C7.25 3.85218 7.40804 3.47064 7.68934 3.18934C7.97064 2.90804 8.35218 2.75 8.75 2.75H10.25C10.6478 2.75 11.0294 2.90804 11.3107 3.18934C11.592 3.47064 11.75 3.85218 11.75 4.25V5"
                                                                        stroke="#656E77" stroke-width="1.2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M5 8H14" stroke="#656E77"
                                                                        stroke-width="1.2" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M5 12.5H14" stroke="#656E77"
                                                                        stroke-width="1.2" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M7.25 15.5V16.25" stroke="#656E77"
                                                                        stroke-width="1.2" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M11.75 15.5V16.25" stroke="#656E77"
                                                                        stroke-width="1.2" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                            <div
                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                <input type="text" class="hf-inp p-0 border-0 hf-number"
                                                                    value="1" name="luggage_bags" id="luggage_bags">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hff-row d-flex flex-md-row flex-column hff-flex-1">
                                                <div class="hff-box hfb-sm">
                                                    <div class="hff-group hfg-from">
                                                        <label class="hff-label fw-bold"> Additional information
                                                        </label>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span>
                                                                <svg width="18" height="19" viewBox="0 0 18 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_734_5239)">
                                                                        <path d="M3 4.979H15" stroke="#656E77"
                                                                            stroke-width="1.2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3 9.979H13" stroke="#656E77"
                                                                            stroke-width="1.2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3 13.979H8" stroke="#656E77"
                                                                            stroke-width="1.2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_734_5239">
                                                                            <rect width="18" height="18" fill="white"
                                                                                transform="translate(0 0.479004)" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </span>
                                                            <div
                                                                class="d-flex flex-column gap-1 flex-grow-1 overflow-x-hidden justify-content-end h-100">
                                                                <textarea class="hf-inp p-0 border-0"
                                                                    id="additional_info" name="additional_info"
                                                                    rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-sticky bottom-0 pt-3 bg-white pb-3">
                                        <button type="submit" name="get_quote" value="1"
                                            class="btn hff-submit-btn btn-ferozi w-100">Get Instant Quote</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="hv-cont">
                        <video class="header-video" autoplay muted loop>
                            <source src="./assets/video/Header-Video.webm" type="video/webm">
                        </video>
                    </div>
                    <div class="header-vector hv-1">
                        <img src="./assets/img/ferozi-vector-1.png" alt="Header Vector" class="img-fluid w-100">
                    </div>
                </header>
                <div class="header-companies">
                    <div class="container">
                        <div
                            class="d-flex flex-column gap-4 mx-xl-0 mx-auto col-xxl-6 col-xl-7 col-lg-8 col-md-10 col-sm-11 align-items-center">
                            <p class="mb-3 hc-text fw-medium text-sm-start text-center">Join 1k + companies already
                                using our services!</p>
                            <div
                                class="hc-flex d-flex align-items-center flex-wrap justify-content justify-content-center">
                                <div>
                                    <img src="./assets/img/hc-logo-1.svg" alt="HC Logo" class="hc-logo">
                                </div>
                                <div>
                                    <img src="./assets/img/hc-logo-2.svg" alt="HC Logo" class="hc-logo">
                                </div>
                                <div>
                                    <img src="./assets/img/hc-logo-3.svg" alt="HC Logo" class="hc-logo">
                                </div>
                                <div>
                                    <img src="./assets/img/hc-logo-4.svg" alt="HC Logo" class="hc-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="main-1">
            <section class="features-sec">
                <div class="container">
                    <div class="d-flex flex-wrap justify-content-md-start justify-content-center gap-4">
                        <div class="feat-card">
                            <span>
                                <img src="./assets/img/feat-icon-1.svg" alt="Feature Icon" class="feat-icon">
                            </span>
                            <span class="feat-text lh-sm d-flex flex-column">
                                <span class="lh-sm fw-bold">Extensive</span>
                                <span class="lh-sm fw-normal">Coverage</span>
                            </span>
                        </div>
                        <div class="feat-card">
                            <span>
                                <img src="./assets/img/feat-icon-2.svg" alt="Feature Icon" class="feat-icon">
                            </span>
                            <span class="feat-text lh-sm d-flex flex-column">
                                <span class="lh-sm fw-bold">Best Rate </span>
                                <span class="lh-sm fw-normal">Gauranteed</span>
                            </span>
                        </div>
                        <div class="feat-card">
                            <span>
                                <img src="./assets/img/feat-icon-3.svg" alt="Feature Icon" class="feat-icon">
                            </span>
                            <span class="feat-text lh-sm d-flex flex-column">
                                <span class="lh-sm fw-bold">Dependable </span>
                                <span class="lh-sm fw-normal">Drives</span>
                            </span>
                        </div>
                        <div class="feat-card">
                            <span>
                                <img src="./assets/img/feat-icon-4.svg" alt="Feature Icon" class="feat-icon">
                            </span>
                            <span class="feat-text lh-sm d-flex flex-column">
                                <span class="lh-sm fw-bold">Flexible </span>
                                <span class="lh-sm fw-normal">Payments</span>
                            </span>
                        </div>
                        <div class="feat-card">
                            <span>
                                <img src="./assets/img/feat-icon-5.svg" alt="Feature Icon" class="feat-icon">
                            </span>
                            <span class="feat-text d-flex flex-column">
                                <span class="fw-bold">Refund </span>
                                <span class="fw-normal">Policy</span>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="destinations-sec">
                <div class="container">
                    <!-- Filtering Buttons -->
                    <div class="d-flex flex-column gap-lg-5 gap-4">
                        <div class="d-flex flex-column st-flex-1">
                            <h2 class="d-flex mb-0 flex-column gap-2 sec-title">
                                <span class="lh-1 st-1 fw-medium">Discover Other Exhilarating</span>
                                <span class="lh-1 st-2 fst-italic ins-serif">Destinations</span>
                            </h2>
                            <div class="d-flex align-items-center gap-3 justify-content-between">
                                <div class="filter-buttons flex-wrap">
                                    <button class="btn sf-btn active" data-filter="*">All</button>
                                    <button class="btn sf-btn" data-filter=".international">International</button>
                                    <button class="btn sf-btn" data-filter=".domestic">Domestic</button>
                                </div>
                                <div class="slider-arrows"></div>
                            </div>
                        </div>
                        <!-- Slick Carousel -->
                        <div class="slick-carousel mt-3 destinations-carousel">
                            <div class="slide domestic">
                                <div class="destination-card position-relative">
                                    <img src="./assets/img/destinations/destination-1.png" alt="London" class="dc-img">
                                    <div class="dc-content">
                                        <h3 class="mb-0 dc-title text-white fw-bold">London</h3>
                                        <div class="dc-tag fw-medium"><span class="lh-1">350 destinations</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide domestic">
                                <div class="destination-card position-relative">
                                    <img src="./assets/img/destinations/destination-2.png" alt="Edinburgh"
                                        class="dc-img">
                                    <div class="dc-content">
                                        <h3 class="mb-0 dc-title text-white fw-bold">Edinburgh</h3>
                                        <div class="dc-tag fw-medium"><span class="lh-1">200 destinations</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide domestic">
                                <div class="destination-card position-relative">
                                    <img src="./assets/img/destinations/destination-3.png" alt="Manchester"
                                        class="dc-img">
                                    <div class="dc-content">
                                        <h3 class="mb-0 dc-title text-white fw-bold">Manchester</h3>
                                        <div class="dc-tag fw-medium"><span class="lh-1">180 destinations</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide domestic">
                                <div class="destination-card position-relative">
                                    <img src="./assets/img/destinations/destination-4.png" alt="Liverpool"
                                        class="dc-img">
                                    <div class="dc-content">
                                        <h3 class="mb-0 dc-title text-white fw-bold">Liverpool</h3>
                                        <div class="dc-tag fw-medium"><span class="lh-1">150 destinations</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide domestic">
                                <div class="destination-card position-relative">
                                    <img src="./assets/img/destinations/destination-5.png" alt="Glasgow" class="dc-img">
                                    <div class="dc-content">
                                        <h3 class="mb-0 dc-title text-white fw-bold">Glasgow</h3>
                                        <div class="dc-tag fw-medium"><span class="lh-1">140 destinations</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide domestic">
                                <div class="destination-card position-relative">
                                    <img src="./assets/img/destinations/destination-6.png" alt="Bath" class="dc-img">
                                    <div class="dc-content">
                                        <h3 class="mb-0 dc-title text-white fw-bold">Bath</h3>
                                        <div class="dc-tag fw-medium"><span class="lh-1">120 destinations</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide domestic">
                                <div class="destination-card position-relative">
                                    <img src="./assets/img/destinations/destination-7.png" alt="York" class="dc-img">
                                    <div class="dc-content">
                                        <h3 class="mb-0 dc-title text-white fw-bold">York</h3>
                                        <div class="dc-tag fw-medium"><span class="lh-1">110 destinations</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide domestic">
                                <div class="destination-card position-relative">
                                    <img src="./assets/img/destinations/destination-8.png" alt="Birmingham"
                                        class="dc-img">
                                    <div class="dc-content">
                                        <h3 class="mb-0 dc-title text-white fw-bold">Birmingham</h3>
                                        <div class="dc-tag fw-medium"><span class="lh-1">160 destinations</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide international">
                                <div class="destination-card position-relative">
                                    <img src="./assets/img/destinations/destination-9.png" alt="Paris" class="dc-img">
                                    <div class="dc-content">
                                        <h3 class="mb-0 dc-title text-white fw-bold">Paris</h3>
                                        <div class="dc-tag fw-medium"><span class="lh-1">250 destinations</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide international">
                                <div class="destination-card position-relative">
                                    <img src="./assets/img/destinations/destination-10.png" alt="Amsterdam"
                                        class="dc-img">
                                    <div class="dc-content">
                                        <h3 class="mb-0 dc-title text-white fw-bold">Amsterdam</h3>
                                        <div class="dc-tag fw-medium"><span class="lh-1">220 destinations</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide international">
                                <div class="destination-card position-relative">
                                    <img src="./assets/img/destinations/destination-11.png" alt="Berlin" class="dc-img">
                                    <div class="dc-content">
                                        <h3 class="mb-0 dc-title text-white fw-bold">Berlin</h3>
                                        <div class="dc-tag fw-medium"><span class="lh-1">230 destinations</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide international">
                                <div class="destination-card position-relative">
                                    <img src="./assets/img/destinations/destination-12.png" alt="Brussels"
                                        class="dc-img">
                                    <div class="dc-content">
                                        <h3 class="mb-0 dc-title text-white fw-bold">Brussels</h3>
                                        <div class="dc-tag fw-medium"><span class="lh-1">190 destinations</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="class-sec">
                <div class="container py-lg-3 my-1">
                    <div class="d-flex flex-column gap-5">
                        <div class="mb-2 mb-4 pb-2 d-flex align-items-end gap-4 flex-wrap">
                            <h2 class="d-flex mb-0 flex-column gap-2 sec-title">
                                <span class="lh-1 st-1 fw-medium">Coach hire class</span>
                                <span class="lh-1 st-2 fst-italic ins-serif">Guide</span>
                            </h2>
                        </div>
                        <div class="row cg-row pt-1">
                            <div class="col-xxl-3 col-xl-4 col-lg-6 pb-4">
                                <div class="cg-card">
                                    <div class="cgc-top">
                                        <img src="./assets/img/standard-class.png" alt="Class"
                                            class="img-fluid cgc-img">
                                    </div>
                                    <div class="cgc-bottom">
                                        <div class="d-flex flex-column gap-10px">
                                            <h3 class="mb-0 fw-semibold text-black lc-title">Standard</h3>
                                            <p class="mb-0 sc-desc">Basic, functional minibuses/coaches typically used
                                                for school transport, short trips, or basic commutes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-6 pb-4">
                                <div class="cg-card">
                                    <div class="cgc-top">
                                        <img src="./assets/img/executive-class.png" alt="Class"
                                            class="img-fluid cgc-img">
                                    </div>
                                    <div class="cgc-bottom">
                                        <div class="d-flex flex-column gap-10px">
                                            <h3 class="mb-0 fw-semibold text-black lc-title">Executive</h3>
                                            <p class="mb-0 sc-desc">Upgraded minibuses/coaches with more comfortable
                                                seating, air conditioning, and minor amenities like reading lights or
                                                USB chargers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-6 pb-4">
                                <div class="cg-card">
                                    <div class="cgc-top">
                                        <img src="./assets/img/luxury-class.png" alt="Class" class="img-fluid cgc-img">
                                    </div>
                                    <div class="cgc-bottom">
                                        <div class="d-flex flex-column gap-10px">
                                            <h3 class="mb-0 fw-semibold text-black lc-title">Luxury</h3>
                                            <p class="mb-0 sc-desc">High-end models offering additional comfort, better
                                                seating, entertainment systems, and superior interiors.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-6 pb-4">
                                <div class="cg-card">
                                    <div class="cgc-top">
                                        <img src="./assets/img/vip-class.png" alt="Class" class="img-fluid cgc-img">
                                    </div>
                                    <div class="cgc-bottom">
                                        <div class="d-flex flex-column gap-10px">
                                            <h3 class="mb-0 fw-semibold text-black lc-title">VIP</h3>
                                            <p class="mb-0 sc-desc">Premium-class coaches often equipped with luxurious
                                                amenities, Wi-Fi, reclining seats, and onboard catering options,
                                                suitable for long-distance or high-profile travel.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt-5 pb-4 sec-light fleets-sec">
                <div class="container py-lg-3 my-1">
                    <div class="d-flex flex-column gap-4">
                        <div class="mb-2 mb-4 pb-2 d-flex align-items-end gap-4 flex-wrap">
                            <h2 class="d-flex mb-0 flex-column gap-2 sec-title">
                                <span class="lh-1 st-1 fw-medium">Wide Range of</span>
                                <span class="lh-1 st-2 fst-italic ins-serif">Fleets</span>
                            </h2>
                            <div class="ms-auto d-flex gap-3 flex-sm-nowrap flex-wrap">
                                <div class="wrfs-cont flex-sm-grow-0 flex-grow-1 me-sm-1 mb-sm-0 mb-1">
                                    <select id="coachType" class="wrf-select">
                                        <option value="all">Select coach type</option>
                                        <option value="all">All</option>
                                        <option value="Standard">Standard</option>
                                        <option value="Executive">Executive</option>
                                        <option value="Luxury">Luxury</option>
                                        <option value="VIP">VIP</option>
                                    </select>
                                </div>
                                <div class="wrfs-cont flex-sm-grow-0 flex-grow-1 me-0">
                                    <select id="seatingCapacity" class="wrf-select">
                                        <option value="all">Select seating capacity</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row fleets-row pb-2 pt-1" id="fleets-row"></div>
                        <div class="mb-4 pb-2 pt-1" id="fleets-pagination">
                            <div class="d-flex justify-content-center fp-flex">
                                <span class="fp-prev cursor-pointer fp-arrow">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#D4D4D4" />
                                        <path
                                            d="M22.9995 14.705C22.6095 14.315 21.9795 14.315 21.5895 14.705L16.9995 19.295C16.6095 19.685 16.6095 20.315 16.9995 20.705L21.5895 25.295C21.9795 25.685 22.6095 25.685 22.9995 25.295C23.3895 24.905 23.3895 24.275 22.9995 23.885L19.1195 19.995L22.9995 16.115C23.3895 15.725 23.3795 15.085 22.9995 14.705Z"
                                            fill="#171717" />
                                    </svg>
                                </span>
                                <span class="fp-next cursor-pointer fp-arrow">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="-0.5" y="0.5" width="39" height="39" rx="19.5"
                                            transform="matrix(-1 0 0 1 39 0)" stroke="#D4D4D4" />
                                        <path
                                            d="M17.0005 14.705C17.3905 14.315 18.0205 14.315 18.4105 14.705L23.0005 19.295C23.3905 19.685 23.3905 20.315 23.0005 20.705L18.4105 25.295C18.0205 25.685 17.3905 25.685 17.0005 25.295C16.6105 24.905 16.6105 24.275 17.0005 23.885L20.8805 19.995L17.0005 16.115C16.6105 15.725 16.6205 15.085 17.0005 14.705Z"
                                            fill="#171717" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="text-center lc-note pt-1">
                            <p class="mb-0">Note: These luggage estimates (e.g., "30 Luggage, 35 Cabin”) refer to the
                                approximate number of medium-to-large suitcases that can be stowed in the underfloor
                                storage (where applicable) plus the number of small carry-on items that can be brought
                                inside the passenger cabin without crowding. These can vary based on precise interior
                                configurations, seat spacing, overhead compartment size, and the size/type of luggage
                                carried. Images are for illustration purposes.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tours-sec">
                <div class="container">
                    <!-- Filtering Buttons -->
                    <div class="d-flex flex-column gap-lg-5 gap-4">
                        <div class="d-flex flex-column st-flex-1">
                            <h2 class="d-flex mb-0 flex-column gap-2 sec-title">
                                <span class="lh-1 st-1 fw-medium">Embark on Our Unforgettable</span>
                                <span class="lh-1 st-2 fst-italic ins-serif">Special Tours!</span>
                            </h2>
                            <div class="d-flex align-items-center gap-3 justify-content-between">
                                <div class="filter-buttons flex-wrap">
                                    <button class="btn sf-btn active" data-filter="*">All</button>
                                    <button class="btn sf-btn" data-filter=".international">International</button>
                                    <button class="btn sf-btn" data-filter=".domestic">Domestic</button>
                                </div>
                                <div class="slider-arrows"></div>
                            </div>
                        </div>
                        <!-- Slick Carousel -->
                        <div class="slick-carousel mt-3 tours-carousel">
                            <div class="slide international">
                                <div class="landing-card tour-card">
                                    <div class="p-3 d-flex flex-column gap-4">
                                        <div class="position-relative">
                                            <a href="#" class="tour-save">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21.25 3.75H8.75C7.375 3.75 6.25 4.875 6.25 6.25V26.25L15 22.5L23.75 26.25V6.25C23.75 4.875 22.625 3.75 21.25 3.75ZM21.25 22.5L15 19.775L8.75 22.5V7.5C8.75 6.8125 9.3125 6.25 10 6.25H20C20.6875 6.25 21.25 6.8125 21.25 7.5V22.5Z"
                                                        fill="white" />
                                                </svg>
                                            </a>
                                            <a href="#" class="lc-top d-block">
                                                <img src="./assets/img/tour-1.png" alt="tour" class="tc-img">
                                            </a>
                                        </div>
                                        <div class="lc-bottom">
                                            <div class="d-flex flex-column gap-10px">
                                                <div class="d-flex flex-column gap-2 mb-1">
                                                    <div class="fleet-class mb-1">
                                                        <span class="lh-1">Executive Coach</span>
                                                    </div>
                                                    <div class="d-flex flex-column gap-2">
                                                        <a href="#"
                                                            class="fw-semibold d-block text-black lc-title lh-sm">Coach
                                                            to London </a>
                                                        <div class="d-flex gap-2 tc-specs flex-wrap fw-normal">
                                                            <span class="lh-sm">2 Stops</span>
                                                            <span class="center-line"></span>
                                                            <span class="lh-sm">8 hours</span>
                                                            <span class="center-line"></span>
                                                            <span class="lh-sm">Night journey</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column tcc-details my-2">
                                                        <p class="mb-0 text-dark fw-semibold">Heritage fans & seniors
                                                        </p>
                                                        <p class="mb-0 tcc-desc">Uncover England's ancient secrets and
                                                            timeless charm on this enriching escape.</p>
                                                    </div>
                                                    <div
                                                        class="d-flex gap-2 tc-features flex-wrap text-black align-items-center">
                                                        <div class="d-flex align-items-center gap-1 fw-medium p-1">
                                                            <span>
                                                                <img src="./assets/img/tours-icons/luggage-1.svg"
                                                                    alt="Icon" class="tours-icons">
                                                            </span>
                                                            <span class="lh-1">Luggage: 2</span>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-1 fw-medium p-1 ms-1">
                                                            <span>
                                                                <img src="./assets/img/tours-icons/ac-1.svg" alt="Icon"
                                                                    class="tours-icons">
                                                            </span>
                                                            <span class="lh-1">AC</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="lh-sm tc-persons fw-semibold">$16/ person</span>
                                                    <a href="#" class="btn sf-btn fw-bold">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide domestic">
                                <div class="landing-card tour-card">
                                    <div class="p-3 d-flex flex-column gap-4">
                                        <div class="position-relative">
                                            <a href="#" class="tour-save">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21.25 3.75H8.75C7.375 3.75 6.25 4.875 6.25 6.25V26.25L15 22.5L23.75 26.25V6.25C23.75 4.875 22.625 3.75 21.25 3.75ZM21.25 22.5L15 19.775L8.75 22.5V7.5C8.75 6.8125 9.3125 6.25 10 6.25H20C20.6875 6.25 21.25 6.8125 21.25 7.5V22.5Z"
                                                        fill="white" />
                                                </svg>
                                            </a>
                                            <a href="#" class="lc-top d-block">
                                                <img src="./assets/img/tour-2.png" alt="tour" class="tc-img">
                                            </a>
                                        </div>
                                        <div class="lc-bottom">
                                            <div class="d-flex flex-column gap-10px">
                                                <div class="d-flex flex-column gap-2 mb-1">
                                                    <div class="d-flex align-items-center mb-1 gap-1 tc-rating">
                                                        <span>
                                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.49984 13.8697L12.7853 15.8568C13.3869 16.2209 14.1232 15.6826 13.9648 15.0018L13.094 11.2651L15.9994 8.74759C16.5298 8.28843 16.2448 7.41759 15.5482 7.36218L11.7244 7.03759L10.2282 3.50676C9.95901 2.86551 9.04068 2.86551 8.77151 3.50676L7.27526 7.02968L3.45151 7.35426C2.75484 7.40968 2.46984 8.28051 3.00026 8.73968L5.90568 11.2572L5.03484 14.9938C4.87651 15.6747 5.61276 16.213 6.21443 15.8488L9.49984 13.8697Z"
                                                                    fill="#FBBF24" />
                                                            </svg>
                                                        </span>
                                                        <span class="lh-1">4.3</span>
                                                    </div>
                                                    <div class="d-flex flex-column gap-2">
                                                        <a href="#"
                                                            class="fw-semibold d-block text-black lc-title">Coach to
                                                            Edinburgh </a>
                                                        <div class="d-flex gap-2 tc-specs flex-wrap fw-normal">
                                                            <span class="lh-sm">2 Stops</span>
                                                            <span class="center-line"></span>
                                                            <span class="lh-sm">8 hours</span>
                                                            <span class="center-line"></span>
                                                            <span class="lh-sm">Night journey</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex gap-2 tc-features mt-2 text-black align-items-center">
                                                        <div class="d-flex align-items-center gap-1 fw-medium p-1">
                                                            <span>
                                                                <img src="./assets/img/tc-icon-1.svg" alt="Icon"
                                                                    height="15">
                                                            </span>
                                                            <span class="lh-1">Sleeper coach</span>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-1 fw-medium p-1 ms-1">
                                                            <span>
                                                                <img src="./assets/img/tc-icon-2.svg" alt="Icon"
                                                                    height="14">
                                                            </span>
                                                            <span class="lh-1">AC</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="lh-sm tc-persons fw-semibold">$16/ person</span>
                                                    <a href="#" class="btn sf-btn fw-bold">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide international">
                                <div class="landing-card tour-card">
                                    <div class="p-3 d-flex flex-column gap-4">
                                        <div class="position-relative">
                                            <a href="#" class="tour-save">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21.25 3.75H8.75C7.375 3.75 6.25 4.875 6.25 6.25V26.25L15 22.5L23.75 26.25V6.25C23.75 4.875 22.625 3.75 21.25 3.75ZM21.25 22.5L15 19.775L8.75 22.5V7.5C8.75 6.8125 9.3125 6.25 10 6.25H20C20.6875 6.25 21.25 6.8125 21.25 7.5V22.5Z"
                                                        fill="white" />
                                                </svg>
                                            </a>
                                            <a href="#" class="lc-top d-block">
                                                <img src="./assets/img/tour-3.png" alt="tour" class="tc-img">
                                            </a>
                                        </div>
                                        <div class="lc-bottom">
                                            <div class="d-flex flex-column gap-10px">
                                                <div class="d-flex flex-column gap-2 mb-1">
                                                    <div class="d-flex align-items-center mb-1 gap-1 tc-rating">
                                                        <span>
                                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.49984 13.8697L12.7853 15.8568C13.3869 16.2209 14.1232 15.6826 13.9648 15.0018L13.094 11.2651L15.9994 8.74759C16.5298 8.28843 16.2448 7.41759 15.5482 7.36218L11.7244 7.03759L10.2282 3.50676C9.95901 2.86551 9.04068 2.86551 8.77151 3.50676L7.27526 7.02968L3.45151 7.35426C2.75484 7.40968 2.46984 8.28051 3.00026 8.73968L5.90568 11.2572L5.03484 14.9938C4.87651 15.6747 5.61276 16.213 6.21443 15.8488L9.49984 13.8697Z"
                                                                    fill="#FBBF24" />
                                                            </svg>
                                                        </span>
                                                        <span class="lh-1">4.3</span>
                                                    </div>
                                                    <div class="d-flex flex-column gap-2">
                                                        <a href="#"
                                                            class="fw-semibold d-block text-black lc-title">Coach for
                                                            Manchester to London </a>
                                                        <div class="d-flex gap-2 tc-specs flex-wrap fw-normal">
                                                            <span class="lh-sm">2 Stops</span>
                                                            <span class="center-line"></span>
                                                            <span class="lh-sm">8 hours</span>
                                                            <span class="center-line"></span>
                                                            <span class="lh-sm">Night journey</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex gap-2 tc-features mt-2 text-black align-items-center">
                                                        <div class="d-flex align-items-center gap-1 fw-medium p-1">
                                                            <span>
                                                                <img src="./assets/img/tc-icon-1.svg" alt="Icon"
                                                                    height="15">
                                                            </span>
                                                            <span class="lh-1">Sleeper coach</span>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-1 fw-medium p-1 ms-1">
                                                            <span>
                                                                <img src="./assets/img/tc-icon-2.svg" alt="Icon"
                                                                    height="14">
                                                            </span>
                                                            <span class="lh-1">AC</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="lh-sm tc-persons fw-semibold">$16/ person</span>
                                                    <a href="#" class="btn sf-btn fw-bold">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide domestic">
                                <div class="landing-card tour-card">
                                    <div class="p-3 d-flex flex-column gap-4">
                                        <div class="position-relative">
                                            <a href="#" class="tour-save">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21.25 3.75H8.75C7.375 3.75 6.25 4.875 6.25 6.25V26.25L15 22.5L23.75 26.25V6.25C23.75 4.875 22.625 3.75 21.25 3.75ZM21.25 22.5L15 19.775L8.75 22.5V7.5C8.75 6.8125 9.3125 6.25 10 6.25H20C20.6875 6.25 21.25 6.8125 21.25 7.5V22.5Z"
                                                        fill="white" />
                                                </svg>
                                            </a>
                                            <a href="#" class="lc-top d-block">
                                                <img src="./assets/img/tour-4.png" alt="tour" class="tc-img">
                                            </a>
                                        </div>
                                        <div class="lc-bottom">
                                            <div class="d-flex flex-column gap-10px">
                                                <div class="d-flex flex-column gap-2 mb-1">
                                                    <div class="d-flex align-items-center mb-1 gap-1 tc-rating">
                                                        <span>
                                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.49984 13.8697L12.7853 15.8568C13.3869 16.2209 14.1232 15.6826 13.9648 15.0018L13.094 11.2651L15.9994 8.74759C16.5298 8.28843 16.2448 7.41759 15.5482 7.36218L11.7244 7.03759L10.2282 3.50676C9.95901 2.86551 9.04068 2.86551 8.77151 3.50676L7.27526 7.02968L3.45151 7.35426C2.75484 7.40968 2.46984 8.28051 3.00026 8.73968L5.90568 11.2572L5.03484 14.9938C4.87651 15.6747 5.61276 16.213 6.21443 15.8488L9.49984 13.8697Z"
                                                                    fill="#FBBF24" />
                                                            </svg>
                                                        </span>
                                                        <span class="lh-1">4.3</span>
                                                    </div>
                                                    <div class="d-flex flex-column gap-2">
                                                        <a href="#"
                                                            class="fw-semibold d-block text-black lc-title">Coach to
                                                            Birmingham</a>
                                                        <div class="d-flex gap-2 tc-specs flex-wrap fw-normal">
                                                            <span class="lh-sm">2 Stops</span>
                                                            <span class="center-line"></span>
                                                            <span class="lh-sm">8 hours</span>
                                                            <span class="center-line"></span>
                                                            <span class="lh-sm">Night journey</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex gap-2 tc-features mt-2 text-black align-items-center">
                                                        <div class="d-flex align-items-center gap-1 fw-medium p-1">
                                                            <span>
                                                                <img src="./assets/img/tc-icon-1.svg" alt="Icon"
                                                                    height="15">
                                                            </span>
                                                            <span class="lh-1">Sleeper coach</span>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-1 fw-medium p-1 ms-1">
                                                            <span>
                                                                <img src="./assets/img/tc-icon-2.svg" alt="Icon"
                                                                    height="14">
                                                            </span>
                                                            <span class="lh-1">AC</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="lh-sm tc-persons fw-semibold">$16/ person</span>
                                                    <a href="#" class="btn sf-btn fw-bold">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="services-sec">
                <div class="container">
                    <!-- Filtering Buttons -->
                    <div class="d-flex flex-column gap-lg-5 gap-4">
                        <div class="d-flex flex-column st-flex-1">
                            <div class="d-flex align-items-center gap-3 justify-content-between">
                                <h2 class="d-flex mb-0 flex-column gap-2 sec-title">
                                    <span class="lh-1 st-1 fw-medium">Diverse Coach Hire Services</span>
                                    <span class="lh-1 st-2 fst-italic ins-serif">for Every Occasion</span>
                                </h2>
                                <div class="slider-arrows ms-auto"></div>
                            </div>
                        </div>
                        <!-- Slick Carousel -->
                        <div class="slick-carousel mt-2 pt-1 services-carousel">
                            <div class="slide d-flex flex-column gap-4">
                                <!-- Airport Shuttle Service -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-1.png" alt="Airport Shuttle Service"
                                                class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">Airport Shuttle
                                                        Service</h3>
                                                    <p class="mb-0 sc-desc">Streamline your group travel to London City,
                                                        Luton, Liverpool, Gatwick, Heathrow, Manchester, Birmingham,
                                                        Edinburgh, or Stansted. Our coach hire and minibus hire services
                                                        ensure punctual airport runs, comfortable seating, and peace of
                                                        mind for any group size.</p>
                                                </div>
                                                <div>
                                                    <a href="#hero" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Corporate Travel -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-2.png" alt="Corporate Travel"
                                                class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">Corporate Travel
                                                    </h3>
                                                    <p class="mb-0 sc-desc">Boost productivity with hassle-free coach
                                                        hire for meetings, conferences, and group travel. We handle
                                                        logistics so your team can focus on business, offering modern
                                                        amenities and professional service for a polished corporate
                                                        image.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide d-flex flex-column gap-4">
                                <!-- Highlands Coach Tour -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-3.png" alt="Highlands Coach Tour"
                                                class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">Highlands Coach
                                                        Tour</h3>
                                                    <p class="mb-0 sc-desc">Experience Scotland’s natural splendor on a
                                                        coach hire adventure. Travel the Highlands in comfort with
                                                        expert guides, scenic stops, and flexible group travel options
                                                        for an unforgettable journey.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Private Transportation -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-4.png" alt="Private Transportation"
                                                class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">Private
                                                        Transportation</h3>
                                                    <p class="mb-0 sc-desc">Customize your trip with minibus hire or
                                                        coach hire for family outings, VIP events, or any special
                                                        occasion. Enjoy flexible schedules, luxurious amenities, and
                                                        stress-free group travel on your terms.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Continue adding slides and service cards in the same structure for the remaining items -->
                            <div class="slide d-flex flex-column gap-4">
                                <!-- School Bus Hire -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-5.png" alt="School Bus Hire"
                                                class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">School Bus Hire
                                                    </h3>
                                                    <p class="mb-0 sc-desc">Keep students safe and comfortable on field
                                                        trips, sports days, or daily routes. Our coach hire and minibus
                                                        hire services prioritize reliability, qualified drivers, and a
                                                        smooth experience for group travel in the education sector.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Guided Tours & Excursions -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-6.png"
                                                alt="Guided Tours & Excursions" class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">Guided Tours &
                                                        Excursions</h3>
                                                    <p class="mb-0 sc-desc">Explore top destinations with our coach hire
                                                        packages for guided tours and excursions. From historic cities
                                                        to countryside retreats, we handle the group travel details
                                                        while you enjoy the journey.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide d-flex flex-column gap-4">
                                <!-- London Events -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-7.png" alt="London Events"
                                                class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">London Events</h3>
                                                    <p class="mb-0 sc-desc">Make the most of London’s biggest shows,
                                                        festivals, and cultural highlights. Our coach hire simplifies
                                                        group travel, ensuring on-time arrivals, comfortable rides, and
                                                        zero fuss when exploring the capital.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Religious Events (Pilgrimages) -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-8.png"
                                                alt="Religious Events (Pilgrimages)" class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">Religious Events
                                                        (Pilgrimages)</h3>
                                                    <p class="mb-0 sc-desc">Journey to holy sites across the UK and
                                                        Europe—from the Vatican to Mecca—with our spacious coach hire or
                                                        minibus hire. Whether it’s a small pilgrimage or large group
                                                        travel, we offer comfort and peace of mind.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide d-flex flex-column gap-4">
                                <!-- The Races -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-9.png" alt="The Races"
                                                class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">The Races</h3>
                                                    <p class="mb-0 sc-desc">Head to Ascot, Aintree, Newmarket, York,
                                                        Epsom Downs, Sandown Park, Cheltenham, Doncaster, Goodwood, or
                                                        Hamilton Park in style. Our coach hire keeps your party together
                                                        and your race day running smoothly.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Parties & Celebrations -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-10.png" alt="Parties & Celebrations"
                                                class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">Parties &
                                                        Celebrations</h3>
                                                    <p class="mb-0 sc-desc">From hen and stag parties to birthdays and
                                                        club nights, our minibus hire and coach hire make group travel
                                                        fun and secure. Enjoy the celebration without worrying about
                                                        separate cars or parking.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide d-flex flex-column gap-4">
                                <!-- Airports (Detailed) -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-11.png" alt="Airports (Detailed)"
                                                class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">Airports (Detailed)
                                                    </h3>
                                                    <p class="mb-0 sc-desc">For stress-free departures and arrivals at
                                                        London City, Luton, Liverpool, Gatwick, Heathrow, Manchester,
                                                        Birmingham, Edinburgh, or Stansted, trust our coach hire. We
                                                        cater to group travel of any size, ensuring a smooth, punctual
                                                        ride.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Corporate Services -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-12.png" alt="Corporate Services"
                                                class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">Corporate Services
                                                    </h3>
                                                    <p class="mb-0 sc-desc">Impress clients and colleagues with coach
                                                        hire for VIP services, team-building, and corporate hospitality.
                                                        Our group travel managers handle every detail, ensuring
                                                        professional, timely transport.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide d-flex flex-column gap-4">
                                <!-- Universities & Schools -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-13.png" alt="Universities & Schools"
                                                class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">Universities &
                                                        Schools</h3>
                                                    <p class="mb-0 sc-desc">Plan hassle-free group travel for school
                                                        trips, uni tours, or academic events with our modern coach hire
                                                        solutions. Safe, comfortable journeys help keep education front
                                                        and center.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- General Events (Weddings, Funerals, Sports, Teams, Concerts, Festivals) -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-14.png" alt="General Events"
                                                class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">General Events
                                                        (Weddings, Funerals, Sports, Teams, Concerts, Festivals)</h3>
                                                    <p class="mb-0 sc-desc">Make every occasion memorable with our
                                                        versatile coach hire or minibus hire. From weddings and funerals
                                                        to sports teams and music festivals, we provide reliable group
                                                        travel to ensure everyone arrives together and on time.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide d-flex flex-column gap-4">
                                <!-- Trips, Tours & Travel -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-15.png" alt="Trips, Tours & Travel"
                                                class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">Trips, Tours &
                                                        Travel</h3>
                                                    <p class="mb-0 sc-desc">Plan your next day trip, theme park
                                                        adventure, or beach getaway with our coach hire solutions. From
                                                        local UK excursions to extended European and worldwide group
                                                        tours, we coordinate journeys for members clubs, bands,
                                                        associations, and societies—all inspired by top travel lists and
                                                        resources like coachhire.com and Avant. Enjoy stress-free
                                                        transport, expert routes, and comfortable seating, leaving you
                                                        free to focus on fun and discovery.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Public Sector -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-16.png" alt="Public Sector"
                                                class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">Public Sector</h3>
                                                    <p class="mb-0 sc-desc">Whether you’re organizing a military outing,
                                                        an NHS conference, or a government event, our coach hire service
                                                        supports the Army, Emergency Services, Royal Navy, Royal
                                                        Marines, and more. We ensure punctual, dependable group travel
                                                        while respecting strict schedules, security protocols, and
                                                        budget constraints. Count on spacious vehicles, safety-focused
                                                        drivers, and professional coordination for public sector
                                                        transport across the UK and beyond.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide d-flex flex-column gap-4">
                                <!-- Private Jet & Chartered Yachts -->
                                <div class="services-card flex-grow-1">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-17.png"
                                                alt="Private Jet & Chartered Yachts" class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">Private Jet &
                                                        Chartered Yachts</h3>
                                                    <p class="mb-0 sc-desc">Arrive at your private jet or chartered
                                                        yacht in style with our elite coach hire solutions. We offer
                                                        worldwide group travel options, coordinating seamless transfers
                                                        from airports, hotels, and marinas. Expect luxurious amenities,
                                                        smooth scheduling, and breathtaking images that capture the
                                                        essence of your VIP experience. Perfect for exclusive getaways,
                                                        business retreats, or special celebrations—travel becomes part
                                                        of the indulgence.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="services-card flex-grow-1 opacity-0 d-md-block d-none">
                                    <div class="d-flex gap-3 p-3 h-100">
                                        <div class="sc-left">
                                            <img src="./assets/img/services/service-1.png"
                                                alt="Private Jet & Chartered Yachts" class="sc-img">
                                        </div>
                                        <div class="sc-right">
                                            <div class="h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column gap-10px">
                                                    <h3 class="mb-0 fw-semibold text-black lc-title">Private Jet &
                                                        Chartered Yachts</h3>
                                                    <p class="mb-0 sc-desc">Arrive at your private jet or chartered
                                                        yacht in style with our elite coach hire solutions. We offer
                                                        worldwide group travel options, coordinating seamless transfers
                                                        from airports, hotels, and marinas. Expect luxurious amenities,
                                                        smooth scheduling, and breathtaking images that capture the
                                                        essence of your VIP experience. Perfect for exclusive getaways,
                                                        business retreats, or special celebrations—travel becomes part
                                                        of the indulgence.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn sf-btn fw-bold">Hire Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-5 flex-wrap justify-content-between">
                            <div class="sc-dots mx-auto"></div>
                            <div class="d-flex align-items-center fw-bold text-black">
                                <span class="sc-current"></span>
                                <span>/</span>
                                <span class="sc-total"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="px-md-3 px-2">
                <div class="sec-light pt-lg-5 pt-4 steps-sec">
                    <div class="container py-2 mt-1 mb-1">
                        <div class="d-flex gap-lg-4 gap-3 flex-column">
                            <div class="d-flex justify-content-center">
                                <h2 class="d-flex mb-0 flex-column sec-title">
                                    <span class="lh-1 st-1 fw-medium">How It Works</span>
                                    <span class="lh-1 st-2 fst-italic ins-serif">Simple 4 Steps </span>
                                </h2>
                            </div>
                            <div class="mt-lg-3 mt-2">
                                <div class="row steps-row">
                                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                                        <div class="d-flex flex-column gap-2 align-items-center text-center">
                                            <span>
                                                <img src="./assets/img/step-1.svg" alt="Step" class="step-icon"
                                                    height="45">
                                            </span>
                                            <h4 class="fw-semibold step-title my-1">Complete the inquiry form</h4>
                                            <p class="mb-0 step-desc">Please fill out the inquiry form with all the
                                                necessary information.</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                                        <div class="d-flex flex-column gap-2 align-items-center text-center">
                                            <span>
                                                <img src="./assets/img/step-1.svg" alt="Step" class="step-icon"
                                                    height="45">
                                            </span>
                                            <h4 class="fw-semibold step-title my-1">Receive your price</h4>
                                            <p class="mb-0 step-desc">Our team will work to provide the most
                                                cost-effective price based on the information provided.</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                                        <div class="d-flex flex-column gap-2 align-items-center text-center">
                                            <span>
                                                <img src="./assets/img/step-1.svg" alt="Step" class="step-icon"
                                                    height="45">
                                            </span>
                                            <h4 class="fw-semibold step-title my-1">Submit payment</h4>
                                            <p class="mb-0 step-desc">If you find the price acceptable, kindly proceed
                                                with the payment. We accept all major credit cards.</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
                                        <div class="d-flex flex-column gap-2 align-items-center text-center">
                                            <span>
                                                <img src="./assets/img/step-1.svg" alt="Step" class="step-icon"
                                                    height="45">
                                            </span>
                                            <h4 class="fw-semibold step-title my-1">Commence your journey</h4>
                                            <p class="mb-0 step-desc">Anticipate the day of your journey and enjoy an
                                                incredible experience.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="discounts-sec py-lg-5 py-4 position-relative overflow-y-hidden">
                        <div class="discount-vector">
                            <img src="./assets/img/ferozi-vector-1.svg" alt="Vector" class="w-100">
                        </div>
                        <div class="container py-3 my-1 position-relative z-1">
                            <div class="d-flex flex-column gap-lg-5 gap-4">
                                <div class="d-flex flex-column gap-2">
                                    <h2 class="d-flex mb-1 align-items-center gap-2 sec-title flex-wrap">
                                        <span class="lh-1 st-1 fw-medium text-white">Save Big on Your</span>
                                        <span class="lh-1 st-2 fst-italic ins-serif text-ferozi">Next Adventure!</span>
                                    </h2>
                                    <p class="mb-0 ds-text text-white fw-normal">Exclusive Deals and Discounts Just for
                                        You!</p>
                                </div>
                                <div class="d-flex flex-column gap-10px">
                                    <div class="filter-buttons dc-btns flex-wrap">
                                        <button class="btn sf-btn active" data-filter="*">All</button>
                                        <button class="btn sf-btn" data-filter=".standard">Standard</button>
                                        <button class="btn sf-btn" data-filter=".vip">VIP</button>
                                        <button class="btn sf-btn" data-filter=".executive">Executive</button>
                                        <button class="btn sf-btn" data-filter=".luxury">Luxury</button>
                                        <button class="btn sf-btn" data-filter=".tour">Tour</button>
                                        <button class="btn sf-btn" data-filter=".event">Event</button>
                                    </div>
                                    <div class="slick-carousel my-4 discounts-carousel">
                                    </div>
                                    <div class="d-flex align-items-center gap-5 flex-wrap justify-content-between">
                                        <div class="slider-arrows"></div>
                                        <div class="sc-dots mx-auto"></div>
                                        <div class="d-flex align-items-center fw-bold text-white">
                                            <span class="sc-current"></span>
                                            <span>/</span>
                                            <span class="sc-total"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="why-sec">
                <div class="container">
                    <div class="d-flex gap-lg-4 gap-3 flex-column">
                        <div class="d-flex justify-content-center align-items-center text-center">
                            <h2 class="d-flex mb-0 flex-column sec-title">
                                <span class="lh-1 st-1 fw-medium">Why Choose</span>
                                <span class="lh-1 st-2 fst-italic ins-serif"><img src="./assets/img/logo-dark.png"
                                        alt="Logo" height="48"> </span>
                            </h2>
                        </div>
                        <div class="mt-lg-3 mt-2">
                            <div class="row">
                                <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pb-4">
                                    <div class="why-box">
                                        <div class="p-3 d-flex flex-column gap-3">
                                            <div>
                                                <svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.5" y="0.5" width="44" height="44" rx="22"
                                                        stroke="#E5E5E5" />
                                                    <g clip-path="url(#clip0_108_1366)">
                                                        <path
                                                            d="M16 16.5C16 15.9696 16.2107 15.4609 16.5858 15.0858C16.9609 14.7107 17.4696 14.5 18 14.5H28C28.5304 14.5 29.0391 14.7107 29.4142 15.0858C29.7893 15.4609 30 15.9696 30 16.5V30.5C30 31.0304 29.7893 31.5391 29.4142 31.9142C29.0391 32.2893 28.5304 32.5 28 32.5H18C17.4696 32.5 16.9609 32.2893 16.5858 31.9142C16.2107 31.5391 16 31.0304 16 30.5V16.5Z"
                                                            stroke="#171717" stroke-width="1.4" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M20 18.5H26" stroke="#171717" stroke-width="1.4"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20 22.5H26" stroke="#171717" stroke-width="1.4"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20 26.5H24" stroke="#171717" stroke-width="1.4"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_108_1366">
                                                            <rect width="24" height="24" fill="white"
                                                                transform="translate(11 11.5)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column gap-1 wb-content">
                                                <p class="mb-0 fw-semibold wb-title">Affordable Pricing</p>
                                                <p class="mb-0 wb-desc">Discover our commitment to offering the best
                                                    rates, guaranteed to outshine any similar quotes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pb-4">
                                    <div class="why-box">
                                        <div class="p-3 d-flex flex-column gap-3">
                                            <div>
                                                <svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.5" y="0.5" width="44" height="44" rx="22"
                                                        stroke="#E5E5E5" />
                                                    <g clip-path="url(#clip0_108_1366)">
                                                        <path
                                                            d="M16 16.5C16 15.9696 16.2107 15.4609 16.5858 15.0858C16.9609 14.7107 17.4696 14.5 18 14.5H28C28.5304 14.5 29.0391 14.7107 29.4142 15.0858C29.7893 15.4609 30 15.9696 30 16.5V30.5C30 31.0304 29.7893 31.5391 29.4142 31.9142C29.0391 32.2893 28.5304 32.5 28 32.5H18C17.4696 32.5 16.9609 32.2893 16.5858 31.9142C16.2107 31.5391 16 31.0304 16 30.5V16.5Z"
                                                            stroke="#171717" stroke-width="1.4" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M20 18.5H26" stroke="#171717" stroke-width="1.4"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20 22.5H26" stroke="#171717" stroke-width="1.4"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20 26.5H24" stroke="#171717" stroke-width="1.4"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_108_1366">
                                                            <rect width="24" height="24" fill="white"
                                                                transform="translate(11 11.5)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column gap-1 wb-content">
                                                <p class="mb-0 fw-semibold wb-title">Verified Drivers</p>
                                                <p class="mb-0 wb-desc">Our team consists of dependable and experienced
                                                    drivers.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pb-4">
                                    <div class="why-box">
                                        <div class="p-3 d-flex flex-column gap-3">
                                            <div>
                                                <svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.5" y="0.5" width="44" height="44" rx="22"
                                                        stroke="#E5E5E5" />
                                                    <g clip-path="url(#clip0_108_1366)">
                                                        <path
                                                            d="M16 16.5C16 15.9696 16.2107 15.4609 16.5858 15.0858C16.9609 14.7107 17.4696 14.5 18 14.5H28C28.5304 14.5 29.0391 14.7107 29.4142 15.0858C29.7893 15.4609 30 15.9696 30 16.5V30.5C30 31.0304 29.7893 31.5391 29.4142 31.9142C29.0391 32.2893 28.5304 32.5 28 32.5H18C17.4696 32.5 16.9609 32.2893 16.5858 31.9142C16.2107 31.5391 16 31.0304 16 30.5V16.5Z"
                                                            stroke="#171717" stroke-width="1.4" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M20 18.5H26" stroke="#171717" stroke-width="1.4"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20 22.5H26" stroke="#171717" stroke-width="1.4"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20 26.5H24" stroke="#171717" stroke-width="1.4"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_108_1366">
                                                            <rect width="24" height="24" fill="white"
                                                                transform="translate(11 11.5)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column gap-1 wb-content">
                                                <p class="mb-0 fw-semibold wb-title">Insured Vehicles</p>
                                                <p class="mb-0 wb-desc">All vehicles are thoroughly insured with
                                                    comprehensive coverage</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pb-4">
                                    <div class="why-box">
                                        <div class="p-3 d-flex flex-column gap-3">
                                            <div>
                                                <svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.5" y="0.5" width="44" height="44" rx="22"
                                                        stroke="#E5E5E5" />
                                                    <g clip-path="url(#clip0_108_1366)">
                                                        <path
                                                            d="M16 16.5C16 15.9696 16.2107 15.4609 16.5858 15.0858C16.9609 14.7107 17.4696 14.5 18 14.5H28C28.5304 14.5 29.0391 14.7107 29.4142 15.0858C29.7893 15.4609 30 15.9696 30 16.5V30.5C30 31.0304 29.7893 31.5391 29.4142 31.9142C29.0391 32.2893 28.5304 32.5 28 32.5H18C17.4696 32.5 16.9609 32.2893 16.5858 31.9142C16.2107 31.5391 16 31.0304 16 30.5V16.5Z"
                                                            stroke="#171717" stroke-width="1.4" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M20 18.5H26" stroke="#171717" stroke-width="1.4"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20 22.5H26" stroke="#171717" stroke-width="1.4"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20 26.5H24" stroke="#171717" stroke-width="1.4"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_108_1366">
                                                            <rect width="24" height="24" fill="white"
                                                                transform="translate(11 11.5)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column gap-1 wb-content">
                                                <p class="mb-0 fw-semibold wb-title">Dedicated Team</p>
                                                <p class="mb-0 wb-desc">Benefit from our extensive industry experience
                                                    to assist in planning and managing your journey.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="testimonials-sec">
                <div class="container">
                    <!-- Filtering Buttons -->
                    <div class="d-flex flex-column gap-lg-5 gap-4">
                        <div class="d-flex flex-column st-flex-1">
                            <h2 class="d-flex mb-0 flex-column gap-2 sec-title">
                                <span class="lh-1 st-1 fw-medium">Hear from our Delighted</span>
                                <span class="lh-1 st-2 fst-italic ins-serif">Travelers</span>
                            </h2>
                            <div class="d-flex align-items-center gap-3 justify-content-between">
                                <div class="filter-buttons flex-wrap">
                                    <button class="btn sf-btn active" data-filter="*">All</button>
                                    <button class="btn sf-btn" data-filter=".recent">Recent</button>
                                    <button class="btn sf-btn" data-filter=".old">Old</button>
                                </div>
                                <div class="slider-arrows"></div>
                            </div>
                        </div>
                        <!-- Slick Carousel -->
                        <div class="slick-carousel mt-3 testimonials-carousel">
                            <div class="slide recent">
                                <div class="landing-card testimonial-card h-100">
                                    <div class="p-3 d-flex flex-column gap-3 h-100 justify-content-between">
                                        <div class="d-flex flex-column gap-10px">
                                            <div class="d-flex tc-user mb-2 pb-1 gap-2 align-items-center">
                                                <span class="me-1">
                                                    <img src="./assets/img/reviews-users/memoji-6.png" alt="Rating"
                                                        class="tc-user-img">
                                                </span>
                                                <span class="tc-user-name fw-semibold">Kurosaki Ich</span>
                                            </div>
                                            <div class="d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center mb-1">
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-outline.svg" alt="Star"
                                                            height="20"></span>
                                                </div>
                                                <p class="mb-0 tc-text">"Your city tour planning was immaculate. Each
                                                    stop felt carefully curated, and I was able to explore hidden gems
                                                    I'd never have found on my own!”</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-1//Rectangle 105.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-1//Rectangle 106.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <span class="tc-more"><span>5+</span></span>
                                                <img src="./assets/img/reviews-imgs/user-1//Rectangle 107.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide recent">
                                <div class="landing-card testimonial-card h-100">
                                    <div class="p-3 d-flex flex-column gap-3 h-100 justify-content-between">
                                        <div class="d-flex flex-column gap-10px">
                                            <div class="d-flex tc-user mb-2 pb-1 gap-2 align-items-center">
                                                <span class="me-1">
                                                    <img src="./assets/img/reviews-users/memoji.png" alt="Rating"
                                                        class="tc-user-img">
                                                </span>
                                                <span class="tc-user-name fw-semibold">Leslie Alexander</span>
                                            </div>
                                            <div class="d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center mb-1">
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                </div>
                                                <p class="mb-0 tc-text">"Our corporate retreat went off without a hitch!
                                                    Everyone raved about the efficient scheduling, comfortable
                                                    accommodations, and fun group activities.”</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-2/Rectangle 105.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-2/Rectangle 106.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-2/Rectangle 107.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <span class="tc-more"><span>5+</span></span>
                                                <img src="./assets/img/reviews-imgs/user-2/Rectangle 108.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide recent">
                                <div class="landing-card testimonial-card h-100">
                                    <div class="p-3 d-flex flex-column gap-3 h-100 justify-content-between">
                                        <div class="d-flex flex-column gap-10px">
                                            <div class="d-flex tc-user mb-2 pb-1 gap-2 align-items-center">
                                                <span class="me-1">
                                                    <img src="./assets/img/reviews-users/memoji-1.png" alt="Rating"
                                                        class="tc-user-img">
                                                </span>
                                                <span class="tc-user-name fw-semibold">Robert Chang</span>
                                            </div>
                                            <div class="d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center mb-1">
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-outline.svg" alt="Star"
                                                            height="20"></span>
                                                </div>
                                                <p class="mb-0 tc-text">"I joined your holiday festival package, and it
                                                    was vibrant and exciting! My family loved the cultural highlights
                                                    and festive parades.”</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-3/Rectangle 105.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-3/Rectangle 106.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-3/Rectangle 107.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <span class="tc-more"><span>6+</span></span>
                                                <img src="./assets/img/reviews-imgs/user-3/Rectangle 108.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide recent">
                                <div class="landing-card testimonial-card h-100">
                                    <div class="p-3 d-flex flex-column gap-3 h-100 justify-content-between">
                                        <div class="d-flex flex-column gap-10px">
                                            <div class="d-flex tc-user mb-2 pb-1 gap-2 align-items-center">
                                                <span class="me-1">
                                                    <img src="./assets/img/reviews-users/memoji-2.png" alt="Rating"
                                                        class="tc-user-img">
                                                </span>
                                                <span class="tc-user-name fw-semibold">Kimberly Clarke
                                                    (FestivalPro)</span>
                                            </div>
                                            <div class="d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center mb-1">
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-outline.svg" alt="Star"
                                                            height="20"></span>
                                                </div>
                                                <p class="mb-0 tc-text">"We partnered with you to attend several
                                                    international festivals—every detail was on point. The insider tips
                                                    on local cuisine were a game-changer!”</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-4/Rectangle 105.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-4/Rectangle 106.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <span class="tc-more"><span>2+</span></span>
                                                <img src="./assets/img/reviews-imgs/user-4/Rectangle 107.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide old">
                                <div class="landing-card testimonial-card h-100">
                                    <div class="p-3 d-flex flex-column gap-3 h-100 justify-content-between">
                                        <div class="d-flex flex-column gap-10px">
                                            <div class="d-flex tc-user mb-2 pb-1 gap-2 align-items-center">
                                                <span class="me-1">
                                                    <img src="./assets/img/reviews-users/memoji-4.png" alt="Rating"
                                                        class="tc-user-img">
                                                </span>
                                                <span class="tc-user-name fw-semibold">Arlene McCoy</span>
                                            </div>
                                            <div class="d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center mb-1">
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                </div>
                                                <p class="mb-0 tc-text">"Best tour experience ever! From epic scenery to
                                                    seamless transitions between locations, the entire trip was truly
                                                    unforgettable.”</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-5/Rectangle 105.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-5/Rectangle 106.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <span class="tc-more"><span>3+</span></span>
                                                <img src="./assets/img/reviews-imgs/user-5/Rectangle 107.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide old">
                                <div class="landing-card testimonial-card h-100">
                                    <div class="p-3 d-flex flex-column gap-3 h-100 justify-content-between">
                                        <div class="d-flex flex-column gap-10px">
                                            <div class="d-flex tc-user mb-2 pb-1 gap-2 align-items-center">
                                                <span class="me-1">
                                                    <img src="./assets/img/reviews-users/memoji-5.png" alt="Rating"
                                                        class="tc-user-img">
                                                </span>
                                                <span class="tc-user-name fw-semibold">Anita Sethi</span>
                                            </div>
                                            <div class="d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center mb-1">
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-outline.svg" alt="Star"
                                                            height="20"></span>
                                                </div>
                                                <p class="mb-0 tc-text">"Thank you for organizing an incredible cultural
                                                    journey. The guides were knowledgeable, and every spot felt like a
                                                    special discovery.”</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-5/Rectangle 105.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-5/Rectangle 106.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <span class="tc-more"><span>2+</span></span>
                                                <img src="./assets/img/reviews-imgs/user-5/Rectangle 107.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide old">
                                <div class="landing-card testimonial-card h-100">
                                    <div class="p-3 d-flex flex-column gap-3 h-100 justify-content-between">
                                        <div class="d-flex flex-column gap-10px">
                                            <div class="d-flex tc-user mb-2 pb-1 gap-2 align-items-center">
                                                <span class="me-1">
                                                    <img src="./assets/img/reviews-users/memoji-3.png" alt="Rating"
                                                        class="tc-user-img">
                                                </span>
                                                <span class="tc-user-name fw-semibold">Ethan Myers (Marathon
                                                    Masters)</span>
                                            </div>
                                            <div class="d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center mb-1">
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                </div>
                                                <p class="mb-0 tc-text">"Your team’s race travel package was
                                                    outstanding. They handled everything from registration to lodging,
                                                    letting me focus on my performance!”</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-6/Rectangle 105.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-6/Rectangle 106.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <span class="tc-more"><span>2+</span></span>
                                                <img src="./assets/img/reviews-imgs/user-6/Rectangle 107.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide recent">
                                <div class="landing-card testimonial-card h-100">
                                    <div class="p-3 d-flex flex-column gap-3 h-100 justify-content-between">
                                        <div class="d-flex flex-column gap-10px">
                                            <div class="d-flex tc-user mb-2 pb-1 gap-2 align-items-center">
                                                <span class="me-1">
                                                    <img src="./assets/img/reviews-users/memoji-7.png" alt="Rating"
                                                        class="tc-user-img">
                                                </span>
                                                <span class="tc-user-name fw-semibold">Giulia Rossi</span>
                                            </div>
                                            <div class="d-flex flex-column gap-2">
                                                <div class="d-flex align-items-center mb-1">
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-filled.svg" alt="Star"
                                                            height="20"></span>
                                                    <span><img src="./assets/img/star-outline.svg" alt="Star"
                                                            height="20"></span>
                                                </div>
                                                <p class="mb-0 tc-text">"Your service transformed our family vacation
                                                    into a meaningful adventure. The personalized itineraries and travel
                                                    support went above and beyond.”</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-7/Rectangle 105.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <img src="./assets/img/reviews-imgs/user-7/Rectangle 106.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                            <a href="#" class="tc-img-cont">
                                                <span class="tc-more"><span>4+</span></span>
                                                <img src="./assets/img/reviews-imgs/user-7/Rectangle 107.png"
                                                    alt="Testimonial" class="tc-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-5 flex-wrap justify-content-between">
                            <div class="sc-dots mx-auto"></div>
                            <div class="d-flex align-items-center fw-bold text-black">
                                <span class="sc-current"></span>
                                <span>/</span>
                                <span class="sc-total"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="px-lg-4 px-2">
                <section class="cta-sec py-5 pb-lg-5 pb-0 gap-lg-0 gap-5">
                    <img src="./assets/img/golden-vector-1.png" alt="Vector" class="cta-vector">
                    <div class="container position-relative">
                        <div class="d-flex flex-column gap-5">
                            <div class="d-flex flex-column gap-4 cs-content">
                                <div class="d-flex flex-column gap-2 cs-title">
                                    <p class="mb-0 lh-1 cst-1 fw-medium">Travel Viacoach for a Hassle Free</p>
                                    <p class="mb-0 lh-1 cst-2 ins-serif fst-italic">Travel Booking Experience</p>
                                </div>
                                <p class="mb-2 cs-text">Whether it’s group tours, corporate getaways, or special events,
                                    our dedicated coach hire service ensures a smooth, comfortable ride every time.</p>
                            </div>
                            <div>
                                <a href="#hero" class="btn cs-btn fw-bold btn-ferozi">Get Quote Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="cta-side-outer">
                        <div class="cta-side">
                            <img src="./assets/img/cta-img.png" alt="CTA" class="cta-img">
                            <div class="cta-features">
                                <div class="cf-pill text-white">
                                    <span>
                                        <img src="./assets/img/check-white.svg" alt="Check" height="12">
                                    </span>
                                    <span class="lh-sm">Personalized Recommendations</span>
                                </div>
                                <div class="cf-pill text-white">
                                    <span>
                                        <img src="./assets/img/check-white.svg" alt="Check" height="12">
                                    </span>
                                    <span class="lh-sm">Secure Payments</span>
                                </div>
                                <div class="cf-pill text-white">
                                    <span>
                                        <img src="./assets/img/check-white.svg" alt="Check" height="12">
                                    </span>
                                    <span class="lh-sm">Loyalty Rewards</span>
                                </div>
                                <div class="cf-pill text-white">
                                    <span>
                                        <img src="./assets/img/check-white.svg" alt="Check" height="12">
                                    </span>
                                    <span class="lh-sm">Exclusive Deals</span>
                                </div>
                                <div class="cf-pill text-white">
                                    <span>
                                        <img src="./assets/img/check-white.svg" alt="Check" height="12">
                                    </span>
                                    <span class="lh-sm">Easy Booking</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="px-lg-4 px-2">
                <section class="faq-sec sec-light py-5">
                    <div class="container py-lg-4 py-3 my-lg-1">
                        <div class="d-flex flex-column gap-lg-5 gap-4">
                            <div class="d-flex flex-column st-flex-1 mb-4 pb-3">
                                <h2 class="d-flex mb-0 flex-column align-items-center gap-2 sec-title">
                                    <span class="lh-1 st-1 fw-medium">Frequently Asked </span>
                                    <span class="lh-1 st-2 fst-italic ins-serif">Questions</span>
                                </h2>
                            </div>
                            <div class="row faq-row">
                                <div class="col-xl-6 pb-xl-0 pb-4">
                                    <div class="d-flex flex-column accordion faq-acc gap-4 pe-xl-2">
                                        <!-- FAQ 1 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq1">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq1Content"
                                                    aria-expanded="true" aria-controls="faq1Content"> Which payment
                                                    methods can I use to secure a booking with Viacoach? </button>
                                            </h2>
                                            <div id="faq1Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq1" data-bs-parent="#faqsAccordion">
                                                <div class="accordion-body"> Once you have confirmed your quote, you can
                                                    settle the payment conveniently using a credit or debit card. For
                                                    higher-value journeys, we are also happy to accept bank transfers.
                                                    We now additionally offer secure online payment portals for an extra
                                                    layer of convenience. </div>
                                            </div>
                                        </div>
                                        <div class="faq-border"></div>
                                        <!-- FAQ 2 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq2">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq2Content"
                                                    aria-expanded="false" aria-controls="faq2Content"> What types of
                                                    vehicles does Viacoach operate in its fleet? </button>
                                            </h2>
                                            <div id="faq2Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq2" data-bs-parent="#faqsAccordion">
                                                <div class="accordion-body"> Our fleet spans from compact 8-seater
                                                    minibuses up to expansive double-decker coaches accommodating 100+
                                                    passengers. We can also arrange multiple vehicles to transport large
                                                    groups across the UK or to destinations in Europe, ensuring travel
                                                    flexibility and comfort. </div>
                                            </div>
                                        </div>
                                        <div class="faq-border"></div>
                                        <!-- FAQ 3 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq3">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq3Content"
                                                    aria-expanded="false" aria-controls="faq3Content"> How does your
                                                    price promise guarantee work? </button>
                                            </h2>
                                            <div id="faq3Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq3" data-bs-parent="#faqsAccordion">
                                                <div class="accordion-body"> Our price promise grants a 5% cost
                                                    reduction on any comparable quotation. Simply share a written quote
                                                    from another provider, and we’ll adjust our rate accordingly to
                                                    secure your booking at a lower price. </div>
                                            </div>
                                        </div>
                                        <div class="faq-border"></div>
                                        <!-- FAQ 4 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq4">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq4Content"
                                                    aria-expanded="false" aria-controls="faq4Content"> Does Viacoach
                                                    offer coach hire for airport transfers? </button>
                                            </h2>
                                            <div id="faq4Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq4" data-bs-parent="#faqsAccordion">
                                                <div class="accordion-body"> Absolutely. We specialize in airport
                                                    pickups and drop-offs at all major UK airports. Our fleet of
                                                    minibuses and coaches ensures smooth transfers whether you’re
                                                    traveling alone or with a large party, including timely arrivals and
                                                    departures. </div>
                                            </div>
                                        </div>
                                        <div class="faq-border"></div>
                                        <!-- FAQ 5 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq5">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq5Content"
                                                    aria-expanded="false" aria-controls="faq5Content"> What is the
                                                    largest coach available through Viacoach? </button>
                                            </h2>
                                            <div id="faq5Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq5" data-bs-parent="#faqsAccordion">
                                                <div class="accordion-body"> The biggest coach in our lineup is a
                                                    100-seater double-decker executive vehicle. Beyond that, we supply a
                                                    wide range of high-capacity options, such as 60-, 65-, 70-, 72-,
                                                    80-, and 85-seater coaches, all ready for hire to suit your group’s
                                                    size. </div>
                                            </div>
                                        </div>
                                        <div class="faq-border"></div>
                                        <!-- FAQ 6 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq6">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq6Content"
                                                    aria-expanded="false" aria-controls="faq6Content"> Are there
                                                    executive minibus and coach hire options? </button>
                                            </h2>
                                            <div id="faq6Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq6" data-bs-parent="#faqsAccordion">
                                                <div class="accordion-body"> Certainly. Our fleet includes Standard,
                                                    Executive, Luxury, and VIP classes for both minibuses and coaches.
                                                    If you prefer enhanced amenities and comfort, our executive or
                                                    higher-tier vehicles will meet your expectations. For more details,
                                                    simply reach out to our booking team. </div>
                                            </div>
                                        </div>
                                        <div class="faq-border"></div>
                                        <!-- FAQ 7 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq7">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq7Content"
                                                    aria-expanded="false" aria-controls="faq7Content"> Which regions and
                                                    cities in the UK does Viacoach cover? </button>
                                            </h2>
                                            <div id="faq7Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq7" data-bs-parent="#faqsAccordion">
                                                <div class="accordion-body"> Our coverage is truly nationwide. We cater
                                                    to all towns and cities across the UK, ensuring a reliable transport
                                                    option for passengers wherever they need to go. We pride ourselves
                                                    on offering consistent service from the bustling cities to more
                                                    remote locations. </div>
                                            </div>
                                        </div>
                                        <div class="faq-border"></div>
                                        <!-- FAQ 8 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq8">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq8Content"
                                                    aria-expanded="false" aria-controls="faq8Content"> For which events
                                                    can I book transportation with Viacoach? </button>
                                            </h2>
                                            <div id="faq8Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq8" data-bs-parent="#faqsAccordion">
                                                <div class="accordion-body"> We provide reliable transport for a wide
                                                    variety of events, including major sporting occasions, corporate
                                                    functions, and more. To secure your preferred dates and pricing, we
                                                    recommend reserving well in advance, especially during peak seasons.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex flex-column faq-acc accordion gap-4 ps-xl-2">
                                        <!-- FAQ 1 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq9">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq9Content"
                                                    aria-expanded="true" aria-controls="faq9Content"> Are Viacoach
                                                    drivers fully CRB checked? </button>
                                            </h2>
                                            <div id="faq9Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq9" data-bs-parent="#additionalFaqsAccordion">
                                                <div class="accordion-body"> Yes. We conduct comprehensive CRB (DBS)
                                                    checks on all our drivers to ensure our passengers’ well-being.
                                                    Safety remains a priority, and we only work with professionals who
                                                    meet our strict standards. </div>
                                            </div>
                                        </div>
                                        <div class="faq-border"></div>
                                        <!-- FAQ 2 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq10">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq10Content"
                                                    aria-expanded="false" aria-controls="faq10Content"> What is your
                                                    smallest minibus option? </button>
                                            </h2>
                                            <div id="faq10Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq10" data-bs-parent="#additionalFaqsAccordion">
                                                <div class="accordion-body"> The most compact vehicle in our fleet
                                                    offers 8 seats. Its long wheelbase design comfortably accommodates
                                                    up to 8 passengers and their 8 large suitcases, making it ideal for
                                                    smaller groups or airport transfers with substantial luggage. </div>
                                            </div>
                                        </div>
                                        <div class="faq-border"></div>
                                        <!-- FAQ 3 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq11">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq11Content"
                                                    aria-expanded="false" aria-controls="faq11Content"> How much should
                                                    I budget for coach hire in the UK? </button>
                                            </h2>
                                            <div id="faq11Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq11" data-bs-parent="#additionalFaqsAccordion">
                                                <div class="accordion-body"> Viacoach aims to provide both affordability
                                                    and clarity when it comes to pricing. Below is a rough guide to our
                                                    daily rates: <ul>
                                                        <li><strong>8-Seater Minibus:</strong> from £450 per day</li>
                                                        <li><strong>16-Seater Minibus:</strong> from £650 per day</li>
                                                        <li><strong>33-Seater Coach:</strong> from £950 per day</li>
                                                    </ul> These indicative rates help you plan ahead, and our team will
                                                    provide a tailored quotation based on your specific needs. </div>
                                            </div>
                                        </div>
                                        <div class="faq-border"></div>
                                        <!-- FAQ 4 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq12">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq12Content"
                                                    aria-expanded="false" aria-controls="faq12Content"> What kinds of
                                                    services does Viacoach offer? </button>
                                            </h2>
                                            <div id="faq12Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq12" data-bs-parent="#additionalFaqsAccordion">
                                                <div class="accordion-body"> We cover everything from school bus
                                                    services and wedding transport to sightseeing tours, private
                                                    charters, airport shuttles, and corporate travel. Whether it’s a day
                                                    trip or a multi-day journey, we strive to accommodate diverse
                                                    transportation requests with ease. </div>
                                            </div>
                                        </div>
                                        <div class="faq-border"></div>
                                        <!-- FAQ 5 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq13">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq13Content"
                                                    aria-expanded="false" aria-controls="faq13Content"> Do your drivers
                                                    hold the necessary experience and licenses? </button>
                                            </h2>
                                            <div id="faq13Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq13" data-bs-parent="#additionalFaqsAccordion">
                                                <div class="accordion-body"> Certainly. Our drivers are fully licensed
                                                    professionals, vetted through CRB checks, and receive ongoing
                                                    training. We make sure they remain updated on best practices for
                                                    passenger safety, comfort, and customer service. </div>
                                            </div>
                                        </div>
                                        <div class="faq-border"></div>
                                        <!-- FAQ 6 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq14">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq14Content"
                                                    aria-expanded="false" aria-controls="faq14Content"> Can I request a
                                                    coach hire at the last minute? </button>
                                            </h2>
                                            <div id="faq14Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq14" data-bs-parent="#additionalFaqsAccordion">
                                                <div class="accordion-body"> While advance bookings guarantee better
                                                    vehicle availability, we do our best to fulfill urgent or
                                                    short-notice requests when possible. Please give our team a call to
                                                    discuss options and secure a suitable vehicle. </div>
                                            </div>
                                        </div>
                                        <div class="faq-border"></div>
                                        <!-- FAQ 7 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq15">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq15Content"
                                                    aria-expanded="false" aria-controls="faq15Content"> How do I find
                                                    out if you have vehicles available on a specific date? </button>
                                            </h2>
                                            <div id="faq15Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq15" data-bs-parent="#additionalFaqsAccordion">
                                                <div class="accordion-body"> You can either visit our website or reach
                                                    out to our customer support for up-to-date availability. Our agents
                                                    strive to respond promptly and will work with you to find the best
                                                    possible solution for your travel schedule. </div>
                                            </div>
                                        </div>
                                        <div class="faq-border"></div>
                                        <!-- FAQ 8 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq16">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq16Content"
                                                    aria-expanded="false" aria-controls="faq16Content"> Do your coaches
                                                    come with restrooms on board? </button>
                                            </h2>
                                            <div id="faq16Content" class="accordion-collapse collapse"
                                                aria-labelledby="faq16" data-bs-parent="#additionalFaqsAccordion">
                                                <div class="accordion-body"> Most of our larger coaches include on-board
                                                    restrooms, and many also provide entertainment systems, comfortable
                                                    seating, generous legroom, and wheelchair access. Our Executive
                                                    class and above typically feature restrooms to enhance overall
                                                    travel comfort. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
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
                                class="social-icons flex-sm-nowrap justify-content-sm-start justify-content-center flex-wrap ms-md-auto me-md-0 mx-auto">
                                <a href="https://www.instagram.com/travel_viacoach?igsh=b2I0amUwdWMyaGF0"
                                    target="_blank">
                                    <img src="./assets/img/insta-icon.svg" alt="Icon" class="social-icon">
                                </a>
                                <a href="https://www.facebook.com/TRAVEL.VIACOACH" target="_blank">
                                    <img src="./assets/img/facebook-icon.svg" alt="Icon" class="social-icon">
                                </a>
                                <a href="https://www.linkedin.com/company/102036319/admin/feed/posts/" target="_blank">
                                    <img src="./assets/img/linkedin-icon.svg" alt="Icon" class="social-icon">
                                </a>
                                <a href="https://x.com/travel_Viacoach" target="_blank">
                                    <img src="./assets/img/x-icon.svg" alt="Icon" class="social-icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-slider">
                    <div class="fs-item">
                        <a href="https://www.instagram.com/travel_viacoach?igsh=b2I0amUwdWMyaGF0" target="_blank"
                            class="fsi-link">
                            <img src="./assets/img/insta-icon.svg" alt="Icon" class="fs-icon">
                        </a>
                        <img src="./assets/img/fs-1.png" alt="IMG" class="fs-img">
                    </div>
                    <div class="fs-item">
                        <a href="https://www.instagram.com/travel_viacoach?igsh=b2I0amUwdWMyaGF0" target="_blank"
                            class="fsi-link">
                            <img src="./assets/img/insta-icon.svg" alt="Icon" class="fs-icon">
                        </a>
                        <img src="./assets/img/fs-2.png" alt="IMG" class="fs-img">
                    </div>
                    <div class="fs-item">
                        <a href="https://www.instagram.com/travel_viacoach?igsh=b2I0amUwdWMyaGF0" target="_blank"
                            class="fsi-link">
                            <img src="./assets/img/insta-icon.svg" alt="Icon" class="fs-icon">
                        </a>
                        <img src="./assets/img/fs-3.png" alt="IMG" class="fs-img">
                    </div>
                    <div class="fs-item">
                        <a href="https://www.instagram.com/travel_viacoach?igsh=b2I0amUwdWMyaGF0" target="_blank"
                            class="fsi-link">
                            <img src="./assets/img/insta-icon.svg" alt="Icon" class="fs-icon">
                        </a>
                        <img src="./assets/img/fs-4.png" alt="IMG" class="fs-img">
                    </div>
                    <div class="fs-item">
                        <a href="https://www.instagram.com/travel_viacoach?igsh=b2I0amUwdWMyaGF0" target="_blank"
                            class="fsi-link">
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
        <!-- Modal -->
        <div class="modal fade moreCoachesModal" id="moreCoachesModal" tabindex="-1"
            aria-labelledby="moreCoachesModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-4">
                        <div class="d-flex flex-column gap-4">
                            <div class="d-flex flex-column gap-3 text-center align-items-center">
                                <h4 class="text-black mb-0 df-title fw-bold inter">Heads up! 🚍</h4>
                                <p class="mb-0 mt-1 text-black"> You might need more than one coach—no worries, we've
                                    got you covered! 😊’ </p>
                            </div>
                            <div class="d-flex flex-column gap-4">
                                <button type="button" class="btn btn-ferozi btn-coaches-confirm rounded-pill"
                                    onclick="confirmMoreCoaches()">Continue</button>
                                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">No, Cancel
                                    it</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>

        function isFormValidated() {

            let validated = true;
            let $name = $('#name');
            let $email = $('#email');
            let $phone = $('#phone');
            let $passengers = $('#passengers');
            let $return_passengers = $('#return_passengers');
            console.log($name);
            if ($name.val() == '') {
                $name.closest('.hff-box').addClass('hff-error');
                validated = false;
            } else {
                $name.closest('.hff-box').removeClass('hff-error');
            }

            if ($email.val() == '' || !isValidEmail($email.val())) {
                $email.closest('.hff-box').addClass('hff-error');
                validated = false;
            } else {
                $email.closest('.hff-box').removeClass('hff-error');
            }

            if ($phone.val() == '') {
                $phone.closest('.hff-box').addClass('hff-error');
                validated = false;
            } else {
                $phone.closest('.hff-box').removeClass('hff-error');
            }

            return validated;
        }

        let allowFormToSubmit = false; // Track if form submission is allowed
        let bypassValidation = false; // Bypass validation after modal confirmation

        function confirmMoreCoaches() {
            bypassValidation = true; // Set the bypass flag
            allowFormToSubmit = true; // Allow form submission
            $('#moreCoachesModal').modal('hide');
            $('.hf-form').submit();

        }

        $(document).ready(function () {
            $('.hf-form').on('submit', function (e) {
                let $form = $(this);
                let $passengers = $('#passengers');
                let $return_passengers = $('#return_passengers');

                if (!bypassValidation) { // Only validate if bypass is not enabled
                    if (isFormValidated()) {
                        if (Number($passengers.val()) > 100 || Number($return_passengers.val()) > 100) {
                            allowFormToSubmit = false; // Prevent submission initially
                            $('#moreCoachesModal').modal('show'); // Show the modal
                        } else {
                            allowFormToSubmit = true; // Allow form submission
                        }
                    }

                    // Prevent form submission if validation fails or modal is required
                    if (allowFormToSubmit && isFormValidated()) {
                    }else{
                        e.preventDefault();
                    }
                }else{
                    // Prevent form submission if validation fails or modal is required
                    if (allowFormToSubmit && isFormValidated()) {
                    }else{
                        e.preventDefault();
                    }
                }
            });
        });


    </script>

</html>