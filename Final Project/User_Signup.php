<script src="JS/User_Signup.js"></script>	
    
<?php  include 'controllers/UserController.php'; ?>
	
<html>
  <head> 
     <style>
	    body{
         background-image:url(img1.jpg);
         background-position:justify;
         background-repeat: no-repeat;
        background-size: 1680px 1080px;
        color:white;
		  text-align:center;
		  font-family: ageo;
          font-size: 16px;
	  }
	  
	   </style>
	<title>User SignUp</title>
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

 
                 <form action="" method="post">
                	  <table align="center">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h2>Sign up</h2>
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
                              <td>
                                   <b> Name  </b> 
                              </td>
							  <td>
                                  <input type="text" placeholder="Name" name="name" value="<?php echo $name; ?>" size="40">
                              </td>
							  </tr>
							 
                             <tr>
							 <td>
							 </td>
                              <td>
                              	<span>
                              		<?php echo $err_name;?>	
                              	</span>
                              </td>
                            </tr>
							 
							 </tr>
                	  	     <tr>
                	  	     	 <td>
								    <b>Email</b>
								</td>
                	  	     	 <td>
                                    <input type="text" onfocusout="checkEmail(this)" placeholder="Email" name="email" value="<?php echo $email; ?>" size="40">
                                 </td>
								 </tr>
							 
                                 <tr>
								 <td>
								 </td>
                                 <td>
                                    <span id="err_email">
                                        <?php echo $err_email;?>    
                                    </span>
                                 </td> 
      	    	            </tr>
                	  	     
							 
							  <tr>
                             <td>
							     <b>Gender</b>
							 </td>
							 <td>
							 
                                  <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"?> > Male 
                                  <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"?> > Female
                            </td>
							 </tr>
							 
                             <tr>
							 <td>
							 </td>
                             <td>
                                <span><?php echo $err_gender;?></span>
                            </td>
                              </tr>
							  
							  
                           <tr>
                            <td>
							<b>Address</b>
							</td>
							<td>
      	    	   	   	       <select name="Address">
      	    	   	   	   	       <option selected disabled>Address</option>
								  <?php
								  foreach($Address as $a)
								  {
								  	if($add == $a)
								  		echo "<option selected>$a</option>" ;
								  	else
								  		echo "<option>$a</option>";
								  }
								  ?>
      	    	   	   	        </select>
      	    	   	             </td>
								  </tr>
							 
                                 <tr>
                                 <td>
							     </td>								 
      	    	   	              <td>
                              	<span>
                              	   <?php echo $err_add;?>
                              	</span>
                            </td>  
                            </tr>
							
							

                	  	     <tr>
                	  	     	 <td>
								    <b>Password<b>
								</td>
							    <td>
      	    	   	   	           <input type="Password" placeholder="Password" name="password" value="<?php echo $pass;?>" size="40">
      	    	   	            </td>
                             </tr>
							 
                             <tr>
							 <td>
							 </td>
      	    	   	            <td>
      	    	   	   	             <?php echo $err_pass;?>
      	    	   	            </td>
      	    	            </tr>
							 
							 <tr>
                	  	     	 <td>
								   <b>Confirm Password</b>
								 </td>
                	  	
							 <td>
      	    	   	   	         <input type="Password" placeholder="Confirm Password" name="confirm_password" value="<?php echo $cpass;?>" size="40">
      	    	   	         </td>
                             </tr>
							 
                             <tr>
							 <td>
							 </td>
      	    	   	         <td>
      	    	   	   	             <?php echo $err_cpass;?>
      	    	   	         </td>
                             </tr>
							 
							 
							
							 <tr>
							   <td  colspan="2">
							   <br><input type="checkbox" value="" <?php if(Service("")) echo "checked" ?> name="services[]"> I agree to the term of services<br><br>
							   </td>
							 
                              <td>
                              	<span>
                              	   <?php echo $err_services;?>
                              	</span>
                              </td>
							 </tr>
							 
                             <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="sign_up" value="SignUp">
							   </td><br>
					        </tr>
							 <tr>
                	  	     	<td align="center" colspan="2"> Do you have an account? <a href="User_login.php">Sign in </a></td>
                	  	     </tr>
							
                	  </table>
                </form>   	
   </body>
</html>