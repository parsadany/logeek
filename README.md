# Logeek Framework
Logeek site for fast static site development


project wrote in pure html,css,js,php7 or higher

# workflow:
1. add a page into /pages like /pages/test.php.
2. add a prepared code into it:

```
<?php
include 'router.php';
// Data Type Handling
// Lists are iterable just using index and calls nothing
// Other types are iterable and calls the type template
// And they also hast "title" key.
// independent of the types, the value of the key "data" is allways an array()
$title = "home page";
$contents = array(
    
);
$meta_data = array(
    "",
    "",
);
include ROOT . "main.php";
?>
```

3. add your contents and meta(for google search).
4. save it.

# data structures:

2 type of data are defined, data that can have children and data that can not have any children.

the pages will be generated on the structure that you choose.

parrent data:
1. card
2. collapsible
3. table
4. list objects

non-parent data:
1. content
2. article
3. form

you can see these example to comprehend the structure:

```
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
                        "picture" => "/src/personal-images/sample-image2.png",
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
                        "picture" => "/src/personal-images/sample-image2.png",
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
```

or
```
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
                "Image" => "/src/personal-images/sample-image2.png",
            ),
            array(
                "Title" => "row title 1",
                "Attachment" => "/src/personal-images/sample-image.jpeg",
                "Image" => "/src/personal-images/sample-image.jpeg",
            ),
        ),
    ),
);
```

# Right-to-left support:

If you need ```rtl```, just add this to your CSS and everything will work correctly:

```
html {
    direction: rtl;
}
```

# Meta Data:

If you need meta data for SEO usage, you can fill the ```$meta_data``` array for every page. this could be differ for every page.

Also, you should set ```$title``` variable in your page to make a different title for every single page.

# Settings:

you should change variables from ```shared/variables.php``` for your site.

Also don't forget to change the ```favicon.ico```.

# for development users:

you can start a simple server on the directory that contains the project with:
```php -S 127.0.0.1:8000```
or
```php7 -S 127.0.0.1:8000```
and you can see the page on
```http://localhost:8000/pages/home.php```
or 
```http://127.0.0.1:8000/pages/home.php```

And if you need to see the site from other devices in same wifi you can use:
```php -S 0.0.0.0:8000```
then you can see the page on
```http://your-laptop-wifi-ip-address:8000/pages/home.php```


also if you need to know the work flow, here it is:
- web components are stored at shared/components for using in a complete page
- files and images that are the site data and not asstst-like, are stored in src/
- router is using the file system, so expected url is to add the path to your url
- variables.php and settings.php are controling the variables and path in project. settings includs the variables and routers will include settings, any folder that you create in pages, must have a router that points to the settings file.
- data are stored in file and not DataBase, because of simplicity and low amount of data
- the variable ```$content``` is managed by content-manager.php and used by componenets.
- don't forget to run the server in the root of project, not anywhere else.


Many thank to collaborate.
