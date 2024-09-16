function saveproduct() {
    // Gather form data
    var formData = {
        pin: $('#pin').val(),
        productname: $('#productname').val(),
        status: $('#status').val()
    };

    $.ajax({
        url: 'process/add.php', // Ensure this path is correct
        type: 'POST',
        data: formData,
        success: function(response) {
            alert("Successfully Saved: ");
        },
        error: function(xhr, status, error) {
            // Handle error response
            console.error(xhr.responseText);
            alert("Error purchasing: " + xhr.responseText);
        }
    });
}


    



function savemop() {
    // Gather form data
    var formData = {
        pin: $('#pin').val(),
        mop: $('#mop').val(),
        startid: $('#startid').val(),
        price: parseFloat($('#price').val()),
        days: parseInt($('#days').val(), 10),
        commission: $('#commission').val(),
        moc: $('#moc').val(),
        status: $('#status').val()
    };

    // AJAX request with POST method
    $.ajax({
        url: 'process/add.php',
        type: 'POST',
        data: formData,
        success: function(response) {
            if(response.status === 'success') {
                alert("Successfully Added");
                // Reload the page
                location.reload();
            } else {
                alert("Error: " + response.message);
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            alert("Error: " + xhr.responseText);
        }
    });
}


