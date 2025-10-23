

  @if (session('success'))
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
      <script>
          Toastify({
              text: "Email was sent successfully",
              className: "success",
          }).showToast();
      </script>
  @endif

  @if (session('error'))
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
      <script>
          Toastify({
              text: "There was an error sending your email",
              className: "danger",
             
          }).showToast();
      </script>
  @endif

  @if ($errors->any())
      <script>
          document.addEventListener('DOMContentLoaded', function() {
              // Scroll to form on validation errors
              const formElement = document.getElementById('CONTACTUS');
              if (formElement) {
                  formElement.scrollIntoView({
                      behavior: 'smooth',
                      block: 'center'
                  });

                  // Optional: Add focus to first error field
                  const firstErrorInput = formElement.querySelector('input:invalid, textarea:invalid');
                  if (firstErrorInput) {
                      firstErrorInput.focus();
                  }
              }
          });
      </script>
  @endif
