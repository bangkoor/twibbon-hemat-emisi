<!DOCTYPE html>
<html lang="en" >
<head>
  	<meta charset="UTF-8">
  	<title>Kalkulator Potensi Hemat Emisi</title>
  	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha512-Kx22U8IiIwSKYEPPTN6bjolK0XMhQ4ZDcOwR+GzXnoWbpyQDPKNXQfJLOt6o5MzhtXorMb0M+LptuR8h47/I5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel='stylesheet' href='./plugin/jquery-slider/css/rangeslider.css'>
	
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src='./plugin/jquery-slider/js/rangeslider.js'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha512-P80p6tohVkKfeJBb6xFNw7PAlgdY4rZWSZbLu5UtuGGiC85I0P7uuSEpes/Yvq/djrmUZ3ZiyU1295dCacFlQg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
</head>
<body>
<!-- partial:index.partial.html -->

<!--PEN HEADER-->
<header class="header">
  <h1 class="header__title">Twibbon Potensi Hemat Emisi</h1>
  <h6 id="jumlah_dukungan"></h6>
</header>
<!--PEN CONTENT     -->
<div class="content">
  <!--content inner-->
  <div class="content__inner">
    <div class="container overflow-hidden">
		
      <!--multisteps-form-->
      <div class="multisteps-form">
        <!--progress bar-->
        <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="Jarak Tempuh">Jarak Tempuh Bersepeda</button>
              <button class="multisteps-form__progress-btn" type="button" title="Kendaraan">Kendaraan yang biasa digunakan</button>
              <button class="multisteps-form__progress-btn" type="button" title="Twibbon">Unggah Foto</button>
    
            </div>
          </div>
        </div>
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <form class="multisteps-form__form">
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Berapa jauh anda bersepeda hari ini?</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-lg-10">
						<div class="range-wrap" style="text-align:center;">
							<input class="range" id="jarak" name="jarak" type="range" style="" min="0" max="100" step="1" value="0" onchange="updateTextInput(this.value);">
							
						</div>
                    </div>
					<div class="col-lg-2">
						<span style="color:white;font-size:1em" class="badge bg-primary badge-pill" id="rangeJarak">0 km</span>
					</div>
                  </div>
				  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="sebelumnya" disabled>&lt;</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="berikutnya">&gt;</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Apa kendaraan yang biasa anda gunakan?</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
					<div class="col">
						<div class="form-check">
							<label class="form-check-label">
							  <input class="form-check-input" type="radio" name="kendaraan" id="motor1" value="motor1" checked>
							  <img src="./img/motor1.png" width="200"/>
							  <span class="circle">
								<span class="check"></span>
							  </span>
							</label>
						  </div>
						  <div class="form-check">
							<label class="form-check-label">
							  <input class="form-check-input" type="radio" name="kendaraan" id="motor2" value="motor2">
							  <img src="./img/motor2.png" width="200"/>
							  <span class="circle">
								<span class="check"></span>
							  </span>
							</label>
						  </div>
					</div>
					<div class="col">
					  <div class="form-check">
						<label class="form-check-label">
						  <input class="form-check-input" type="radio" name="kendaraan" id="mobil1" value="mobil1">
						  <img src="./img/mobil1.png" width="200"/>
						  <span class="circle">
							<span class="check"></span>
						  </span>
						</label>
					  </div>
					  <div class="form-check">
						<label class="form-check-label">
						  <input class="form-check-input" type="radio" name="kendaraan" id="mobil2" value="mobil2">
						  <img src="./img/mobil2.png" width="200"/>
						  <span class="circle">
							<span class="check"></span>
						  </span>
						</label>
					  </div>
					</div>
                  </div>                  
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="sebelumnya">&lt;</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="berikutnya">&gt;</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Dapatkan Twibbon-mu!</h3>
                <div class="multisteps-form__content">
				  <div class="row">
					
						<div class="col-md-12" style="padding:20px 0 ">
						 <textarea type="text" class="form-control txtKeywords" id="txtKeyw" style="margin-bottom:10px;" rows="3" maxlength="200" placeholder="Masukkan terlebih dahulu jarak tempuh anda dengan bersepeda pada bagian sebelumnya">
						 </textarea>
						<center><button type="button" id="copyText" class="btn btn-space btn-success btn-shade4 btn-lg copyToClipboard" onclick="salinTeks()">
						<i class="icon icon-left s7-mouse"></i> Salin teks
						</button></center>
						</div>
				  </div>
                  <div class="row">
					<div class="col col-md-12">
						<div class="card" id="card1">
							<canvas id="c"></canvas>
							<div id="uploadBtn" style="margin:20px">
								<center>
									<!-- actual upload which is hidden -->
									<input type="file" id="actual-btn" hidden/>

									<!-- our custom upload button -->
									<label class="upload" for="actual-btn">Pilih foto</label>

									<!-- name of file chosen -->
									<span id="file-chosen">tidak ada foto terpilih</span>
								</center>
							</div>
							
					    </div>
						<div class="footer text-center">
							<button type="button" id="download" class="btn btn-primary btn-round" style="margin: 10px;">
								<i class="material-icons">download</i> Unduh
								</button>
						</div>
					</div>
                  </div>
                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="sebelumnya">&lt;</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="berikutnya" disabled>&gt;</button>
                    </div>
                  </div>
				  <!-- Modal -->
			
                </div>
              </div>
              <!--single form panel-->
            </form>
			
			<center><a href="#metode" data-toggle="modal" data-target="#metode">Metode perhitungan</a></center>
			<center><small><span>made by <a href="#developer"  data-toggle="modal" data-target="#developer">Taufiq & Arif, Unit SITD PPLH IPB University</a></span></small></center>
          </div>
        </div>
      </div>
	</div>
  </div>
</div>
<!-- spinner loading -->
<div id="spinner1" class="container-fluid text-white spinner-transparan">
	<div class="row justify-content-center align-self-center" style="position:relative;top:40%">
		<div class="spinner-grow" role="status">
			<span class="sr-only">Loading...</span>
		</div>
		<div class="spinner-grow" role="status">
			<span class="sr-only">Loading...</span>
		</div>
		<div class="spinner-grow" role="status">
			<span class="sr-only">Loading...</span>
		</div>
		<div class="spinner-grow" role="status">
			<span class="sr-only">Loading...</span>
		</div>
		<div class="spinner-grow" role="status">
			<span class="sr-only">Loading...</span>
		</div>
		<div class="col-12 text-center"><h3>Mohon tunggu, sistem sedang mengunggah gambar</h3></div>
	</div>
</div>

<!-- modal metode perhitungan -->
<div class="modal fade" id="metode" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Metode Perhitungan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
		Pendugaan potensi emisi dihitung dengan asumsi jika peserta menggunakan kendaraan bermotor. Emisi CO<sub>2</sub> dihitung menggunakan metode Tier-1 sesuai dengan Pedoman Penyelenggaraan Inventarisasi Gas Rumah Kaca Nasional (KLH 2012). Jumlah jarak tempuh berdasarkan bahan bakar diasumsikan berdasarkan hasil penelitian Zulfikri & Maemunah (2010), Saharuna (2017), dan Manorek <i>et al.</i> (2018).
		</p>
		<p><strong>Daftar Pustaka</strong></p>
		<p>[KLH] Kementerian Lingkungan Hidup. 2012. Pedoman Penyelenggaraan Inventarisasi Gas Rumah Kaca Nasional. Buku II - Volume 1 Metodologi Perhitungan Tingkat Emisi Gas Rumah Kaca Kegiatan Pengadaan dan Penggunaan Energi. Jakarta (ID): KLH RI.</p>
		<p>Manorek DW, Rante J, Patras A. 2018. Perancangan dan pengukuran jarak tempuh motor injeksi menggunakan mikrokontroler. Jurnal Realtech 14(2):110-115.</p>
		<p>Saharuna. 2017. Perbandingan konsumsi bahan bakar sepeda motor sistem konvensional dan sistem EFI. Jurnal Teknik Mesin Teknologi 19(1):34-42.</p>
		<p>Zulfikri dan Maemunah S. 2010. Kajian konsumsi BBM pengguna kendaraan pribadi roda empat di JABODETABEK. Warta Penelitian Perhubungan 22(5):513-526.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- modal metode perhitungan -->
<div class="modal fade" id="developer" tabindex="-1" role="dialog" aria-labelledby="modalLabel1 aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel1">Pembuat Aplikasi Twibbon Hemat Emisi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<h6>Made by</h6>
	  	<h5><a href="https://pplh.ipb.ac.id/team/taufiq-yuliawan/" target="blank">Taufiq Yuliawan</a></h5>
		<h5><a href="https://akwijayanto.com/" target="blank">Arif Kurnia Wijayanto</a></h5>
		<hr>
		<h6>Made with</h6>
			<p><a href="https://jquery.com/" target="blank">jQuery</a></p>
			<p><a href="https://getbootstrap.com/" target="blank">Bootstrap</a></p>
			<p><a href="https://rangeslider.js.org/" target="blank">rangeslider.js</a></p>
			<p><a href="https://sweetalert2.github.io/" target="blank">sweetalert2</a></p>
			<p><a href="http://fabricjs.com/" target="blank">Fabric.js</a></p>
			<p><a href="https://github.com/eligrey/FileSaver.js/" target="blank">FileSaver.js by eligrey</a></p>
			<p><a href="http://purl.eligrey.com/github/canvas-toBlob.js/blob/master/canvas-toBlob.js" target="blank">canvas-toBlob.js by eligrey</a></p>
			<p><a href="https://analytics.google.com" target="blank">Google Analytics</a></p>
			<p><a href="https://code.visualstudio.com/" target="blank">Visual Studio Code</a></p>
			<p><a href="https://www.mysql.com/" target="blank">MySQL</a></p>
		<p></p>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- partial -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W2BGEH1XLB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-W2BGEH1XLB');
</script>
<script  src="./script.js"></script>
<!-- twibbon -->
  <script src="fabric.min.js"></script>
    <script src="FileSaver.js"></script>
    <script src="canvas-toBlob.js"></script>

<script type="text/javascript">
$('input[type="range"]').rangeslider({

  // Default options
  polyfill: false,
  rangeClass: 'rangeslider',
  fillClass: 'rangeslider__fill',
  handleClass: 'rangeslider__handle',

  // callbacks
  onInit: function() {},
  onSlide: function() {},
  onSlideEnd: function() {}

});

$(document).ready(function(){
    $("#card1").css("center-block")   
});
</script>
<script type="text/javascript">
function updateTextInput(val) {
    $("#rangeJarak").text(val+" km");
}
const actualBtn = document.getElementById('actual-btn');

const fileChosen = document.getElementById('file-chosen');

actualBtn.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
})
</script>
<script>
	function salinTeks() {
  /* Get the text field */
  var copyText = document.getElementById("txtKeyw");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  //alert("Berhasil disalin!");
  Swal.fire('Great!', 'Teks berhasil disalin', 'success');
}
</script>
<script>
  	$("c").outerHeight($(window).height()-$("c").offset().top- Math.abs($("c").outerHeight(true) - $("c").outerHeight()));
    $(window).on("resize", function(){         				$("c").outerHeight($(window).height()-$("c").offset().top- Math.abs($("c").outerHeight(true) - $("c").outerHeight()));
    });
</script>
<script type="text/javascript">
		document.getElementById("uploadBtn").onchange = function () {
			//untuk mengaktifkan spinner
			let x = document.getElementById("spinner1");
        	x.style.display = "block";

			//hapus image
			let object = canvas.getActiveObject();
			canvas.remove(object);

			document.getElementById("uploadFile").value = this.files[0].name;
		};
		var canvas = new fabric.Canvas('c');
		var ctx = canvas.getContext('2d');
		var img = new Image();
		
		canvas.setWidth(500);
		canvas.setHeight(500);
		
		var canvasWrapper = document.getElementById('c');
		var canvasWrapperWidth = canvasWrapper.clientWidth;
		$(function () {
			$(":file").change(function () {
				if (this.files && this.files[0]) {
					var reader = new FileReader();
					reader.onload = imageIsLoaded;
					reader.readAsDataURL(this.files[0]);
				}
			});
		});
		
		var isi_tulisan = 'dengan bersepeda, hari ini saya menghemat';
		var isi_tulisan2 = 'potensi emisi CO2 sebesar ...kg*';
		//str.substring(17, 18);
		
		// load image
		fabric.Image.fromURL('./img/twibbon-emisi-transparan.png', function (img) {
			img.scaleToWidth(canvas.getWidth());
			

			// create text --> ini nanti yang bisa diubah dinamis dari function kalkulator emisi
			
			var text1 = new fabric.Text(isi_tulisan, {
				left: 25,
				top: 350,
				fontSize: 20,
				fontFamily: 'Arial',
				fill: 'white'
			});
			
			var text2 = new fabric.Text(isi_tulisan2, {
				left: 25,
				top: 375,
				fontSize: 20,
				fontFamily: 'Arial',
				fill: 'white'
			}).setSubscript(17, 18);
			
			// add image and text to a group
			var group = new fabric.Group([img, text1, text2], {
				left: 0,
				top: 0
			});
			
			// add the group to canvas
			canvas.setOverlayImage(group, canvas.renderAll.bind(canvas));
		});
		canvas.selection = false;
		function imageIsLoaded(e) {
			fabric.Image.fromURL(e.target.result,function(img){
				var aspectRatio = 500/500;
				var factor = 500 / img.width;
				img.set({
					scaleX: factor,
					scaleY: factor 
				});
				canvas.add(img);
				canvas.item(0).set({
					borderColor: 'gray',
					cornerColor: 'black',
					cornerSize: 70,
					borderScaleFactor: 10,
					hasBorders: true,
					
					rotatingPointOffset:200,
					padding:60, 
					transparentCorners: true
				});
				canvas.setActiveObject(canvas.item(0));
				this.__canvases.push(canvas);
				canvas.sendToBack(img);
			});

			//menonaktifkan spinner
			let x = document.getElementById("spinner1");
        	setTimeout(function() {
				x.style.display = "none";
			}, 5000);
			
		};

		//bikin nama file
		var d = new Date();
        var namaIMG = d.toLocaleString();
        namaIMG=namaIMG.replace("/", "");
        namaIMG=namaIMG.replace("/", "");
        namaIMG=namaIMG.replace(" ", "");
        namaIMG=namaIMG.replace(",", "");
        namaIMG=namaIMG.replace(":", "");
        namaIMG=namaIMG.replace(":", "");
        namaIMG=namaIMG.replace(" AM", "");
        namaIMG=namaIMG.replace(" PM", "");

		$("#download").click(function(){
			if(!!dataObject.entries().next().value){
				if( document.getElementById("actual-btn").files.length == 0 ){
					Swal.fire('Oops...', 'Maaf, mohon masukkan foto terlebih dahulu', 'error');
				} else {
					$("#c").get(0).toBlob(function(blob){
						saveAs(blob, "PPLH-"+namaIMG+".png");
						dataObject.append('gbr', blob, "PPLH-"+namaIMG+".png");
							$.ajax({
							url: "data/crud_edit.php?function=addData",
							type: "post",
							data: dataObject,
							processData: false,
							contentType: false,
							success: function (data,status,xhr) {   // success callback function
								console.log("sukses");
							},
							error: function (jqXhr, textStatus, errorMessage) { // error callback 
								console.log(errorMessage);
							}
						});
					});
				}
				
			} else {
				Swal.fire('Oops...', 'Maaf,  mohon isi data jarak atau kendaraan terlebih dahulu', 'error');
			}
			
		});
</script>

		<script>
		var dataObject = new FormData();
		function hitung(){
			var jarak = $("#jarak").val();
			var kendaraan = $('input[name="kendaraan"]:checked').val();
			//alert(kendaraan);
			//hitung emisi
			let bb,emisi;
			let fe=69300;
			if (kendaraan==="mobil1") {
				bb=8.93;
			} else if (kendaraan==="mobil2") {
				bb=8.43;
			} else if (kendaraan==="motor1") {
				bb=40.15;
			} else if (kendaraan==="motor2") {
				bb=20.7;
			} else {
				bb=0;
			}
			
			let eg = jarak/bb;
			eg = eg * 5.8275/1000; //BOE
			eg = eg * 6.11 * Math.pow(10,9) * Math.pow(10,-12); //TJ
			emisi = fe*eg;
			
			dataObject.append('jr', jarak);
			dataObject.append('kr', kendaraan);
			dataObject.append('em', emisi.toFixed(2));
			
			
			let canvasWrapper = document.getElementById('c');
			let canvasWrapperWidth = canvasWrapper.clientWidth;
			let context = canvasWrapper.getContext('2d');
			context.clearRect(0, 0, canvasWrapper.width, canvasWrapper.height);
			$(function () {
				$(":file").change(function () {
					if (this.files && this.files[0]) {
						let reader = new FileReader();
						reader.onload = imageIsLoaded;
						reader.readAsDataURL(this.files[0]);
					}
				});
			});
			
			//let isi_tulisan = 'Hari ini saya menghemat CO2 '+emisi.toFixed(2)+' kg*';
			let isi_tulisan = 'dengan bersepeda, hari ini saya menghemat';
			let isi_tulisan2 = ' potensi emisi CO2 sebesar '+emisi.toFixed(2)+' kg*';
			
			var emisiSaya = 'Ayo dukung program hemat emisi dengan bersepeda dan menggunakan twibbon potensi hemat emisi. Dapatkan twibbon-nya di https://pplh.ipb.ac.id/twibbon-emisi. '+isi_tulisan+isi_tulisan2+'  #hematEmisi #IPBVirtualGowes2021'
			$("#txtKeyw").val(emisiSaya);
			
			// load image
			fabric.Image.fromURL('./img/twibbon-emisi-transparan.png', function (img) {
				img.scaleToWidth(canvas.getWidth());
				
				// create text --> ini nanti yang bisa diubah dinamis dari function kalkulator emisi
				
				let text1 = new fabric.Text(isi_tulisan, {
					left: 25,
					top: 350,
					fontSize: 20,
					fontFamily: 'Arial',
					fill: 'white'
				});
				
				let text2 = new fabric.Text(isi_tulisan2, {
					left: 25,
					top: 375,
					fontSize: 20,
					fontFamily: 'Arial',
					fill: 'white'
				}).setSubscript(17, 18);
				
				// add image and text to a group
				let group = new fabric.Group([img, text1, text2], {
					left: 0,
					top: 0
				});
				
				// add the group to canvas
				canvas.setOverlayImage(group, canvas.renderAll.bind(canvas));
			});
			canvas.selection = false;
			function imageIsLoaded(e) {
				let object = canvas.getActiveObject();
				canvas.remove(canvas.item(0));

				fabric.Image.fromURL(e.target.result,function(img){
					var aspectRatio = 500/500;
					var factor = 500 / img.width;
					img.set({
						scaleX: factor,
						scaleY: factor 
					});
					canvas.add(img);
					canvas.item(0).set({
						borderColor: 'gray',
						cornerColor: 'black',
						cornerSize: 70,
						borderScaleFactor: 10,
						hasBorders: true,
						
						rotatingPointOffset:200,
						padding:60, 
						transparentCorners: true
					});
					canvas.setActiveObject(canvas.item(0));
					this.__canvases.push(canvas);
					canvas.sendToBack(img);
				});
			};
		}
	</script>
	<script>
		$('#jarak').on('change', function() {
			hitung();
		});
		$('input[name="kendaraan"]').on('click change', function() {
			hitung();
		});
		$( document ).ready(function() {
			$.ajax({
					url: "data/crud_edit.php?function=getData",
					type: "post",
					data: {ignore:"0"},
					success: function (data,status,xhr) {
						let result = data[0];
						
						if (result.pendukung && result.total_jarak && result.total_emisi) {
							let msg = "Sampai saat ini terdapat "+result.pendukung+" pendukung, dengan total jarak gowes "+result.total_jarak+" km, dan telah menghemat potensi emisi sebesar "+result.total_emisi+" kg";
							$('#jumlah_dukungan').text(msg);
						} else {
							$('#jumlah_dukungan').text('');
						}	
					},
					error: function (jqXhr, textStatus, errorMessage) { // error callback 
						console.log(errorMessage);
					}
			
			});
		});
		
		
	</script>
</body>
</html>