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

const additionalVehicles = [
  "WW campervan hire",
  "Party bus for birthdays",
  "Exotic car hire",
  "Vintage bus hire",
  "Limousine party hire",
  "Party limo hire",
  "Fire engine hire",
  "Wedding coach hire",
  "Children's party bus hire",
  "Tuk tuk hire",
  "Party car hire"
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
  $('.hfi-select').select2({
    minimumResultsForSearch: Infinity,
    dropdownCssClass: 'hfis-dropdown',
    containerCssClass: 'hfis-container'
  });

  $('.reverse-btn').each(function () {
    $(this).click(function (e) {
      e.stopPropagation();
      var destinations = $(this).closest('.hfb-destinations');
      var hfg_from = destinations.find('.hfg-from');
      var hfg_to = destinations.find('.hfg-to');
      let hfgf_val = hfg_from.find('input').val();
      let hfgt_val = hfg_to.find('input').val();
      let hfgf_lat_val = hfg_from.find('.hidden_lat').val();
      let hfgf_lng_val = hfg_from.find('.hidden_lng').val();
      let hfgt_lat_val = hfg_to.find('.hidden_lat').val();
      let hfgt_lng_val = hfg_to.find('.hidden_lng').val();

      hfg_from.find('input').val(hfgt_val).trigger('change');
      hfg_to.find('input').val(hfgf_val).trigger('change');
      hfg_from.find('.hidden_lat').val(hfgt_lat_val).trigger('change');
      hfg_from.find('.hidden_lng').val(hfgt_lng_val).trigger('change');
      hfg_to.find('.hidden_lat').val(hfgf_lat_val).trigger('change');
      hfg_to.find('.hidden_lng').val(hfgf_lng_val).trigger('change');
    });
  });

  $('.hf-date').datepicker({
    dateFormat: 'dd M y', // Customize the date format
    changeMonth: true,     // Allows changing month via dropdown
    changeYear: true,      // Allows changing year via dropdown
    showButtonPanel: true,
    onSelect: function () {
      $(this).closest('form').trigger('input'); // Trigger the change event
    }
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

let trip_type = "one-way";

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
    trip_type = targetFormType;
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
  $.getJSON("./assets/data/fleets.json?v=11", function (data) {
    let seatingOptions = new Array;

    $(selector).append(`<option value="all">All</option>`);
    $.each(data, function (index, fleet) {
      $(selector).append(`<option value="${fleet.seat_capacity}">${fleet.seat_capacity}</option>`);
      $('#bp_vehicle_type').append(`<option value="${fleet.seat_capacity} Seater - ${fleet.model}  ">${fleet.seat_capacity} Seater - ${fleet.model} </option>`);
      $('#bp_vehicle_size').append(`<option value="${fleet.seat_capacity} ${fleet.bus_type}">${fleet.seat_capacity} ${fleet.bus_type} </option>`);
    });
  });

  $.each(additionalVehicles, function (index, addVehicle) {
    $('#bp_vehicle_size').append(`<option value="${addVehicle}">${addVehicle}</option>`);
  })


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
  $.getJSON("./assets/data/fleets.json?v=11", function (data) {
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
  $.getJSON("./assets/data/tours.json?v=11", function (data) {
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

// Fetch the offers data from offers.json?v=11 and populate the carousel
$(document).ready(function () {
  $.getJSON('./assets/data/offers.json?v=11', function (offers) {
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


let map, marker; // Global variables for map and marker

$(document).ready(function () {
  // Function to initialize autocomplete on a given input element
  function initializeAutocomplete(inputElement) {
    // Define Autocomplete options with componentRestrictions for Europe
    const autocompleteOptions = {
      componentRestrictions: {
        country: [
          "uk", "ad", "al", "at", "be", "bg", "by", "ch", "cy", "cz", "de", "dk", "ee", "es", "fi", "fr", "gb", "gr", "hr", "hu", "ie", "is", "it", "li", "lt", "lu", "lv", "mc", "me", "mk", "mt", "nl", "no", "pl", "pt", "ro", "rs", "se", "si", "sk", "sm", "ua",
        ],
      },
    };

    // Initialize Autocomplete with restrictions
    const autocomplete = new google.maps.places.Autocomplete(inputElement, autocompleteOptions);

    // Event listener for place selection
    google.maps.event.addListener(autocomplete, "place_changed", function () {
      const place = autocomplete.getPlace();

      if (place && place.geometry && place.geometry.location) {
        // Populate the input with the formatted address
        $(inputElement).val(place.formatted_address);
        $(inputElement).closest('form').trigger('input');

        // Get latitude and longitude
        const lat = place.geometry.location.lat();
        const lng = place.geometry.location.lng();

        // Run the custom function with the input element and location
        openPinLocation(inputElement, lat, lng, place.formatted_address);
      }
    });
  }

  // Initialize autocomplete for already existing .loc-inp elements
  $(".loc-inp").each(function () {
    initializeAutocomplete(this);
  });

  // Monitor DOM for dynamically added .loc-inp elements
  $(document).on("focus", ".loc-inp", function () {
    // Check if autocomplete is not already initialized
    if (!$(this).data("autocomplete-initialized")) {
      initializeAutocomplete(this);
      $(this).data("autocomplete-initialized", true); // Mark as initialized
    }
  });
});



// Function to set the latitude, longitude, and address for the input element
function setLatLng(inputElement, defaultLat, defaultLng, newAddress) {
  // Set the input value to the new address
  $(inputElement).val(newAddress);
  $(inputElement).closest('form').trigger('input');

  // Find sibling elements for latitude and longitude
  $(inputElement).siblings('.hidden_lat').val(defaultLat);
  $(inputElement).siblings('.hidden_lng').val(defaultLng);
}

// Function to open the location picker modal
function openPinLocation(inputElement, defaultLat, defaultLng, newAddress) {
  let newLat = defaultLat;
  let newLng = defaultLng;

  // Set the initial latitude, longitude, and address
  setLatLng(inputElement, newLat, newLng, newAddress);

  // Initialize or reinitialize the map
  const locMapDiv = document.getElementById('locMap');
  const geocoder = new google.maps.Geocoder(); // Initialize the Geocoder service

  // Default location (from autocomplete)
  const defaultPosition = { lat: defaultLat, lng: defaultLng };

  // Initialize the map
  const map = new google.maps.Map(locMapDiv, {
    center: defaultPosition,
    zoom: 15,
  });

  // Initialize the marker
  const marker = new google.maps.Marker({
    position: defaultPosition,
    map: map,
    draggable: true, // Allow the marker to be moved
  });

  // Function to get and log the formatted address using a callback
  function getFormattedAddress(lat, lng, callback) {
    const latLng = { lat: lat, lng: lng };
    geocoder.geocode({ location: latLng }, function (results, status) {
      if (status === 'OK') {
        if (results[0]) {
          const formatted_address = results[0].formatted_address;
          console.log('Formatted Address:', formatted_address);
          callback(formatted_address); // Pass the address to the callback
        } else {
          console.log('No address found for this location.');
          callback(null);
        }
      } else {
        console.error('Geocoder failed due to:', status);
        callback(null);
      }
    });
  }

  // Update marker position and log address on drag end
  google.maps.event.addListener(marker, 'dragend', function () {
    newLat = marker.getPosition().lat();
    newLng = marker.getPosition().lng();

    // Use the callback to handle the formatted address
    getFormattedAddress(newLat, newLng, function (formatted_address) {
      if (formatted_address != null) {
        console.log('Selected Pin Location:', { lat: newLat, lng: newLng, address: formatted_address });
        setLatLng(inputElement, newLat, newLng, formatted_address);
      } else {
        setLatLng(inputElement, newLat, newLng, newAddress);
      }
    });
  });

  // Open the modal (use your modal logic here)
  $('#pinLocationModal').modal('show');
}


function isValidEmail(email) {
  // Regular expression for email validation
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}  // Function to generate time options
function generateTimeOptions() {
  const times = [];
  const period = ['am', 'pm'];
  for (let hour = 0; hour < 24; hour++) {
    for (let minute = 15; minute < 60; minute += 15) {
      let displayHour = hour === 0 ? '00' : hour % 12 === 0 ? 12 : hour % 12;
      let displayMinute = minute.toString().padStart(2, '0');
      let displayPeriod = period[Math.floor(hour / 12)];
      times.push(`${displayHour}:${displayMinute} ${displayPeriod}`);
    }
  }
  return times;
}

// Populate all .hfi-time select elements
function populateTimeOptions($element) {
  const options = generateTimeOptions();
  $element.empty(); // Clear existing options
  $element.append($("<option>").text("Select Time").val(""));
  options.forEach((time) => {
    $element.append($("<option>").text(time).val(time));
  });
}

$(document).ready(function () {


  $(".hfi-time").each(function () {
    populateTimeOptions($(this));
  });
});

$(document).ready(function () {
  $('.hf-inp.hf-number').on('input', function () {
    // Remove any non-numeric characters
    const sanitizedValue = this.value.replace(/[^0-9]/g, '');
    $(this).val(sanitizedValue);
  });
});

$(document).ready(function () {
  // Handle the click event on .btna-dropoffs
  $(document).on('click', '.btna-dropoffs', function () {
    const additionalContent = `
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
              <img src="./assets/img/circle-minus.svg" alt="Minus" height="20">
          </div>
      </div>
    `;
    const $additionalCont = $(this).prev('.additional_cont');
    // Add the content before the .btna-dropoffs button
    $additionalCont.append(additionalContent);
    // Re-initialize plugins for newly added elements
    $additionalCont.find('.hf-date').last().datepicker({
      dateFormat: 'dd M y',
      changeMonth: true,
      changeYear: true,
      showButtonPanel: true,
      onSelect: function () {
        $(this).closest('form').trigger('input');// Trigger the change event
      }
    });

    $additionalCont.find('.hfi-time').last().each(function () {
      populateTimeOptions($(this));
    });
  });
  $(document).on('click', '.btna-pickups', function () {
    const additionalContent = `
      <div class="row position-relative">
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
        <div class="remove-additional">
            <img src="./assets/img/circle-minus.svg" alt="Minus" height="20">
        </div>
    </div>
  `;
    const $additionalCont = $(this).prev('.additional_cont');
    // Add the content before the .btna-dropoffs button
    $additionalCont.append(additionalContent);
    // Re-initialize plugins for newly added elements
    $additionalCont.find('.hf-date').last().datepicker({
      dateFormat: 'dd M y',
      changeMonth: true,
      changeYear: true,
      showButtonPanel: true,
      onSelect: function () {
        $(this).closest('form').trigger('input');// Trigger the change event
      }
    });

    $additionalCont.find('.hfi-time').last().each(function () {
      populateTimeOptions($(this));
    });
  });

  // Handle the click event on .remove-additional
  $(document).on('click', '.remove-additional', function () {
    const additionalCont = $(this).closest('.additional_cont');
    const rows = additionalCont.find('.row');
    // Remove the row only if there are more than one
    if (rows.length > 1) {
      $(this).closest('.row').remove();
    }
  });
  new WAChatBox({
    link: "https://wa.me/447830999935",
    user: {
      name: "Viacoach",
      avatar: "./assets/img/square-icon.png",
      status: "Typically replies within an hour",
    },
    text: `Hey There 👋<br><br>We're here to help, so let me know what's up and we'll be happy to find a solution 🤓`,
    button_text: "Get in touch",
  });

  $(window).on("scroll resize", function () {
    var $element = $(".header-form");
    var elementBottom = $element.offset().top + $element.outerHeight();
    var viewportBottom = $(window).scrollTop() + $(window).height();

    if (elementBottom > viewportBottom) {
        $('.hff-arrow-down').fadeIn();
    } else {
        $('.hff-arrow-down').fadeOut();
    }
});
});
