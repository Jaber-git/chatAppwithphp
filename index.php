
<?php
include 'db.php';

?>

<html>
   <head>
   <title> Chaat App</title>
  <link rel="stylesheet" href="style.css"/>
	  <script>
	  function ajax(){
		  var req = new XMLHttpRequest();
		  req.onreadystatechange = function(){
		  if(req.readyState == 4 && req.status ==200){
		   document.getElementById("chat").innerHTML=req.responseText;
		     }
		  };
		  req.open('GET','chat.php',true);
		  req.send();
	  }
	  </script>
   </head>
	<body onload="ajax();">
	  <div id="container">  
	     <div id="chat-box">
		  <div id="chat"> </div>
		  </div>
	     <form action="index.php" method="post">
		 
		 <input type="text" name="name" placeholder="Enter name" />
            <textarea name="msg" placeholder="Enter message">
			
			</textarea>
			<input type="submit" name="submit" value="send it" />
             
		 </form>
		 <?php
		 if(isset($_POST['submit'])){
			 $name=$_POST['name'];
			 $msg=$_POST['msg'];
		 $query="INSERT INTO chatdata (name,msg) VALUES('$name','$msg')";
		 
		 $run= $con->query($query);
		 
		 if($run){
			 echo '<embed loop="false" src="chat.wav" hidden="true" autoplay="true" /> ';
		   }
		 }
		 ?>
		 
	  
	  </div>
	
	</body>


</html>