<?php 
          include 'User_Header.php'; 
          include 'controllers/UserController.php';
	   
 ?>
 
 <html>
       <head>
         <title>Payment option</title>
     </head>

       <body>
	   	    <form method="Post"action=""style="
   background: rgb(0,0,0,0.4);;
   width: 40%;
   margin: 150px auto;
  padding: 20px 0;
   border-radius: 15px;
    box-shadow: 5px 5px 8px gray;
          ">
  
              <form action="" method="post"  enctype="multipart/form-data">
                	  <table align="center">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h2>Payment</h2>
								   </b>
								 </td>
                             </tr>
							 
							 
							 <tr>
                              <td>
                              	<span>
                              		<?php echo $err_db;?>	
                              	</span>
                              </td>
                            </tr>
							 
							
                	  	      <tr>
                	  	     	 <td><b> Photographer’s name </b></td>
                	  	     	 <td><input type="text" name="name" value="<?php echo $name; ?>" size="40"></td>	
                              </tr>
							    
							  <tr> 
							  <td></td>
								 <td><span><?php echo $err_name;?></span></td> 
      	    	              </tr>
							  
							  <tr>
                	  	     	 <td><b> Photographers email </b></td>
                	  	     	 <td><input type="text" name="email" value="<?php echo $email; ?>" size="40"></td>	
                              </tr>
							  <tr>  
							  <td></td>
								 <td><span><?php echo $err_email;?></span></td> 
      	    	              </tr>
							  
							  <tr>
                	  	     	 <td><b> Photographer’s number</b></td>
                	  	     	 <td><input type="text" name="num" value="<?php echo $num; ?>" size="40"></td>	
                              </tr>
							  <tr>  
							     <td></td>
								 <td><span><?php echo $err_num;?></span></td> 
      	    	              </tr>
							  
							  <tr>
                	  	     	 <td><b>Event time or date</b></td>
                	  	     	 <td><input type="text" name="date" value="<?php echo $date; ?>" size="40"></td>	
                              </tr>
							  <tr>
							     <td></td>
								 <td><span><?php echo $err_date;?></span></td> 
      	    	              </tr>
                	  	     
							 
							  <tr>
                	  	     	 <td><b>Event cost</b></td>
                	  	     	 <td><input type="text" name="cost" value="<?php echo $cost; ?>" size="40"></td>	
                              </tr>
							  <tr>
							     <td></td>
       							 <td><span><?php echo $err_cost;?></span></td> 
      	    	              </tr>
							  
							  <tr>
                	  	     	 <td><b> Payment method </b></td>
                	  	     	 <td> <textarea  cols="38" rows="3" name="method"  size="40"><?php echo $method; ?></textarea></td>
                              </tr>
							  <tr>	
							     <td></td>					 
                                 <td><span><?php echo $err_method;?></span></td> 
      	    	              </tr>
                	  	     
							
                             <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="payment" value="Confirm">
							   </td><br>
					        </tr>
							 
							
                	  </table>
                </form> 
 
  </body>
 <html>
 
 <?php include 'User_Footer.php';?>
 