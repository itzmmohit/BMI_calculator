<?php
include'../connection/connection.php';
?>



<?php

$email = $_POST["email"];

$userData = "SELECT * FROM users WHERE email_id = '$email' LIMIT 1";
$userDataResult = mysqli_query($conn, $userData);
if (mysqli_num_rows($userDataResult) > 0) {
    while($row = mysqli_fetch_assoc($userDataResult)) {
        
    $user_id = $row["user_id"];
    $email_id = $row["email_id"];
    $gender = $row["gender"];
    $height = $row["height"];
    $weight = $row["weight"];
    $age = $row["age"];
    $food_type = $row["food_type"];

?>


<?php
    }
} else {

}
?>

<div style="color: grey;">
<?php

  $heightinmeters = $height * .3048;

  $bmi=$weight/($heightinmeters*$heightinmeters);
  $newBmi = (float)substr($bmi, 0, 4);

   echo "Your BMI is: ".$newBmi.",";

  if($bmi<18.5)
  {  
    echo "You are Unfit.";
    include"gauge/1.php";
  }
  elseif($bmi=18.5||$bmi>25)
  {
    echo "You are Healthy.";
    include"gauge/2.php";
  }
  elseif($bmi=25||$bmi>30)
  {
    echo "You are Overweight.";
    include"gauge/3.php";
  }
  else
  {
    echo "You are Obsessed.";
     include"gauge/4.php";
  }

?>
</div>


<div>
 <?php 

  if($food_type == "eggetarian")
  {  
?>
 <script type="text/javascript">
   document.querySelector('.egg-con').style.display = 'block';
 </script>
<?php
  }
  elseif($food_type == "non-vegetarian")
  {
?>
 <script type="text/javascript">
   document.querySelector('.non-veg-con').style.display = 'block';
 </script>
<?php
  }
  elseif($food_type == "vegetarian")
  {
?>
 <script type="text/javascript">
   document.querySelector('.veg-con').style.display = 'block';
 </script>
<?php
  }
  elseif($food_type == "vegan")
  {
?>
 <script type="text/javascript">
   document.querySelector('.vegan-con').style.display = 'block';
 </script>
<?php
  }
  else
  {
?>


<?php
  }
 ?>
</div>