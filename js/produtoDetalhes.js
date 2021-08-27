const listaProdutos = document.querySelectorAll("[produto-card]");

const navegar = (elemento) => {
  const elementoID = elemento.getAttribute("prod-id");
  elemento.addEventListener("click", (e) => {
    const urlBase = window.location.origin;
    const urlFinal = `${urlBase}/pages/detalhes.php?id=${elementoID}`;
    window.location.href = urlFinal;
  });
};

listaProdutos.forEach(navegar);
