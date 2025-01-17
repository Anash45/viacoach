const reasons = [
  "Event",
  "Airport Transfer",
  "Birthday Party",
  "Charity Event",
  "Christmas Party",
  "Corporate Event",
  "Night Club Run",
  "Day Out",
  "Ferry Port Transfer",
  "Football Event",
  "Funeral",
  "Family Function",
  "Hen Event",
  "Horse Racing Day",
  "Music Event",
  "Night Out",
  "Other Sporting Event",
  "Seaside Trip",
  "Religious Trip",
  "School Trip",
  "Shopping Trip",
  "Stag Event",
  "Theme Park Trip",
  "Train Station Transfer",
  "TV Media",
  "UK Tour",
  "Weddings",
  "Europe Tour",
  "Other Not Listed",
  "Theatre plays",
  "Movie premiers",
  "Concerts",
  "Shopping Trips",
  "London Cruise Transfer",
  "Football matches",
  "Sports Festivals",
  "Golfing / Bowling / Theme Parks Days out",
  "Beth, Cambridge & Oxford Tour",
  "Windsor Castle and Bicester Village Tour",
  "Private Luxury Tours"
];

function populateReasons() {
  reasons.forEach((reason, index) => {
    $('.events_inp').append(`<option value="${reason}">${reason}</option>`);
  })
}

$(document).ready(function () {
  populateReasons();
  $('.hf-select').select2({
    dropdownCssClass: 'hfs-dropdown',
    containerCssClass: 'hfs-container'
  });

  $('.revese-btn').each(function () {
    $(this).click(function (e) {
      e.stopPropagation();
      var destinations = $(this).closest('.hfb-destinations');
      var hfg_from = destinations.find('.hfg-from');
      var hfg_to = destinations.find('.hfg-to');
      let hfgf_val = hfg_from.find('input').val();
      let hfgt_val = hfg_to.find('input').val();

      hfg_from.find('input').val(hfgt_val).trigger('change');
      hfg_to.find('input').val(hfgf_val).trigger('change');
    });
  });

  $('.hf-date').datepicker({
    dateFormat: 'dd M y', // Customize the date format
    changeMonth: true,     // Allows changing month via dropdown
    changeYear: true,      // Allows changing year via dropdown
    showButtonPanel: true, // Adds "Today" and "Done" buttons
  });
});

$(document).ready(function () {
  // Initialize Slick with custom settings

  $('.destinations-carousel').each(function () {
    var $carousel = $(this); // Current carousel instance

    $carousel.on('init', function (event, slick) {
      // Set initial values for the counter
      $carousel.closest('section').find('.sc-current').text(slick.currentSlide + 1); // Current slide index (1-based)
      $carousel.closest('section').find('.sc-total').text(slick.slideCount); // Total number of slides
    });

    $carousel.on('afterChange', function (event, slick, currentSlide) {
      // Update current slide index after a change
      $carousel.closest('section').find('.sc-current').text(currentSlide + 1); // Update current slide number
    });


    let sc_dots = $(this).closest('section').find('.sc-dots');

    $carousel.slick({
      autoplay: true,
      autoplaySpeed: 2000,
      variableWidth: true,
      slidesToScroll: 1,
      arrows: false, // Disable default arrows
      dots: true,
      infinite: true,
      appendDots: sc_dots,
      responsive: [
        {
          breakpoint: 576,
          settings: {
            variableWidth: false,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

  });



  $('.services-carousel').each(function () {
    var $carousel = $(this); // Current carousel instance

    $carousel.on('init', function (event, slick) {
      // Set initial values for the counter
      $carousel.closest('section').find('.sc-current').text(slick.currentSlide + 1); // Current slide index (1-based)
      $carousel.closest('section').find('.sc-total').text(slick.slideCount); // Total number of slides
    });

    $carousel.on('afterChange', function (event, slick, currentSlide) {
      // Update current slide index after a change
      $carousel.closest('section').find('.sc-current').text(currentSlide + 1); // Update current slide number
    });


    let sc_dots = $(this).closest('section').find('.sc-dots');

    $carousel.slick({
      autoplay: true,
      autoplaySpeed: 20000,
      variableWidth: false,
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: false, // Disable default arrows
      dots: true,
      infinite: true,
      appendDots: sc_dots,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            variableWidth: false,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

  });


  $('.testimonials-carousel').each(function () {
    var $carousel = $(this); // Current carousel instance

    $carousel.on('init', function (event, slick) {
      // Set initial values for the counter
      $carousel.closest('section').find('.sc-current').text(slick.currentSlide + 1); // Current slide index (1-based)
      $carousel.closest('section').find('.sc-total').text(slick.slideCount); // Total number of slides
    });

    $carousel.on('afterChange', function (event, slick, currentSlide) {
      // Update current slide index after a change
      $carousel.closest('section').find('.sc-current').text(currentSlide + 1); // Update current slide number
    });


    let sc_dots = $(this).closest('section').find('.sc-dots');

    $carousel.slick({
      autoplay: true,
      autoplaySpeed: 2000,
      variableWidth: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false, // Disable default arrows
      dots: true,
      infinite: true,
      appendDots: sc_dots,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            variableWidth: false,
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            variableWidth: false,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

  });

  // Iterate over each carousel to add custom arrows dynamically
  $('.slick-carousel').each(function () {
    var $carousel = $(this); // Current carousel instance

    // Create custom arrows
    var prevArrow = $(`<span class="slider-arrow prev-arrow"><svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.75" y="0.5" width="39" height="39" rx="19.5" stroke="#D4D4D4"/>
<path d="M23.25 14.7051C22.86 14.3151 22.23 14.3151 21.84 14.7051L17.25 19.2951C16.86 19.6851 16.86 20.3151 17.25 20.7051L21.84 25.2951C22.23 25.6851 22.86 25.6851 23.25 25.2951C23.64 24.9051 23.64 24.2751 23.25 23.8851L19.37 19.9951L23.25 16.1151C23.64 15.7251 23.63 15.0851 23.25 14.7051Z" fill="#171717"/>
</svg></span>
`);
    var nextArrow = $(`<span class="slider-arrow next-arrow"><svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="-0.5" y="0.5" width="39" height="39" rx="19.5" transform="matrix(-1 0 0 1 39.25 0)" stroke="#D4D4D4"/>
<path d="M17.25 14.7051C17.64 14.3151 18.27 14.3151 18.66 14.7051L23.25 19.2951C23.64 19.6851 23.64 20.3151 23.25 20.7051L18.66 25.2951C18.27 25.6851 17.64 25.6851 17.25 25.2951C16.86 24.9051 16.86 24.2751 17.25 23.8851L21.13 19.9951L17.25 16.1151C16.86 15.7251 16.87 15.0851 17.25 14.7051Z" fill="#171717"/>
</svg></span>
`);

    // Append custom arrows to the element next to the carousel
    var $arrowContainer = $carousel.closest('section').find('.slider-arrows');
    $arrowContainer.append(prevArrow, nextArrow);

    // Add click event handlers for custom arrows
    prevArrow.on('click', function () {
      $carousel.slick('slickPrev'); // Go to the previous slide
    });

    nextArrow.on('click', function () {
      $carousel.slick('slickNext'); // Go to the next slide
    });
  });
  $('.filter-buttons .sf-btn').on('click', function () {
    let $carousel = $(this).closest('section').find('.slick-carousel');
    var filterClass = $(this).data('filter');

    // Add 'active' class to the clicked button and remove from siblings
    $(this).addClass('active').siblings().removeClass('active');

    if (filterClass === '*') {
      $carousel.slick('slickUnfilter'); // Show all slides
    } else {
      $carousel.slick('slickUnfilter'); // Clear existing filters
      $carousel.slick('slickFilter', function (index, slide) {
        return $(slide).hasClass(filterClass.substring(1)); // Match class without dot
      });
    }
  });

  $('.footer-slider').slick({
    centerMode: true,
    variableWidth: true,
    autoplay: true,
    pauseOnHover: true, // Pauses on hover
    autoplaySpeed: 1000, // Makes the autoplay continuous
    speed: 1000, // Controls the sliding speed
    arrows: false,
    slidesToScroll: 1,
    dots: false
  });
});


$(document).ready(function () {
  $('#myTab .nav-link').on('shown.bs.tab', function () {
    $('#myTab .nav-item').removeClass('step-active'); // Remove the class from all items
    $(this).parent().addClass('step-active'); // Add the class to the active item's parent
  });

  // Initialize the active class on page load
  $('#myTab .nav-link.active').parent().addClass('step-active');

  $(document).on('click', function (e) {
    if (!$(e.target).closest('.side-nav').length) {
      let sidebarOpened = $('.aside').attr('data-opened');
      if (sidebarOpened == 'yes') {
        closeSidebar();
      }
    }
  });

  $('.hf-filter-btns .hff-btn').on('click', function () {
    let targetFormType = $(this).attr('data-form-type');
    if (targetFormType == 'one-way') {
      $('.hf-form').removeClass('hff-round-trip');
      $('.hf-form').addClass('hff-single-trip');
    } else if (targetFormType == 'round-trip') {
      $('.hf-form').removeClass('hff-single-trip');
      $('.hf-form').addClass('hff-round-trip');
    }
    $('.hf-filter-btns').find('.hff-btn').removeClass('active');
    $(this).addClass('active');
  })
});

function switchTab(tabId) {
  $('#' + tabId).tab('show');
}

function openSidebar() {
  $('aside').animate({
    width: "100%"
  }, 500);

  $('.side-nav').delay(250).animate({
    width: "600px"
  }, 500);
  setTimeout(() => {
    $('.aside').attr('data-opened', 'yes');
  }, 500);
}


function closeSidebar() {
  $('.side-nav').animate({
    width: "0%"
  }, 500);

  $('aside').delay(250).animate({
    width: "0%"
  }, 500);
  setTimeout(() => {
    $('.aside').attr('data-opened', 'no');
  }, 500);
}

function updateFleetImagesAndModels() {

  $('.fl-card').each(function () {
    const $card = $(this).parent('div'); // Wrap the card in a jQuery object
    const models = $card.data('models'); // Get and parse data-models
    const images = $card.data('images'); // Get and parse data-images

    // Get the first image and model elements
    const $imageElement = $card.find('.lc-img');
    const $titleElement = $card.find('.lc-title');

    let index = 0; // Initialize index for cycling through models and images
    const total = models.length; // Get the total number of models/images

    // Function to update the image and model
    function updateContent() {
      $imageElement.attr('src', `./assets/img/fleet-imgs/${images[index]}`);
      $imageElement.attr('alt', `${$card.data('seater')} ${$card.data('class')} - ${models[index]}`);
      $titleElement.text(models[index]);

      // Cycle to the next index
      index = (index + 1) % total;
    }

    // Start automatic looping with a 2-second interval
    setInterval(updateContent, 2000);

    // Optionally, you can update immediately before the interval starts
    updateContent();
  });
}



function getFleetHtml(fleet) {
  let featuresHtml = "";
  fleet.features.forEach(feature => {
    let featureSlug = feature.toLowerCase().replace(/[^a-z0-9]/g, "");
    featuresHtml += `<span><img src='./assets/img/feature-icons/${featureSlug}.svg' alt='${feature}' class='lc-feature-img'></span>`;
  });

  // Normalize model and image to arrays for consistency
  const models = Array.isArray(fleet.model) ? fleet.model : [fleet.model];
  const images = Array.isArray(fleet.image) ? fleet.image : [fleet.image];

  let fleetHtml = `
    <div class="col-xl-4 col-lg-6 pb-4" data-class="${fleet.class.toLowerCase()}" data-seater="${fleet.seat_capacity}" 
         data-models='${JSON.stringify(models)}' data-images='${JSON.stringify(images)}'>
      <div class="landing-card fl-card">
        <div class="p-3 d-flex flex-column gap-4">
          <a href="#" class="lc-top d-block">
            <img src="./assets/img/fleet-imgs/${images[0]}" alt="${fleet.seat_capacity} ${fleet.bus_type}" class="lc-img" id="fleet-image-0">
          </a>
          <div class="lc-bottom">
            <div class="d-flex flex-column gap-2">
              <div class="fleet-class mb-1">
                <span class="lh-1">${fleet.class} Coach</span>
              </div>
              <div class="d-flex gap-2 text-black flex-wrap fw-semibold">
                <span class="lh-sm">${fleet.seat_capacity}</span>
                <span class="center-line mx-1"></span>
                <span class="lh-sm">${fleet.bus_type}</span>
              </div>
              <a href="#" class="fw-semibold lh-sm d-block text-black my-1 lc-title" id="fleet-title-0">
                ${models[0]}
              </a>
              <div class="d-flex gap-2 text-black flex-wrap fw-normal mb-1">
                <span class="lh-sm">${fleet.luggage} Luggage bags</span>
                <span class="center-line mx-1"></span>
                <span class="lh-sm">${fleet.cabin} Cabin bags</span>
              </div>
              <div class="d-flex align-items-center lc-features">
                ${featuresHtml}
              </div>
              <p class="mb-0 text-dark lc-extras">(${fleet.extra_features})</p>
            </div>
          </div>
        </div>
      </div>
    </div>`;

  return fleetHtml;
}


// Function to populate seating capacity dropdown
function populateSeatingDropdown(selector) {
  $.getJSON("./assets/data/fleets.json", function (data) {
    let seatingOptions = new Array;

    $(selector).append(`<option value="all">All</option>`);
    $.each(data, function (index, fleet) {
      $(selector).append(`<option value="${fleet.seat_capacity}">${fleet.seat_capacity}</option>`);
      $('#bp_vehicle_type').append(`<option value="${fleet.seat_capacity} Seater - ${fleet.model}  ">${fleet.seat_capacity} Seater - ${fleet.model} </option>`);
      $('#bp_vehicle_size').append(`<option value="${fleet.seat_capacity} ${fleet.bus_type}">${fleet.seat_capacity} ${fleet.bus_type} </option>`);
    });
  });


  $('.wrf-select').each(function () {
    $(this).select2({
      dropdownCssClass: 'wrf-dropdown',
      containerCssClass: 'wrf-container',
      minimumResultsForSearch: Infinity // Hides the search input
    });
  });
}



// Global variable to store fleet data
let fleetsData = [];

function populateFleetsRow() {
  // Load the JSON file
  $.getJSON("./assets/data/fleets.json", function (data) {
    fleetsData = data; // Store the data in the global variable

    // Iterate through each fleet item
    $.each(fleetsData, function (index, fleet) {
      // Generate the fleet HTML structure
      let fleetHtml = getFleetHtml(fleet);

      // Append the generated HTML to the #fleets-row container
      $("#fleets-row").append(fleetHtml);
    });
  });
}


let currentPage = 1; // Track the current page
const itemsPerPage = 6; // Number of items to show per page
let filteredFleets = []; // Store the filtered fleets

function showPage(page) {
  // If both dropdowns are set to "all", use the full fleet data
  if ($('#coachType').val() === 'all' && $('#coachSeating').val() === 'all') {
    filteredFleets = fleetsData;
  }



  const totalItems = filteredFleets.length;
  const totalPages = Math.ceil(totalItems / itemsPerPage);

  // Ensure the page number is within valid bounds
  page = Math.max(1, Math.min(page, totalPages));
  currentPage = page;

  // Clear the fleet container
  $('#fleets-row').empty();

  // If there are no fleets to show, disable navigation buttons
  if (totalItems === 0) {
    $('.fp-prev, .fp-next').prop('disabled', true);
    return;
  }

  // Calculate the indices for the items to show on the current page
  const startIndex = (page - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;

  // Append the items for the current page to the fleet container
  filteredFleets.slice(startIndex, endIndex).forEach(fleet => {
    const fleetHtml = getFleetHtml(fleet);
    $('#fleets-row').append(fleetHtml);
  });

  // Enable/disable navigation buttons
  // Add or remove the 'disabled' class for navigation buttons
  if (page === 1) {
    $('.fp-prev').addClass('disabled');
  } else {
    $('.fp-prev').removeClass('disabled');
  }

  if (page === totalPages) {
    $('.fp-next').addClass('disabled');
  } else {
    $('.fp-next').removeClass('disabled');
  }

  updateFleetImagesAndModels();
}


function filterFleets() {
  let coachClass = $('#coachType').val().toLowerCase(); // Get the selected coach class
  let seatingCapacity = $('#seatingCapacity').val(); // Get the selected seating capacity

  // Check if neither filter is "all"
  const applyFilteredClass = coachClass !== 'all' && seatingCapacity !== 'all';

  // Filter the global fleet data
  filteredFleets = fleetsData.filter(fleet => {
    const matchesClass = coachClass === 'all' || fleet.class.toLowerCase() === coachClass;
    const matchesSeater = seatingCapacity === 'all' || fleet.seat_capacity == seatingCapacity;
    return matchesClass && matchesSeater;
  });

  // Add a `filtered` property to the fleets if both filters are active
  if (applyFilteredClass) {
    filteredFleets = filteredFleets.map(fleet => ({ ...fleet, filtered: true }));
  } else {
    filteredFleets = filteredFleets.map(fleet => ({ ...fleet, filtered: false }));
  }

  // Show the first page of the filtered results
  showPage(1);
}

$(document).ready(function () {
  populateSeatingDropdown("#seatingCapacity");
  if ($('body').hasClass('homepage')) {
    populateFleetsRow();

    // Attach event listeners for pagination buttons
    $('.fp-prev').on('click', function () {
      showPage(currentPage - 1);
    });

    $('.fp-next').on('click', function () {
      showPage(currentPage + 1);
    });

    // Apply filters and initialize the pagination on dropdown change
    $('#coachType, #seatingCapacity').change(function () {
      filterFleets();
    });

    // Initialize with the first page
    setTimeout(() => {
      filterFleets();
    }, 1000);
  }
});



$(document).ready(function () {
  $.getJSON("./assets/data/tours.json", function (data) {
    const $carousel = $(".tours-carousel");
    $carousel.empty();

    data.forEach(tour => {
      const tourTypeClass = tour.type === "domestic" ? "domestic" : "international";

      const tourHtml = `
        <div class="slide ${tourTypeClass}">
          <div class="landing-card tour-card">
            <div class="p-3 d-flex flex-column gap-4">
              <div class="position-relative">
                <a href="#" class="tour-save">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.25 3.75H8.75C7.375 3.75 6.25 4.875 6.25 6.25V26.25L15 22.5L23.75 26.25V6.25C23.75 4.875 22.625 3.75 21.25 3.75ZM21.25 22.5L15 19.775L8.75 22.5V7.5C8.75 6.8125 9.3125 6.25 10 6.25H20C20.6875 6.25 21.25 6.8125 21.25 7.5V22.5Z" fill="white"/>
                  </svg>
                </a>
                <a href="#" class="lc-top d-block">
                  <img src="./assets/img/tours/${tour.image}" alt="${tour.title}" class="tc-img" >
                </a>
              </div>
              <div class="lc-bottom">
                <div class="d-flex flex-column gap-10px">
                  <div class="d-flex flex-column gap-2 mb-1">
                    <div class="fleet-class mb-1">
                      <span class="lh-1">${tour.class} Coach</span>
                    </div>
                    <div class="d-flex flex-column gap-2">
                      <a href="#" class="fw-semibold d-block text-black lc-title lh-sm">${tour.title}</a>
                      <div class="d-flex gap-2 tc-specs flex-wrap fw-normal">
                        <span class="lh-sm">${tour.stops} Stops</span>
                        <span class="center-line"></span>
                        <span class="lh-sm">${tour.duration}</span>
                      </div>
                    </div>
                    <div class="d-flex flex-column tcc-details my-2">
                      <p class="mb-0 text-dark fw-semibold">${tour.audience}</p>
                      <p class="mb-0 tcc-desc">${tour.description}</p>
                    </div>
                    <div class="d-flex gap-2 tc-features flex-wrap text-black align-items-center">
                      <div class="d-flex align-items-center gap-1 fw-medium p-1">
                        <span>
                          <img src="./assets/img/tours-icons/luggage-1.svg" alt="Luggage" class="tours-icons">
                        </span>
                        <span class="lh-1">Luggage: ${tour.luggage}</span>
                      </div>
                      ${tour.ac == 'Yes' ? `<div class="d-flex align-items-center gap-1 fw-medium p-1 ms-1">
                        <span>
                          <img src="./assets/img/tours-icons/ac-1.svg" alt="AC" class="tours-icons">
                        </span>
                        <span class="lh-1">AC</span>
                      </div>`: ''}
                      ${tour.toilet == 'Yes' ? `<div class="d-flex align-items-center gap-1 fw-medium p-1 ms-1">
                        <span>
                          <img src="./assets/img/tours-icons/toilet-1.svg" alt="Toilet" class="tours-icons">
                        </span>
                        <span class="lh-1">Toilet</span>
                      </div>`: ''}
                      ${tour.entertainment == 'Yes' ? `<div class="d-flex align-items-center gap-1 fw-medium p-1 ms-1">
                        <span>
                          <img src="./assets/img/tours-icons/multimedia-1.svg" alt="Multimedia" class="tours-icons">
                        </span>
                        <span class="lh-1">Multimedia</span>
                      </div>`: ''}
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="lh-sm tc-persons fw-semibold">${tour.currency}${tour.price} / ${tour.price_per}</span>
                    <a href="#" class="btn sf-btn fw-bold">Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>`;

      $carousel.append(tourHtml);
    });
    $('.tours-carousel').each(function () {
      var $carousel = $(this); // Current carousel instance

      $carousel.slick({
        autoplay: true,
        autoplaySpeed: 20000,
        variableWidth: true,
        slidesToScroll: 1,
        arrows: false, // Disable default arrows
        dots: false,
        infinite: true,
        responsive: [
          {
            breakpoint: 576,
            settings: {
              variableWidth: false,
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });

    });
  });
});

// Function to populate the carousel
function populateDiscountCarousel(offers) {
  const carouselContainer = $('.discounts-carousel');
  offers.forEach(offer => {
    const slide = `
          <div class="slide ${offer.type}">
              <div class="discount-card" style="background-image: url(./assets/img/discount-1.png);">
                  <div class="p-3">
                      <div class="dc-inner p-3">
                          <div class="d-flex h-100 flex-column gap-4 justify-content-between">
                              <div class="d-flex flex-column gap-3">
                                  <div class="dc-badge">${offer.type.charAt(0).toUpperCase() + offer.type.slice(1)}</div>
                                  <div class="d-flex flex-column">
                                      <p class="mb-0 fw-medium dc-subtitle">${offer.offer_name}</p>
                                      <h4 class="mb-0 fw-medium lh-1 mb-1">
                                          ${offer.percentage == '' ? '' : `<span class="lh-1 dc-title-1">${offer.percentage}</span>`}
                                          <span class="lh-1 dc-title-2">${offer.sub_title}</span>
                                      </h4>
                                      <p class="mb-0 text-dark fw-medium">${offer.description}</p>
                                  </div>
                                  <p class="mb-0 dc-note">*terms and conditions apply</p>
                              </div>
                              <div class="mt-3">
                                  <a href="#hero" class="btn dc-btn text-white fw-bold">Book Now</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      `;
    carouselContainer.append(slide);
  });

  $('.discounts-carousel').each(function () {
    var $carousel = $(this); // Current carousel instance

    $carousel.on('init', function (event, slick) {
      // Set initial values for the counter
      $carousel.closest('section').find('.sc-current').text(slick.currentSlide + 1); // Current slide index (1-based)
      $carousel.closest('section').find('.sc-total').text(slick.slideCount); // Total number of slides
    });

    $carousel.on('afterChange', function (event, slick, currentSlide) {
      // Update current slide index after a change
      $carousel.closest('section').find('.sc-current').text(currentSlide + 1); // Update current slide number
    });


    let sc_dots = $(this).closest('section').find('.sc-dots');

    $carousel.slick({
      autoplay: true,
      autoplaySpeed: 20000,
      variableWidth: false,
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: false, // Disable default arrows
      dots: true,
      infinite: true,
      appendDots: sc_dots,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            variableWidth: false,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

  });
}



function checkBookingForm() {
  let isValid = true;  // Flag to track if form is valid

  // Loop through all form elements that might have the 'required' attribute
  $("#booking-form :input").each(function () {
    // Check if the element has the 'required' attribute
    if ($(this).prop("required")) {
      // If the field is empty, apply a red border and set the form as invalid
      if ($(this).val() === "") {
        if ($(this).hasClass('no-box')) {
          $(this).addClass('hff-error');
        } else {
          $(this).closest('.hff-box').addClass('hff-error');
        }
        isValid = false;
      } else {
        // If the field is filled, remove the red border
        if ($(this).hasClass('no-box')) {
          $(this).removeClass('hff-error');
        } else {
          $(this).closest('.hff-box').removeClass('hff-error');
        }
      }
    }
  });

  // Prevent form submission if any required field is empty
  if (!isValid) {
    return false;
  }

  // If all required fields are filled, allow form submission
  return true;
}

// Fetch the offers data from offers.json and populate the carousel
$(document).ready(function () {
  $.getJSON('./assets/data/offers.json', function (offers) {
    populateDiscountCarousel(offers);
  });

  // $('#from-destination').on('click', function () {
  //   $('#fromModal').modal('show');
  // })

  // $('#to-destination').on('click', function () {
  //   $('#toModal').modal('show');
  // })

  $('#booking-form').on('submit', function (e) {

    if (!checkBookingForm()) {
      e.preventDefault();
      $('#bf-error').html(`<div class="alert alert-danger">The form has errors, resolve them and submit again!</div>`);
    }
  })

  $('.hff-box').find(':input').on('click', function (e) {
    e.stopPropagation();
  })

  $('.hff-box').on('click', function (event) {
    event.stopPropagation();
    console.log('Box clicked');

    // Check for `.hff-group` elements inside the clicked `.hff-box`
    const $hfgGroups = $(this).find('.hff-group');

    if ($hfgGroups.length > 1) {
      // Multiple `.hff-group` scenario
      const $clickedGroup = $(event.target).closest('.hff-group');

      if ($clickedGroup.length) {
        // Focus input within the clicked `.hff-group`
        $clickedGroup.find(':input').trigger('focus');
      } else {
        // Focus input within the first `.hff-group` if no specific group was clicked
        $hfgGroups.first().find(':input').trigger('focus');
      }
    } else if ($hfgGroups.length === 1) {
      // Single `.hff-group` scenario
      $hfgGroups.find(':input').trigger('focus');
    }
  });
});


function openPinLocation(id) {

}

let map, marker; // Global variables for map and marker

$(document).ready(function () {
  $('.loc-inp').each(function () {
    const inputElement = this; // Reference to the input field

    // Define Autocomplete options with componentRestrictions for Europe
    const autocompleteOptions = {
      componentRestrictions: { country: ["ad", "al", "at", "be", "bg", "by", "ch", "cy", "cz", "de", "dk", "ee", "es", "fi", "fr", "gb", "gr", "hr", "hu", "ie", "is", "it", "li", "lt", "lu", "lv", "mc", "me", "mk", "mt", "nl", "no", "pl", "pt", "ro", "rs", "se", "si", "sk", "sm", "ua"] },
    };

    // Initialize Autocomplete with restrictions
    const autocomplete = new google.maps.places.Autocomplete(inputElement, autocompleteOptions);

    // Event listener for place selection
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
      const place = autocomplete.getPlace();

      if (place && place.geometry && place.geometry.location) {
        // Populate the input with the formatted address
        $(inputElement).val(place.formatted_address);

        // Get latitude and longitude
        const lat = place.geometry.location.lat();
        const lng = place.geometry.location.lng();

        // Run the custom function with the input's ID and location
        const inputId = $(inputElement).attr('id');
        if (inputId) {
          openPinLocation(inputId, lat, lng);
        }
      }
    });
  });


});

function setLatLng(inputId, defaultLat, defaultLng) {
  $('#' + inputId).siblings('.hidden_lat').val(defaultLat);
  $('#' + inputId).siblings('.hidden_lng').val(defaultLng);
}

// Function to open the location picker modal
function openPinLocation(inputId, defaultLat, defaultLng) {
  let newLat = defaultLat;
  let newLng = defaultLng;
  setLatLng(inputId, newLat, newLng);
  // Initialize or reinitialize the map
  const locMapDiv = document.getElementById('locMap');

  // Default location (from autocomplete)
  const defaultPosition = { lat: defaultLat, lng: defaultLng };

  // Initialize the map
  map = new google.maps.Map(locMapDiv, {
    center: defaultPosition,
    zoom: 15,
  });

  // Initialize the marker
  marker = new google.maps.Marker({
    position: defaultPosition,
    map: map,
    draggable: true, // Allow the marker to be moved
  });

  // Update marker position on drag
  google.maps.event.addListener(marker, 'dragend', function () {
    newLat = marker.getPosition().lat();
    newLng = marker.getPosition().lng();
    setLatLng(inputId, newLat, newLng);
    console.log('Selected Pin Location:', { lat: newLat, lng: newLng });
  });

  // Open the modal (use your modal logic here)
  $('#pinLocationModal').modal('show');
}

function isValidEmail(email) {
  // Regular expression for email validation
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}