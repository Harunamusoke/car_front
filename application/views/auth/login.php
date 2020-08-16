<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="login-form-bg h-100">
	<div class="container h-100">
		<div class="row justify-content-center h-100">
			<div class="col-xl-6 mt-3">
				<div class="form-input-content">
					<div class="card login-form mb-0">
						<div class="card-header">
							<?php if (isset($inputError)) : ?>

								<?php foreach ($inputError as $key => $value) : ?>

									<p class="text-danger" style="color: red;"> <?php echo  $value ?> </p>

								<?php endforeach; ?>

							<?php endif; ?>
						</div>
						<div class="card-body pt-1">
							<a class="text-center" href="<?php echo base_url(); ?>">
								<h4> <?php echo ($signup ? "SIGN UP" : "LOGIN") ?></h4>
							</a>

							<?php echo form_open($submit, 'class="mt-1 mb-2 login-input"') ?>
							<?php if ($signup) : ?>
								<div class="form-group">
									<input type="text" class="form-control <?php echo (array_key_exists("firstname", $errors) ? "is-invalid" : "") ?>" placeholder="Firstname.." name="firstname" value="<?php echo set_value("firstname") ?>">
									<div class="invalid-feedback"><?php echo (isset($errors['firstname']) ? $errors['firstname'] : ""); ?></div>
								</div>

								<div class="form-group">
									<input type="text" class="form-control <?php echo (array_key_exists("lastname", $errors) ? "is-invalid" : "") ?>" placeholder="Lastname...." name="lastname" value="<?php echo set_value("lastname") ?>">
									<div class="invalid-feedback"><?php echo (isset($errors['lastname']) ? $errors['lastname'] : ""); ?></div>
								</div>

								<div class="form-check form-check-inline">
									<label for="">Gender</label>
									<div class="btn-group btn-group-toggle mx-auto" data-toggle="buttons">
										<label class="btn btn-primary m-3">
											<input id="male" class="form-check-input" type="radio" name="gender" value="m" checked> Male
										</label>
										<label class="btn btn-primary m-3">
											<input id="female" class="form-check-input" type="radio" name="gender" value="f"> Female
										</label>
									</div>
								</div>

								<div class="w-100">
									<div class="input-group border-0 my-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="my-addon">+256</span>
										</div>
										<input class="form-control  <?php echo (array_key_exists("contact", $errors) ? "is-invalid" : "") ?>" type="number" name="contact" placeholder="Contact" aria-label="Contact" aria-describedby="my-addon" value="<?php echo set_value("contact") ?>">
									</div>
									<div class="text-danger"><?php echo (isset($errors['contact']) ? $errors['contact'] : ""); ?></div>
								</div>
							<?php endif; ?>
							<div class="form-group">
								<input type="email" class="form-control <?php echo (array_key_exists("email", $errors) ? "is-invalid" : "") ?>" placeholder="Email...." name="email" value="<?php echo set_value("email") ?>">
								<div class="invalid-feedback"><?php echo (isset($errors['email']) ? $errors['email'] : ""); ?></div>
							</div>
							<div class="form-group">
								<input type="password" class="form-control <?php echo (array_key_exists("password", $errors) ? "is-invalid" : "") ?>" placeholder="Password...." name="password">
								<div class="invalid-feedback"><?php echo (isset($errors['password']) ? $errors['password'] : ""); ?></div>
							</div>
							<?php if ($signup) : ?>

								<div class="form-group">
									<input type="password" class="form-control <?php echo (array_key_exists("confpassword", $errors) ? "is-invalid" : "") ?>" placeholder="Confirm Password...." name="confpassword">
									<div class="invalid-feedback"><?php echo (isset($errors['confpassword']) ? $errors['confpassword'] : ""); ?></div>
								</div>

							<?php endif;	 ?>
							<button class="btn login-form__btn submit w-100" type="submit"><?php echo ($signup ? "Sign Up" : "Sign in"); ?></button>
							</form>
							<p class="mt-1 login-form__footer">Dont have account? <a href="<?php echo base_url($link); ?>" class="text-primary"><?php echo (!$signup ? "Sign Up" : "Sign in"); ?></a> now</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>