<footer class="py-4 px-4">
    <div class="footer-container py-3">
        <div class="d-flex flex-column gap-4">
            <div class="foot-top mb-3">
                <div class="d-flex gap-5 justify-content-between flex-wrap">
                    <div class="d-flex flex-column gap-5 foot-sec-1">
                        <a href="./index.php">
                            <img src="./assets/img/logo-dark.png" alt="Logo Dark" class="foot-logo" height="76">
                        </a>
                        <p class="mb-0 foot-desc"> your go-to platform for planning and booking unforgettable travel
                            experiences. Whether you're dreaming of a relaxing beach vacation, an adventurous mountain
                            trek, or a vibrant city escape, we make it easy for you to find and book the perfect trip.
                        </p>
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
                        <div class="d-flex flex-wrap gap-4 footer-social-links">
                            <a href="https://www.facebook.com/TRAVEL.VIACOACH" target="_blank" class="py-2 pe-2 ps-3">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="https://www.tiktok.com/@viacoach?_t=8lxnBxh1drd&_r=1" target="_blank"
                                class="py-2 pe-2 ps-3">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                            <a href="https://www.instagram.com/travel_viacoach?igsh=b2I0amUwdWMyaGF0" target="_blank"
                                class="py-2 pe-2 ps-3">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://x.com/travel_Viacoach" target="_blank" class="py-2 pe-2 ps-3">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/102036319/admin/feed/posts/" target="_blank"
                                class="py-2 pe-2 ps-3">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
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
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <a href="./index.php/#destinations-sec" class="snav-link">Destinations</a>
                    <a href="./index.php/#fleets-sec" class="snav-link">Fleet</a>
                    <a href="./index.php/#tours-sec" class="snav-link">Tours</a>
                    <a href="./index.php/#services-sec" class="snav-link">Services</a>
                    <a href="./index.php/#offers-sec" class="snav-link">Offers</a>
                    <a href="./index.php/#reviews-sec" class="snav-link">Reviews</a>
                    <a href="./index.php/#faq" class="snav-link">FAQ</a>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- Modal -->
<div class="modal fade" id="pinLocationModal" tabindex="-1" aria-labelledby="pinLocationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-0 modal-title">Pick ppin point location</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="locMap"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn rounded-pill fw-semibold text-black btn-cancel" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn rounded-pill fw-semibold text-black btn-ferozi" data-bs-dismiss="modal">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- <script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="elfsight-app-07039bca-a63c-4010-885b-b47427233d0f" data-elfsight-app-lazy></div> -->
<script src="./assets/js/jquery-3.7.1.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<script src="./assets/js/select2.min.js"></script>
<script src="./assets/js/jquery-ui.min.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCGxZXJ2gpN_is2UY1AXp98MN7sQHpIKk&libraries=places"
    async defer></script>
<script src="./assets/js/custom.js?v=3"></script>