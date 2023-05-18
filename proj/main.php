<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>project</title>
    </head>
    <body>
        <div class="cov">
        <div class="navbar">
        <nav>
            <ul>
                <li><a href="./about.html">about us</a></li>
                <li><a href="./contact.html">contact</a></li>
                <li><a href="./course.html">course</a></li>
                <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Post</button></li>
                <li><button onclick="logout()">Logout</button></li>
            </ul>
            <div class="pic">
            <?php
            $EmailId=$_SESSION['EmailId'];
            echo $EmailId;
            ?>
            </div>
        </nav>
        </div>
        </div>
        <div class="userimg">
            <ion-icon name="person-circle-outline" style="font-size: 20px;"></ion-icon>
        </div>
        <div id='login-form'class='login-page'>
            <div class="post-box">
                <form id='login' class='input-group-login' method="POST" action="post.php">
                    <input type='email'class='input-field'placeholder='Email Id' name="EmailId">
		            <input type='text'class='input-field'placeholder='Year' name="Year"required>
                    <input type='text'class='input-field'placeholder='Branch' name="Branch" required>
                    <textarea type='text'class='input-field'placeholder='Post' name="Post" required ></textarea> 
		            <button type='submit'class='submit-btn'>Post</button>
		        </form>
            </div>
        </div>
        <div class="chat-box">
		<div class="chat-window">
			<div class="chat-messages"></div>
		</div>
		<div class="chat-input">
			<form action="send.php" method="post">
				<input type="text" name="message" placeholder="Type your message...">
				<button type="submit">Send</button>
			</form>
		</div>
	</div>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script>
            function logout() {
            window.location.href = "index1.html";
        }
        </script>

    </body>
</html>