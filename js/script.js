$(document).ready(function () {
  $('h1').on({
    mouseenter: function () {
      $(this).css({ 'font-family': 'sans-serif', 'font-size': '80px' });
    },
  });
});

function test() {
  $('h1').css({ 'font-family': 'sans-serif', 'font-size': '80px' });
}
function test2() {
  $('h1').css({ 'font-family': 'sans-serif', 'font-size': '5px' });
}
function test3() {
  $('h1').css({ 'font-family': 'sans-serif', 'font-size': '300px' });
}

function logout() {
  $.post('includes/handlers/ajax/logout.php', function () {
    location.reload();
  });
}
function visible() {
  $("[name='robots']").remove();
  $("[name='googlebot']").remove();
  alert("Page is now visible on Google's Search Engine.");
}
function invisible() {
  $('head').append('<meta name="robots" content="noindex">');
  $('head').append('<meta name="googlebot" content="noindex">');
  location.reload();
}
