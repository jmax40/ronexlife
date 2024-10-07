

const rowsPerPage = 10;
let currentPage = 1;

document.addEventListener('DOMContentLoaded', () => {
    const table = document.getElementById('ttable');
    const tbody = table.getElementsByTagName('tbody')[0];
    const rows = tbody.getElementsByTagName('tr');
    const totalRows = rows.length;

    const totalPages = Math.ceil(totalRows / rowsPerPage);
    
    // Initialize pagination
    updatePagination();
    renderPage();

    // Add event listener for search input
    document.getElementById('searchInput').addEventListener('keyup', function() {
        currentPage = 1; // Reset to page 1 on new search
        renderPage();
        updatePagination();
    });

    // Pagination controls
    document.getElementById('prevButton').addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            renderPage();
            updatePagination();
        }
    });

    document.getElementById('nextButton').addEventListener('click', () => {
        if (currentPage < totalPages) {
            currentPage++;
            renderPage();
            updatePagination();
        }
    });

    // Handle page dropdown
    document.getElementById('pageSelect').addEventListener('change', function() {
        currentPage = parseInt(this.value);
        renderPage();
        updatePagination();
    });

    // Render page
    function renderPage() {
        let input = document.getElementById('searchInput').value.toLowerCase();
        let displayedRows = [];
        
        for (let i = 0; i < totalRows; i++) {
            let row = rows[i];
            let tds = row.getElementsByTagName('td');
            let found = false;

            for (let j = 0; j < tds.length; j++) {
                if (tds[j].textContent.toLowerCase().indexOf(input) > -1) {
                    found = true;
                    break;
                }
            }

            row.style.display = found ? "" : "none"; // Hide rows not matching search

            if (found) {
                displayedRows.push(row);
            }
        }

        // Paginate the filtered rows
        let start = (currentPage - 1) * rowsPerPage;
        let end = start + rowsPerPage;

        for (let i = 0; i < displayedRows.length; i++) {
            displayedRows[i].style.display = (i >= start && i < end) ? "" : "none";
        }
    }

    // Update pagination controls
    function updatePagination() {
        const pageSelect = document.getElementById('pageSelect');
        pageSelect.innerHTML = ''; // Clear previous options
        
        let input = document.getElementById('searchInput').value.toLowerCase();
        let totalFilteredRows = 0;

        for (let i = 0; i < totalRows; i++) {
            let row = rows[i];
            let tds = row.getElementsByTagName('td');
            let found = false;

            for (let j = 0; j < tds.length; j++) {
                if (tds[j].textContent.toLowerCase().indexOf(input) > -1) {
                    found = true;
                    break;
                }
            }

            if (found) {
                totalFilteredRows++;
            }
        }

        const filteredPages = Math.ceil(totalFilteredRows / rowsPerPage);
        
        // Populate the page dropdown
        for (let i = 1; i <= filteredPages; i++) {
            let option = document.createElement('option');
            option.value = i;
            option.text = 'Page ' + i;
            if (i === currentPage) {
                option.selected = true;
            }
            pageSelect.appendChild(option);
        }

        // Disable buttons if at start or end
        document.getElementById('prevButton').disabled = currentPage === 1;
        document.getElementById('nextButton').disabled = currentPage === filteredPages;
    }
});



