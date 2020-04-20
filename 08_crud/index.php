<?php 
require_once("inc/functions.php");
$task   =$_GET["task"] ?? "report";
$error  =$_GET["error"] ?? "0";
$delete  ="";
$info="";
if("seed"==$task){
    seed();
    $info="seeding is complete";
}
if("delete"==$task){
    $id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
    if ($id >0) {
        deleteStudent($id);
        header("location:index.php?task=report"); 
    }
}
$fname=$lname=$roll=$subject=$email="";
if(isset($_POST["submit"])){
    $fname=filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
    $lname=filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
    $roll=filter_input(INPUT_POST,'roll',FILTER_SANITIZE_STRING);
    $subject=filter_input(INPUT_POST,'subject',FILTER_SANITIZE_STRING);
    $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
    $id=filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
    if ($id) {
        if ($fname !="" && $lname !="" && $roll !="" && $subject != "" && $email !="") {
            $result=updateStudent($id,$fname,$lname,$roll,$subject,$email);
            if ($result) {
                header("location:index.php?task=report");
            }else{
                $error=1;
            }
        }
    }else{
        if ($fname !="" && $lname !="" && $roll !="" && $subject != "" && $email !="") {
            $result=addStudent($fname,$lname,$roll,$subject,$email);
            if ($result) {
                header("location:index.php?task=report");
            }else{
                $error=1;
            }
        }
    }
    
}



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Crud</title>
  </head>
  <body>
    <div class="container">
        <div class="head text-center">
            <h2>CRUD Project</h2>
            <p class="text-dark seed">This is my first crud project.I don't use database here.I store all record in a text file</p>
            <?php include_once('inc/templates/nav.php')?>
        </div>
        <p class="text-success seed"><?php if($info!=""){echo "{$info}";}?></p> 
        <?php if ("1" ==$error) {
            echo '<p class="text-danger alert">You might be doing somethong wrong.please check your value again.specially roll and email.duplicate roll and email not allow</p>';
        }?> 
    
        
         <?php if("report" ==$task){?>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <?php if ($delete !=""){echo '<p class="text-success ">successfully Delete</p>';}?>  
            <?php generateReports()?>
            </div>
            <div class="col-md-2"></div>
        </div>
         <?php }?>
        <?php if("add" ==$task){?>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <form method="post" action="index.php?task=add">
              <div class="form-group">
                <input type="text" class="form-control" name="fname" value="<?php echo $fname?>" placeholder="First Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="lname" value="<?php echo $lname?>" placeholder="Last Name">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="roll" value="<?php echo $roll?>" placeholder="roll" >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" value="<?php echo $subject?>" placeholder="subject">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" value="<?php echo $email?>" placeholder="Enter Your Email">
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            </div>
            <div class="col-md-2"></div>
          </div>
        <?php }?>
        <?php 
            if("edit" ==$task){
            $id=filter_input(INPUT_GET,"id",FILTER_SANITIZE_STRING);
            $student=getStudent($id);
            if ($student) {
           
        ?>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $id?>"/>
              <div class="form-group">
                <input type="text" class="form-control" name="id" value="<?php echo $student['id']?>" disabled>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="fname" value="<?php echo $student['fname']?>" placeholder="First Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="lname" value="<?php echo $student['lname']?>" placeholder="Last Name">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="roll" value="<?php echo $student['roll']?>" placeholder="roll" >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" value="<?php echo $student['sub']?>" placeholder="subject">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" value="<?php echo $student['email']?>" placeholder="Enter Your Email">
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            </div>
            <div class="col-md-2"></div>
          </div>
        <?php 
            }
        }
    ?>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>