<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Berat Badan Ideal</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/icon.css">
</head>

<style>
	/* label color */
   .input-field label {
     color: #ffffff;
   }
   /* label focus color */
   .input-field input[type=text]:focus + label{ 
     color: #ffffff !important;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #ffffff !important;
     box-shadow: 0 1px 0 0 #ffffff !important;
   }
   /* valid color */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #ffffff !important;
     box-shadow: 0 1px 0 0 #ffffff !important;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #ffffff !important;
     box-shadow: 0 1px 0 0 #ffffff !important;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #ffffff !important;
   }
</style>
<body>

<?php
if(isset($_POST['ok'])){
$nama = $_POST["nama"];
$jk = $_POST["jk"];
$tinggi = $_POST["tinggi"];
$berat = $_POST["berat"];
?>

	<div class="container">
		<div class="row center">
			<h1>Berat Badan Ideal</h1>
			<hr>
		</div>
		<div class="container">
			<div class="row">
	        <div class="col s12 m12">
	          <div class="card teal">
	            <div class="card-content white-text">
	              <h4>Hai <?php echo strtoupper($nama);?></h4>
	              	<h5>Hitungan 

<!--SELECT JENIS KELAMIN-->
						<?php
						    if($jk == "p"){ 
								$bbideal = ($tinggi-100)-(10/100*($tinggi-100));
								?>
						      Berat Badan Ideal anda adalah
						<?php } 
						    else if($jk == "w"){
						    $bbideal = ($tinggi-100)-(15/100*($tinggi-100)); 
						    ?>

						      Berat Badan Ideal anda adalah
						<?php } 
						    else if(!empty($jk)){?>
						      Cek kembali Formnya
					</h5>
						<?php } ?>
					<h4>
						<b>
							Tinggi Badan anda : <?php echo $tinggi;?> CM<br>
							Berat Badan anda : <?php echo $berat;?> KG<br>
							Berat Badan Ideal anda : <?php echo $bbideal;?> KG<br>
							
						</b>
					</h4>
          
        </div>
          <div class="card-action">
            <a href="">
              <button class="btn waves-effect waves-light teal lighten-2">Back
                <i class="material-icons right">send</i>
              </button>
            </a>
          </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--END TAMPIL DAN REPEAT KE HALAMAN INDEX-->
<?php } else { ?>

	<div class="container">
		<div class="row center">
			<h1>Berat Badan Ideal</h1>
			<hr>
		</div>
		<div class="container">
			<div class="row">
	        <div class="col s12 m12">
	          <div class="card teal">
	            <div class="card-content white-text">
	             <!--  <span class="card-title">asdad</span> -->
	              <div class="row">
				    <form class="col s12" method="post">
				      <div class="row">
				        <div class="input-field col s6 m6">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="icon_prefix" type="text" name="nama" class="validate">
				          <label for="icon_prefix white-text">Nama</label>
				        </div>
				        <div class="input-field col s6 m6">
				        	<i class="material-icons prefix">wc</i>
						    <select class="icons" name="jk">
						      <option value="" disabled selected>Jenis Kelamin</option>
						      <option value="p" data-icon="img/male.jpg" class="left circle">Pria</option>
						      <option value="w" data-icon="img/female.jpg" class="left circle">Wanita</option>
						    </select>
						 
						</div>
				      </div>
				      <div class="row s12">
				      	<div class="input-field col s6 m6">
				          <i class="material-icons prefix">accessibility</i>
				          <input id="icon_telephone" type="text" name="tinggi" class="validate">
				          <label for="icon_telephone white-text">Tinggi Badan</label>
				        </div>
				        <div class="input-field col s6 m6">
				          <i class="material-icons prefix">poll</i>
				          <input id="icon_telephone" type="text" name="berat" class="validate">
				          <label for="icon_telephone white-text">Berat Badan</label>
				        </div>
				      </div>
				      <div class="card-action">
			              <button class="btn waves-effect waves-light teal lighten-2" name="ok" type="submit">OK
			                <i class="material-icons right">send</i>
			              </button>
          			  </div>
				    </form>
  				  </div>
	            </div>
	          </div>
	        </div>
      </div>
		</div>
		
            
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script>
		 $(document).ready(function() {
    $('select').material_select();
  });
	</script>
</body>
</html><?php } ?> 