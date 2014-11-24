<!DOCTYPE html>
<html>
<head>
	<title>HelpMeChoose - Login</title>
	<link rel="icon" href="http://global.rakuten.com/en/favicon.ico">

<link rel="stylesheet" type="text/css" href="//weloveiconfonts.com/api/?family=zocial">
<style type="text/css">
	@charset "utf-8";/* zocial */
[class*="zocial-"]:before {
  font-family: 'zocial', sans-serif;
}



/* ---------- GENERAL ---------- */

body {

	color: #5a5656;
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
	font-size: 16px;
	line-height: 1.5em;
}

a { text-decoration: none; }

h1 { font-size: 1em; }

h1, p {
	margin-bottom: 10px;
}

strong {
	font-weight: bold;
}

.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */

#login {
	margin: 50px auto;
	width: 300px;
}




.facebook-before {
	background-color: #0064ab;
	border-radius: 3px 0px 0px 3px;
	-moz-border-radius: 3px 0px 0px 3px;
	-webkit-border-radius: 3px 0px 0px 3px;
	color: #f4f4f4;
	display: block;
	float: left;
	height: 50px;
	line-height: 50px;
	text-align: center;
	width: 50px;
	font-size: 17px;
}

.facebook {
	background-color: #0079ce;
	border: none;
	border-radius: 0px 3px 3px 0px;
	-moz-border-radius: 0px 3px 3px 0px;
	-webkit-border-radius: 0px 3px 3px 0px;
	color: #f4f4f4;
	cursor: pointer;
	height: 50px;
	text-transform: uppercase;
	width: 250px;
}

.google-before {
	background-color: #B5200E;
	border-radius: 3px 0px 0px 3px;
	-moz-border-radius: 3px 0px 0px 3px;
	-webkit-border-radius: 3px 0px 0px 3px;
	color: #f4f4f4;
	display: block;
	float: left;
	height: 50px;
	line-height: 50px;
	text-align: center;
	width: 50px;
    font-size: 17px;
}


.google {
	background-color: #dd4b39;
	border: none;
	border-radius: 0px 3px 3px 0px;
	-moz-border-radius: 0px 3px 3px 0px;
	-webkit-border-radius: 0px 3px 3px 0px;
	color: #f4f4f4;
	cursor: pointer;
	height: 50px;
	text-transform: uppercase;
	width: 250px;
}
</style>
</head>
<body>

<script type="text/javascript" src="/funtions/fb-script.js"></script>

<div id="helpmechoose_canvas" style="left:0;right:0;top:0;position:absolute;color:#333333;z-index:99999999999!important;font-family:Arial,Helvetica,sans-serif;font-size:12px;">
    <div style="-webkit-box-shadow: 0 0 9px rgba(0, 0, 0, 0.35), 0 -1px 0 rgba(0, 0, 0, 0.2);box-shadow: 0 0 9px rgba(0, 0, 0, 0.35), 0 -1px 0 rgba(0, 0, 0, 0.2);
-moz-box-shadow: 0 0 9px rgba(0, 0, 0, 0.35), 0 -1px 0 rgba(0, 0, 0, 0.2);height:90px;border-bottom:1px solid #ccc; width: 100%; z-index: 9999; left:0; position: fixed;"> 
       
        <div> 
            
            <div id="logo" style="float:center;cursor:pointer;top: 15px;left: 45%;position: fixed;margin-bottom: 0;margin-left: -66px;margin-top: 0;z-index: 6000;height: auto;width: auto;">
                <img style="width:190px;height:70px;" src="//localhost/suggestc/pluginassets/logo.png" />
            </div> 
            
            <div style="clear:both;"></div>
        </div> 
    </div> 
    <div style="margin-top:120px;"></div>
    <div class="formsContainer" style="display: block;text-align: center;">
  <!-- <div class="generalMessage"></div> -->

    <div class="loginForm" style="background: none repeat scroll 0 0 white;padding: 25px;text-align: center;width: 400px;margin: 0 auto;border: 1px solid #ccc;-moz-box-shadow: 5px 5px 8px 2px rgba(0,0,0,0.25);-webkit-box-shadow: 5px 5px 8px 2px rgba(0,0,0,0.25);box-shadow: 5px 5px 8px 2px rgba(0,0,0,0.25);border-radius: 4px;position: relative;box-sizing: border-box;">
            <div class="loginLabel" style="text-align: center;font-size: 18px;font-weight: bold;color: #555;">
              <div style="display: inline-block;"> Connect Account </div>
          </div>
    <div class="loginError"></div>
     <div id="login">

		<p>
			<a class="facebook-before"><span class="zocial-facebook"></span>


<!--     <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
    </fb:login-button> -->


      </a>
			<button class="facebook" onclick="checkLoginState();">Facebook</button>

		</p>

		<p>

			<a class="google-before"><span class="zocial-googleplus"></span></a>
			<button class="google">Google+</button>

		</p>

	</div> <!-- end login -->
      <div class="loading-overlay"></div>
    </div>


  </div>
</div>

<div>
    <div style="clear:both;"></div>
</div>

</body>
</html>