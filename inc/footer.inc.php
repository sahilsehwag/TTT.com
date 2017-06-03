<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3">
			<ul class="social_media">
				<li><h4>FOLLOW ME</h4></li>
				<li><a href="https://www.gmail.com"><img src=<?php echo $mainDir."images/gmail.ico";?> width="32" height="32"></a></li>
				<li><a href="https://www.twitter.com"><img src=<?php echo $mainDir."images/twitter.ico";?> width="32" height="32"></a></li>
				<li><a href="https://www.facebook.com"><img src=<?php echo $mainDir."images/facebook.ico";?> width="32" height="32"></a></li>	
			</ul>
			<br/><br/>
			<div class="lat-tut">
				<h4>Latest Tutorial</h4><hr/>
				<div class="media">
					<a class="media-left media-top" href="#"><img class="media-object" src=<?php echo $mainDir."images/java_logo.png";?> height="50" width="50"></a>
					<div class="media-body">
						<h5 class="media-heading">Multithreading In Java</h5>
						23/3/2016
					</div>
				</div>						
			</div>
			<div class="lat-ser">
				<h4>Latest Series</h4><hr/>
				<div class="media">
					<a class="media-left media-top" href="#"><img class="media-object" src=<?php echo $mainDir."images/py_logo.png"?> height="50" width="50"></a>
					<div class="media-body">
						<h5 class="media-heading">Advanced Python Series</h5>
						24/3/2016
					</div>
				</div>
				<div class="media">
					<a class="media-left media-top" href="#"><img class="media-object" src=<?php echo $mainDir."images/qt_logo.png"?> height="50" width="50"></a>
					<div class="media-body">
						<h5 class="media-heading">Qt Series</h5>
						22/3/2016
					</div>
				</div>
			</div>
		</div>				

		<div class="col-lg-3 col-lg-offset-1">
			<h4>LICENSE(AUTHORS)</h4>
			<a class="authors" href="http://jozefkrajcovic.sk/">Jozef Krajčovič</a>
			<a class="authors" href="http://tenshi47.deviantart.com">tenshi47</a>
			<a class="authors" href="http://neilorangepeel.com/">Neil Hainsworth</a>
			<a class="authors" href="http://xavisanchezmir.com/">Xavi Sánchez Mir</a>
			<a class="authors" href="http://boyankostov.com/">Boyan Kostov</a>
			<a class="authors" href="http://www.yanlu.de/">Yannick Lung</a>
			<br/>
			<a class="authors" href=<?php echo $mainDir."license.html";?>>Continue Reading...<span class="fa fa-long-arrow-right"></span></a>
		</div>

		<div class="col-lg-3 col-lg-offset-1">
			<h4>CONTACT ME</h4>
			<form action=<?php echo $mainDir."inc/footer.inc.php";?> method="POST">
		        <div class="form-group form-md-lg">
		     	    <input type="text" class="form-control" name="name
		     	    " placeholder="Name*">
		     	    <br/>
		     	    <input type="text" class="form-control" name="email" placeholder="Email*">
		     	    <br/>
		     	    <textarea placeholder="Message*" class="form-control" name="message" rows="9"></textarea>
		     	    <br/>			     	    
			        <button type="submit" class="btn">Submit</button>
		            <p id="info"></p>
		            <p name='file' value=<?php echo __FILE__;?>></p>
		        </div>
		    </form>
		</div>
	</div>
</div>
<div class="container-fluid foot-menu">
	<div class="row">
		<a href=<?php echo $mainDir."index.php"?> class="col-lg-1 col-lg-offset-4"><h4>Home</h4></a>
		<a href=<?php echo $mainDir."license.php"?> class="col-lg-1"><h4>License</h4></a>
		<a href="#" class="col-lg-1"><h4>Copyright</h4></a>
		<a href=<?php echo $mainDir."about.php"?> class="col-lg-1"><h4>About</h4></a>
		<h4 class="copyright">
			<span class="fa fa-copyright"></span> Tutorials.com
		</h4>
	</div>
</div>



<?php
   	
require $mainDir.'inc/connect.inc.php';
error_reporting(1);

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    if($_POST['name'] == "" || $_POST['email'] == "" || $_POST['message'] == ""){
        echo '
            <script type="text/javascript">
            	addMessage("#info", "*All Fields Are Required", "#ff1a1a");                    
            </script>
        ';
    }else{            
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        insert($name, $email, $message);
    }
}


function insert($name, $email, $message){
    $query = 'INSERT INTO pm VALUES(NULL, '.$name.','.$email.','.$message.', NOW());';
    
    if(mysql_query($query)){
        echo '
            <script type="text/javascript">
            	addMessage("#info", "Message Sent", "#53ff1a");
            </script>
        ';
    }else{
        echo '
            <script type="text/javascript">
            	addMessage("#info", "*Error: Please Try Again Later", "#ff1a1a");
            </script>
        ';
    }
}

?>