<?php
	   
    require $mainDir.'inc/connect.inc.php';
    error_reporting(1);

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
        if($_POST['name'] == "" || $_POST['email'] == "" || $_POST['message'] == ""){
            echo '
                <script type="text/javascript">
                    $("#info").text("*All Fields Are Required").css("color","#ff1a1a");                 
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
                    $("#info").text("Message Sent").css("color","#53ff1a");                 
                </script>
            ';
        }else{
            echo '
                <script type="text/javascript">
                    $("#info").text("*Error: Please Try Again Later").css("color","#ff1a1a");                 
                </script>
            ';
        }
    }

?>
