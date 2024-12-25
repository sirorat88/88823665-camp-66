<!DOCTYPE html>
<langhg="en">
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <style>
        .list-group{
            text-align: left;
        }
        body {
            background-color:rgb(255, 229, 35); 
            font-family: 'Kanit';
        }
        h1 {
            color:rgb(201, 91, 1); 
        }
        .h2 {
            color:rgb(42, 42, 107); 
        }
        h3 {
            color:rgb(156, 89, 12);
        }
        input {
            background-color:rgb(214, 202, 109);
        }
    </style>
        <body>
            <title>PHP_03</title>
            <div class="container mt-5">
        <h1>ตารางแม่สูตรคูณ</h1>
        <form action="php_03.php" method="post">
            <div class="mb-3">
                <label for="inputnumber" class="form-label">เลขแม่สูตรคูณ:</label>
                <input type="input" class="form-control" id="inputnumber" name="inputnumber" placeholder="กรุณากรอกตัวเลขจำนวนเต็มที่ต้องการ เช่น 2" required>
            </div>
            <div class="mb-4">
                <button class="btn btn-success" type="submit">สร้างตารางสูตรคูณ</button>
            </div>
        </form>
        <div class="mt-4">
            <?php

            if (isset($_POST['inputnumber'])) {
                $myvar = (int)$_POST['inputnumber']; 
                echo "<h3>ตารางสูตรคูณของแม่ $myvar:</h3>";
                echo "<ul class='list-group'>";

                //ตาราง
                for ($i = 1; $i <= 12; $i++) {
                    $ans = $myvar * $i;
                    echo "<li class='list-group-item'>$myvar x $i = $ans</li>";
                }
                echo "</ul>";
            }
            ?>
        </div>
    </div>
        </body>
    </head>
</html>