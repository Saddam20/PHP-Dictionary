<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>

	<style>
		form{
			margin-left: 500px;
		}

       label{
       	font-weight: bold;
       	font-size: 18px;
       }

       input[type=text]{
       	width: 350px;
       	padding: 10px;
       	height: 16px;
       	font-size: 16px;
       }
       input[type=submit]{
       	font-size: 17px;
       	font-weight: bold;
       	margin-left: 120px;
       	padding: 5px;
       }

       table{
       	border: 1px solid black;
       	border-collapse: collapse;
       	width: 500px;
       	margin-left: 450px;
       	margin-top: 30px;
       }
       td,th{
       	border: 1px solid black;
       	text-align: center;
       	padding: 4px;
       }
	</style>
</head>
<body>

	<form action="insert.php" method="POST">
	<h1>Insert Word</h1>
	<a href="dictionary.php">Go To Dictionary</a><br><br>
	<label>Word</label><br>
	<input type="text" name="word" placeholder="Enter single word" required><br><br>

	<label>Meaning</label><br>
	<input type="text" name="meaning" placeholder="Enter Meaning" required><br><br>

	<input type="submit" name="insert" value="Insert Word">
</form>
<table>
		<tr>
			<th>Word</th>
			<th>Meaning</th>
		</tr>

<?php
            include 'db.php';
            if (isset($_POST['insert'])) {

            $word = $_POST['word'];
            $meaning = $_POST['meaning'];

            $sql = "INSERT INTO dictionary_word(Word,Meaning) values('$word','$meaning')";
            $query = mysqli_query($conn,$sql);

            }

            $sql1 = "SELECT * FROM dictionary_word";
            $query1 = mysqli_query($conn,$sql1);
            while ($info = mysqli_fetch_array($query1)) {
               ?>
                 <tr>
                 	<td><?php echo $info['Word'];?></td>
                 	 <td><?php echo $info['Meaning'];?></td>

                 </tr>


               <?php
                  }
               ?>
</table>
</body>
</html>