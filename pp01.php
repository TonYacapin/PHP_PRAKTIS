<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Evaluation Result</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
        <h2 class="text-2xl font-bold mb-4">Activity Evaluation Result</h2>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
            $favorite_color = $_POST['favorite_color'];
            $first_initial = strtoupper($_POST['first_initial']);
            $month_of_birth = $_POST['month_of_birth'];
            $color_preference = $_POST['color_preference'];
            $same_sex_person = $_POST['same_sex_person'];
            $favorite_number = $_POST['favorite_number'];
            $transport_preference = $_POST['transport_preference'];
            $water_preference = $_POST['water_preference'];
            $wish = $_POST['wish'];


            $first_initial = ucfirst($first_initial);

      
            echo "<p>Your favorite color: <span class='font-bold'>$favorite_color</span></p>";
            echo "<p>Your first initial: <span class='font-bold'>$first_initial</span></p>";
            echo "<p>Your month of birth: <span class='font-bold'>$month_of_birth</span></p>";
            echo "<p>Your color preference: <span class='font-bold'>$color_preference</span></p>";
            echo "<p>Your preference for someone of the same sex: <span class='font-bold'>$same_sex_person</span></p>";
            echo "<p>Your favorite number: <span class='font-bold'>$favorite_number</span></p>";
            echo "<p>Your preferred mode of transport: <span class='font-bold'>$transport_preference</span></p>";
            echo "<p>Your preferred type of water: <span class='font-bold'>$water_preference</span></p>";
            echo "<p>Your wish: <span class='font-bold'>$wish</span></p>";

       
            echo "<h3 class='mt-4 mb-2 text-lg font-semibold'>Interpretations:</h3>";

            switch ($favorite_color) {
                case 'red':
                    echo "<p>You are alert and your life is full of love.</p>";
                    break;
                case 'black':
                    echo "<p>You are conservative and aggressive.</p>";
                    break;
                case 'blue':
                    echo "<p>You are spontaneous and love kisses and affection from the ones you love.</p>";
                    break;
                case 'green':
                    echo "<p>Your soul is relaxed and you are laid back.</p>";
                    break;
                case 'yellow':
                    echo "<p>You are a very happy person and give good advice to those who are down.</p>";
                    break;
                default:
                    echo "<p>Invalid answer.</p>";
            }

            switch ($first_initial) {
                case 'A':
                case 'B':
                case 'C':
                case 'D':
                case 'E':
                case 'F':
                case 'G':
                case 'H':
                case 'I':
                case 'J':
                case 'K':
                    echo "<p>You have a lot of love and friendships in your life.</p>";
                    break;
                case 'L':
                case 'M':
                case 'N':
                case 'O':
                case 'P':
                case 'Q':
                case 'R':
                    echo "<p>You try to enjoy your life to the maximum & your love life is soon to blossom.</p>";
                    break;
                case 'S':
                case 'T':
                case 'U':
                case 'V':
                case 'W':
                case 'X':
                case 'Y':
                case 'Z':
                    echo "<p>You like to help others and your future love life looks very good.</p>";
                    break;
                default:
                    echo "<p>Invalid answer.</p>";
            }
            
            switch ($month_of_birth) {
                case 'January':
                case 'February':
                case 'March':
                    echo "<p>The year will go very well for you and you will discover that you fall in love with someone totally unexpected.</p>";
                    break;
                case 'April':
                case 'May':
                case 'June':
                    echo "<p>You will have a strong love relationship that will not last long but the memories will last forever.</p>";
                    break;
                case 'July':
                case 'August':
                case 'September':
                    echo "<p>You will have a great year and will experience a major life-changing experience for the good.</p>";
                    break;
                case 'October':
                case 'November':
                case 'December':
                    echo "<p>Your love life will not be great, but eventually you will find your soul mate.</p>";
                    break;
                default:
                    echo "<p>Invalid answer.</p>";
            }
            
            switch ($color_preference) {
                case 'black':
                    echo "<p>Your life will take on a different direction, it will seem hard at the time but will be the best thing for you, and you will be glad for the change.</p>";
                    break;
                case 'white':
                    echo "<p>You will have a friend who completely confides in you and would do anything for you, but you may not realize it.</p>";
                    break;
                default:
                    echo "<p>Invalid answer.</p>";
            }

            echo "<p>This person is your best friend: <span class='font-bold'>$same_sex_person</span></p>";
            echo "<p>This is how many close friends you have in your lifetime: <span class='font-bold'>$favorite_number</span></p>";

            switch ($transport_preference) {
                case 'flying':
                    echo "<p>You like adventure.</p>";
                    break;
                case 'driving':
                    echo "<p>You are a laid-back person.</p>";
                    break;
                default:
                    echo "<p>Invalid answer.</p>";
            }

            switch ($water_preference) {
                case 'lake':
                    echo "<p>You are loyal to your friends and your lover and are very reserved.</p>";
                    break;
                case 'ocean':
                    echo "<p>You are spontaneous and like to please people.</p>";
                    break;
                default:
                    echo "<p>Invalid answer.</p>";
            }

            echo "<p class='mt-4'><span class='font-bold'>Note:</span> This wish will come true only if you send this to five people in one hour. Send it to ten people, and it will come true before your next birthday.</p>";
        }
        ?>
    </div>
</body>
</html>
