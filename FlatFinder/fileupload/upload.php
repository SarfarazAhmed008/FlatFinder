<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	
	
	// make file name in lower case
	$new_file_name = strtolower($file);

	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$final_file','$file_type','$new_size')";
		mysql_query($sql);
		?>
		<script>
		alert('Successfully uploaded');
        window.location.href='index.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('Error while uploading file');
        window.location.href='index.php?fail';
        </script>
		<?php
	}
}
?>