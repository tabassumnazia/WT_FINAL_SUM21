<?php 
     
          include 'User_Header.php';
		  include 'controllers/UserController.php';
            $History = getHistory();
?>
          
   

<div class="center">
    <h3 class="text">Booking History</h3>
    <table class="table table-striped">
        <thead>
            <th>Clinet Name</th>
            <th>Client Email</th>
            <th>Client Phone Number</th>
            <th>Event Date</th>
            <th>Photographer Name</th>
            <th>Query Section</th>
            
            
        </thead>
        <tbody>
            <?php
                
                foreach($History as $h){
                    echo "<tr>";
                      
                        
                        echo "<td>".$h["name"]."</td>";
                        echo "<td>".$h["email"]."</td>";
                        echo "<td>".$h["num"]."</td>";
                        echo "<td>".$h["date"]."</td>";
                        echo "<td>".$h["pname"]."</td>";
						echo "<td>".$h["message"]."</td>";
                       
                    echo "</tr>";
                    
                }
                
                
            ?>
            
            
        </tbody>
    </table>
</div>

 
     
        

<?php include 'User_footer.php';?>
      