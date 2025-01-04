$(document).ready(function () {
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
      let hfgf_val = hfg_from.find('select').val();
      let hfgt_val = hfg_to.find('select').val();

      hfg_from.find('select').val(hfgt_val).trigger('change');
      hfg_to.find('select').val(hfgf_val).trigger('change');
    });
  });

  $('.hf-date').datepicker({
    dateFormat: 'dd MM yy', // Customize the date format
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
      console.log(slick);
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

  $('.tours-carousel').each(function () {
    var $carousel = $(this); // Current carousel instance

    $carousel.slick({
      autoplay: true,
      autoplaySpeed: 2000,
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

  $('.services-carousel').each(function () {
    var $carousel = $(this); // Current carousel instance

    $carousel.on('init', function (event, slick) {
      // Set initial values for the counter
      $carousel.closest('section').find('.sc-current').text(slick.currentSlide + 1); // Current slide index (1-based)
      $carousel.closest('section').find('.sc-total').text(slick.slideCount); // Total number of slides
    });

    $carousel.on('afterChange', function (event, slick, currentSlide) {
      console.log(slick);
      // Update current slide index after a change
      $carousel.closest('section').find('.sc-current').text(currentSlide + 1); // Update current slide number
    });


    let sc_dots = $(this).closest('section').find('.sc-dots');

    $carousel.slick({
      autoplay: true,
      autoplaySpeed: 2000,
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

  $('.discounts-carousel').each(function () {
    var $carousel = $(this); // Current carousel instance

    $carousel.on('init', function (event, slick) {
      // Set initial values for the counter
      $carousel.closest('section').find('.sc-current').text(slick.currentSlide + 1); // Current slide index (1-based)
      $carousel.closest('section').find('.sc-total').text(slick.slideCount); // Total number of slides
    });

    $carousel.on('afterChange', function (event, slick, currentSlide) {
      console.log(slick);
      // Update current slide index after a change
      $carousel.closest('section').find('.sc-current').text(currentSlide + 1); // Update current slide number
    });


    let sc_dots = $(this).closest('section').find('.sc-dots');

    $carousel.slick({
      autoplay: true,
      autoplaySpeed: 2000,
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
      console.log(slick);
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
});

function switchTab(tabId) {
  $('#' + tabId).tab('show');
}