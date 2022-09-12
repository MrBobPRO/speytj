// initialize components
$(document).ready(function () {
  $('.selectize-singular').selectize({
    // options
  });

  $('.selectize--linked').selectize({
    onChange(value) {
      window.location = value;
    }
  });
});


// Ajax CSRF-Token initialization
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


// debounce function
function debounce(callback, timeoutDelay = 500) {
  let timeoutId;

  return (...rest) => {
    clearTimeout(timeoutId);
    timeoutId = setTimeout(() => callback.apply(this, rest), timeoutDelay);
  };
}


// Collapse
let menu = document.querySelector('.menu');
let menuSearch = document.querySelector('.menu__search');

document.querySelector('.header__toggles-menu-button').addEventListener('click', () => {
  document.body.style.overflowY = 'hidden';
  menuSearch.classList.remove('menu__search--visible');
  menu.classList.add('menu--visible');
});

document.querySelector('.menu__close-button').addEventListener('click', () => {
  document.body.style.overflowY = 'auto';
  menu.classList.remove('menu--visible');
});

document.querySelector('.header__toggles-search-button').addEventListener('click', () => {
  document.body.style.overflowY = 'hidden';
  menuSearch.classList.add('menu__search--visible');
  menu.classList.add('menu--visible');
});

document.querySelector('.menu__search-input').addEventListener('focus', () => {
  menuSearch.classList.add('menu__search--visible');
});


// Tabs
document.querySelectorAll('.tab-button').forEach((item) => {
  item.addEventListener('click', (evt) => {
    let targetButton = evt.target;
    let buttonsContainer = targetButton.closest('.tab-buttons-container');
    let activeButton = buttonsContainer.querySelector('.tab-button--active');

    let targetContent = document.querySelector(`[data-content-id="${targetButton.dataset.targetId}"]`);
    let contentContainer = targetContent.closest('.tab-content-container');
    let activeContentItem = contentContainer.querySelector('.tab-content-item--active');

    // hide content if clicked already active button
    if (targetButton !== activeButton) {
      if (activeButton) {
        activeButton.classList.remove('tab-button--active');
      }
      targetButton.classList.add('tab-button--active');

      if (activeContentItem) {
        activeContentItem.classList.remove('tab-content-item--active');
      }
      targetContent.classList.add('tab-content-item--active');
    }
  });
});


// Menu Tab links
let menuTab = document.querySelector('.menu__tab');
menuTab.querySelectorAll('.tab-button').forEach((item) => {
  item.addEventListener('dblclick', (evt) => {
    window.location.href = item.dataset.link;
  })
})


// products carousels
let productsCarousel = $('.products-carousel');
productsCarousel.owlCarousel({
  loop: true,
  margin: 40,
  nav: true,
  navText: ['<span class="material-icons">west</span>', '<span class="material-icons">east</span>'],
  items: 4,
  dots: false,
});


// Google Maps
// let map;
// if (document.querySelector('.map')) {
//   function initMap() {
//     map = new google.maps.Map(document.querySelector('.map'), {
//       center: { lat: 38.578065, lng: 68.750778 },
//       zoom: 16,
//       mapTypeControl: false,
//       streetViewControl: false
//     });

//     marker = new google.maps.Marker({
//       map: map,
//       draggable: false,
//       animation: google.maps.Animation.BOUNCE,
//       position: { lat: 38.578065, lng: 68.750778 },
//       icon: '/img/main/marker.png'
//     });
//     marker.addListener('click', toggleBounce);
//   }

//   function toggleBounce() {
//     if (marker.getAnimation() !== null) {
//       marker.setAnimation(null);
//     } else {
//       marker.setAnimation(google.maps.Animation.BOUNCE);
//     }
//   }
// }


// Accordion
// resize active items
document.querySelectorAll('.accordion__item--active').forEach((item) => {
  let collapse = item.querySelector('.accordion__collapse');
  collapse.style.height = collapse.scrollHeight + "px";
});

document.querySelectorAll('.accordion__button').forEach((item) => {
  item.addEventListener('click', (evt) => {
    let button = evt.target;
    let accordion = button.closest('.accordion');
    let item = button.closest('.accordion__item');
    let collapse = item.querySelector('.accordion__collapse');

    // close active collapse if it isn`t current target
    let activeItem = accordion.querySelector('.accordion__item--active');
    if (activeItem && activeItem !== item) {
      activeItem.classList.remove('accordion__item--active');
      activeItem.querySelector('.accordion__collapse').style.height = null;
    }

    // close active collapse if it is current target
    if (collapse.clientHeight) {
      collapse.style.height = 0;
      item.classList.remove('accordion__item--active');
      // else show collapse body if its hidden
    } else {
      collapse.style.height = collapse.scrollHeight + "px";
      item.classList.add('accordion__item--active');
    }
  });
});
