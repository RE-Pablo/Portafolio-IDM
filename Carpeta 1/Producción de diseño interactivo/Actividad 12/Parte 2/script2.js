const burgerBtn = document.getElementById('burgerBtn');
const menu = document.getElementsByClassName("menu")[0];

burgerBtn.addEventListener('click', () => {
  menu.classList.toggle('active');
});
