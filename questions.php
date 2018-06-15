
<?php include 'database.php'; ?>
<?php 
//Set question number 
$number =(int) $_GET['n'];
//get question 
$query = "SELECT * FROM `Questions` WHERE question_number = $number";

//get results 
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);


$question = $result->fetch_assoc();




//get CHOICES 
$query = "SELECT * FROM `choices` WHERE question_number = $number";

//get results 
$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="container">

            <h1>PHP Quizzer</h1>


        </div>
    </header>
    <main>
        <div class = "container">
            <div class="current">
                    Queastion 1 0f 5
</div>
<p class="question"><?php echo $question['text']?></p>

<form method="post" action="process.php">
<ul class ="choices">
    <?php while ($row = $choices -> fetch_assoc()) :?>
    <li><input name = "choice" type="radio" value ="<?php echo $row['id']  ?>"><?php  echo $row['text']?></li>

    <?php endwhile; ?>



</ul>

<input type="submit" value="submit">
<input type="hidden" name = "number" value="<?php echo $number ?>">
</form>
            </div>
       
</div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2014, PHP Quizzer


        </div>
    </footer>
</body>

</html>