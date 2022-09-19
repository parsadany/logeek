<div class="footer">
    <div class="footer-container">
        <div class="mailing-list">
            <h3>Mailing List</h3>
            <?php
            $form_elements = array(
                "description" => "Fill in this form to get notifications of upcomming events:",
                "inputs" => array(
                    array(
                        "type" => "text",
                        "label" => "Fill Name:",
                        "id" => "fname",
                        "placeholder" => "John Hellman",
                        "name" => "fname"
                    ),
                    array(
                        "type" => "email",
                        "label" => "E-Mail:",
                        "id" => "email",
                        "placeholder" => "John_Hellman@email.com",
                        "name" => "email"
                    ),
                    array(
                        "type" => "submit",
                        "label" => "Subscribe",
                        "id" => "submit",
                        "placeholder" => "Subscribe"
                    ),
                ),
                "action" => "/pages/actions/subscribe.php"

            );
            include ROOT . 'shared/components/forms.php';
            ?>
        </div>
        <!--
                // a form example code.
            <form action="">
                Fill in this form to get notifications of upcomming events:
                <br><label for="fname">Full Name:</label><br>
                <input type="text" placeholder="John Hellman">
                <br><label for="fname">E-Mail:</label><br>
                <input type="email" placeholder="John_Hellman@email.com">
            </form>
        </div>-->
        <div class="useful-links">
            <h3>Useful Links</h3>
            <div>
                <?php
                include ROOT . "shared/variables.php";
                foreach ($useful_links as $key => $value) {
                    print('&#x25B8; <a style="padding-left: 2px;" href="' . $value . '">' . $key . '</a><br>');
                }
                ?>
            </div>
        </div>


    </div>
</div>

<div class="bottom-footer">
    <div style="margin-top: 2px;">
        <span>copyright &copy all rights reserved for Logeek Group at Company name 2021</span>
    </div>

</div>