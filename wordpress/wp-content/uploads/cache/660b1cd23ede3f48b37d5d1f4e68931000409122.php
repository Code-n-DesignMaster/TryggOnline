<?php if(!is_user_logged_in()): ?>
        <?php echo $__env->make('woocommerce.partials.form-login.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
        <h1>logged in</h1>
<?php endif; ?>