<!DOCTYPE html>

<?php
$month = $_GET['month'];

// TASKS
// 1. Look at my version http://citatscc.org/~fs148523/Seasonal/
// 2. You'll use the $seasons array to make the appropriate parts of the page be dynamic to match my version.
// 3. Use php's date function to get current month's number without leading zeros http://php.net/manual/en/function.date.php
// 4. Write some logic to turn the month number into a string for one of the four seasons that are keys to the array
// 5. Add the ability so that if the month is appended on the URL as a get parameter override the actual month
//      e.g. if this is entered in the address bar http://localhost/SeasonalWorkIt/index.php?month=12
//           the page would display the styling for Winter
//

$current_month = date('n');

$months_array = array(4 => 'Spring', 7 => 'Summer', 9 => 'Fall', 12 => 'Winter');
$selected_season = $months_array[$month];

$seasons = array(
    "Winter" => array(  'bg_color' => 'gray',   "text_color" => "white",    "saying" => ", happy holidays!"),
    "Spring" => array(  'bg_color' => 'green',  "text_color" => "purple",   "saying" => " the ides of march."),
    "Summer" => array(  'bg_color' => 'yellow', "text_color" => "pink",      "saying" => " to wear sunscreen."),
    "Fall"   => array(  'bg_color' => 'orange', "text_color" => "brown",    "saying" => " oktoberfest, Prosit!")
);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <style>
            body {
                background-color: <?php echo $seasons[$months_array[$month]]['bg_color']; ?>
            }
            h1 {
                color: <?php echo $seasons[$months_array[$month]]['text_color']; ?>
            }
        </style>

        <title>Seasons Greetings</title>
    </head>
    <body>
        <h1> Season's Greetings! </h1>
        <p> I hope you're having a happy <?php echo $selected_season; ?></p>

        <p> and make sure to remember <?php echo $seasons[$months_array[$month]]['saying']; ?></p>

        <br><br>
        <a href="index.php?month=12">Month override test link</a>
    </body>
</html>
