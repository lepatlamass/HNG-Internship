<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <h1 class="title">HNG Internship 4</h1>


 <div class="dateandtime">
        <p class="date">
        <?php 
    date_default_timezone_set('Africa/Douala');

    function show_Date() {
        return date('l, jS F Y');
    }
     echo show_Date(); 
    ?>
    </p>
        <p class="time">
        <p class="date">
            <?php 
                date_default_timezone_set('Africa/Douala');

                function show_Time() {
                    return date('H:i:s A');
                }
                echo show_Time(); 
            ?>
        </p>
    </div>
    
</body>
</html>