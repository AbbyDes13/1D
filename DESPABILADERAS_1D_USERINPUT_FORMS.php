<!DOCTYPE>

<html>
    <head>
        <title>Using the Radio Buttons and Checkboxes</title>
        <meta charset="utf-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body{
                margin: 50px;
                font-family: verdana, sansserif;
                font-size: 18px;
            }
            h3{
                font-family: georgia, serif;
                text-align: center;
            }
            blockquote{
                margin-left: 60px;
                margin-right: 60px;
            }
            div{
                margin: 50px;
            }
            input[type=text]{
                font-family: arial, sansserif;
                font-size: 18px;
                padding: 3px;
            }
            input[type=submit]{
                font-family: arial, sansserif;
                font-size: 18px;
                padding: 5px;
            }
        </style>
    </head>
    
    <body>
        <h3 class='text-primary'>Using The Radio Buttons</h3>
        <div><form method="post" action="Using_RadioButtons.php">
            <p><b>First Name: </b>
            <input type="text" name="firstname" size="30"></p>

            <p><b>Employee Type:</b><br>
            <blockquote><input type="radio" name="etype" value="Fulltime"> Full Time
            <br><input type="radio" name="etype" value="Parttime"> Part Time</blockquote></p>

            <p><input class='btn-success' type="submit" value="Submit Information"></p>
        </form></div>

        <hr style="height:3px;" class='bg-primary'><br>

        <h3 class='text-primary'>Using Checkboxes</h3>
        <div><form method="post" action="Using_Checkboxes.php">
            <p><b>First Name: </b>
            <input type="text" name="firstname" size="30"></p>

            <p><b>Degrees Received:</b><br>
            <blockquote><input type='checkbox' name='BA' value='BA'> BA
            <br><input type='checkbox' name='MA' value='MA'> MA
            <br><input type='checkbox' name='PhD' value='PhD'> PhD</blockquote></p>

            <p><input class='btn-success' type='submit' value='Submit Information'></p>
        </form></div>
    </body>
</html>



