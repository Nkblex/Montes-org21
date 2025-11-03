// Example: Alert on "Read More" click if JS enhancement is desired
document.querySelectorAll('.read-more-btn').forEach(btn => {
  btn.addEventListener('click', function (e) {
    // Optional: prevent form submission and show a modal or message
    // e.preventDefault();
    // alert('Feature details will be loaded here.');
  });
});
