<?php $__env->startComponent('mail::message'); ?>

There is new message from Soanitech Contact us page from.<br>
##<?php echo e($details['name']); ?> <br>


#message
<?php $__env->startComponent('mail::panel'); ?>
><?php echo e($details['message']); ?>

<?php echo $__env->renderComponent(); ?>


#phone

<?php echo e($details['phone']); ?>


#mail
<?php echo e($details['email']); ?>


Try to respond Asap,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/contact.blade.php ENDPATH**/ ?>