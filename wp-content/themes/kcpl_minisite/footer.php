<footer>
    <div class="footer-text">
      <span class="footer-title">Thank you and some kind of take-away??</span>
      <span class="footer-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
      <span class="footer-url">www.url.com</span>
    </div>
</footer>
<?php wp_footer(); ?>

<script type="text/javascript">
  var container = document.querySelector('.main-body');
  var msnry = new Masonry( container, {
    // options...
    itemSelector: '.post-container'
  });
</script>

<script type="text/javascript">


    // Code that uses jQuery's $ can follow here.
    function countChar(val){
        var len = val.value.length;
        if (len >= 300) {
            val.value = val.value.substring(0, 300);
        }else {
            jQuery('#count').text(len);
        }
    };

    jQuery("#field_7jwk25").attr('placeholder', 'Name*');
    jQuery("#field_axkmb8").attr('placeholder', 'Email*');
    jQuery("#field_xs1dc8").attr('placeholder', 'Age');
    jQuery('#field_2ceh3d').attr('placeholder', 'Zip Code');
    jQuery('#field_bcq4pz').attr('placeholder', 'My Library Branch');
    jQuery('#field_sp4rc3').attr('placeholder', 'My Library Story (Max 300 characters)');

</script>

</body>
</html>
