

<?php $__env->startSection('content'); ?>
    <div class="auth-container d-flex">
        <div class="container mx-auto align-self-center">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="text-center">
                                    <a href="">
                                        <img src="<?php echo e(asset('templete')); ?>/src/assets/img/zerop.png" class="navbar-logo"
                                            alt="logo" style="height: 170px; width:auto;">
                                    </a>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <h2>Sign In</h2>
                                    <p>Enter your email or phone and password to Sign In</p>
                                    <hr>
                                </div>
                                <form method="POST" action="<?php echo e(route('login')); ?>" class="needs-validation">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email / Phone</label>
                                            <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                placeholder="Email/Phone" name="email" required>
                                            
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label ">Password</label>
                                            <input type="password"
                                                class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                placeholder="********" name="password" required>
                                            
                                        </div>
                                    </div>

                                    <div class="mb-3 text-right">
                                        <a class="link-muted text-capitalize font-weight-normal"
                                            href="<?php echo e(route('password.request')); ?>"><?php echo e(translate('Forgot Password?')); ?></a>
                                    </div>

                                    <div class="col-12 text-center">
                                        <div class="mb-4">
                                            <button class="btn btn-outline-info">SIGN IN</button>
                                        </div>
                                    </div>
                                </form>
                                <?php if(\App\Utility\SettingsUtility::get_settings_value('facebook_login_activation_checkbox') == 1 ||
                                    \App\Utility\SettingsUtility::get_settings_value('twitter_login_activation_checkbox') == 1 ||
                                    \App\Utility\SettingsUtility::get_settings_value('google_login_activation_checkbox') == 1 ||
                                    \App\Utility\SettingsUtility::get_settings_value('linkedin_login_activation_checkbox') == 1): ?>
                                    <div class="col-12 mb-4">
                                        <div class="">
                                            <div class="seperator">
                                                <hr>
                                                <div class="seperator-text"> <span>Or continue with</span></div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php if(\App\Utility\SettingsUtility::get_settings_value('google_login_activation_checkbox') == 1): ?>
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-4">
                                                <a href="<?php echo e(route('social.login', ['provider' => 'google'])); ?>"
                                                    class="btn  btn-social-login w-100 ">
                                                    <img src="<?php echo e(asset('templete')); ?>/src/assets/img/google-gmail.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    <?php endif; ?>


                                    <?php if(\App\Utility\SettingsUtility::get_settings_value('facebook_login_activation_checkbox') == 1): ?>
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-4">
                                                <a href="<?php echo e(route('social.login', ['provider' => 'facebook'])); ?>"
                                                    class="btn  btn-social-login w-100">
                                                    <img src="<?php echo e(asset('templete')); ?>/src/assets/img/facebook.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(\App\Utility\SettingsUtility::get_settings_value('twitter_login_activation_checkbox') == 1): ?>
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-4">
                                                <a href="<?php echo e(route('social.login', ['provider' => 'twitter'])); ?>"
                                                    class="btn  btn-social-login w-100">
                                                    <img src="<?php echo e(asset('templete')); ?>/src/assets/img/twitter.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(\App\Utility\SettingsUtility::get_settings_value('linkedin_login_activation_checkbox') == 1): ?>
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-4">
                                                <a href="<?php echo e(route('social.login', ['provider' => 'linkedin'])); ?>"
                                                    class="btn  btn-social-login w-100">
                                                    <img src="<?php echo e(asset('templete')); ?>/src/assets/img/linkedin.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <div class="col-12">
                                    <div class="text-center">
                                        <p class="mb-0">Don't have an account?<a href="<?php echo e(route('register')); ?>"
                                                class="text-warning"> Create an account</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.blank', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\zeroplus20\resources\views/frontend/default/user_login.blade.php ENDPATH**/ ?>