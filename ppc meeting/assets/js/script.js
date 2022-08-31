


function openNav() {
  document.querySelector(".sidenav").style.width = "230px";
  document.querySelector(".container-index").style.marginLeft = "230px";
  document.body.style.backgroundColor = "white";
}

function closeNav() {
  document.querySelector(".sidenav").style.width = "0";
  document.querySelector(".container-index").style.marginLeft = "0";


}

function openModal(){
  document.querySelector(".deleteModal").style.display="block";
}

function closeModal(){
  document.querySelector(".deleteModal").style.display="none";
}

var dropdown = document.getElementsByClassName("dropdown-btn");

for ( var i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      document.querySelector(".dropdown-container").style.transition = "all 2s";
      dropdownContent.style.display = "none";
    }
    else {
      dropdownContent.style.display = "block";
    }
  });
}


