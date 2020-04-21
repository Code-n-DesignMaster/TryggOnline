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

<ul class="nav nav-tabs" id="LoginRegister" role="tablist">
    <li class="nav-item">
    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Registration</a>
    </li>
  </ul>
  <div class="tab-content" id="LoginRegisterContent">
    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
<?php if( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ): ?>
<div class="container">
    <div class="row justify-content-center">
        <form class="woocommerce-form woocommerce-form-login login col-5" method="post">
            <?php do_action( 'woocommerce_login_form_start' ); ?>
            <div class="form-group">
              
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="username" placeholder="Enter email" id="username" autocomplete="username" value="<?php echo e(( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''); ?>" />
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              
              <input class="form-control woocommerce-Input woocommerce-Input--text input-text" placeholder="<?php echo e(esc_html_e( 'Password', 'woocommerce' )); ?>" type="password" name="password" id="password" autocomplete="current-password" />
              
            </div>
            <?php do_action( 'woocommerce_login_form' ); ?>
            <div class="form-check">
              <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme form-check-label">
                <input class="form-check-input woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
            </label>
            <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
            </div>
            <button type="submit" class="my-2 btn btn-primary woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php echo e(esc_attr_e( 'Log in', 'woocommerce' )); ?>"><?php echo e(esc_html_e( 'Log in', 'woocommerce' )); ?></button>
            <?php do_action( 'woocommerce_login_form_end' ); ?>
            <span class="woocommerce-LostPassword lost_password my-2">
                <a href="<?php echo e(esc_url( wp_lostpassword_url() )); ?>"><?php echo e(esc_html_e( 'Lost your password?', 'woocommerce' )); ?></a>
            </span>
          </form>
        <?php endif; ?>
        </div>
        <?php do_action( 'woocommerce_before_customer_login_form' ); ?>
    </div>
</div>
<div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
<?php if( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ): ?>
<div class="container">
    <div class="row justify-content-center">
      <form method="post" class="col-6 woocommerce-form woocommerce-form-register register" <?php echo e(do_action( 'woocommerce_register_form_tag' )); ?> >
        <?php do_action( 'woocommerce_register_form_start' ); ?>
        <div class="form-row">
          <div class="form-group col-12">
            <input type="text" placeholder="<?php echo e(esc_html_e( 'First Name', 'woocommerce' )); ?>" class="form-control woocommerce-Input woocommerce-Input--text input-text" name="first_name" id="reg_first_name" value="<?php echo e(( ! empty( $_POST['first_name'] ) ) ? esc_attr( wp_unslash( $_POST['first_name'] ) ) : ''); ?>" />
          </div>
          <div class="form-group col-12">
            <input type="text" placeholder="<?php echo e(esc_html_e( 'Last Name', 'woocommerce' )); ?>" class="form-control woocommerce-Input woocommerce-Input--text input-text" name="last_name" id="reg_last_name" value="<?php echo e(( ! empty( $_POST['last_name'] ) ) ? esc_attr( wp_unslash( $_POST['last_name'] ) ) : ''); ?>" />
          </div>
          <div class="form-group col-12">
            <input type="email" placeholder="<?php echo e(esc_html_e( 'Email', 'woocommerce' )); ?>" class="form-control woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo e(( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''); ?>" />
          </div>
          <div class="form-group col-12">
            <input type="text" placeholder="<?php echo e(esc_html_e( 'User Name', 'woocommerce' )); ?>" class="form-control woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo e(( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''); ?>" />
          </div>
          <div class="form-group col-12">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
          </div>
          <div class="form-group col-12">
            <input type="text" class="form-control" id="bankID" placeholder="BankID">
          </div>
        </div>
        <?php do_action( 'woocommerce_register_form' ); ?>
        <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
        <button type="submit" class="btn btn-primary woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php echo e(esc_attr_e( 'Register', 'woocommerce' )); ?>"><?php echo e(esc_html_e( 'Register', 'woocommerce' )); ?></button>
        <?php do_action( 'woocommerce_register_form_end' ); ?>
      </form>
    </div>
</div>
<?php endif; ?>
</div>
</div>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
