<?php
  // This is a single line comment

  /*
    This is a 
    multi-line comment
  */

  ini_set('display_errors', 1);
  error_reporting(E_All);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sanchez&display=swap" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <title>Welcome to week 9</title>
</head>
<body>
    <h1 class="hidden">Welcome to PHP</h1>
    <a class="hidden" href="#content">Skip to content</a>
    <header>
    </header>
    <main id="content">
        <section>
          <h2>Integers</h2>
            <p>
              <?php  
                $int1 = 12;
                $int2 = 12;
                $problem = ($int1 * $int2) - 12 * 4;
                echo "Yup, look mom I can do math! {$problem}";
              ?>
            </p>

            <h2>Integers & Functions</h2>
            <p>
              <?php  
                echo "Exponential: ".pow(9, 250)."<br>"; // 기하급수적인 
                echo "Random: ".rand()."<br>";
                echo "Control Random: ".rand(1, 100)."<br>";
              ?>
            </p>

            <h2>Increments and Decrements</h2>
            <p>
              <?php  
                $int3 = 20;
                $int4 = 3;

                echo $int3+=2;
                echo "<br>";
                echo $int3-=4;
                echo "<br>";
                echo $int3*=1.13;
                echo "<br>";
                echo $int3/=2;
                echo "<br>";
                $int4++; // 1이 더해짐.
                echo $int4;
                echo "<br>";
                $int4--; // 1이 마이너스됨.
                echo $int4;
                echo "<br>";
                echo "Round: ".round($int3, 1); // 1자리 수까지 반올림한다.
                echo "<br>";
                echo "Round: ceil ".ceil($int3); // 그냥 무조건 반올림한다.
                echo "<br>";
                echo "Round: floor ".floor($int3); // 그냥 소수점을 버린다.
              ?>
            </p>

            
            <h2>Arrays</h2>
            <p>
              <?php  
                $numbers = array(4, 12, 24, 30);
                // $numbers = [1, 2, 3]; this is the short hand way.
                echo $numbers[0]; // array 를 쓸 경우에는 몇 번 인덱스를 출력할 지 써줘야함.
                echo "<br>";
                $sandbox = array(6, "New York", array(1, 2, 3));
                echo $sandbox[1];
                echo "<br>";
                echo $sandbox[2][1]; // array 안에 array가 있을 경우, 두 번 써서 나타내줘야함.
                echo "<br>";
                echo print_r($sandbox); // error 가 떴을 때, 이것을 쓰면, 뭐가 잘못됐는지 알 수 있음.
                // Be careful with this!!!
              ?>
            </p>

            <h2>Associate Arrays</h2>
            <p>
              <?php  
                $assoc = array("fname" => "First Name", "lname" => "Last Name");
                echo $assoc["fname"]." ".$assoc["lname"];
              ?>
            </p>

            <h2>Array Functions</h2>
            <p>
              <?php  
                $numbersArray = array(12, 4, 30, 24, 16);
                echo print_r($numbersArray)."<br>";
                array_push($numbersArray, 55); // add value to array.
                //          어디에, 뭐를 더할게요.
                echo print_r($numbersArray)."<br>";
                // Array ( [0] => 12 [1] => 4 [2] => 30 [3] => 24 [4] => 16 [5] => 55 ) 1 라고 출력되는데
                // 끝에 1은 true & false 에 사용됨.
                echo count($numbersArray)."<br>"; // 몇 개의 vaule가 있는 지 알려줌.
                echo max($numbersArray)."<br>"; // 제일 큰 value 가 얼마인지
                sort($numbersArray); // 숫자의 크기대로 순서대로 정리됨.
                echo print_r($numbersArray)."<br>"; 
                rsort($numbersArray); // reversal
                echo print_r($numbersArray)."<br>"; 
                echo "Implode: ".$string = implode(", ", $numbersArray); // "안에 들어간 거를", 이 array 사이사이에 넣어주세요.
              ?>
            </p>

            <h2>Booleans</h2>
            <p>
              <?php  
                $test1 = true;
                $test2 = false;
                echo $test1."<br>";
                echo $test2."<br>";
                // true 일 때는 1, false 일 때는 아무것도 안뜬다.
                echo "True: ".$test1."<br>";
                echo "False: ".$test2."<br>";
              ?>
            </p>

            <h2>NULL/ISSET/EMPTY</h2>
            <p>
              <?php  
                $test3 = null; // null
                $test4 = ""; // empty string
                $test5 = 0;
                
                // if true, 1
                //if false, nothing
                echo "Test 1(null): ".is_null($test3)."<br>";
                echo "Test 2(\"\"): ".is_null($test4)."<br>";
                echo "Test 3(undefined): ".is_null($test3)."<br>";
                // you can get the error, but undefined considers also null.
                echo "<br>";

                // Isset
                echo "Test 4(null): ".isset($test3)."<br>";
                echo "Test 5(\"\"): ".isset($test4)."<br>";
                echo "Test 6(undefined): ".isset($test3)."<br>";
                echo "Test 7(zero): ".isset($test5)."<br>";
                // only empty integers are true
                echo "<br>";

                // Empty
                $test6 = "none";
                echo "Test 8(null): ".empty($test3)."<br>";
                echo "Test 9(\"\"): ".empty($test4)."<br>";
                echo "Test 10(undefined): ".empty($test3)."<br>";
                echo "Test 11(zero): ".isset($test5)."<br>";
                // zero is also empty
                echo "Test 12(none): ".isset($test6)."<br>";
                // 0, 0.0, "0" come back as empty
                echo "<br>";
              ?>
            </p>

            <h2>Type Casting</h2>
            <p>
              <?php  
                $number = 10;
                echo gettype($number)."<br>";
                $texts = "Monday Night Football";
                echo gettype($texts)."<br>";
                // gettype: I know what type of variable I'm using know.
                $num = "10";
                echo gettype($num)."<br>"; // String
                settype($num, "int"); // (이거를, integer로 바꿔주세요.)
                echo gettype($num)."<br>"; // Integer
              ?>
            </p>

            <h2>Conditions</h2>
            <p>
              <?php  
                $one = 4;
                $two = 6;

                if($one < $two) {
                  echo "It is really....";
                } else if($one > $two) {
                  echo "Maybe...";
                } else {
                  echo "They are equal";
                }
              ?>
            </p>


            <h2>Operators</h2>
            <p>
              <?php  
                /* 
                  Assign: =
                  Equal to: ==
                  Identical to: === // 완전히 동일할 경우
                  Compare: >< >= <= <>
                  Not equal: !=
                  Not Identical: !==

                  Logical
                  And: &&
                  OR: ||
                  NOT: !
                */
              ?>

              <h2>Switch Statement</h2>
              <p>
                <?php

                  $testcase = 99;

                  switch($testcase) {
                    case 0:
                      echo "Testcase is 0<br>";
                      break;
                    case 25:
                      echo "Testcase is 25<br>";
                      break;
                    case 75:
                      echo "Testcase is 75<br>";
                      break;
                    case 99:
                    case 100:
                      echo "Testcase is 99 or 100<br>";
                      break;
                      // 만약에 case를 두 번 연속으로 썼다면, 둘이 combined 됨.
                  }

                ?>
              </p>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>