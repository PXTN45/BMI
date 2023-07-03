<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>showBMI</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="/Style.css">
</head>
<body>
<?php
$weight = $_POST['weight'];
$height = $_POST['height'];
if ($height > 100) {
    $height = $height/100;
}
$bmi = $weight / ($height * $height);
$result = number_format($bmi,2);
// echo $result;
?>
<nav class="navbar bg-dark" data-bs-theme="dark" navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-4"> 

            </div>
            <div class="col-4"> 
                <center>
            <div class="card" style="width: 15rem; high: 15rem;">
                <div class="card-body">
                    <?php
                        echo "BMI : " .$result; 
                        ?> <br>   
                        <?php
                        if ($bmi < 18.50) {
                            print "ผอม";
                        }else if ($bmi > 18.50 || $bmi < 22.90) {
                            print "ปกติ";
                        }else if ($bmi > 23 || $bmi < 24.90) {
                            print "ท้วม";
                        }else if ($bmi > 25 || $bmi < 29.90) {
                            print "อ้วน";
                        }else if ($bmi > 30) {
                            print "อ้วนมาก";
                        }
                    ?>
                </div>
                </center>
            </div>
            </div>
            <div class="col-4">   </div>
        </div>
    </div>
</body>

</html>