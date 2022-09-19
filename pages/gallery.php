<?php
include 'router.php';
// Data Type Handling
// Lists are iterable just using index and calls nothing
// Other types are iterable and calls the type template
// And they also hast "title" key.
// independent of the types, the value of the key "data" is allways an array()
// tables can be included but can't include some other structure.
$contents = array(
    "type" => "gallery",
    "title" => "Test Gallery",
    "data" => array(
        1 => array(
            "src" => "/src/personal-images/sample-image.jpeg",
            "caption" => "some caption",
            
    ), 
        2 => array(
            "src" => "/src/personal-images/sample-image2.png",
            "caption" => "some caption2",
            
    ), 
    ),
);
$meta_data = array(
    "",
    "",
);
?>
<head>
<link rel="stylesheet" href="/css/gallery.css">
</head>
<?php 
include ROOT . "main.php";
?>