const btnNavbar = document.querySelector("[navar-butao]");

const onBtnNavbarClick = () => {
  const navbarList = document.querySelector("[navbar-nav]");
  navbarList.classList.toggle("navbar-ativo");
};

btnNavbar.addEventListener("click", onBtnNavbarClick);
