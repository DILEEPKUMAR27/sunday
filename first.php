<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>example one</title>
</head>
<body>
     <?php
        $link_name = 'second page';
    ?>
    <?php 
      $id = 2;
    ?>
   <a href="second.php?id=<?php echo $id; ?>"><?php echo $link_name; ?></a>
</body>
</html>