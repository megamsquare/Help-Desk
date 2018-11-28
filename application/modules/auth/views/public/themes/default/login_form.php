
	  <div id="login-page">
	  	<div class="container">

		      <form class="form-login" role="form" method="POST" action="<?= base_url('auth/login') ?>">
		        <h2 class="form-login-heading">sign in now</h2>
            <?php if ($this->session->flashdata('message')): ?>
                <div class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <?= $this->session->flashdata('message') ?>
                </div>
            <?php endif; ?>
		        <div class="login-wrap">
		            <input class="form-control" placeholder="Username" name="username" type="username" autofocus>
		            <br>
		            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                    </label>
                </div>
		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		        </div>

		      </form>

	  	</div>
	  </div>
