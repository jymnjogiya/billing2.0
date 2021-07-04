//product and category divisions
var catDiv = document.getElementById("category-content-div");
var prodDiv = document.getElementById("product-list-div");

// for category list section
var catTable = document.getElementById("category-table");
var catForm = document.getElementById("category-form");
var catAdd = document.getElementById("category-add");
catAdd.addEventListener("click", function () {
  if (!catForm.classList.contains("hidden")) {
    catForm.classList.add("hidden");
    prodDiv.classList.remove("hidden");
    catTable.classList.remove("hidden");
  } else {
    catForm.classList.remove("hidden");
    prodDiv.classList.add("hidden");
    catTable.classList.add("hidden");
  }
});

// for product list section
var prodTable = document.getElementById("product-table");
var prodForm = document.getElementById("product-form");
var prodAdd = document.getElementById("product-add");
prodAdd.addEventListener("click", function () {
  if (!prodForm.classList.contains("hidden")) {
    prodForm.classList.add("hidden");
    catDiv.classList.remove("hidden");
    prodTable.classList.remove("hidden");
  } else {
    prodForm.classList.remove("hidden");
    catDiv.classList.add("hidden");
    prodTable.classList.add("hidden");
  }
});
