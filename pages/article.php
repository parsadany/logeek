<?php
include 'router.php';
// Data Type Handling
// Lists are iterable just using index and calls nothing
// Other types are iterable and calls the type template
// And they also hast "title" key.
// independent of the types, the value of the key "data" is allways an array()
// tables can be included but can't include some other structure.
$contents = array(
    "type" => "article",
    "title" => "Test Article",
    "data" => array(
        "written_by" => "SomeBody", 
        "image" => array( 
        "/shared/personal-images/sample-image.jpg",
        "/shared/personal-images/sample-image2.png",
        ),
        "body" => "Some Body :D",
        "last_update" => "some date"
    ),
);
$meta_data = array(
    "",
    "",
);
include ROOT . "main.php";
?>