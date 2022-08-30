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
