<!DOCTYPE html>
<html>
<head>
    <title>Activity Evaluation Result</title>
</head>
<body>
    <h2>Activity Evaluation Result</h2>
    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user's answers
        $favorite_color = $_POST['favorite_color'];
        $first_initial = strtoupper($_POST['first_initial']);
        $month_of_birth = $_POST['month_of_birth'];
        $color_preference = $_POST['color_preference'];
        $same_sex_person = $_POST['same_sex_person'];
        $favorite_number = $_POST['favorite_number'];
        $transport_preference = $_POST['transport_preference'];
        $water_preference = $_POST['water_preference'];
        $wish = $_POST['wish'];
        // Evaluate answers and provide interpretations
        switch ($favorite_color) {
            case 'red':
                echo "You are alert and your life is full of love.";
                break;
            case 'black':
                echo "You are conservative and aggressive.";
                break;
            case 'blue':
                echo "You are spontaneous and love kisses and affection from the ones you love.";
                break;
            case 'green':
                echo "Your soul is relaxed and you are laid back.";
                break;
            case 'yellow':
                echo "You are a very happy person and give good advice to those who are down.";
                break;
            default:
                echo "Invalid answer.";
        }
        echo "<br>";
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
                echo "You have a lot of love and friendships in your life. ";
                break;
            case 'L':
            case 'M':
            case 'N':
            case 'O':
            case 'P':
            case 'Q':
            case 'R':
                echo "You try to enjoy your life to the maximum & your love life is soon to blossom.";
                break;
            case 'S':
            case 'T':
            case 'U':
            case 'V':
            case 'W':
            case 'X':
            case 'Y':
            case 'Z':
                echo "You like to help others and your future love life looks very good.";
                break;
            default:
                echo "Invalid answer.";
        }
        
        echo "<br>";
        switch ($month_of_birth) {
            case 'January':
            case 'February':
            case 'March':
                echo "The year will go very well for you and you will discover that you fall in love with someone totally unexpected.";
                break;
            case 'April':
            case 'May':
            case 'June':
                echo "You will have a strong love relationship that will not last long but the memories will last forever.";
                break;
            case 'July':
            case 'August':
            case 'September':
                echo "You will have a great year and will experience a major life-changing experience for the good.";
                break;
            case 'October':
            case 'November':
            case 'December':
                echo "Your love life will not be great, but eventually you will find your soul mate.";
                break;
            default:
                echo "Invalid answer.";
        }
        
        echo "<br>";
        switch ($color_preference) {
            case 'black':
                echo "Your life will take on a different direction, it will seem hard at the time but will be the best thing for you, and you will be glad for the change.";
                break;
            case 'white':
                echo "You will have a friend who completely confides in you and would do anything for you, but you may not realize it.";
                break;
            default:
                echo "Invalid answer.";
        }
        echo "<br>";
        echo "This person is your best friend.";
        echo "<br>";
        echo "This is how many close friends you have in your lifetime.";
        echo "<br>";
        switch ($transport_preference) {
            case 'flying':
                echo "You like adventure.";
                break;
            case 'driving':
                echo "You are a laid-back person.";
                break;
            default:
                echo "Invalid answer.";
        }
        echo "<br>";
        switch ($water_preference) {
            case 'lake':
                echo "You are loyal to your friends and your lover and are very reserved.";
                break;
            case 'ocean':
                echo "You are spontaneous and like to please people.";
                break;
            default:
                echo "Invalid answer.";
        }
        echo "<br>";
        echo "This wish will come true only if you send this to five people in one hour. Send it to ten people, and it will come true before your next birthday.";
    }
    ?>
</body>
</html>
