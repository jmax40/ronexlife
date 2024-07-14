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
        price: $('#price').val(),
        days: $('#days').val(),
        status: $('#status').val()
    };

    // AJAX request with custom method 'MOPSAVE'
    $.ajax({
        url: 'process/add.php',
        type: 'POST',
        data: formData,
        success: function(response) {
            alert("Successfully Saved!");
            // Reload the page
            location.reload();
            // Optionally reset form fields or perform other actions after successful submission
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            alert("Error: " + xhr.responseText);
        }
    });
}

