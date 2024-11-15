
         <!-- Back To Top -->
         <div class="scrollToTop">
            <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
         </div>

         <div id="responsive-overlay"></div>

         <!-- popperjs -->
         <script src="{{asset('build/assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>

         <!-- Color Picker JS -->
         <script src="{{asset('build/assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>

         <!-- Switch JS -->
        <script src="{{asset('build/assets/switch.js')}}"></script>

         <!-- Simplebar JS -->
         <script src="{{asset('build/assets/libs/simplebar/simplebar.min.js')}}"></script>

         <!-- Preline JS -->
         <script src="{{asset('build/assets/libs/preline/preline.js')}}"></script>
         <script src="{{ asset('build/assets/libs/dragula/dragula.min.js') }}"></script>

         @yield('scripts')    
         <script>
            // Function to fade out alerts
            function fadeOutAlerts() {
               const successAlert = document.getElementById('success-alert');
               const errorAlert = document.getElementById('error-alert');
               const warningAlert = document.getElementById('warning-alert');

               if (successAlert) {
                     setTimeout(() => {
                        successAlert.style.transition = 'opacity 0.5s ease';
                        successAlert.style.opacity = 0;
                        setTimeout(() => {
                           successAlert.remove();
                        }, 500); // Remove after fade out
                     }, 5000); // Wait 5 seconds before starting to fade out
               }

               if (errorAlert) {
                     setTimeout(() => {
                        errorAlert.style.transition = 'opacity 0.5s ease';
                        errorAlert.style.opacity = 0;
                        setTimeout(() => {
                           errorAlert.remove();
                        }, 500); // Remove after fade out
                     }, 5000); // Wait 5 seconds before starting to fade out
               }
               if (warningAlert) {
                     setTimeout(() => {
                        warningAlert.style.transition = 'opacity 0.5s ease';
                        warningAlert.style.opacity = 0;
                        setTimeout(() => {
                           warningAlert.remove();
                        }, 500); // Remove after fade out
                     }, 5000); // Wait 5 seconds before starting to fade out
               }
            }

            // Call the fade out function
            fadeOutAlerts();

            function changeButtonText(button) {
               // Select the button by class
               var old_text = button.innerHTML;
               

               // Change the button text to 'Please wait...'
               button.innerHTML = 'Please wait...';

               // Optional: Disable the button while loading
               button.disabled = true;

               // Find the form to submit
               var form = button.closest('form'); // Assumes the button is inside the form
               // Submit the form
               if (form) {
                     form.submit(); // Submit the form after the delay
               }
               // Simulate a delay (e.g., for an API call or some task)
               setTimeout(function() {
                  // Change the button text back to the original (stored in 'old_text')
                  button.innerHTML = old_text;

                  // Re-enable the button
                  button.disabled = false;

               }, 3000); // 3 seconds delay
            }



         </script>   
         