searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = ()=>{
    searchForm.classList.toggle('active');
}
function refreshPage() {
  location.reload(true);
}
/*
let loginForm = document.querySelector('.login-form-container');
document.querySelector('#login-btn').onclick =() =>{
    loginForm.classList.toggle('active');
}

document.querySelector('#close-login-btn').onclick =() =>{
    loginForm.classList.remove('active');
}

let signupForm = document.querySelector('.signup-form-container');
document.querySelector('#signup-btn').onclick =() =>{
    signupForm.classList.toggle('active');
}
document.querySelector('#close-signup-btn').onclick =() =>{
  signupForm.classList.remove('active');
}*/

// function showSignupForm() {
//   // Hide login form
//   document.getElementById("loginForm").style.display = "none";

//   // Show signup form
//   document.getElementById("signupForm").style.display = "block";
// }
window.onscroll = ()=>{
    searchForm.classList.remove('active');

    if(window.scrollY>80){
        document.querySelector('.header .header-2').classList.add('active');
    }else{
        document.querySelector('.header .header-2').classList.remove('active');
    }
}

window.onload = ()=>{
    if(window.scrollY>80){
        document.querySelector('.header .header-2').classList.add('active');
    }else{
        document.querySelector('.header .header-2').classList.remove('active');
    }
    fadeOut();

  }
  
  function loader(){
    document.querySelector('.loader-container').classList.add('active');
  }
  
  function fadeOut(){
    setTimeout(loader, 4000);
  }
var swiper = new Swiper(".books-slider", {
    loop:true,
    centeredSlides: true,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
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
  var swiper = new Swiper(".featured-slider", {
    spaceBetween: 10,
    loop:true,
    centeredSlides: true,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      450: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });

  var swiper = new Swiper(".arrivals-slider", {
    spaceBetween: 10,
    loop:true,
    centeredSlides: true,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
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
  var swiper = new Swiper(".reviews-slider", {
    spaceBetween: 10,
    grabCursor:true,
    loop:true,
    centeredSlides: true,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
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
  var swiper = new Swiper(".blogs-slider", {
    spaceBetween: 10,
    grabCursor:true,
    loop:true,
    centeredSlides: true,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
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
  const form=document.getElementById('form');
const username=document.getElementById('username');
const email=document.getElementById('email');
const password=document.getElementById('password');
const password2=document.getElementById('password2');


//Show input error message

function showError(input,message){
    const formControl=input.parentElement;
    formControl.className='form-control error';
    const small=formControl.querySelector('small');
    small.innerText=message;
}

function showSuccess(input){
    const formControl=input.parentElement;
    formControl.className='form-control success';
    
}

//Email

/*function isValidEmail(email)
{
    const re= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function CheckPassword (input){
  var password2 =/^[A-Za-z].\w(7,14)$/;

  if(input.value.match(password2)){
      alert ('Correct, try another...')
      return true;
  }
  else {
      alert ("Wrong!")
      return false;
  }
}





form.addEventListener('submit',function(e){
    e.preventDefault();

    if(username.value===''){
        showError(username,'Emri i përdouesit është i nevojshëm');
    }
    else{
        showSuccess(username);
    }
    if(email.value===''){
        showError(email,'Adresa Elektronike është e nevojshme');
    }else if(!isValidEmail(email.value)){
        showError(email,'Adresa Elektronike nuk është valide');
    }
    else{
        showSuccess(email);
    }

    if(password.value.length <6){
        showError(password,'Fjalëkalimi duhet pasur së paku 6 karaktere');
        
    }
    else{
        showSuccess(password);
    }
    if(password2.value===''){
        showError(password2,'Konfimimi i fjalëkalimit është i nevojshëm');
    } else if (password2.value !==  password.value) {
        showError(password2, "Fjalkalimet nuk përputhen");
    }else{
        showSuccess(password2);
    }
    
     
    
}
);*/

// Get the form element and button element
const form1 = document.querySelector('.contact-box');
const button = form.querySelector('.btn1');

// Add event listener to the button
button.addEventListener('click', (event) => {
    event.preventDefault(); // Prevent form submission
    const name = form.querySelector('input[type="text"][placeholder="Your Name"]').value;
    const email = form.querySelector('input[type="text"][placeholder="Your Email"]').value;
    const phone = form.querySelector('input[type="text"][placeholder="Phone"]').value;
    const message = form.querySelector('textarea').value;
    // You can now use these variables to send the form data to your server or do any other operations.
    function isValidEmaili(email)
    {
        const re= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
});