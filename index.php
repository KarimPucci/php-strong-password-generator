<?php
    $characters = [
        'numbers' => '0123456789',
        'letters' => 'ABCDEFGHILMNOPQRSTUVWXYZabcdefghilmnopqrstuvwxyz',
        'specials' => '!?&%$<>^+-*/()[]{}@#_=',
    ];
//var_dump($characters)

function pswGenerator($characters){
    $psw = '';
    for($i = 0; $i < $_GET['charactersPsw']; $i++){
        $psw .= $charactersPsw[rand(0, count($charactersPsw))];
    }
    echo $psw;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>Password Generator</title>
</head>
<body>
    <div class="container d-flex justify content center mt-5">
        <div class="row g-3 align-items-center">
            <form action="./index.php" method="GET">
                <div class="col-auto">
                    <label class="form-label" for="inputPassword6">Inserisci il numero di caratteri della tua password</label>
                    <input class="form-control w-25"  type="number" placeholder="" name="charactersPsw" id="inputPassword6">
                </div>
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                    Must be 8-20 characters long.
                    </span>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary my-5">Generate</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>