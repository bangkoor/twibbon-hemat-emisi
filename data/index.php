<?php
    require_once "condb.php";
	global $connect;
    $sql = "SELECT id, ROUND(jarak,0) as jrk, kendaraan, ROUND(emisi,2) as ems FROM twibbon_emisi ORDER BY ems DESC"; 
    $result = mysqli_query($connect, $sql);
?>
<HTML>
<HEAD>
<TITLE>List Pendukung IPB Virtual Gowes 2021</TITLE>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha512-P80p6tohVkKfeJBb6xFNw7PAlgdY4rZWSZbLu5UtuGGiC85I0P7uuSEpes/Yvq/djrmUZ3ZiyU1295dCacFlQg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha512-Kx22U8IiIwSKYEPPTN6bjolK0XMhQ4ZDcOwR+GzXnoWbpyQDPKNXQfJLOt6o5MzhtXorMb0M+LptuR8h47/I5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
</HEAD>
<BODY>
<div class="container">
  <h4 style="margin: 20px; text-align: center;">Daftar Pendukung IPB Virtual Gowes 2021</h4>
</div>
<div class="container">
  <div class="row">
    <div class="col-12">
		<table id="tabel1" class="table table-image">
		  <thead>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Jarak Gowes (km)</th>
		      <th scope="col">Kendaraan yang biasa digunakan</th>
		      <th scope="col">Potensi Emisi yang dihemat</th>
		      <th scope="col">Image</th>
		    </tr>
		  </thead>
		  <tbody>
			<?php
				while($row = mysqli_fetch_array($result)) {
					$kendaraan;
					switch ($row["kendaraan"]) {
					  case "motor1":
						$kendaraan="Sepeda Motor <150cc";
						break;
					  case "motor2":
						$kendaraan="Sepeda Motor >150cc";
						break;
					  case "mobil1":
						$kendaraan="Mobil <2000cc";
						break;
					  case "mobil2":
						$kendaraan="Mobil >2000cc";
						break;
					  default:
						$kendaraan="-";
					}
					
					echo '<tr>';
					echo '<th scope="row">'.$row["id"].'</th>';
					echo '<td>'.$row["jrk"].'</td>';
					echo '<td>'.$kendaraan.'</td>';
					echo '<td>'.$row["ems"].'</td>';
					echo '<td class="w-25"><a id="single_image" data-fancybox="images" href="imageView.php?id='.$row["id"].'"><img src="imageView.php?id='.$row["id"].'" class="img-fluid img-thumbnail"/></a></td>';
					//echo '<td class="w-25"><img src="imageView.php?id='.$row["id"].'" class="img-fluid img-thumbnail" alt="Sheep"></td>';
					echo '</tr>';
				}
				mysqli_close($connect);
			?>
		  </tbody>
		</table>   
    </div>
  </div>
</div>

<script>
	$(document).ready(function() {
		$('#tabel1').DataTable({
			"order": [[ 4, "desc" ]]
		});
		$('[data-fancybox="images"]').fancybox({
			afterLoad : function(instance, current) {
				var pixelRatio = window.devicePixelRatio || 1;

				if ( pixelRatio > 1.5 ) {
					current.width  = current.width  / pixelRatio;
					current.height = current.height / pixelRatio;
				}
			}
		});
	} );
</script>

</BODY>
</HTML>