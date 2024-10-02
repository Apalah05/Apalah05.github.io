const hamburgerMenu = document.getElementById('hamburger-menu');
const hamburgerNavbar = document.getElementById('hamburger-navbar');
const darkModeBtn = document.getElementById('dark-mode-btn');
const lightModeBtn = document.getElementById('light-mode-btn');
const popupbox = document.getElementById('popup-box');
const closePopupBtn = document.getElementById('close-popup-btn');

hamburgerMenu.addEventListener('click', () => {
    hamburgerNavbar.classList.toggle('show'); 
  });

darkModeBtn.addEventListener('click', () => {
    document.body.classList.add('dark-mode');
    darkModeBtn.style.display = 'none';
    lightModeBtn.style.display = 'block';
});

lightModeBtn.addEventListener('click', () => {
    document.body.classList.remove('dark-mode');
    lightModeBtn.style.display = 'none';
    darkModeBtn.style.display = 'block';
});

closePopupBtn.addEventListener('click', () => {
    popupBox.style.display = 'none';
});

document.addEventListener('DOMContentLoaded', () => {
    popupBox.style.display = 'block';
    setTimeout(() => {
        popupBox.style.display = 'none';
    }, 3000);
});