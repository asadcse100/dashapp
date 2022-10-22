

<?php $__env->startSection('content'); ?>
    <div class="auth-container d-flex">
        <div class="container mx-auto align-self-center">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <h2>Join with us</h2>
                                    <p>Fill out the form to get started</p><hr>
                                </div>
                                <form class="" id="reg-form" method="POST" action="<?php echo e(route('register')); ?>">
                                    <?php echo csrf_field(); ?>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                placeholder="Full Name" name="name" required>
                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                placeholder="Email" name="email" required>
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label ">Confirm Password</label>
                                            <input type="password"
                                                class="form-control"
                                                placeholder="********" name="password_confirmation" required>
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="aiz-radio-inline">
                                            <label class="aiz-radio">
                                                <input type="radio" name="user_types[]" value="freelancer" checked="checked"> <?php echo e(translate('As A Expert')); ?>

                                                <span class="aiz-rounded-check"></span>
                                            </label>
                                            &nbsp;&nbsp;
                                            <label class="aiz-radio">
                                                <input type="radio" name="user_types[]" value="client"> <?php echo e(translate('As A Client')); ?>

                                                <span class="aiz-rounded-check"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <?php if(get_setting('google_recaptcha_activation_checkbox') == 1): ?>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="<?php echo e(env('CAPTCHA_KEY')); ?>"></div>
                                </div>
                            <?php endif; ?>

                                    <div class="form-group">
								<div class="aiz-checkbox-list">
									<label class="aiz-checkbox">
										<input type="checkbox" name="condition" required>
											<span class="fs-13"><?php echo e(translate('By signing up you agree to our terms and conditions')); ?>.</span>
										<span class="aiz-square-check"></span>
									</label>
								</div>
							</div>

                                    <div class="col-12 text-center">
                                        <div class="mb-4">
                                            <button class="btn btn-outline-info">SIGN UP</button>
                                        </div>
                                    </div>
                                </form>
                                <?php if(\App\Utility\SettingsUtility::get_settings_value('facebook_login_activation_checkbox') == 1 || \App\Utility\SettingsUtility::get_settings_value('twitter_login_activation_checkbox') == 1 || \App\Utility\SettingsUtility::get_settings_value('google_login_activation_checkbox') == 1 || \App\Utility\SettingsUtility::get_settings_value('linkedin_login_activation_checkbox') == 1): ?>
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
                                                    <img src="<?php echo e(asset('templete')); ?>/src/assets/img/facebook.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(\App\Utility\SettingsUtility::get_settings_value('twitter_login_activation_checkbox') == 1): ?>
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-4">
                                                <a href="<?php echo e(route('social.login', ['provider' => 'twitter'])); ?>"
                                                    class="btn  btn-social-login w-100">
                                                    <img src="<?php echo e(asset('templete')); ?>/src/assets/img/twitter.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(\App\Utility\SettingsUtility::get_settings_value('linkedin_login_activation_checkbox') == 1): ?>
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-4">
                                                <a href="<?php echo e(route('social.login', ['provider' => 'linkedin'])); ?>"
                                                    class="btn  btn-social-login w-100">
                                                    <img src="<?php echo e(asset('templete')); ?>/src/assets/img/linkedin.svg" alt=""
                                                        class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <div class="col-12">
                                    <div class="text-center">
                                        <p class="mb-0">"Already have an account?<a href="<?php echo e(route('user.login')); ?>"
                                                class="text-warning"> Login to your account</a></p>
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

<?php $__env->startSection('script'); ?>
    <?php if(get_setting('google_recaptcha_activation_checkbox') == 1): ?>
        <script src="https://www.google.com/recaptcha/api.js" async defer>
            $(document).ready(function() {
                $("#reg-form").on("submit", function(evt) {
                    var response = grecaptcha.getResponse();
                    if (response.length == 0) {
                        //reCaptcha not verified
                        alert("please verify you are humann!");
                        evt.preventDefault();
                        return false;
                    }
                    //captcha verified
                    //do the rest of your validations here
                    $("#reg-form").submit();
                });
            });
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.blank', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\Xampp\htdocs\zeroplus20\resources\views/frontend/default/user_sign_up.blade.php ENDPATH**/ ?>