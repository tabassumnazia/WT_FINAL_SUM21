<script src="JS/User.js"></script>
<?php 
     
          include 'User_Header.php';
          include 'controllers/UserController.php';
        
?>
 <html>
  <head>
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

    <div class="center">
    <h3 class="text">Search</h3>
    <input type="text" class="form-control" onkeyup="search(this)" placeholder="Search" size="80">
    </br>
    </br>
    <div id="search-result">
    </div>
    </body>
	</html>
    <?php include 'User_footer.php';?>