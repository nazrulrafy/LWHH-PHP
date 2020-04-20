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
                    <?php if(isset($_GET['fname']) && !empty($_GET['fname'])):?>
                    <strong>First Name: </strong><?php echo $_GET['fname']?><br/>
                    <?php endif;if(isset($_GET['lname']) && !empty($_GET['lname'])):?>
                    <strong>Last Name: </strong><?php echo $_GET['lname']?><br/>
                    <?php endif;?>
                </p>
            </div>    
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="" method="GET"><!--HTTP VERB-->
                    <label for="fname">First Name:</label>
                    <input id="fname" type="text" name="fname">

                    <label for="lname">Last Name:</label>
                    <input id="lname" type="text" name="lname">

                    <button type="submit">Submit</button>
                </form>
            </div>    
        </div>
    </div>
    
</body>
</html>