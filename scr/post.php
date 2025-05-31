<?php
include_once 'connection/db_connection.php';
if(isset($_POST['submit']))
{	 
    $post = $_POST['post'];
    $datetime = date("Y-m-d H:i:s");
	 $sql = "INSERT INTO post (post,datetime)
	 VALUES ('$post','$datetime')";
	 if (mysqli_query($connection, $sql)) {
        echo
        "<script>
        alert('Successfully Post!!');
        document.location.href = 'announcement.php';
        </script>
        ";
	 } 
    else {
		echo "Error: " . $sql . "
" . mysqli_error($connection);
	 }
	 mysqli_close($connection);
    }
?>