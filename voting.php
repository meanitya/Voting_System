<?php
session start();
include('connect.php');

$votes=$_POST['groupvotes'];
$totalvotes=$votes+1;

$gid=$_POST['groupid'];
$uid=$_SESSION['id'];

$updatevotes=mysqli_query($con,"update `username` set votes ='total votes'
where id='$gid'");

$updatestatus=mysqli_query($con,"update `username` set votes =1 where id='$uid'");

if ($updatevotes and $updatestatus)
    $getgroups=mysqli_query($con,"select username,photo,votes,id from `username` where standard='group'");
    $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    $_SESSION['status']=1;
    alert("Voting successful");
    window.location="../partials/.dashboard.php";
     </script>';


}else {
    echo'<script>
    alert("Technical error! Vote after sometime");
    window.location="../partials/.dashboard.php";

     </script>';
}

?>