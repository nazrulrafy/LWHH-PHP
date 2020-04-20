<?php 
include "functions.php";
$fruits=["apple","banana","orange","peach","papaya","grape","melon","tarmind"];
$persons=["jamal","kamal","shafiq","rahim","karim","jhumur","manni","pritu","samiya"];
?>
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
                        if(isset($_POST['fruits']) && $_POST['fruits']!=""){
                            printf("You are selected %s",filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING)); 
                        }
                    ?>
                </p>
            </div>    
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="" method="post"><!--HTTP VERB-->
                    <label>Select Some Fruit</label>
                    <select name="fruits" id="fruits">
                        <option disabled selected>Select Fruits</option>
                        <?php displayOption($fruits);?>
                    </select>
                    <button type="submit">Submit</button>
                </form>
            </div>    
        </div>
        <p>
            <?php 
                //$spersons=isset($_POST['persons']) ? $_POST['persons']:array();
                $spersons=filter_input(INPUT_POST,"persons",FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
                print_r($spersons);
                if(count($spersons)>0){
                    echo "You have selected ".join(", ",$spersons);
                }
            ?>
        </p>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="" method="post"><!--HTTP VERB-->
                    <label>Multiple Data Select</label>
                    <select style="height:250px" name="persons[]" id="persons" multiple>
                        <option disabled selected>Select Person</option>
                        <?php displayOption($persons);?>
                    </select>
                    <button type="submit">Submit</button>
                </form>
            </div>    
        </div>
    </div>
    
</body>
</html>