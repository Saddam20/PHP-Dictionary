<!DOCTYPE html>
<html>
<head>
	<title>Dictionary</title>

	<style>
		body{
			background-color: rgb(46,194,253);
			margin: 0px;
			padding: 0px;
		}
		#table1{
       	border: 1px solid black;
       	border-collapse: collapse;
       	width: 500px;
       	margin-top: 30px;
       	margin-left: 50px;
       }
       td,th{
       	border: 1px solid black;
       	text-align: center;
       	padding: 4px;
       }
		h1{
			text-align: center;
			background-color: deeppink;
			font-size: 45px;
			color: white;
			padding: 5px;
		}
		#div1{
			background-color: #f4f4f4;
			width: 900px;
			margin-left: 200px;
			padding-top: 20px;
			padding-bottom: 20px;
		}
		form{
			margin-left: 500px;
		}
		input[type=text]{

			width: 300px;
			padding: 5px;
			margin-bottom: 10px;
			font-size: 16px;
			font-weight: bold;
		}

		input[type=submit]{
			font-size: 17px;
			font-weight: bold;
			margin-left: 100px;
			background-color: navy;
			color: white;
			border: 1px solid navy;
			border-radius: 5px;
			width: 100px;
			padding: 5px;
		}
		#table2{

			border: 1px solid black;
			border-collapse: collapse;
			margin-left: 500px;
			margin-top: 20px;
			width: 300px;
		}
		#table2 td th{

			border: 1px solid black;
			padding: 5px;
			text-align: center;
			font-weight: bold;
			font-size: 18px
			
		}
	</style>
</head>
<body>
   
   <h1>English To Bangla Dictionary</h1>
   <div id="div1">
   	
      <form class="" action="dictionary.php" method="POST">

      	<input type="text" name="word" value="" placeholder="Search word"><br><br>
      	<input type="submit" name="search" value="Search"><br><br>
      </form>
      
      <table id="table2">
      	
<tr>
             	<th>Word</th>
             	<th>Meaning</th>
             </tr>
             <?php
            include 'db.php';
            if (isset($_POST['search'])) {
            $word = $_POST['word'];
           
            $sql1 = "SELECT * FROM  dictionary_word WHERE Word = '$word'";
            $query1 = mysqli_query($conn,$sql1);
            while ($info = mysqli_fetch_array($query1)) {
               ?>
                 <tr>
                 	 <td><?php echo $info['Word'];?></td>
                 	 <td><?php echo $info['Meaning'];?></td>
                 </tr>


               <?php
                  }

                  }

               ?>


      </table>



      <table id="table1">
      	
             <tr>
             	<th>Word</th>
             	<th>Meaning</th>
             </tr>
             <?php
            include 'db.php';
            if (isset($_POST['insert'])) {

            $word = $_POST['word'];
            $meaning = $_POST['meaning'];
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
   </div>
</body>
</html>