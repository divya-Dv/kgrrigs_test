<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Moderustic:wght@300..800&display=swap" rel="stylesheet">
 <!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">

<link href="assets/css/nice-select.css" rel="stylesheet">
    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.lettering.min.js"></script>
    <script src="assets/js/jquery.circleType.js"></script>
    <script src="assets/js/text_animation.js"></script>
    <script src="assets/js/text_plugins.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

<script>
  window.onload = function() {
    setTimeout(function() {
      var enquireModal = new bootstrap.Modal(document.getElementById('enquire-modal'));
      enquireModal.show();
    }, 5000);  
  }
</script>
 <script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all menu items and the close button
    const menuItems = document.querySelectorAll('.menu-itemm');
    const closeButton = document.getElementById('closeMenu');
    
    // Add click event listeners to each menu item
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            // Simulate a click on the close button
            closeButton.click();
        });
    });
});
</script>

<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LceZ8MbAAAAAH4BFsxP87_cyknqnHhsCXyUMS3V', {action: 'homepage'}).then(function(token) {
            console.log(token);
            document.getElementById("token").value = token;
        });
    });
</script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LceZ8MbAAAAAH4BFsxP87_cyknqnHhsCXyUMS3V', {action: 'homepage'}).then(function(token) {
            console.log(token);
            document.getElementById("token-one").value = token;
        });
    });
</script>
 <script type="text/javascript">
               function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en' , includedLanguages : 'ar,th,es,pt,en,fr'}, 'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            
            
            <script type="text/javascript">
function googleTranslateElementInit() {
    new google.translate.TranslateElement({ pageLanguage: 'en' , includedLanguages : 'ar,th,es,pt,en,fr' }, 'google_translate_element');

    setTimeout(function(){
        var firstSelect = document.querySelector('#google_translate_element select');
        var secondContainer = document.querySelector('#google_translate_element2');

        if (firstSelect) {
            // Clone the translate element and append to the second container
            secondContainer.appendChild(firstSelect.cloneNode(true));

            var secondSelect = secondContainer.querySelector('select');

            // Synchronize selections between the original and the clone
            secondSelect.addEventListener('change', function() {
                firstSelect.selectedIndex = this.selectedIndex;
                firstSelect.dispatchEvent(new Event('change'));
            });

            firstSelect.addEventListener('change', function() {
                secondSelect.selectedIndex = this.selectedIndex;
            });
        }
    }, 3000);
}
</script>

<script async src="https://backend.livhousing.com/bot/create-script-tag?token=10c72d82-db21-4e6e-b5f0-65794e9b94df" type="application/javascript"></script>

