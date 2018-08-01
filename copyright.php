<?php
	if (isset($_POST)&&!empty($_POST)){
		connect();
	}
	if(isset($_GET['disconnect'])){
		disconnect();
	}
?>

<div id="copyright">
	<?php
		echo "<ul><li>&copy; CardiffBeachVolleyBall</li><li>Design: <a href=\"http://www.aurelienplantard.com/\">Aurelien PLANTARD</a></li>";
			if(!isset($_SESSION['admin'])&&empty($_SESSION['admin'])){
				echo "<li><a href=\"#adminconnect\" class=\"button\">Administrator</a></li></ul>";
			}
			else if(isset($_SESSION['admin'])&&$_SESSION['admin'] == 1){
				echo "<li><a href=\"?disconnect\" class=\"button\">Disconnect</a></li></ul>";
			}
	?>
</div>

<div id="adminpopup" class="remodal" data-remodal-id="adminconnect">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="box">
		<img src="images/logo.PNG">
		<form method="post" action="#">
			<div class="row aln-center gtr-uniform">
				<div class="col-7">
					<input type="email" name="email" value placeholder="Email">
				</div>
				<div class="col-7">
					<input type="password" name="password" value placeholder="password">
				</div>
			</div>
			<div id="submitbutton" class="row aln-center">	
				<input type="submit" value="Connect" class="primary">
			</div>
		</form>
	</div>					
</div>

<?php
	function connect(){
			include('dbconnect.php');

			$newpost = array_map('htmlspecialchars', $_POST);
			$sql =  "select count(*) from admins where email=\"".$newpost['email']."\"";
			if($res = $connexion->query($sql)){
				if($res->fetchColumn() >0){
					$sql = "select * from admins where email=\"".$newpost['email']."\"";
					$req = $connexion->query($sql);
					$res = $req->fetch(PDO::FETCH_ASSOC);
					if(password_verify($newpost['password'],$res['password_Hash'])){
						if(password_needs_rehash($res['password_Hash'], PASSWORD_DEFAULT)){
							$newHash = password_hash($newpost['password'],PASSWORD_DEFAULT);
							$sql = "update admins set password_Hash=\"".$newHash."\" where id=\"".$res['id']."\"";
							$sth = $connexion->prepare($sql);
							$sth->execute();						
						}
						$_SESSION['id'] = $res['id'];
						$_SESSION['admin'] = 1;
					}
					else {
						echo "<script type='text/javascript'>alert('There is no administrator that match this email and password');</script>";
						sleep(3);
					}
				}
				else{
					echo "<script type='text/javascript'>alert('There is no administrator that match this email and password');</script>";
					sleep(3);
				}
			}
	}

	function disconnect(){
		session_unset();
		session_destroy();
	}

?>