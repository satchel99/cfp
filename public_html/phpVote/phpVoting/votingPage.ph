<!DOCTYPE html>
<html>

<?php require 'connect.php';?>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
	<title>Secure Electronic Voting</title>
  </head>
  
<body>
   
	<!-- ballot page -->
    <div id="id03" class="modal">
      <!-- modal content -->
      <form class="modal-content animate" action="">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="img_avatar2.png" alt="avatar" class="avatar">
        </div>
	<h2>Select one candidate to vote</h2>
	<p>The <strong>input type="checkbox"</strong> defines a checkbox:</p>

	<input type="checkbox" name="candidate1" value="President">Donald Trump
	<br>
	<input type="checkbox" name="candidate2" value="President2">Hillary Clinton 
	<br><br>
	<input type="submit">
	</form> 
	</div>
</body>
