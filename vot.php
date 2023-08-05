<?php include('server-post.php') ?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
<head>
  <title>Votează!</title>
  <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
  <div class="header">
  	<h2>Vot</h2>
  </div>
	
  <form method="post" action="post.php" enctype="multipart/form-data">
  	<?php include('errors.php'); ?>
	<div class="input-group">
		<label for="pictures">Introdu data de naștere</label> 
		<input type="date" id="birth" name="birth"/>
	</div>
	<div class="input-group">
  	  <label>Primar</label>
		<label for="primarie">
                    <select id="primarie" name="primarie">
                    <?php 
                      include("database.php");
                      $query ="SELECT resedinta_nume FROM resedinte";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                        $options= mysqli_fetch_all($result, 1);} ?>
                     
                      <?php 
                        foreach ($options as $option) {
                      ?>
                      <option><?php echo $option['resedinta_nume'];
					  $resedinta = $option['resedinta_nume'];?> </option>
                      <?php 
                        }
                      ?> 
                    </select>
        </label>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="post_user">Postează</button>
		<a class="btn" href="index.php">Acasă</a>
	</div>
  </form>
</body>
</html>