    <?php echo NoCaptcha::renderJs(); ?>

    <script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/circle.js')); ?>"></script>
    <script src="<?php echo e(asset('js/chatbot.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    
    
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=752505078293726&autoLogAppEvents=1"></script>

<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/frontend/layout/javascript.blade.php ENDPATH**/ ?>