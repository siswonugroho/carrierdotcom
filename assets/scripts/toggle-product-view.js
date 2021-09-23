const btnList = document.getElementById('btn-listview');
const btnGrid = document.getElementById('btn-gridview');
const productList = document.getElementById('product-list');
const productGrid = document.getElementById('product-grid');

btnGrid.addEventListener('click', () => {
  btnGrid.setAttribute('disabled', 'disabled');
  btnList.removeAttribute('disabled', 'disabled');
  productGrid.classList.remove('d-none');
  productList.classList.add('d-none');
});
btnList.addEventListener('click', () => {
  btnList.setAttribute('disabled', 'disabled');
  btnGrid.removeAttribute('disabled', 'disabled');
  productList.classList.remove('d-none');
  productGrid.classList.add('d-none');
});