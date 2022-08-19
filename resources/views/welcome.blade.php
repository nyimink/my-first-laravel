<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Hello 1 + 1 is <?php echo 1+1 ?></h1>
        <ul>
            <?php 
                for ($x=0; $x < 10 ; $x++) { 
                    echo "<li>$x</li>";
                }

                $str = "A quick brown fox jumps.";

                echo str_replace("quick","fast",$str);

                echo substr($str,0,17);

                echo "<br>";

                $users = [
                    ["name" => "Alice","age" => "23"],
                    ["name" => "Bob","age" => "24"],
                    ["name" => "Tom","age" => "25"],
                ];

                print_r($users);
                echo "<br>";

                $info = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

                echo "<br>";
                

                foreach($info as $x => $val) {
                    echo "$x = $val<br>";
                }

                print_r($users[0]);
                echo($users[0]["age"]);


                $smth = ["Nmk","23"];
                [$name1,$age] = $smth;
                
                echo $name1;
                echo "<br><br>";
                print_r($smth);
                echo "<br><br>";


                $test = ["name" => "ALicce", "age" => "22"];
                ["name" => $test_name, "age" => $test_age] = $test;
                echo $test_name;
                echo "<br><br><br><br>";
                echo count($users);
                array_pop($users);
                print_r($users);

                echo "<br><br><br><br>";
                echo "<br><br><br><br>";

                $key = array_keys($info);
                $value = array_values($info);
                print_r($key);
                echo "<br><br><br><br>";
                print_r($value);
            ?>
        </ul>
    </body>
</html>
