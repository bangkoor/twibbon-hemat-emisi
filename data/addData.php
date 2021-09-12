<?php
	$hostname = "DBADDRESS";
	$database = "DBNAME";
	$username = "DBUSERNAME";
	$password = "DBPASSWORD";
	$connect = mysqli_connect($hostname, $username, $password, $database);

	// cek koneksi   
	if (!$connect) {
		die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
	}

	if(function_exists($_GET['function'])) {
			 $_GET['function']();
	}
	
	function tmbhems()
      {
         global $connect;   
         //$check = array('jarak' => '', 'kendaraan' => '', 'emisi' => '', 'gambar' => '');
         //$check_match = count(array_intersect_key($_POST, $check));
         //if($check_match == count($check)){
			$jarak = $_POST["jr"];
			$kendaraan = $_POST["kr"];
			$emisi = $_POST["em"];
			//$image = $_FILES['gbr']['tmp_name']);
			$imgData = addslashes(file_get_contents($_FILES['gbr']['tmp_name']));
			$imageProperties = getimageSize($_FILES['gbr']['tmp_name']);
			//$sql = "INSERT INTO output_images(imageType ,imageData) VALUES('{$imageProperties['mime']}', '{$imgData}')";
			$sql1 = "INSERT INTO twibbon_emisi(jarak,kendaraan,emisi,imageType, imageData) VALUES('$jarak','$kendaraan','$emisi','{$imageProperties['mime']}', '{$imgData}')";
            $result = mysqli_query($connect, $sql1);
            
		   if($result) {
			  $response=array(
				 'status' => 1,
				 'message' =>'Insert Success'
			  );
		   }
		   else {
			  $response=array(
				 'status' => 0,
				 'message' =>'Insert Failed.'
			  );
		   }
		 /*  
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Wrong Parameter'
                  );
         }
		 */
         header('Content-Type: application/json');
         echo json_encode($response);
		 //echo $sql1;
      }

?>