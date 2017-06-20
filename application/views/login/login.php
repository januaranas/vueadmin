<html>
<head>
	<meta charset="utf-8" />
	<title> Vue Admin </title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/materialize/css/materialize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/login.css" />
</head>
<body>

  <div class="section"></div>
  <main>
    <center>

      <h5 class="indigo-text">MK Admin Lite</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class="row">
              <div class="col s12">
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input class="validate" type="email" name="email" id="email" />
                <label for="email">Enter your email</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input class="validate" type="password" name="password" id="password" />
                <label for="password">Enter your password</label>
              </div>
              <label style="float: right;">
				<a class="pink-text" href="#!"><b>Forgot Password?</b></a>
			  </label>
            </div>

            <br />
            <center>
              <div class="row">
                <button type="submit" name="btn_login" class="col s12 btn btn-large waves-effect indigo">Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="#!">Create account</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>


<script type="text/javascript" src="<?php echo base_url() ?>assets/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/materialize/js/materialize.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/vue/vue.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/vue/vue-resource.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/login.js"></script>

</body>
</html>