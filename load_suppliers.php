<DOCTYPE html>
<html>
	<head>
    <?php include('cdn.html');?>	

	<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
  <style>
     
		 
		 body {
           font-family: 'Chakra Petch', sans-serif;
           font-size: 13px;
            font-weight: 400;
            color: #4f5d6e;
             position: relative;
            background: rgb(26, 119, 149);
				  margin: 0;
	            padding: 0; 
	            
             }

            .body-wrap {
              min-height: 700px;
            }
            
            .body-wrap {
              position: relative;
              z-index: 0;
            }

            .body-wrap:before,
            .body-wrap:after {
              content: '';
              position: absolute;
              top: 0;
              left: 0;
              right: 0;
              z-index: -1;
              height: 260px;
              
            }
            
            .body-wrap:after {
             top: auto;
             bottom: 0;
             }
            
             nav {
             margin-top: 60px;
             box-shadow: 5px 4px 5px #000;
			 position: fixed;
             }
			 
			 #division{
				       
						margin:50px;
						width:250px;
						height:250px;
						background:white;
						font-size:30px;
						font-weight:bold;
						
						padding-top:100px;
						padding-left:60px;
			      
			 }
			 
			 .occupy{
				 margin-top:100px;
				 margin-left:150px;
				 
				 
			 }
			 </style>    
	</head>
	<body >
      
	<?php include('navbar.html');?>

	   <div class="container occupy">
	   <div class="suppliers">
	       <div class="row">
			<a href="index1.php"><div id="division" class="col-lg-3 col-md-3 col-sm-3">Supplier1</div></a>
			<a href="index1.php"><div id="division" class="col-lg-3 col-md-3 col-sm-3">supplier2</div></a>
		 
			<a href="index1.php"><div id="division" class="col-lg-3 col-md-3 col-sm-3">supplier3</div></a>
			</div>
			
			<div class="row">
			<a href="index1.php"><div id="division" class="col-lg-3 col-md-3 col-sm-3">supplier4</div></a>
			<a href="index1.php"><div id="division" class="col-lg-3 col-md-3 col-sm-3">supplier5</div></a>
			<a href="index1.php"><div id="division" class="col-lg-3 col-md-3 col-sm-3">supplier6</div></a>
			</div>
			
	   </div>
	   </div>
	
	   	
	
	 </body>


</html>