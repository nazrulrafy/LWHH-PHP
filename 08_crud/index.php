<?php 
require_once("inc/functions.php");
$task=$_GET['task'] ?? 'report';
$error=$_GET['error'] ?? '0';
$info="";
if('delete'==$task){
  $id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
  if ($id >0) {
    deleteStudent($id);
    header("location:index.php?task=report");
  }
}
if('seed' ==$task){
  seed(DB_NAME);
  $info="seeding is complete";
}
$fname=$lname=$roll=$subject="";
if(isset($_POST['submit'])){
  $fname=filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
  $lname=filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
  $roll=filter_input(INPUT_POST,'roll',FILTER_SANITIZE_STRING);
  $subject=filter_input(INPUT_POST,'subject',FILTER_SANITIZE_STRING);
  $id=filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);

  if ($id) {
    if($fname!="" && $lname !="" && $roll !="" && $subject !=""){
      $result=updateStudent($id,$fname,$lname,$roll,$subject);
      if ($result) {
        header("location:index.php?task=report");
      }else {
        $error=1;
      }
    }
  }else{
    if($fname!="" && $lname !="" && $roll !="" && $subject !=""){
      $result=addStudent($fname,$lname,$roll,$subject);
      if ($result) {
        header("location:index.php?task=report");
      }else {
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

    <title>Crud</title>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">CRUD project</h1>
      <p>This is our first create,read,update and delete project</p>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <?php include_once("inc/templates/nav.php")?>
            <hr/>
            <?php 
              if($info != ""){
                echo "<p>{$info}</p>";
              }
            ?>
          </div>
          <div class="col-md-2">
          </div>
        </div>
        <?php if('1' ==$error){ ?>
          <div class="row">
            <div class=col=md=12>
              <blockquote class="blockquote">
                <p class="mb-0">Duplicate Roll number</p>
              </blockquote>
            </div>
          </div>
        <?php }?>
        <?php if("report" ==$task){?>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php generateReports()?>
                <div>
                  <blockquote class="blockquote">
                    <pre>
                      <?php printArray();?>
                    </pre>
                  </blockquote>
                  
                </div>
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
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            </div>
            <div class="col-md-2"></div>
          </div>
        <?php }?>
        <?php if("edit" ==$task){
          $id=filter_input(INPUT_GET,"id",FILTER_SANITIZE_STRING);
          $student=getStudent($id);
          if ($student):
          ?>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <form method="post" >
              <input type="hidden" name="id" value="<?php echo $id?>"/>
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
              <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </form>
            </div>
            <div class="col-md-2"></div>
          </div>
          <?php 
          endif;
        }?>


    </div>
 

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>