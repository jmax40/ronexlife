$(document).ready(function(){
    // Function to fetch data and update table
    function fetchDataAndUpdateTable() {
      $.ajax({
        url: 'process/fetch.php',
        type: 'GET',
        data: { type: 'promo' }, // Specify the type parameter
        dataType: 'json',
        success: function(data) {
          // Clear existing table rows
          $('#ptable tbody').empty();
  
          // Populate table with new data
          $.each(data, function(index, row) {
            var tr = $('<tr>');
            
            // Create clickable hyperlink for the pin
            var pinLink = $('<a>')
            .attr('href', 'productdetails.php?pin=' + row.pin) // URL of the new page with the pin as a query parameter
            .text(row.pin);
        tr.append($('<td>').append(pinLink));
        
            
            tr.append($('<td>').text(row.productname));
            tr.append($('<td>').text(row.status));
            $('#ptable tbody').append(tr);
          });
        },
        error: function(xhr, status, error) {
          console.error('Error fetching data:', error);
        }
      });
    }
  
    // Initial fetch and table update
    fetchDataAndUpdateTable();
  
    // Set interval to fetch data and update table every 5 seconds
    setInterval(fetchDataAndUpdateTable, 5000);
});






$(document).ready(function(){
    // Function to fetch data and update table
    function fetchProductDetails() {
        $.ajax({
            url: 'process/fetch.php',
            type: 'GET',
            data: { type: 'mop' }, // Specify the type parameter
            dataType: 'json',
            success: function(mopdata) {
                // Clear existing table rows
                $('#modtable tbody').empty();

                // Populate table with new data
                $.each(mopdata, function(index, row) {
                    var tr = $('<tr>');

                    // Create clickable hyperlink for the pin
                    var pinLink = $('<a>')
                        .attr('href', 'productdetails.php?pin=' + row.startid) // URL of the new page with the pin as a query parameter
                        .text(row.startid);
                    tr.append($('<td>').append(pinLink));

                    tr.append($('<td>').text(row.mop));
                    tr.append($('<td>').text(row.price));
                    tr.append($('<td>').text(row.days));
                    tr.append($('<td>').text(row.status));

                    $('#modtable tbody').append(tr);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching data:', error);
            }
        });
    }

    // Initial fetch and table update
    fetchProductDetails();

    // Set interval to fetch data and update table every 5 seconds
    setInterval(fetchProductDetails, 5000);
});



