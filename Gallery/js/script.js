let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".reviews-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay:{
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
    },
});

document.getElementById('exp_date').addEventListener('input', function(event) {
  const inputValue = event.target.value;
  const formattedValue = inputValue.replace(/\D/g, ''); // Remove non-numeric characters
  
  if (formattedValue.length > 2) {
      // Format as MM/YYYY: insert a slash after the second character
      event.target.value = `${formattedValue.slice(0, 2)}/${formattedValue.slice(2, 6)}`;
  } else {
      // Keep the entered characters within the acceptable range (MM)
      event.target.value = formattedValue.slice(0, 2);
  }
});



