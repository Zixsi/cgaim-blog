<div class="auth-box">
	<div class="content">
		<div class="header">
			<p class="lead">Login</p>
		</div>
		<?=ShowError($error);?>
		<form class="form-auth-small" action="" method="POST">
			<div class="form-group">
				<label for="signin-email" class="control-label sr-only">Email</label>
				<input type="text" class="form-control" id="signin-email" name="email" value="<?=set_value('email', $form['email'], true)?>" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="signin-password" class="control-label sr-only">Password</label>
				<input type="password" class="form-control" id="signin-password" name="password" value="" placeholder="Password">
			</div>
			<div class="form-group clearfix">
				<label class="fancy-checkbox element-left">
					<input name="remember" type="checkbox" value="1" <?=set_checkbox('remember', '1',$form['remember'])?>>
					<span>Remember me</span>
				</label>
			</div>
			<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
		</form>
	</div>
	<div class="clearfix"></div>
</div>