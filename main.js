let modal = document.getElementById('myModal');
let modalImg = document.getElementById("img01");


function display_img(img){
  modal.style.display = "block";
  modalImg.src =img.src;
}

function hide_img() { 
  modal.style.display = "none";
}

let login_block = document.getElementById('login');
let data_display = document.getElementById('guest_data');

function logged_in() {
  let input = document.getElementById('pwd').value;
  if(input === "password") {
    login_block.style.display = 'none';
    data_display.style.display = 'block';
  }
}