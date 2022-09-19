<?php
include 'router.php';
// Data Type Handling
// Lists are iterable just using index and calls nothing
// Other types are iterable and calls the type template
// And they also hast "title" key.
// independent of the types, the value of the key "data" is allways an array()
// tables can be included but can't include some other structure.
$contents = array(
    "type" => "table",
    "title" => "Test Table",
    "data" => array(
        "columns" => array(
            "Title" => "text",
            "Attachment" => "link",
            "Image" => "img"
        ),
        "rows" => array(
            array(
                "Title" => "row title 1",
                "Attachment" => "/src/personal-images/sample-image.jpeg",
                "Image" => "/src/personal-images/sample-image.jpeg",
            ),
            array(
                "Title" => "row title 1",
                "Attachment" => "/src/personal-images/sample-image.jpeg",
                "Image" => "/src/personal-images/sample-image.jpeg",
            ),
        ),
    ),
);
$meta_data = array(
    "",
    "",
);
include ROOT . "main.php";
?>