<?php require "valid.php"?>
<?php
$errors =[
    "user-name"=>"",
    "email"=>"",
    "password"=>"",
    "confirm-pass"=>"",
    "cv-url"=>""
];

$info =[
    "user-name"=>"",
    "email"=>"",
    "password"=>"",
    "confirm-pass"=>"",
    "cv-url"=>""
];
if($_SERVER['REQUEST_METHOD']==='POST'){
    $info=array_merge($info,$_POST);
  validate($info,$errors);
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   

    <title>Form_Validation</title>
</head>
<body>
    <div class="container mt-5">
        <form action="" method="POST" class="form-group">
            <div class="row">
                <div class="col">
                    <label for="user-name">username</label>
                    <input class="form-control <?php echo $errors['user-name']?'is-invalid':''?>" type="text" name="user-name" id="user-name" placeholder="Min 6 and Max 16 char" value="<?php echo $info['user-name']?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['user-name']?>
                    </div>
                </div>
                <div class="col">
                    <label for="email">Email</label>
                    <input class="form-control <?php echo $errors['email']?'is-invalid':''?>" type="text" name="email" id="email" placeholder="Enter Your Email" value="<?php echo $info['email']?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['email']?>
                    </div>
                </div>
             

            </div>
            <div class="row mt-5">
                <div class="col">
                    <label for="password">Password</label>
                    <input class="form-control <?php echo $errors['password']?'is-invalid':''?>" type="password" name="password" id="password" placeholder="Enter Password">
                    <div class="invalid-feedback">
                        <?php echo  $errors['password']?>
                    </div>
                </div>
                <div class="col">
                    <label for="confirm-pass">Repeat Password</label>
                    <input class="form-control <?php echo $errors['confirm-pass']?'is-invalid':''?>" type="password" name="confirm-pass" id="confirm-pass" placeholder="repeat password">
                    <div class="invalid-feedback">
                        <?php echo  $errors['confirm-pass']?>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <label for="cv-url">Your CV Link</label>
                    <input class="form-control <?php echo $errors['cv-url']?'is-invalid':''?>" type="text" name="cv-url" id="cv-url" placeholder="Enter CV link " value="<?php echo $info['cv-url']?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['cv-url']?>
                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col">
                    <input class="form-control btn btn-primary" type="submit" value="Register">
                </div>
            </div>

           
        </form>
    </div>

</body>
</html>