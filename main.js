// https://fakestoreapi.com/products

let imgProduct = document.querySelectorAll(".col-md-3");
let imgPost = document.querySelectorAll(".col-sm-3");
let imgPost2 = document.querySelectorAll(".col-3");
getImg();
function getImg() {
  let url = "https://fakestoreapi.com/products";
  let xhr = new XMLHttpRequest();
  xhr.open("GET", url, true);
  xhr.onload = function() {
    if (this.status == 200) {
      let results = JSON.parse(this.responseText);
      postImg(results);
    };
  }
  xhr.send();
}

function postImg(results) {
  let output = "";
  let out2 = "";
  let i = 0;
  imgProduct.forEach((item) => {
    output = `
      <img src='${results[i].image}' class='img-fluid' width='300px'>
    `;
    i++;
    console.log(results[i].image);
  });
  imgProduct.innerHTML = output;
  console.log(output);
  console.log(imgProduct);
}
