<?php
    $season = array("Summer","Winter","Autumn","Rainy");
    foreach($season as $element){
        echo "$element";
        echo "<br>";
    }
?>

<?php
    $employee = array(
        "Name" => "Alex",
        "Email" => "alex@gmail.com",
        "Age" => 21,
        "Gender" => "Male"
    );
    echo "<hr color='red' ";
    foreach($employee as $key => $element){
        echo $key." : " .$element;
        echo "<br>";
    }
?>