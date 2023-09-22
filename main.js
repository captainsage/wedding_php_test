// Get the modal
let modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption

let modalImg = document.getElementById("img01");


function display_img(img){
  modal.style.display = "block";
  modalImg.src =img.src;
  //console.log("szevasz")
}

function hide_img() { 
  //console.log("halo?")  
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