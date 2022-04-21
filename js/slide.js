const icon = document.querySelector('.icon');
icon.addEventListener('click', () => {
	if(!icon.classList.contains('open')) {
		icon.classList.add('open');
	} else {
		icon.classList.remove('open');
	}
});

var mybutton = document.getElementById("upButton");
$(window).scroll(function(){
  if ($(this).scrollTop() > 0) {
  $('#navigation').addClass('change_color');
  mybutton.style.display = "block";
  } else {
  $('#navigation').removeClass('change_color');
  mybutton.style.display = "none";
  }
});

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
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
