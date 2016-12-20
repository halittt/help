
<html>
<form action ="<?php echo base_url();?>index.php/home/Logout" method="POST">
<input type="submit" value="Logout" name="logout" >
<p>Welkom op onze HelpSysteem</p> 

<a href="<?php echo base_url();?>index.php/Ticket/Index">Nieuwe ticket maken</a>

<h1>Tickets</h1>
	<table border="1">  
	      <tbody>  
	         <tr>  
	              
	            <td>Category</td> 
	            <td>Question</td> 
	            <td>Time</td>
	            <td>Action</td>
	         </tr>     
	         <?php  
	         foreach ($getquestion as $row)  
	         {  
	         ?>
	         <tr>  

	        	<td><?php echo $row->category;?></td>  
	            <td><?php echo $row->question;?></td> 
	            <td><?php echo $row->time;?></td>
	            <td><a href="<?php echo base_url();?>index.php/Ticket/Delete/<?php echo $row->id?>">Delete</a></td>
			 </tr>  
	         <?php } ?>  
	         </tbody>
	</table>          

</form>
</html>