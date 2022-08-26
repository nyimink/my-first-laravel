<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Testing 123</title>

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
        
        <?php
        $x = 3;
        $y = $x++;
        echo $x;

        echo "<br><br>";

        $haha = "";
        echo $haha ?: "Unknown";


        $time = date("h");
        if ($time < 6 && $time > 18) {
            echo "Day time";
        } else {
            echo "Night Time";
            }


            $day = date("D");

            if ($day === "Sun") {
                echo "Today is Sunday";
            } elseif ($day === "Sat") {
                echo "Today is Saturday";
            } else {
                echo "Today is weekday";
            }


            $day1 = date("D");

            switch ($day1) {
                case 'Sun':
                case 'Sat':
                    echo "Today is weekend";
                    break;
                case 'Fri':
                    echo "TGIF";
                    break;
                
                default:
                    echo "Today is weekday";
                    break;
            }

            $day2 = date("D");

            $result = match($day2) {
                "Sat","Sun" => "Weekend",
                "Fri" => "TGIF",
                default => "Weekday"
            };



            echo $result;

            echo "<br><br><br>";
            
            $num = [12, 25, 27, -29, 50];

            $i = 0;
            $numb = 0;

            while ($i < count($num)) {
                if ($num[$i] < 0) {
                    
                    $i++;
                    break;
                }
                
                
                $numb += $num[$i];
                $i++;
            }

            echo $numb;

            $name = "Alice";
            function hello(&$n) {       // &$n => pass by reference
                $n = "bob";
                echo "Hello $n";
            }
            hello($name);

            echo $name;

            $wow = function() use ($name) {   // pass by value
                $name = "Bob";
                echo "Hello $name";
            };

        ?>
        
        
    </body>
</html>
