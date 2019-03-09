 <?php
 	$u=$_POST['username'];
 	$e=$_POST['Email'];
 	$p=$_POST['Password'];
  $r=$_POST['Re-enter'];


 	$a = mysqli_connect('192.168.64.2','root','','Alexa');

  if ($p==$r) {
    $ins="INSERT INTO A1 SET username='$u',Email='$e',Password='$p'";
    $a->query($ins);
    echo "Account Successfully Created";
  }else {
    echo "Password doesn't Match";
  }

 ?>
