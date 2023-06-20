const state = window.location.href;
const wrapper = document.querySelector('.wrapper');
const aLogin = document.querySelector('.aLogin');
const aSignup = document.querySelector('.aSignup');

state.includes('#signup') ? wrapper.classList.add('active') : wrapper.classList.remove('active');

aSignup.addEventListener('click', function() {
    wrapper.classList.add('active');
})
aLogin.addEventListener('click', function() {
    wrapper.classList.remove('active');
})