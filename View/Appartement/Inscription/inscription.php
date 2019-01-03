<?php  require_once "../../header.php"  ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!doctype html>
<html>
<head><title>ADD</title>
<link href="../../css/style2.css" rel="stylesheet" type="text/css" />

</head>
<body>


<div class="page-container">
            
            <form action="../../Controller/Inscription/inscrit.php" method="POST">
			<h1>Sign Up</h1>
                <input type="text" name="nom" class="Name" placeholder="Nom">
                <input type="text" name="prenom" class="Tele" placeholder=" Prenom">
				<input type="text" name="mail" class="Email" placeholder="Email">
				<input type="password" name="password" class="Address" placeholder="password">
                <button type="submit" value="Add" name="enrg">Submit</button>
                <button type="reset" value="effacer" name="reset">Reset</button>
            </form>
        </div>
		

</body>
</html>