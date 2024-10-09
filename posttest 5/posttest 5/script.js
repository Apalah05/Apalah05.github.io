const hamburgerMenu = document.getElementById('hamburger-menu');
const hamburgerNavbar = document.getElementById('hamburger-navbar');
const darkModeBtn = document.getElementById('dark-mode-btn');

hamburgerMenu.addEventListener('click', () => {
    hamburgerNavbar.classList.toggle('show'); 
  });

darkModeBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
});

document.getElementById('login-form').addEventListener('submit', function(event) {
  event.preventDefault(); 
  
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  if (username === 'ananda' && password === '000000') {
      alert('Login Sukses!');
      window.location.href = "login.php"; 
  } else {
      document.getElementById('error-message').textContent = 'Username atau password invalid';
  }
});
