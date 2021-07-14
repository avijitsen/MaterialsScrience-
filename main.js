function docReady(callback) {

  function completed() {
    document.removeEventListener("DOMContentLoaded", completed, false)
    window.removeEventListener("load", completed, false)
    callback()
  }

  //Events.on(document, 'DOMContentLoaded', completed)

  if (document.readyState === "complete") {
    // Handle it asynchronously to allow scripts the opportunity to delay ready
    setTimeout(callback)

  } else {

    // Use the handy event callback
    document.addEventListener("DOMContentLoaded", completed, false);

    // A fallback to window.onload, that will always work
    window.addEventListener("load", completed, false);
  }
}

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


docReady(function() {
  var nav = document.querySelector('.topnav')

  var navOffset = 290

  window.addEventListener('scroll', function(e) {
    var scroll = window.scrollY

    console.log(navOffset, scroll)
    if (scroll > navOffset) {
      nav.classList.add('fixed-nav')
    } else {
      nav.classList.remove('fixed-nav')
    }
  })
})
