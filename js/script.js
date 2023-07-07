let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('grid')
    navbar.classList.toggle('active')
}

document.querySelector('#login-btn').onclick = () => {
    document.querySelector('.login-form-container').classList.toggle('active');
}

document.querySelector('#close-login-form').onclick = () => {
    document.querySelector('.login-form-container').classList.remove('active');
}


document.querySelector('#registration-btn').onclick = () => {
    document.querySelector('.container2').classList.toggle('active');
    document.querySelector('.login-form-container').classList.remove('active');
}

document.querySelector('#close-register-form').onclick = () => {
    document.querySelector('.container2').classList.remove('active');
    // document.querySelector('.login-form-container').classList.toggle('active');
}

document.querySelector('#login-connect').onclick = () => {
    document.querySelector('.login-form-container').classList.toggle('active');
    document.querySelector('.container2').classList.remove('active');
}

const vehicle = document.getElementById('vehicles');
const drop = document.getElementById('drop-down');


let timeoutId;

vehicle.addEventListener('mouseover', function () {
    drop.style.display = 'flex';
    // clearTimeout(timeoutId);
});

vehicle.addEventListener('mouseout', function () {
    timeoutId = setTimeout(function () {
        drop.style.display = 'none';
    }, 100);
});

drop.addEventListener('mouseover', function(){
    drop.style.display = 'flex';
    clearTimeout(timeoutId);
})

drop.addEventListener('mouseout', function(){
    drop.style.display = 'none';
})


const service = document.getElementById('services');
const drop1 = document.getElementById('drop-down2');


let timeoutId2;

service.addEventListener('mouseover', function () {
    drop1.style.display = 'flex';
    clearTimeout(timeoutId);
});

service.addEventListener('mouseout', function () {
    timeoutId2 = setTimeout(function () {
        drop1.style.display = 'none';
    }, 100);
});

drop1.addEventListener('mouseover', function(){
    drop1.style.display = 'flex';
    clearTimeout(timeoutId2);
})

drop1.addEventListener('mouseout', function(){
    drop1.style.display = 'none';
})


const featured = document.getElementById('featured');
const drop2 = document.getElementById('drop-down3');

let timeoutId3;

featured.addEventListener('mouseover', function(){
    drop2.style.display = 'flex';
    clearTimeout(timeoutId3);
});

featured.addEventListener('mouseout', function () {
    timeoutId3 = setTimeout(function () {
        drop2.style.display = 'none';
    }, 100);
});

drop2.addEventListener('mouseover', function(){
    drop2.style.display = 'flex';
    clearTimeout(timeoutId3);
})

drop2.addEventListener('mouseout', function(){
    drop2.style.display = 'none';
})






































var swiper = new Swiper(".vehicles-slider", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    grabCursor: true,
    centeredSlides: true,
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        991: {
            slidesPerView: 3,
        },
    },
});







const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) =>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = element =>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(usernameValue === ''){
        setError(username, 'Username is Required');
    } else {
        setSuccess(username)
    }

    if (emailValue === ''){
        setError(email, 'Email is Required');
    }   else if (!itsValidEmail(emailValue)){
        setError(email, "Please provide a valid email address");
    }   else{
        setSuccess(email);
    }

    if (passwordValue === "") {
        setError(password, "Password is Required");
      } else if (passwordValue.length < 8) {
        setError(password, "Password must be at least 8 character.");
      } else {
        setSuccess(password);
      }
    
      if (password2Value === "") {
        setError(password2, "Please confirm your Password");
      } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords doesn't Match");
      } else {
        setSuccess(password2);
      }

};

