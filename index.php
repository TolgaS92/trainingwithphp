<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Training</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="alert alert-primary mt-5">
            <?php 
                // One time Message says "hello"
            $x= 5 +15 +5;
            $color=" blue";
            echo $x." "; 
            echo "Result in".$color;
            ?>
        </div>
        <div class="alert alert-secondary mt-5">
            <?php 
                // Creating variable
            $_txt="PHP";
            $x=5;
            $y=7.5;
            echo "I liked $_txt!<br>";
            $x=10;
            echo $x;
            ?>
        </div>
        <div class="alert alert-danger mt-5">
            <?php 
            $z=8; // Global Variable, it doesn't work in the function(can't call)
            function Test() {
                $z=15;  // Local Variable
                echo "<p>Catching the X variable through the function:$z</p>";
            }
            Test(); // Running the function
            echo "<p>Catching the X variable without the function:$z</p>";
            ?>
        </div>
        <div class="alert alert-warning mt-5">
            <?php 
            $s=10;
            $t=20;
            function GlobalCallTest() {
                $GLOBALS['s']=$GLOBALS['t']+$GLOBALS['s']; // We can catch the variable with $GLOBALS['variable name]
            }
            GlobalCallTest(); // Running the function
            echo $s;
            ?>
        </div>
        <div class="alert alert-info mt-5">
            <?php 
            function StaticCallTest() {
                static $f=45; // Holds the variable in the storage/mind
                echo $f;
                $f++;
            }
            StaticCallTest(); // Running the function
            echo "<br>";
            StaticCallTest(); // Running the function
            echo "<br>";
            StaticCallTest(); // Running the function
            ?>
        </div>
        <div class="alert alert-success mt-5">
            <?php 
                print "<h2>Php is Fun!</h2>";
                print "I'm learning PHP<br>";
                $fun="Learn to PHP";
                $fun2="is so fun!";
                echo "I knew it ".$fun." ".$fun2."<br>";
            ?>
        </div>
        <div class="jumbotron mt-3">
            <?php
                $text1="Hello PHP!";
                $text2='Hello PHP!';
                $num=4;
                $num2=32.65;
                $boo=true;
                $boo2=false;
                $languages=array("HTML","CSS","JavaScript","PHP","NodeJS", "React", 100);
                echo $text1."<br>".$text2;
                echo var_dump($text1);  // var_dump tells us the type
                echo var_dump($num);    // var_dump tells us the type
                echo var_dump($num2);    // var_dump tells us the type
                echo var_dump($boo);    // var_dump tells us the type
                echo var_dump($languages);    // var_dump tells us the type
                echo var_dump($languages[3]);    // var_dump tells us the type
                echo $languages[3];
            ?>
        </div>
        <div class="jumbotron mt-1">
            <?php
                class Car { // Class calls
                    function Car(){
                        $this->model="Broncos";
                    }
                }
            $pickCar= new Car();
            echo $pickCar->model;
            ?>
        </div>
        <div class="container">
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <?php 
                    $texts=strlen("Hello PHP"); //String methods strlen = length
                    echo $texts;
                    echo "<br>";
                    echo "<br>";
                    $texts1=str_word_count("Learning PHP day by day"); //String methods word counts = how many words!
                    echo $texts1;
                    echo "<br>";
                    echo "<br>";
                    $texts1=strrev("TACOCAT"); //String methods REVERSE = reverse the sentence or words!
                    echo $texts1;
                    echo "<p>the problem is tacocat is the same tacocat :) </p>";
                    echo "<br>";
                    echo "<br>";
                    $texts1=strpos("Looking forward to learn PHP!", "to"); //String methods stringpos gives with index number
                    echo $texts1;
                    echo "<br>";
                    echo "<br>";
                    $texts1=str_replace("PHP", "TypeScript","Looking forward to learn PHP!"); //String methods replaces the given word with!
                    echo $texts1;
                    echo "<br>";
                    echo "<br>";
                    $texts1=addcslashes("Looking forward to learn PHP!", "PHP"); //String methods adds slash between given letters!
                    echo $texts1;
                    echo "<br>";
                    echo "<br>";
                    $texts1=addslashes('Looking forward to learn "PHP"!'); //String methods adds slash between given " "!
                    echo $texts1;
                    echo "<br>";
                    echo "<br>";
                    $texts1=bin2hex('Looking forward to learn "PHP"!'); //String methods turns into hex system could be used for crypting!
                    echo $texts1;
                    echo "<br>";
                    echo "<br>";
                    $texts1=('Looking forward to learn PHP!');
                    echo chop($texts1, "to learn PHP!"); // chops the rest of the sentences you picked
                    echo "<br>";
                    echo "<br>";
                    $texts1=('Looking forward to learn PHP!');
                    echo $texts1."<br>";    // turns into ASCII table elements!!
                    echo chr(52)."<br>";    // Decimal
                    echo chr(052)."<br>";   // Octal
                    echo chr(0x52)."<br>";  // Hex = Hexadecimal
                    ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <?php 
                        $texts1=('Looking forward to learn PHP!');  // urlencode or undecode the given word or sentences
                        $encString=convert_uuencode($texts1);
                        echo $encString."<br>";
                        $decString=convert_uudecode($encString);
                        echo $decString."<br>";
                        $color="red";
                        $text='Looking forward to learn PHP!';
                        echo crc32($text)."<br>";
                        echo "<br>";
                        $texts1=('Looking forward to learn PHP!');  // how to use explode method for example it can be used for DATE
                        print_r(explode(" ", $texts1));
                    ?>
                    <p> Rose's are <?=$color?>.</p> <!-- we can print without the echo -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <?php 
                        $country="USA";  //Creates the text document and prints the given info in it!
                        $number=50;
                        $file=fopen("test.txt","w");
                        echo fprintf($file, "In the %s flag there are %u stars.", $country, $number);
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>