
<html>
<form action ="<?php echo base_url();?>index.php/User/Logout" method="POST">
<input type="submit" value="Logout" name="logout" >
<p>Welkom op onze HelpSysteem</p> 

<a href="<?php echo base_url();?>index.php/Ticket/Index">Nieuwe ticket maken</a>

<h1>Tickets</h1>
<?php
print_r($tickets);
?>



</form>
</html>