const cambiarEstiloBtn = document.getElementById('cambiarEstiloBtn');
const parrafo = document.getElementById('parrafo');

let parrafoOriginalTexto = parrafo.textContent;

cambiarEstiloBtn.addEventListener('click', () => {
  parrafo.style.backgroundColor = 'red';
  parrafo.innerText = '¡Estilo cambiado!';
  alert('Se ha realizado un cambio.');
});

// Regresa al texto orignal al darle clicl al parrafo

// parrafo.addEventListener('click', () => {
//   parrafo.style.backgroundColor = '';
//   parrafo.textContent = parrafoOriginalTexto;
// });
