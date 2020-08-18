
      <?php
 
       include 'db.php';
 
		    $query="SELECT * FROM chatdata order by id desc";
		    $run = $con->query($query)  or die("Last error: {$con->error}\n");
			
			while($row = $run->fetch_array()):
         ?>
		    
			<div id="chat-data">
			
			  <span style= "color:green;"><?php echo $row['name'].':'; ?> </span>
			  <span style= "color:brown;"> <?php echo $row['msg']; ?> </span>
			  <span  style= "float:right;"><?php echo  formateDate($row['date']); ?> </span>
			
			
			</div>
			<?php endwhile; ?>