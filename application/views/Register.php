<html>
<head>
<title>Codeigniter Login Logout Example</title>
<style>
	#Form_data
	{
		
    position: relative;
    left: -5px;
    top: 235px;
    width: 204px;
    margin: 0px auto;
    text-align: left;
    padding: 20px;
    background-color: #ffffff;
    color: #333;
    border: 1px solid #e5e5e5;
    box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;

	}
	.buttons
	{
		border-color: #3ac162 !important;
		color: #fff;
		background-color: #5fcf80 !important;
	}
</style>
</head>

<body>
<form action ="<?php echo base_url();?>index.php/User/Save" method="POST">
<div id="Form_data">
<label><b>HelpSysteem Login</b></label></br></br>
<label style="color:#555">Email</label><br/>
<input type="text" name="email" id="email"></br></br>
<label style="color:#555">Wachtwoord</label><br/>
<input type="password" name="password" id="password"></br></br>
<input type="submit" value="Registeren" class="buttons" name="Register" >
<input type="reset" id="reset" class="buttons"> 
<p><a href="<?php echo base_url();?>index.php/User/">Login</a></p> 
</div>
</form>
</body>
</html>