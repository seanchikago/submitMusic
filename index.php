<?php
$up_id = uniqid(); 
require ("db.php");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Submit Music to Malawi-Music.com  | 24HR EXPRESS UPLOAD </title>
  
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="logo.png" type=" image/png" sizes="16x16">
<<<<<<< HEAD



=======
>>>>>>> master
  
</head>

<body>
  <!DOCTYPE html>
<head>
<<<<<<< HEAD
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>                      -->
  <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>-->
  <link href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <!--<link href='https://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>-->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
<!--  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='https://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>  -->
=======
  <link href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='https://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='https://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
>>>>>>> master
  
    <script>

 //     $(document).ready(function() { 
//      //
//
//      //show the progress bar only if a file field was clicked
//        var show_bar = 0;
//          $('#song_filename').click(function(){
//          show_bar = 1;
//          });
//
//      //show iframe on form submit
//          $("#song_submit").submit(function(){
//
//          if (show_bar === 1) { 
//            $('#upload_frame').show();
//            function set () {
//              $('#upload_frame').attr('src','/upload_frame.php?up_id=<?php // echo $up_id; ?>');
//            }
//            setTimeout(set);
//          }
//          });
//      //
//
//      });

</script>

<<<<<<< HEAD
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>     -->
<!--<script>
$( document ).ready(function() {
    console.log( "ready! sit" );
});
</script>    -->


 <script type="text/javascript">
 
 
// $(document).ready(function() {
//        $("#username").keyup(function (e) {
//
//                //removes spaces from username
//                $(this).val($(this).val().replace(/\s/g, ''));
//
//                var username = $(this).val();
//                if(username.length = 4){
//                        $("#user-result").html('');
//                        //call to server via http post
//                        $.post('check_username.php', {'username':username}, function(data) {
//                                if (parseInt(data) == 1){
//                                        $("#submit").attr("disabled", false);
//                                        $("#user-result").html('');
//                                }else if (parseInt(data) == 0){
//                                        $("#submit").attr("disabled", true);
//                                        $("#user-result").html('');
//                                }
//                        });
//                }
//        });
//});


// jQuery.noConflict();
$(document).ready(function() {
 //jQuery(document).ready(function($) {
  
  //debugger;
    var x_timer;    
    $("#payphone").keyup(function (e){
        clearTimeout(x_timer);
        var user_name = $(this).val();
        x_timer = setTimeout(function(){
            check_username_ajax(user_name);
        }, 1000);
    }); 

function check_username_ajax(username){
    // alert("we in here");
    $("#user-result").html('<img src="http://www.malawi-music.com/submitMusic/ajax-loader.gif" />');
    $.post('/submitMusic/username-checker.php', {'username':username}, function(data) {
      $("#user-result").html(data);
    });
}
});
</script>

=======
>>>>>>> master
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-17492014-20"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-17492014-20');
</script>


</head>
<body>
  <div class='container'>
    <div class='panel panel-primary dialog-panel' style="border-color:#bf8231;">
      <div class='panel-heading'style="background-color:#bf8231; border-bottom-color:#bf8231;">
		<img src="logo.png" width="auto" height="40px" style="float:left;padding-right:10px;"/>
		<h4>Malawi-Music.com - Submit Song |  24HR EXPRESS SERVICE</h4>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' role='form' method='post' id='song_submit' name='song_submit' enctype="multipart/form-data">
          <!--<div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Accomodation</label>
            <div class='col-md-2'>
              <select class='form-control' id='id_accomodation'>
                <option>RV</option>
                <option>Tent</option>
                <option>Cabin/Lodging</option>
              </select>
            </div>
          </div>-->
          <div class='form-group'>
			<label class='control-label col-md-2 col-md-offset-2' for='id_title'>Artist Name</label>
			<div class='col-md-8'>
              <div class='col-md-8'>
                <div class='form-group internal'>
					<input class='form-control' id='artist_name' placeholder='Artist name' type='text' name='artist_name' required>
				</div>
			  </div>
			</div>
		  </div>
		  
          <div class='form-group'>
			<label class='control-label col-md-2 col-md-offset-2' for='id_title'>Song Title</label>
			<div class='col-md-8'>
              <div class='col-md-8'>
                <div class='form-group internal'>
					<input class='form-control' id='song_name' placeholder='Song Title (include features)...' type='text' name='song_name' required>
				</div>
			  </div>
			</div>
		  </div>		  
		  
          <div class='form-group'>
			<label class='control-label col-md-2 col-md-offset-2' for='id_title'>Producer</label>
			<div class='col-md-8'>
              <div class='col-md-8'>
                <div class='form-group internal'>
					<input class='form-control' id='producer' placeholder='Name of producer...' type='text' name='producer'>
				</div>
			  </div>
			</div>
		  </div>
		  
          <div class='form-group'>
			<label class='control-label col-md-2 col-md-offset-2' for='id_title'>Phone</label>
			<div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
					<input class='form-control' id='producer' placeholder='Phone Number...' type='tel' name='phone' required>
				</div>
			  </div>
			</div>
		  </div>
          <!--<div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Full Name</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_title'>
                    <option>Mr</option>
                    <option>Ms</option>
                    <option>Mrs</option>
                    <option>Miss</option>
                    <option>Dr</option>
                  </select>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_first_name' placeholder='First Name' type='text'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_last_name' placeholder='Last Name' type='text'>
                </div>
              </div>
            </div>
          </div>-->
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Release Date</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <input class='form-control col-md-8' id='date' name='release_date' type='date' required>
                </div>
              </div>
             <!--<div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_children' placeholder='Month' type='text'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_children_free' placeholder='Year' type='text'>
                </div>
              </div>-->
            </div>
          </div>
          <!--<div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='E-mail' type='text'>
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_phone' placeholder='Phone: (xxx) - xxx xxxx' type='text'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Checkin</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='id_checkin'>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
              <label class='control-label col-md-2' for='id_checkout'>Checkout</label>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='id_checkout'>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>-->
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Genre</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_equipment' name='genre' required>
                    <option value="Gospel">Gospel</option>
                    <option value="Rock">Rock</option>
                    <option value="Hip Hop">Hip Hop</option>
                    <option value="Local">Local</option>
                    <option value="RnB">RnB</option>
                    <option value="Soul">Soul</option>
                    <option value="Reggae">Reggae</option>
					<option value="Ragga">Ragga</option>
					<option value="Dancehall">Dancehall</option>
					<option value="Jazz">Jazz</option>
					<option value="Pop">Pop</option>
					<option value="Afrobeat">Afrobeat</option>
					<option value="House">House</option>
					<option value="Afro-Pop">Afro-Pop</option>
					<option value="Comedy">Comedy</option>
					<option value="Fusion">Fusion</option>
					<option value="Acoustic">Acoustic</option>
					<option value="Afro Soul">Afro Soul</option>
					<option value="Folk">Folk</option>
					<option value="Spoken Word">Spoken Word</option>
					<option value="Podcast">Podcast</option>
                  </select>
                </div>
              </div>
              <!--<div class='col-md-9'>
                <div class='form-group internal'>
                  <label class='control-label col-md-3' for='id_slide'>Slide-outs</label>
                  <div class='make-switch' data-off-label='NO' data-on-label='YES' id='id_slide_switch'>
                    <input id='id_slide' type='checkbox' value='chk_hydro'>
                  </div>
                </div>
              </div>-->
            </div>
          </div>
          <!--<div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_service'>Required Service</label>
            <div class='col-md-8'>
              <select class='multiselect' id='id_service' multiple='multiple'>
                <option value='hydro'>Hydro</option>
                <option value='water'>Water</option>
                <option value='sewer'>Sewer</option>
              </select>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_pets'>Pets</label>
            <div class='col-md-8'>
              <div class='make-switch' data-off-label='NO' data-on-label='YES' id='id_pets_switch'>
                <input id='id_pets' type='checkbox' value='chk_hydro'>
              </div>
            </div>
          </div>-->
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Biography (Tell us about the artist, music, age, album name, video etc)</label>
            <div class='col-md-6'>
              <textarea name='biography' class='form-control' id='id_comments' placeholder='Artist biography' rows='5'></textarea>
            </div>
          </div>
		  
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Upload Artwork</label>
            <div class='col-md-6'>
              <input type="file" name='photo' id="fileinput" accept="image/*" required/>
			  <div id="gallery"></div>
			  <script src="js/gallery.js"></script>
            </div>
          </div>

          <!--<input type="hidden" name="APC_UPLOAD_PROGRESS" id="progress_key" value="<?php // echo $up_id; ?>"/>                                     -->
          
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Upload Song</label>
            <div class='col-md-6'>
              <input type="file" name='song_filename' id="song_filename" accept="audio/*" required/><br/>
			  <!--<script src="js/upload.js"></script>-->
            </div>
          </div>
         
                <!--<iframe id="upload_frame" name="upload_frame" frameborder="0" border="0" src="" scrolling="no" scrollbar="no" > </iframe>-->
              
		    <div class='form-group' style="text-align: center !important;">
<<<<<<< HEAD
            <label class='control-label col-md-8 col-md-offset-2' for='id_title'>Send K5000.00 to 0996718793 or 0880649615 and type below the number that sent the money.</label>
                     <br/>
                     <div class='col-md-3 col-md-offset-4'>
                     
                    <input class='form-control' size="35" id='payphone' placeholder='Phone Number...' type='tel' name='payphone' required>
                    <span style="clear:both; float: left;" id="user-result"></span>
=======
            <label class='control-label col-md-8 col-md-offset-2' for='id_title'>Send K5000.00 to 0996718793 (Airtel Money) or 0880649615 (TNM Mpamba) and type below the number that sent the money.</label>
                     <br/>
                     <div class='col-md-3 col-md-offset-4'>
                     
                    <input class='form-control' size="35" id='producer' placeholder='Phone Number...' type='tel' name='payphone' required>
>>>>>>> master
                    
                    </div>
             
          </div>
          
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn btn-success' type='submit' name='send'>Submit Music</button>
              <br/>
            
                
            </div>
            <div class='col-md-10' style='text-align:center;'>
            <small id="fileHelp" class="form-text text-muted">Read the rules and regulations about uploading your music through this page <a href="/submitMusic/r_and_r.php" target="_blank">here</a>.</small>
              <!--<button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button>-->
            </div>
          </div>
		  
		                
			<?php
			
				$image_folder = "/var/www/vhosts/malawi-music.com/dev.malawi-music.com/submitMusic/uploads/images/";
				$image_file = $image_folder . basename($_FILES["photo"]["name"]);
				$imageFileType = strtolower(pathinfo($image_file,PATHINFO_EXTENSION));

        $song_folder = "/var/www/vhosts/malawi-music.com/dev.malawi-music.com/submitMusic/uploads/songs/";
        $song_file = $song_folder . basename($_FILES["song_filename"]["name"]);
        $songFileType = strtolower(pathinfo($song_file,PATHINFO_EXTENSION));


        $uploadOk = 1;
				
					
				if (isset($_POST['send'])){
					
					// Check if song file is a actual song or fake image
					$check = getimagesize($_FILES["photo"]["tmp_name"]);
					if($check !== false) {
						echo "File is an image - " . $check["mime"] . ".";
						$uploadOk = 1;
					} else {
						echo "File is not an image";
						$uploadOk = 0;
					}
					
					// Check if file already exists
					if (file_exists($image_file)) {
						echo "Sorry, image with that name already exists.";
						$uploadOk = 0;
					}
					
					// Check file size
					if ($_FILES["photo"]["size"] > 1000000) {
						echo "Sorry, your image size is too large. Use an image not larger than 1MB";
						$uploadOk = 0;
					}
					
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
						echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						$uploadOk = 0;
					}
					
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
						echo "Sorry, your image file failed to uploaded.";
					// if everything is ok, try to upload file & submit form
					} else {
						
						$artist_name = $_POST['artist_name'];
						$song_name = $_POST['song_name'];
						$producer = $_POST['producer'];
						$phone = $_POST['phone'];
                        $payphone = $_POST['payphone'];
						$release_date = $_POST['release_date'];
						$genre = $_POST['genre'];
						$biography = $_POST['biography'];
						$photo = $_POST['photo'];
            $photoname = $_FILES["photo"]["name"];
            $song_filename = $_FILES["song_filename"]["name"];
						//$song_filename = $_POST['song_filename'];
						
						if (!empty($artist_name) && !empty($song_name) && !empty($release_date)){
							
<<<<<<< HEAD
							$query = "INSERT INTO newMusic (artist_name,song_name,producer,song_pic,status,DateAdded,genre,release_date,phone, song_file, payphone)
									 VALUES ('$artist_name','$song_name','$producer ','$photoname','1',now(),'$genre','$release_date','$phone','$song_filename', '$payphone')";
=======
							$query = "INSERT INTO newMusic (artist_name,song_name,producer,song_pic,status,DateAdded,genre,release_date,phone, song_file, payphone, bio)
									 VALUES ('$artist_name','$song_name','$producer ','$photoname','1',now(),'$genre','$release_date','$phone','$song_filename', '$payphone', '$biography')";
>>>>>>> master
									 
							
							if (move_uploaded_file($_FILES["photo"]["tmp_name"],$image_file) && move_uploaded_file($_FILES["song_filename"]["tmp_name"],$song_file)) {
								echo "The files ". basename( $_FILES["photo"]["name"]). " have been received.";
								
							if (mysqli_query($conn, $query)) {
									echo " <br />
										<div class='form-group'>
											<label class='control-label col-md-2 col-md-offset-2' for='id_comments'></label>
											<div class='col-md-6'>
												<div class='alert alert-success fade in'>
												<a href='#' class='close' data-dismiss='alert'>&times;</a>
												Song Submission successful...
												</div>
											</div>
										</div>";
								} else {
									echo "
										<div class='form-group'>
											<label class='control-label col-md-2 col-md-offset-2' for='id_comments'></label>
											<div class='col-md-6'>								
												<div class='alert alert-danger fade in'>
												<a href='#' class='close' data-dismiss='alert'>&times;</a>";
												echo "Error: " . $sql . "<br>" . mysqli_error($conn);
									echo "</div></div></div>";
								}						
							
							} else {
								echo "Sorry, there was an error uploading your file.";
							}						
						} else {
								echo "
									<div class='form-group'>
										<label class='control-label col-md-2 col-md-offset-2' for='id_comments'></label>
										<div class='col-md-6'>
											<div class='alert alert-warning fade in'>
												<a href='#' class='close' data-dismiss='alert'>&times;</a>
												Please fill in all required information...
											</div>
										</div>
									</div>";	
						}

					}
						
				}
			
            
            
            # THIS IS TO CLOSE OPEN CONNECTIONS - STEFAN
            mysqli_close();	
			?>		  
			  
		
		  
		  
		  
        </form>
      </div>
    </div>
  </div>

    <script  src="js/index.js"></script>

<<<<<<< HEAD
   

=======
>>>>>>> master
</body>
</html>


<!-- <input type="text" name="myField1" value="<?php //echo isset($_POST['myField1']) ? $_POST['myField1'] : '' ?>" /> -->
