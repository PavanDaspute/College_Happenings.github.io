	
<?php
	session_start();
	require 'config.php';

	// Remove single items from cart
	if (isset($_GET['remove'])) {
        $id = $_GET['remove'];
  
        $stmt = $conn->prepare('DELETE FROM posts WHERE id=?');
        $stmt->bind_param('i',$id);
        $stmt->execute();
        header('location:teacher_index.php');
      }
?>

	
<?php
	require 'config.php';

	// Remove single items from cart
	if (isset($_GET['id'])) {
        $id = $_GET['id'];
  
        $stmt = $conn->prepare('select * FROM posts WHERE id=?');
        $stmt->bind_param('i',$id);
        $stmt->execute();
      }
?>