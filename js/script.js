
function small() {
  $('p').css({ 'font-size': '12px' });
}
function medium() {
  $('p').css({ 'font-size': '16px' });
}
function large() {
  $('p').css({ 'font-size': '20px' });
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
