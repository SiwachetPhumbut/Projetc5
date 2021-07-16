
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <div class="container primary">
        <h1 class = pt-3>โปรแกรมตัดเกรด</h1>
        <form class="row pt-3"  method="get" action="Ex5.php">
        <div class="col-auto">
            <label for="mark" class="visually-hidden"> คะแนน </label>
            <input type="text" class="form-control" placeholder="คะแนน"
            id="mark" name="mark" value="">
            </div>

            <div class="col-auto">
                <button type="submit" value="submit" name="submit" class=" btn btn-primary mb-3">ตัดเกรด</button>
          </div>
        </form>
    </div>


<?php
    if(isset($GET['submit'])){
    }

?>
   
   
   <div class="container">

   
<?php
$mark = $_GET['mark'];
$grad = 0.00;

if($mark >= 0.00 && $mark <= 100){
    if($mark < 50) { $grade = 0.00;}
    else if($mark < 55) { $grade = 1.00;}
    else if($mark < 60) { $grade = 1.50;}
    else if($mark < 65) { $grade = 2.00;}
    else if($mark < 70) { $grade = 2.50;}
    else if($mark < 75) { $grade = 3.00;}
    else if($mark < 80) { $grade = 3.50;}
    else if($mark <= 100) { $grade = 4.00;}
    
    echo "<div class='alert alert-danger' 
    role='alert'> คะแนน $mark เกรด $grade</div>";
   
}else { echo "คะแนนไม่อยู่ในช่วง 0-100"; }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>
</html>