// initialize components
$(document).ready(function () {
  $('.selectize-singular').selectize({
    // options
  });

  $('.selectize-singular-linked').selectize({
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
