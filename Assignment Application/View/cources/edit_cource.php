<?php include_once 'permision_cource.php'; ?>	


<?php include_once 'header.php'; ?>

<body>
	<div class="content">
	<div class="dangkycource">
		<h3 style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;">Edit Course Information </h3>
		<form action="" method="POST">
			<table>
			
			<tr>
				<td style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;" nowrap="nowrap">Semester :</td>
				<td style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;"><input type="text" id="title" name="title" value="<?php echo $dataCourceID['title']; ?>"></td>
			</tr>
			<tr>
				<td style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;"nowrap="nowrap">Subjects :</td>
				<td ><input name="content" rows="2" cols="60" value="<?php echo $dataCourceID['content']; ?>"></input></td>
			</tr>
			<tr>
				<td style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;" nowrap="nowrap">Teacher :</td>
				<td ><input name="poster" type="text" value="<?php echo $dataCourceID['poster']; ?>"></input></td>
			</tr>
			<tr>
				<td style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;" nowrap="nowrap">Day Start :</td>
				<td><input name="createdate" type="date" value="<?php echo $dataCourceID['createdate']; ?>"></input></td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;"><input type="submit" name="update_cource" value="Update Course"></td>
				
			</tr>
 
		</table>
		</form>
	</div>
</div>
</body>

<?php include_once 'footer.php' ?>