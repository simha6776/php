<?php
	if(isset($_FILES['fileToUpload']))
	{
		$target_path="C:Lab/";
		$target_path=$target_path.basename($_FILES['fileToUpload']['name']);
		if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_path))
		{
			echo "File Upload Successfully";
		}
		else
		{
			echo"Sorry,File not uploaded.";
		}
	}
?>