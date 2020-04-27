<?php if(!is_user_logged_in()): ?>
        <?php echo $__env->make('woocommerce.partials.form-login.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
        <a href="?add-to-cart=12" data-quantity="1" class="button product_type_subscription add_to_cart_button ajax_add_to_cart" data-product_id="12" data-product_sku="" aria-label="Add “TestProduct” to your cart" rel="nofollow">Sign up now</a>
<?php endif; ?>