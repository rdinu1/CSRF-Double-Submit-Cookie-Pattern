<?php
	session_start();

	$feedback = include './feedback.txt';

    if(!isset($_POST["feedback"])){
        header("location: ./home.php?error=Please give a feedback !");
    }else{
        if(!isset($_COOKIE['session_id'])) {
            header("location: ./loginpage.php");
        } else {
            if(!isset($_POST["csrf_token"])){
                header("location: ./loginpage.php?error=Failed! Please login and try again!");
            }else{
                // Validate the csrf token cookie value and the token sent by the client
                if($_POST["csrf_token"] == $_COOKIE['csrf_Token']){
                    $feedback[$_SESSION['username']] = $_POST["feedback"];
                    file_put_contents('./feedback.txt',  '<?php return ' . var_export($feedback, true) . ';');
                    

                    header("location: ./home.php?success=Your feedback was succuessfully saved !");

                    //echo " Feedback: ".$_POST['feedback'].", CSRF token matched (cookie == hidden field) ((".$_POST['csrf_token'].") <==>(".$_COOKIE['csrf_Token']."))";


                }else{
                    header("location: ./loginpage.php?error=Failed! Please login and try again!!!!");
                }
            }
        }
    }
?>