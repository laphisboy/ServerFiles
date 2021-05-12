<?php
	$file_path = "./uploads/";
	$file_path = $file_path.basename($_FILES['uploaded_file']['name']);

	if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
		echo "success";
	} else {
		echo "fail\n";
		echo "$file_path";
		echo $_FILES['uploaded_file'];

		echo $_FILES['uploaded_file']['name'];
		echo $_FILES['uploaded_file']['tmp_name'];
	}

?>
