<!DOCTYPE html>

<html>
<head>
    <title>WS CSRF Assignment</title>
<style>

body { 
  margin: 0;
  font-family: Arial;
  overflow: auto;
}


    
form {
    border: 10px solid #f1f1f1;
    width:500px;
    
    margin-left:400px;
    margin-top:80px;
    
    
}
    input[type=text], input[type=password] {
    width: 75%;
    padding: 12px 20px;
    margin: 8px 0;
    //display: inline-block;
    border: 1px solid #ccc;
    //box-sizing: border-box;
}

button {
    //background-color: #4CAF50;
    background-color: #4db8ff;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}
    
.container {
    padding: 16px;
}
.header{
        text-align: center;
        color: blue;
        font-size: 30px;
        font-weight: bold;
        font-family: Arial;
        
}
.alert{
    font-size: 30px;
    margin-left: 400px;
    margin-top: 50px;
    color: crimson;
}
</style>
</head>
<body>
    <div class="header">
    <h1>CSRF Double Submit Cookie Pattern</h1>
    </div>

    <?php
    if(isset($_GET['error'])){
        echo '<div class="alert alert-danger" role="alert">'.$_GET['error'].'</div>';                
    }elseif(isset($_GET['success'])){
        echo '<div class="alert alert-success" role="alert">'.$_GET['success'].'</div>';
    }
    ?>

	<form method="post" action="login.php">
		<div class="container">

			<h1> Log In </h1>
    		<label for="uname"><b>Username</b></label><br/>
    		<input type="text" placeholder="Enter Username" name="uname" required></br></br>

    		<label for="psw"><b>Password</b></label><br/>
    		<input type="password" placeholder="Enter Password" name="pwd" required><br/><br/>
        
    		<button type="submit" name = "login" >Login</button>
    		<br>
    		<br>
  		</div>

	</form>
</body>
</html>