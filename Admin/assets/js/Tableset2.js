var currentPage5 = 1;
var rowsPerPage5 = 11;
var totalRows5 = document.getElementById("data-table-body5").rows.length;
var totalPages5 = Math.ceil(totalRows5 / rowsPerPage5);

function paginate5() {
var startRow = (currentPage5 - 1) * rowsPerPage5;
var endRow = startRow + rowsPerPage5;
var rows = document.getElementById("data-table-body5").rows;

for (var i = 0; i < rows.length; i++) {
if (i >= startRow && i < endRow) {
rows[i].style.display = "";
} else {
rows[i].style.display = "none";
}
}

var pagination = document.getElementById("pagination5");
pagination.innerHTML = "";

var prevButton = document.createElement("button");
prevButton.innerHTML = "Back";
prevButton.addEventListener("click", function() {
if (currentPage5 > 1) {
currentPage5--;
paginate5();
}
});
pagination.appendChild(prevButton);

var select = document.createElement("select");
select.addEventListener("change", function() {
currentPage5 = Number(this.value);
paginate5();
});
for (var i = 1; i <= totalPages5; i++) {
var option = document.createElement("option");
option.value = i;
option.text = i;
if (i === currentPage5) {
option.selected = true;
}
select.appendChild(option);
}
pagination.appendChild(select);

var nextButton = document.createElement("button");
nextButton.innerHTML = "Next";
nextButton.addEventListener("click", function() {
if (currentPage5 < totalPages5) {
currentPage5++;
paginate5();
}
});
pagination.appendChild(nextButton);
}

paginate5();
