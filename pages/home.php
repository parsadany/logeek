<?php
include 'router.php';
// Data Type Handling
// Lists are iterable just using index and calls nothing
// Other types are iterable and calls the type template
// And they also hast "title" key.
// independent of the types, the value of the key "data" is allways an array()
$title = "home page";
$contents = array(
    "type" => "list",
    "data" => array(
        array(
            "type" => "collapsible",
            "title" => "Current Members",
            "data" => array(
                "type" => "list",
                "data" => array(
                    array(
                        "type" => "card",
                        "title" => "card title",
                        "picture" => "/src/personal-images/sample-image.jpeg",
                        "data" => array(
                            "type" => "content",
                            "data" => array(
                                "location" => "alksdf",
                                "details" => "asdjkfhk",
                                "website" => "kahefkj",
                            ),
                        ),
                    ),
                    array(
                        "type" => "card",
                        "title" => "card title",
                        "picture" => "/src/personal-images/sample-image.jpeg",
                        "data" => array(
                            "type" => "content",
                            "data" => array(
                                "location" => "alksdf",
                                "details" => "asdjkfhk",
                                "website" => "kahefkj",
                            ),
                        ),
                    ),
                ),
            ),
        ),
        array(
            "type" => "collapsible",
            "title" => "Previous Members",
            "data" => array(
                "type" => "list",
                "data" => array(
                    array(
                        "type" => "card",
                        "title" => "card title",
                        "picture" => "/src/personal-images/sample-image.jpeg",
                        "data" => array(
                            "type" => "content",
                            "data" => array(
                                "location" => "alksdf",
                                "details" => "asdjkfhk",
                                "website" => "kahefkj",
                            ),
                        ),
                    ),
                    array(
                        "type" => "card",
                        "title" => "card title",
                        "picture" => "/src/personal-images/sample-image.jpeg",
                        "data" => array(
                            "type" => "content",
                            "data" => array(
                                "location" => "alksdf",
                                "details" => "asdjkfhk",
                                "website" => "kahefkj",
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
$meta_data = array(
    "home",
    "page",
);
include ROOT . "main.php";
?>