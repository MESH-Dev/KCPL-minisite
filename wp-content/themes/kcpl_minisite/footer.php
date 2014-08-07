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



</script>

</body>
</html>
