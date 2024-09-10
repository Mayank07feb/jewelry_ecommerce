import './bootstrap';

function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    // Hide all dropdowns
    document.querySelectorAll('.absolute').forEach(el => {
      if (el !== dropdown) el.classList.add('hidden');
    });
    // Toggle the clicked dropdown
    dropdown.classList.toggle('hidden');
  }
  // Close dropdowns when clicking outside
  document.addEventListener('click', function(event) {
    const isClickInside = event.target.closest('.relative');
    if (!isClickInside) {
      document.querySelectorAll('.absolute').forEach(el => {
        el.classList.add('hidden');
      });
    }
  });


