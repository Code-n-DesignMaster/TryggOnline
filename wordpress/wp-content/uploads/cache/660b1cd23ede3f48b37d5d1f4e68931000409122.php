<?php if(!is_user_logged_in()): ?>
        <?php echo $__env->make('woocommerce.partials.form-login.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
<div class="products-wrapper">
        <div class="container">
                <div class="row justify-content-around">
<?php $__currentLoopData = $get_subscr_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $currentProduct = wc_get_product( $productItem->ID );  ?>
                <div class="card col-5 position-relative" data-subscription-id="<?php echo e($productItem->ID); ?>">
        <span class="price-budge position-absolute">
                <?php echo e(get_woocommerce_currency() . $currentProduct->get_price()); ?>

        </span>
        <div class="row">
                <img class="card-img-top" 
                src="<?php echo e(!empty(wp_get_attachment_url( get_post_thumbnail_id( $productItem->ID ) )) ? wp_get_attachment_url( get_post_thumbnail_id( $productItem->ID ) ) : ASSETS_IMAGES . '250x200.png'); ?>" 
                alt="Subscription">
                <div class="card-body">
                        <h5 class="card-title"><?php echo e(get_the_title($productItem->ID)); ?></h5>
                <p class="card-text"><?php echo e($currentProduct->get_short_description()); ?></p>
                        <div class="select-subscription__wrapper">
                        <label for="ss-button-<?php echo e($productItem->ID); ?>" class="select-subscription__button btn btn-primary">
                                        <span>Choose</span>
                                <input type="radio" name="ss-button" id="ss-button-<?php echo e($productItem->ID); ?>">
                                </label>
                        </div>
                
                </div>
        </div>
      </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</div>
<?php endif; ?>