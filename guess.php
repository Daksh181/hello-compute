<!DOCTYPE html>
<html>
<head>
    <title>Guessing Game - Daksh Chovatiya</title>
</head>
<body>
    <h1>Welcome to the Guessing Game</h1>
    <?php
        // ---- CHANGE THIS VALUE ----
        $correctnumber = 42;  // Autograder will test with random value, update this as needed

        // Check if guess parameter exists
        if (!isset($_GET['guess'])) {
            echo "Missing guess parameter";
        } else {
            $guess = $_GET['guess'];

            // Case 1: empty value like ?guess=
            if (strlen($guess) < 1) {
                echo "Your guess is too short";
            }
            // Case 2: non-numeric value
            else if (!is_numeric($guess)) {
                echo "Your guess is not a number";
            }
            else {
                // Convert to integer
                $guess = intval($guess);

                if ($guess < $correctnumber) {
                    echo "Your guess is too low";
                } else if ($guess > $correctnumber) {
                    echo "Your guess is too high";
                } else {
                    echo "Congratulations - You are right";
                }
            }
        }
    ?>
</body>
</html>
