var items = [
  [
    "001",
    "Keyboard Logitek",
    60000,
    "Keyboard yang mantap untuk kantoran",
    "logitek.jpg",
  ],
  ["002", "Keyboard MSI", 300000, "Keyboard gaming MSI mekanik", "msi.jpg"],
  [
    "003",
    "Mouse Genius",
    50000,
    "Mouse Genius biar lebih pinter",
    "genius.jpeg",
  ],
  ["004", "Mouse Jerry", 30000, "Mouse yang disukai kucing", "jerry.jpg"],
];

let list_barang = document.getElementById("listBarang");
let search = document.getElementById("formItem");
let cart = document.getElementById("cart");
const addCards = (e) => {
  let card = `
  <div class="col-4 mt-2">
    <div class="card" >
      <img src="assets/${e[4]}" class="card-img-top" height="200px" width="200px" alt="${e[4]}">
      <div class="card-body">
          <h5 class="card-title" id="itemName">${e[1]}</h5>
          <p class="card-text" id="itemDesc">${e[3]}</p>
          <p class="card-text">Rp ${e[2]}</p>
          <a href="#" class="btn btn-primary" onclick="addCart()">Tambahkan ke keranjang</a>
      </div>
    </div>
  </div>`;
  return card;
};
let num = 0;
const addCart = () => {
  num++;
  cart.innerHTML = `<i class="fas fa-shopping-cart"></i>(${num})`;
};
window.onload = () => {
  let cards = "";
  items.forEach((e) => {
    cards += addCards(e);
  });
  list_barang.innerHTML = cards;
};

search.onsubmit = (e) => {
  e.preventDefault();
  let cards = "";
  let keyword = document.getElementById("keyword").value;
  let filteredItems = items.filter((e) =>
    e[1].toLowerCase().includes(keyword.toLowerCase())
  );
  filteredItems.forEach((e) => {
    cards += addCards(e);
  });
  list_barang.innerHTML = cards;
};
