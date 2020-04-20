<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <title>html webpage</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>This is PHP form</h1>
                <p>
                    <?php 
                        $fname="";
                        $lname="";
                        
                    ?>
                    <?php 
                        if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])):
                            //$fname=htmlspecialchars($_REQUEST['fname']);
                            $fname=filter_input(INPUT_POST,'fname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        endif;
                        if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])):
                            //$lname=htmlspecialchars($_REQUEST['lname']);
                            $lname=filter_input(INPUT_POST,'lname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        endif;
                        echo "<strong>First Name :</strong>".$fname."<br/>";
                        echo "<strong>Last Name :</strong>".$lname."<br/>";
                    ?>
                </p>
            </div>    
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="" method=""><!--HTTP VERB-->
                    <label for="fname">First Name:</label>
                    <input id="fname" type="text" name="fname" value="<?=$fname?>">

                    <label for="lname">Last Name:</label>
                    <input id="lname" type="text" name="lname" value="<?=$lname?>">

                    <button type="submit">Submit</button>
                </form>
            </div>    
        </div>
    </div>
    
</body>
</html>