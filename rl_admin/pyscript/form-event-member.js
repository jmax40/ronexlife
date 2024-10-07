
  // Function to populate months dynamically
  function populateMonths() {
    var select = document.getElementById("month");
    var months = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    for (var i = 0; i < months.length; i++) {
        var option = document.createElement("option");
        option.text = monthNames[i];
        option.value = months[i];
        select.add(option);
    }
}


    // Function to populate days dynamically based on selected month and year
    function populateDays() {
        var month = document.getElementById("month").value;
        var year = document.getElementById("year").value;
        var select = document.getElementById("day");
        select.innerHTML = '';

        // Number of days in the selected month
        var daysInMonth = new Date(year, month, 0).getDate();

        var select = document.getElementById("day");
    select.innerHTML = ""; // Clear existing options
    
    // Add leading zeros to single-digit numbers
    function padNumber(number) {
        return (number < 10 ? "0" : "") + number;
    }

    // Populate days
    for (var i = 1; i <= daysInMonth; i++) {
        var option = document.createElement("option");
        option.text = padNumber(i); // Pad with leading zeros
        option.value = padNumber(i); // Pad with leading zeros
        select.add(option);
    }

    }
    


    // Function to populate years dynamically
    function populateYears() 
    {
        var select = document.getElementById("year");
        var currentYear = new Date().getFullYear();
        for (var i = currentYear; i >= 1900; i--) {
            var option = document.createElement("option");
            option.text = i;
            option.value = i;
            select.add(option);
        }
    }

    // Initial population of months, days, and years
    populateMonths();
    populateDays();
    populateYears();

    // Event listeners for month and year changes
    document.getElementById("month").addEventListener("change", populateDays);
    document.getElementById("year").addEventListener("change", populateDays);
















function updatePin() 

{
    var resultsSelect = document.getElementById('results');
  resultsSelect.innerHTML = '';
  
    var pinInput = document.getElementById("pin");
    var productSelect = document.getElementById("productSelect");
  
  
    var selectedOption = productSelect.options[productSelect.selectedIndex];
    if (selectedOption) {
        pinInput.value = selectedOption.getAttribute("data-pin");
    }
    
  }
  

  





  
  $(document).ready(function() {
    $('#productSelect').on('change', function() {
        var selectedPin = $(this).find(':selected').data('pin');
        fetchResults(selectedPin);
    });

    // Function to send the AJAX request
    function fetchResults(pin) {
        if (pin) {
            $.ajax({
                url: 'process/droplist.php', // Replace with your PHP script URL
                type: 'POST',
                data: { pin: pin },
                dataType: 'json',
                success: function(response) {
                    var resultsDropdown = $('#results');
                    resultsDropdown.empty(); // Clear any existing options

                    // Populate the dropdown with the new options
                    $.each(response, function(index, item) {
                        resultsDropdown.append($('<option>', { 
                            value: item.status,
                            text: item.mop,
                            'data-spotcash': item.spotcash,
                            'data-days': item.days,
                            'data-price':item.price,
                            'data-id':item.id
                        }));
                    });

                    // Update the text fields with the status, spotcash, and days of the first item, if available
                    if (response.length > 0) {
                        $('#changestatus').val(response[0].status);
                        $('#spotcash').val(response[0].spotcash);
                        $('#mopdays').val(response[0].days);
                        $('#price').val(response[0].price);
                        $('#mopid').val(response[0].id);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error: ' + error);
                    alert('Failed to fetch data. Please try again.');
                }
            });
        }
    }

    // Update the changestatus, spotcash, and mopdays fields when the selected option in results dropdown changes
    $('#results').on('change', function() {
        var selectedStatus = $(this).find(':selected').val();
        var selectedSpotcash = $(this).find(':selected').data('spotcash');
        var selectedDays = $(this).find(':selected').data('days');
        var selectedPrice = $(this).find(':selected').data('price');
        var selectedId = $(this).find(':selected').data('id');

        $('#changestatus').val(selectedStatus);
        $('#spotcash').val(selectedSpotcash);
        $('#mopdays').val(selectedDays);
        $('#price').val(selectedPrice);
        $('#mopid').val(selectedId);
        

    });
});

  
  
  



  
  
  
  
  // Trigger toggleFields every second
  setInterval(function() {
      var selectedStatus = $('#results').find(':selected').val();
      $('#changestatus').val(selectedStatus);
      toggleFields(selectedStatus);
  }, 1000); // 1000 milliseconds = 1 second
  


  // Function to show or hide sections based on status
  function toggleFields(status) {
      if (status === 'BENEFICIARY') {
          $('#beneficiarySection').show(); // Show the beneficiary section
          $('#claimantsSection').hide(); // Hide the claimants section
      } else if (status === 'CLAIMANTS') {
          $('#beneficiarySection').hide(); // Hide the beneficiary section
          $('#claimantsSection').show(); // Show the claimants section
      } else {
          $('#beneficiarySection').hide(); // Hide the beneficiary section
          $('#claimantsSection').hide(); // Hide the claimants section
      }
  }



  


  
  // Attach the change event handler for immediate feedback
  $('#results').on('change', function() {
      var selectedStatus = $(this).find(':selected').val();
      $('#changestatus').val(selectedStatus);
      toggleFields(selectedStatus);
  });
  






  // Coordinator and Branch Event listener 
  document.getElementById('coordinator').addEventListener('change', function() {
    var selectedOption = this.options[this.selectedIndex];
    var branch = selectedOption.getAttribute('data-branch');
    document.getElementById('branchx').value = branch;
});





  
function validatePasswords() {
    var password = document.getElementById("password").value;
    var retype = document.getElementById("retype").value;

    if (password !== retype) {
      alert("Passwords do not match!");
      return false; // Prevent form submission
    }

    return true; // Allow form submission
  }
