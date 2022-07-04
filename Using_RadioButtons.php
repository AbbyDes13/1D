<!DOCTYPE>

<html>
    <head>
        <title>Using Radio Buttons</title>
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
        <h3 class='text-primary'>Using Radio Buttons</h3>
        <?php
            if(empty($_POST['firstname']) or empty($_POST['etype'])){
                $firstnameErr = ""; $etypeErr = "";
                function test_input($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                
                if(empty($_POST['firstname'])){
                    $_POST['firstname'] = "";
                    $firstnameErr = "Name is required.<br>";
                    echo $firstnameErr;
                } else{
                    $firstname = test_input($_POST['firstname']);
                }

                if(empty($_POST['etype'])){
                    $_POST['etype'] = "";
                    $etypeErr = "Please select your employment type.<br>";
                    echo $etypeErr;
                } else{
                    $etype = test_input($_POST['etype']);
                }
            } else{
                $firstname = $_POST['firstname'];
                $etype = $_POST['etype'];
                echo "<p>You are <span class='textblue'> $firstname</span> and ";
                echo "your employment type is: ";
                echo "<span class='textblue'> $etype </span></p>";
            }
        ?>

        <br><a href="DESPABILADERAS_1D_USERINPUT_FORMS.php">Go back to Forms</a>
    </body>
</html>



