// for the customer list page

var custTable = document.getElementById("cust-table");
var custForm = document.getElementById("cust-form");
var custAdd = document.getElementById("cust-add");

custAdd.addEventListener("click", function () {
  if (!custForm.classList.contains("hidden")) {
    custForm.classList.add("hidden");
    custTable.classList.remove("hidden");
  } else {
    custForm.classList.remove("hidden");
    custTable.classList.add("hidden");
  }
});
