<?php 
if(isset($_POST['ans'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $oprt = $_POST['oprt'];
    
    if($oprt =='+'){
        $answer = $n1 + $n2;
    }
    else if($oprt =='-'){
        $answer = $n1 - $n2;
    }
    else if($oprt =='/'){
        $answer = $n1 / $n2;
    }
    else if($oprt =='*'){
        $answer = $n1 * $n2;
    }
    else{
        echo "<script>alert('Wrong Oprerator')</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="card mt-3" style="width:30em">
            <div class="card-header bg-success text-white">Arithemetic Operations</div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="n1" class="form-label">First Number</label>
                                <input type="number" class="form-control" id="n1" name="n1" required>
                            </div>
                            <div class="mb-3">
                                <label for="n1" class="form-label">Operator</label>
                                <input type="text" class="form-control" id="oprt" name="oprt" required>
                            </div>
                            <div class="mb-3">
                                <label for="n2" class="form-label">Second Number</label>
                                <input type="number" class="form-control" id="n2" name="n2" required>
                            </div>

                            <div class="mb-3">
                                <label for="n2" class="form-label">Answer</label>
                                <input type="number" class="form-control" id="answer" value="<?php echo $answer ; ?>" name="answer" readonly>
                            </div>
                            <button type="submit" name="ans" class="btn btn-primary">Submit</button>
                            <button type="reset" name="ans" class="btn btn-primary">clear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>