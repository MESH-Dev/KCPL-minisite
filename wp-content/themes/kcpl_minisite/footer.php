<footer>
    <div class="footer-text">
      <span class="footer-title">Coming in October, a brand new Kanawha County Public Library website designed just for you!</span>
      <span class="footer-subtitle">In the meantime, continue through to our current site.</span>
      <span class="footer-url"><a href="http://kanawhalibrary.org">kanawhalibrary.org</a></span>
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

<script>

    var Input = jQuery('#field_7jwk25');
    var default_value = Input.val();

    Input.focus(function() {
        if(Input.val() == default_value) Input.val("");
    }).blur(function(){
        if(Input.val().length == 0) Input.val(default_value);
    });

    var input0 = jQuery('#field_axkmb8');
    var default_value0 = input0.val();

    input0.focus(function() {
        if(input0.val() == default_value0) input0.val("");
    }).blur(function(){
        if(input0.val().length == 0) input0.val(default_value0);
    });

    var input1 = jQuery('#field_xs1dc8');
    var default_value1 = input1.val();

    input1.focus(function() {
        if(input1.val() == default_value1) input1.val("");
    }).blur(function(){
        if(input1.val().length == 0) input1.val(default_value1);
    });

    var input2 = jQuery('#field_2ceh3d');
    var default_value2 = input2.val();

    input2.focus(function() {
        if(input2.val() == default_value2) input2.val("");
    }).blur(function(){
        if(input2.val().length == 0) input2.val(default_value2);
    });

    var input3 = jQuery('#field_bcq4pz');
    var default_value3 = input3.val();

    input3.focus(function() {
        if(input3.val() == default_value3) input3.val("");
    }).blur(function(){
        if(input3.val().length == 0) input3.val(default_value3);
    });

    var input4 = jQuery('#field_sp4rc3');
    var default_value4 = input4.val();

    input4.focus(function() {
        if(input4.val() == default_value4) input4.val("");
    }).blur(function(){
        if(input4.val().length == 0) input4.val(default_value4);
    });

</script>


<script type="text/javascript">

    jQuery(".limit").hide();

    // Code that uses jQuery's $ can follow here.
    function countChar(val){

        var len = val.value.length;
        if (len > 300) {
            jQuery('.contact-form-count-number').css('color', '#ff0000');
            jQuery('#count').css('color', '#ff0000');
            jQuery('#count').text(len);
            jQuery('input[type="submit"]').attr('disabled','disabled');
            jQuery('.limit').show();
        }else {
            jQuery('#count').text(len);
            jQuery('input[type="submit"]').removeAttr('disabled');
            jQuery('.limit').hide();
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
