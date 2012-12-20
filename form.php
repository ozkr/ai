<!DOCTYPE html>
<html>
<head>
	<title>AI</title> 
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
		$("#myform").validate({
			debug: false,
			rules: {
				input: "required",
			},
			messages: {
				input: "Inserta una palabra.",
			},
			submitHandler: function(form) {
				// do other stuff for a valid form
				$.post('process.php', $("#myform").serialize(), function(data) {
					$('#results').html(data);
				});
			}
		});
	});
	</script>
	<style>
	label.error { width: 250px; display: inline; color: red;}
	</style>
</head>
<body>
<form name="myform" id="myform" action="" method="POST">  
<!-- The input form field -->
    <label for="input" id="input_label">Entrada</label>  
    <input type="text" name="input" id="input" size="30" value=""/>  
	<br>
<!-- The Submit button -->
	<input type="submit" name="submit" value="Mandar"> 
</form>
<!-- We will output the results from process.php here -->
<div id="results"><div>
</body>
</html>