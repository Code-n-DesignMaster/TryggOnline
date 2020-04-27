<?php
/**
 * Login Form
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */
?>
<?php if( ! defined( 'ABSPATH' ) ): ?> exit <?php endif; ?>
<div class="login-form__wrapper col-12">
<div class="row justify-content-center">
  <div class="qrLogin col-12 align-center text-center">
  <img src="<?php echo e($qr_code_login_generation); ?>" alt="BankID Login">
    <br>
  <a href="<?php echo e($login_register_uri); ?>">Login with BankID</a>
  </div>
</div>
</div>