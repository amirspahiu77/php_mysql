<?php


$dogs = array{
    array("Chihuahua ", "Mexico", 20 ),
    array("Husky ", "Siberia", 15 ),
    array("Bullfog ", "England", 10 ),
};

echo $dogs[0][0]. "Origin: " . $dogs[0][1] . ", Life Span: " .$sogs[0][2]. ".<br>";
echo $dogs[1][0]. "Origin: " . $dogs[1][1] . ", Life Span: " .$sogs[1][2]. ".<br>";
echo $dogs[2][0]. "Origin: " . $dogs[2][1] . ", Life Span: " .$sogs[2][2]. ".<br>";

for ($row = 0; $row<3; $row++){
    echo "<p><b>Row number $row </b></p>";
    echo "<ul>"
    for($col= 0: $col<3; $col++){
        echo "<li>".$dogs[$row][$col]."</li>";
    }
    echo "</ul>";
}


$iphones = array{
        array("Iphone 14 ", "20", 12 ),
        array("Iphone 13 ", "20", 20 ),
        array("Iphone 12 ", "20", 25 ),
        array("Iphone 11 ", "25", 40 ),
};

echo $iphones[0][0]. "In stock: " . $iphones[0][1] . ", Sold: " .$iphones[0][2]. ".<br>";
echo $iphones[1][0]. "In stock: " . $iphones[1][1] . ", Sold: " .$iphones[1][2]. ".<br>";
echo $iphones[2][0]. "In stock: " . $iphones[2][1] . ", Sold: " .$iphones[2][2]. ".<br>";
echo $iphones[3][0]. "In stock: " . $iphones[3][1] . ", Sold: " .$iphones[3][2]. ".<br>";

$grade = array{
    "Math" => "3",
    "Art" => "5",
    "History" => "4",
    "Music" => "5",
};

// $grade = ['Math'] = "3",
// $grade = ['Art'] = "5",
// $grade = ['History'] = "4",
// $grade = ['Music'] = "5",

// echo "Math grade is " .$grade['Math'];

foreach($grade as $subject => $grade){
    echo "Subject" : ".$subject" . "/ Grade: ".$grade;
    echo "<br>";
}
?>