<?php
/* Task - 1
=================
function printEvenLoop prints all even numbers from 1 to 20 and steps by 2
*/

function printEvenForLoop($start_at=1, $end_at=20, $step_as=2){
    if($start_at % 2 == 1) $start_at++;
    for($i = $start_at; $i <= $end_at; $i = $i+$step_as){
        if(($i % 2) == 0) echo $i.PHP_EOL;
    }
}
function printEvenWhileLoop($start_at=1, $end_at=20, $step_as=2){
    if($start_at % 2 == 1) $start_at++;
    $i = $start_at;
    while($i <= $end_at){
        if(($i % 2) == 0) echo $i.PHP_EOL;
        $i += $step_as;
    }
}
function printEvenDoWhileLoop($start_at=1, $end_at=20, $step_as=2){
    if($start_at % 2 == 1) $start_at++;
    $i = $start_at;
    do{
        if(($i % 2) == 0) echo $i.PHP_EOL;
        $i += $step_as;
    }
    while($i <= $end_at);
}

/* Task - 2
=================
function skipFiveMultiples prints all numbers from 1 to 50 which are not multiples of 5
*/

function skipFiveMultiples() : void{
    for($i = 1; $i <= 50; $i++){
        if($i % 5 == 0) continue;
        echo $i.PHP_EOL;
    }
}

/* Task - 3
=================
function fibonacciLessThan100 prints first 10 numbers from the fibonacci series, the loop is broken if the number is greater than 100
*/

function fibonacciLessThan100(){
    $fib_0 = 0;
    $fib_1 = 1;

    for($i = 1; $i <= 10; $i++){
        if($i == 1) { echo $fib_0.PHP_EOL; }
        else if($i == 2) { echo $fib_1.PHP_EOL; }
        else {
            $fib_n = $fib_0 + $fib_1;
            if($fib_n > 100) break;
            echo $fib_n.PHP_EOL;
            $fib_0 = $fib_1;
            $fib_1 = $fib_n;
        }   
    }
}


/* Task - 4
=================
function fibonacciLoop prints first n numbers from the fibonacci series, the value of n is default 15 also it can be increased as required
*/

function fibonacciLoop($n = 15){
    $fib_0 = 0;
    $fib_1 = 1;

    for($i = 1; $i <= $n; $i++){
        if($i == 1) { echo $fib_0.PHP_EOL; }
        else if($i == 2) { echo $fib_1.PHP_EOL; }
        else {
            $fib_n = $fib_0 + $fib_1;
            echo $fib_n.PHP_EOL;
            $fib_0 = $fib_1;
            $fib_1 = $fib_n;
        }   
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Module 2 Assignment</title>
  </head>
  <body class="bg-light">
    <div class="container bg-white mt-2">
        <h2 class="text-center mb-3"><u>Module-2 : Assignment Solutions</u></h2>
        <div class="row gx-3">
            <div class="col-lg-6 p-2 border mb-2">
                <h4><?php echo "<p><u>Task-1 Test For Loop:</u></p>";?></h4>
                <p><?php printEvenForLoop(1,20,2);?></p>
            </div>
            
            <div class="col-lg-6 p-2 border mb-2">
                <h4><?php echo "<p><u>Task-1 Test While Loop:</u></p>";?></h4>
                <p><?php printEvenWhileLoop(1,20,2);?></p>
            </div>
            
            <div class="col-lg-6 p-2 border mb-2">
                <h4><?php echo "<p><u>Task-1 Test Do While Loop:</u></p>";?></h4>
                <p><?php printEvenDoWhileLoop(1,20,2);?></p>
            </div>
            
            <div class="col-lg-6 p-2 border mb-2">
                <h4><?php echo "<p><u>Task-2 Test:</u></p>";?></h4>
                <p><?php skipFiveMultiples();?></p>
            </div>
            
            <div class="col-lg-6 p-2 border mb-2">
                <h4><?php echo "<p><u>Task-3 Test:</u></p>";?></h4>
                <p><?php fibonacciLessThan100();?></p>
            </div>
            
            <div class="col-lg-6 p-2 border mb-2">
                <h4><?php echo "<p><u>Task-4 Test:</u></p>";?></h4>
                <p><?php fibonacciLoop();?></p>
            </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>











