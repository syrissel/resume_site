function load() {
  var menu_button = document.getElementById("menu_button");
  var menu = document.getElementById('menu_items');
  var h2 = document.getElementById('click_me');

  h2.addEventListener("click", function() { alert('cat'); }, false);
  menu_button.addEventListener('click', function() { displayMenu(menu); }, false);
}

function displayMenu(element) {
  var setStyle = element.style.display === 'block' ? 'none' : 'block';
  element.style.display = setStyle;
}








document.addEventListener("DOMContentLoaded", load, false);