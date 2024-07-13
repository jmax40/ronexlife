var currentPage = 1;
var rowsPerPage = 6;
var totalRows = document.getElementById("data-table-body").rows.length;
var totalPages = Math.ceil(totalRows / rowsPerPage);

function paginate() {
  var startRow = (currentPage - 1) * rowsPerPage;
  var endRow = startRow + rowsPerPage;
  var rows = document.getElementById("data-table-body").rows;
  for (var i = 0; i < rows.length; i++) {
    if (i >= startRow && i < endRow) {
      rows[i].style.display = "";
    } else {
      rows[i].style.display = "none";
    }
  }

  var pagination = document.getElementById("pagination");
  pagination.innerHTML = "";
  var prevButton = document.createElement("button");
  prevButton.innerHTML = "Back";
  prevButton.addEventListener("click", function() {
    if (currentPage > 1) {
      currentPage--;
      paginate();
    }
  });
  pagination.appendChild(prevButton);

  var label = document.createElement("label");
  label.innerHTML = "";
  pagination.appendChild(label);

  var select = document.createElement("select");
  select.addEventListener("change", function() {
    currentPage = Number(this.value);
    paginate();
  });
  for (var i = 1; i <= totalPages; i++) {
    var option = document.createElement("option");
    option.value = i;
    option.text = i;
    if (i === currentPage) {
      option.selected = true;
    }
    select.appendChild(option);
  }
  pagination.appendChild(select);

  var nextButton = document.createElement("button");
  nextButton.innerHTML = "Next";
  nextButton.addEventListener("click", function() {
    if (currentPage < totalPages) {
      currentPage++;
      paginate();
    }
  });
  pagination.appendChild(nextButton);
}

paginate();

function searchTable() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  
  if (filter === "") { // If the input field is empty, call paginate()
    paginate();
    return;
  }

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td");
    var match = false;
    if (tr[i].getElementsByTagName("th").length > 0) {
      tr[i].style.display = "";
      continue;
    }
    for (var j = 0; j < td.length; j++) {
      txtValue = td[j].textContent || td[j].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        match = true;
        break;
      }
    }
    if (match) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }
}

var input = document.getElementById("myInput");
input.addEventListener("input", searchTable);
















var currentPage = 1;
var rowsPerPage = 6;
var totalRows = document.getElementById("data-table-body2").rows.length;
var totalPages = Math.ceil(totalRows / rowsPerPage);

function paginate2() {
  var startRow = (currentPage - 1) * rowsPerPage;
  var endRow = startRow + rowsPerPage;
  var rows = document.getElementById("data-table-body2").rows;
  for (var i = 0; i < rows.length; i++) {
    if (i >= startRow && i < endRow) {
      rows[i].style.display = "";
    } else {
      rows[i].style.display = "none";
    }
  }

  var pagination = document.getElementById("pagination2");
  pagination.innerHTML = "";
  var prevButton = document.createElement("button");
  prevButton.innerHTML = "Back";
  prevButton.addEventListener("click", function() {
    if (currentPage > 1) {
      currentPage--;
      paginate2();
    }
  });
  pagination.appendChild(prevButton);

  var label = document.createElement("label");
  label.innerHTML = "";
  pagination.appendChild(label);

  var select = document.createElement("select");
  select.addEventListener("change", function() {
    currentPage = Number(this.value);
    paginate2();
  });
  for (var i = 1; i <= totalPages; i++) {
    var option = document.createElement("option");
    option.value = i;
    option.text = i;
    if (i === currentPage) {
      option.selected = true;
    }
    select.appendChild(option);
  }
  pagination.appendChild(select);

  var nextButton = document.createElement("button");
  nextButton.innerHTML = "Next";
  nextButton.addEventListener("click", function() {
    if (currentPage < totalPages) {
      currentPage++;
      paginate2();
    }
  });
  pagination.appendChild(nextButton);
}

paginate2();

function searchTable2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
  tr = table.getElementsByTagName("tr");
  
  if (filter === "") { // If the input field is empty, call paginate()
    paginate2();
    return;
  }

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td");
    var match = false;
    if (tr[i].getElementsByTagName("th").length > 0) {
      tr[i].style.display = "";
      continue;
    }
    for (var j = 0; j < td.length; j++) {
      txtValue = td[j].textContent || td[j].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        match = true;
        break;
      }
    }
    if (match) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }
}

var input = document.getElementById("myInput2");
input.addEventListener("input2", searchTable2);




















var currentPage = 1;
var rowsPerPage = 6;
var totalRows = document.getElementById("data-table-body3").rows.length;
var totalPages = Math.ceil(totalRows / rowsPerPage);

function paginate3() {
  var startRow = (currentPage - 1) * rowsPerPage;
  var endRow = startRow + rowsPerPage;
  var rows = document.getElementById("data-table-body3").rows;
  for (var i = 0; i < rows.length; i++) {
    if (i >= startRow && i < endRow) {
      rows[i].style.display = "";
    } else {
      rows[i].style.display = "none";
    }
  }

  var pagination = document.getElementById("pagination3");
  pagination.innerHTML = "";
  var prevButton = document.createElement("button");
  prevButton.innerHTML = "Back";
  prevButton.addEventListener("click", function() {
    if (currentPage > 1) {
      currentPage--;
      paginate3();
    }
  });
  pagination.appendChild(prevButton);

  var label = document.createElement("label");
  label.innerHTML = "";
  pagination.appendChild(label);

  var select = document.createElement("select");
  select.addEventListener("change", function() {
    currentPage = Number(this.value);
    paginate3();
  });
  for (var i = 1; i <= totalPages; i++) {
    var option = document.createElement("option");
    option.value = i;
    option.text = i;
    if (i === currentPage) {
      option.selected = true;
    }
    select.appendChild(option);
  }
  pagination.appendChild(select);

  var nextButton = document.createElement("button");
  nextButton.innerHTML = "Next";
  nextButton.addEventListener("click", function() {
    if (currentPage < totalPages) {
      currentPage++;
      paginate3();
    }
  });
  pagination.appendChild(nextButton);
}

paginate3();

function searchTable3() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable3");
  tr = table.getElementsByTagName("tr");
  
  if (filter === "") { // If the input field is empty, call paginate()
    paginate3();
    return;
  }

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td");
    var match = false;
    if (tr[i].getElementsByTagName("th").length > 0) {
      tr[i].style.display = "";
      continue;
    }
    for (var j = 0; j < td.length; j++) {
      txtValue = td[j].textContent || td[j].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        match = true;
        break;
      }
    }
    if (match) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }
}

var input = document.getElementById("myInput3");
input.addEventListener("input3", searchTable3);

































var currentPage = 1;
var rowsPerPage = 6;
var totalRows = document.getElementById("data-table-body4").rows.length;
var totalPages = Math.ceil(totalRows / rowsPerPage);

function paginate4() {
  var startRow = (currentPage - 1) * rowsPerPage;
  var endRow = startRow + rowsPerPage;
  var rows = document.getElementById("data-table-body4").rows;
  for (var i = 0; i < rows.length; i++) {
    if (i >= startRow && i < endRow) {
      rows[i].style.display = "";
    } else {
      rows[i].style.display = "none";
    }
  }

  var pagination = document.getElementById("pagination4");
  pagination.innerHTML = "";
  var prevButton = document.createElement("button");
  prevButton.innerHTML = "Back";
  prevButton.addEventListener("click", function() {
    if (currentPage > 1) {
      currentPage--;
      paginate4();
    }
  });
  pagination.appendChild(prevButton);

  var label = document.createElement("label");
  label.innerHTML = "";
  pagination.appendChild(label);

  var select = document.createElement("select");
  select.addEventListener("change", function() {
    currentPage = Number(this.value);
    paginate4();
  });
  for (var i = 1; i <= totalPages; i++) {
    var option = document.createElement("option");
    option.value = i;
    option.text = i;
    if (i === currentPage) {
      option.selected = true;
    }
    select.appendChild(option);
  }
  pagination.appendChild(select);

  var nextButton = document.createElement("button");
  nextButton.innerHTML = "Next";
  nextButton.addEventListener("click", function() {
    if (currentPage < totalPages) {
      currentPage++;
      paginate4();
    }
  });
  pagination.appendChild(nextButton);
}
paginate4();





function searchTable4() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput4");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable4");
  tr = table.getElementsByTagName("tr");
  
  if (filter === "") { // If the input field is empty, call paginate()
    paginate4();
    return;
  }

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td");
    var match = false;
    if (tr[i].getElementsByTagName("th").length > 0) {
      tr[i].style.display = "";
      continue;
    }
    for (var j = 0; j < td.length; j++) {
      txtValue = td[j].textContent || td[j].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        match = true;
        break;
      }
    }
    if (match) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }
}

var input = document.getElementById("myInput4");
input.addEventListener("input4", searchTable4);







