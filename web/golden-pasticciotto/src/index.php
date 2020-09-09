<?php

    $flag = "slntCTF{g0ld3n_pa2t1cc10tt0_sh1t_s3cur1ty}";
    if(strcmp($_SERVER["REQUEST_METHOD"], "GET") === 0){
        setcookie("money", null, -1, "/");
        setcookie("money", 10);
        $_COOKIE["money"] = 10;
    }
    else if(strcmp($_SERVER["REQUEST_METHOD"], "POST") === 0){
        $message = "";
        if(isset($_POST["id"]) && isset($_POST["cost"])){
            if($_POST["id"] == 0){
                //bronze
                $message = ($_COOKIE["money"] >= $_POST["cost"]) ? "YOU PURCHASED A BRONZE PASTICCIOTTO" : "NOT ENOUGH MONEY" ;
            }
            else if($_POST["id"] == 1){
                //silver
                $message = ($_COOKIE["money"] >= $_POST["cost"]) ? "YOU PURCHASED A SILVER PASTICCIOTTO" : "NOT ENOUGH MONEY" ;
            }
            else if($_POST["id"] == 2){
                //golden
                $message = ($_COOKIE["money"] >= $_POST["cost"]) ? "YOU PURCHASED A GOLDEN PASTICCIOTTO WITH ".$flag : "NOT ENOUGH MONEY" ;
            }

            echo $message;
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Unislnt Bakery</title>
    <style>
        .card {display:inline-block;}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-between m-4">
            <h1>Unislnt Bakery, what do you want?</h1>
            <h1>Your credit: <?php echo $_COOKIE["money"] . "€" ?></h1>
        </div>
        <div class="row mt-4">
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-title">Bronze pasticciotto</div>
                        <div class="card-text">10 €</div>
                        <form action="" method="POST" class="mt-2">
                            <input type="hidden" name="id" value="0">
                            <input type="hidden" name="cost" value="10">
                            <button type="submit" class="btn btn-primary">PURCHASE</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-title">Silver pasticciotto</div>
                        <div class="card-text">100 €</div>

                        <form action="" method="POST" class="mt-2">
                            <input type="hidden" name="id" value="1">
                            <input type="hidden" name="cost" value="100">
                            <button type="submit" class="btn btn-primary">PURCHASE</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-title">Gold pasticciotto</div>
                        <div class="card-text">1000 €</div>
                        <form action="" method="POST" class="mt-2">
                            <input type="hidden" name="id" value="2">
                            <input type="hidden" name="cost" value="1000">
                            <button type="submit" class="btn btn-primary">PURCHASE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>