<?php
// Array with names
// $a[] = "Anna";
// $a[] = "Brittany";
// $a[] = "Cinderella";
// $a[] = "Diana";
// $a[] = "Eva";
// $a[] = "Fiona";
// $a[] = "Gunda";
// $a[] = "Hege";
// $a[] = "Inga";
// $a[] = "Johanna";
// $a[] = "Kitty";
// $a[] = "Linda";
// $a[] = "Nina";
// $a[] = "Ophelia";
// $a[] = "Petunia";
// $a[] = "Amanda";
// $a[] = "Raquel";
// $a[] = "Cindy";
// $a[] = "Doris";
// $a[] = "Eve";
// $a[] = "Evita";
// $a[] = "Sunniva";
// $a[] = "Tove";
// $a[] = "Unni";
// $a[] = "Violet";
// $a[] = "Liza";
// $a[] = "Elizabeth";
// $a[] = "Ellen";
// $a[] = "Wenche";
// $a[] = "Vicky";

    include_once("php/database.php");

    // get the q parameter from URL
    $q = $_REQUEST["q"];

    $sql = "SELECT id,model FROM car_info where model LIKE '%$q%'";
    $result = $conn->query($sql);

    $hint = "";

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $a[] = array(
                'modelname' => $row['model'],
                'id' => $row['id']
            );
        }
    }else{
        $a[] = array(
            'modelname' => '-1',
            'id' => '-1'
        );
    }
    echo json_encode($a);
    $conn->close();
    // lookup all hints from array if $q is different from "" 
    // if ($q !== "") {
    //     $q = strtolower($q);
    //     $len=strlen($q);
    //     foreach($a as $name) {
    //         if (stristr($q, substr($name, 0, $len))) {
    //             if ($hint === "") {
    //                 $hint = "<a href='' class='collection-item black-text'>$name</a>";
    //             } else {
    //                 $hint .= "<a href='' class='collection-item black-text'>$name</a>";
    //             }
    //         }
    //     }
    // }

    // // Output "no suggestion" if no hint was found or output correct values 
    // echo $hint === "" ? "<a class='collection-item black-text'>no suggestion</a>" : $hint;
?>