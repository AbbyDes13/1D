<!DOCTYPE>

<html>
    <head>
        <title>Using Checkboxes</title>
        <meta charset="utf-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body{
                margin: 75px;
                font-family: verdana, sansserif;
                font-size: 18px;
            }
            h3{
                font-family: georgia, serif;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h3 class='text-primary'>Using Checkboxes</h3>
        <?php
            $firstname = "";
            if(empty($_POST['firstname'])){
                $firstnameErr = "Name is Required.";
                echo $firstnameErr;
            } else{
                $firstname = $_POST['firstname'];
                //test if the checkbox BA has been ticked
                if(isset($_POST['BA'])){
                    $BA = $_POST['BA'];
                } else {
                    $BA = "";
                }

                //test if the checkbox MA has been ticked
                if(isset($_POST['MA'])){
                    $MA = $_POST['MA'];
                } else{
                    $MA = "";
                }

                //test if the checkbox PhD had been ticked
                if(isset($_POST['PhD'])){
                    $Phd = $_POST['PhD'];
                } else{
                    $Phd = "";
                }

                print "<p>You are <span class='textblue'> $firstname</span> and ";
                print "the degrees you've earned are: </p>";
                print "<p><span class='textblue'> $BA </span></p>";
                print "<p><span class='textblue'> $MA </span></p>";
                print "<p><span class='textblue'> $Phd </span></p>";
            }
        ?>
        <br><br><a href="DESPABILADERAS_1D_USERINPUT_FORMS.php">Go back to Forms</a>
    </body>
</html>


