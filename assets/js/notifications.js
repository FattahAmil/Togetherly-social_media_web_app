import shownotifs from '../../includes/shownotifs.php'

$(document).ready(function() {
    // Function to load notifications
    function loadNotifications() {
      $.ajax({
        type: "GET",
        url: shownotifs, 
        success: function(response) {
          // Update the notifications container with the retrieved data
          $('.notification-body').html(response);
        }
      });
    }
  
    // Load notifications on page load
    loadNotifications();
  
 
  
    // Periodically load notifications
    setInterval(loadNotifications, 5000); // Adjust the interval as desired (e.g., every 5 seconds)
  });
  
