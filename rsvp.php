<html>
<?php
$checkTheForm = false;

?>

<section class="Sign">
    <h4><b>הרשמה לאירוע</b></h4>
    <div class="container">
        <form action="site.php" method="get">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">email</label>
                    <input type="email" class="form-control" id="email" placeholder="email" name="email">
                    <?php if (isset($_GET['submit'])) {
                        $email = $_GET['email'];

                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo "<b><p class='phpForm' > !כתובת אימייל לא תקינה*</b></p> ";
                            $checkTheForm = true;
                        }
                    }
                    ?>


                </div>
                <div class="form-group col-md-6">
                    <label for="fullName">שם מלא</label>
                    <input type="name" class="form-control" id="fullName" placeholder="שם מלא" name="firstname">
                    <?php if (isset($_GET['submit'])) {
                        $firstname = $_GET['firstname'];
                        if (!preg_match("/^[א-תA-Za-z \\- \']+$/", $firstname)) {
                            echo "<b><p class='phpForm' > !שם מלא לא תקין* </b></p>";
                            $checkTheForm = true;
                        }
                    } ?>


                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="phone">קידומת פלאפון </label>
                    <select name="perfix" id=phone class=form-control>
                        <option value="" name="Prefix">בחר</option>
                        <option value="1">053</option>
                        <option value="2">052</option>
                        <option value="3">050</option>
                        <option value="4">054</option>
                        <option value="5">055</option>
                    </select>
                    <?php if (isset($_GET['submit'])) {
                        $perfix = $_GET['perfix'];
                        if ($perfix == "") {
                            echo "<b><p class='phpForm' > !בחר קידומת פלאפון* </b></p>";
                            $checkTheForm = true;
                        }
                    }
                    ?>

                </div>
                <div class="form-group col-md-4">
                    <label for="phoneNumber">מספר פלאפון</label>
                    <input type="number" class="form-control" id="phoneNumber" placeholder="מספר פלאפון" name="phone">
                    <?php if (isset($_GET['submit'])) {
                        $phone = $_GET['phone'];

                        if (strlen($phone) != 7) {
                            echo "<b><p class='phpForm'>!מספר פלאפון לא תקין* </b></p>";
                            $checkTheForm = true;
                        }
                    }
                    ?>


                </div>
                <div class="form-group col-md-3">
                    <label for="guest">מספר אורחים</label>
                    <input type="number" class="form-control" id="guest" placeholder="מספר אורחים" name="guests">
                    <?php if (isset($_GET['submit'])) {
                        $guests = $_GET['guests'];
                        if ($guests < 1) {
                            echo "<b><p class='phpForm' > !מספר אורחים לא תקין* </b></p>";
                            $checkTheForm = true;
                        }
                    }
                    ?>

                </div>
                <div class="form-group col-md-3">
                    <label for="carpool">בחירת דרך הגעה</label>
                    <select class="form-control" id="carpool" name="way">
                        <option value="">בחר</option>
                        <option value="1">מני אור עקיבא</option>
                        <option value="2">דוד נתניה</option>
                        <option value="3">הגעה עצמאית</option>
                        <option value="4">איציק נהריה</option>
                    </select>
                    <?php if (isset($_GET['submit'])) {
                        $way = $_GET['way'];
                        if ($way == "") {
                            echo "<b><p class='phpForm' > !בחר דרך הגעה* </b></p>";
                            $checkTheForm = true;
                        }
                    }
                    ?>


                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <button id="clear" ; type="reset" class="btn btn-info btn-me">איפוס</button>
                </div>

                <div class="form-group col-md-6">
                    <button id="register" class="btn btn-info btn-me" name="submit">שלח</button>
                </div>

            </div>


    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <form name="my_form">
                    <p>הערות</p>
                    <textarea id="info" name="info" rows=4 cols=40></textarea>
                    <br>
            </form>
            <?php if (isset($_GET['submit'])) {
                $leftCommand = $_GET['info'];
                if (strlen($leftCommand) > 200) {
                    echo "<b><p class='phpForm' >!מוגבל עד 200 תווים*  </b></p>";
                    $checkTheForm = true;
                }
            } ?>

        </div>
    </div>

    </form>



    <?php

    if (isset($_GET['submit'])) {

        if ($checkTheForm == false) {

            echo "<b><p class='phpFormS' > Thank you " . $firstname . "</p>";
            echo "<p class='phpFormS' > for registering to my event.<br></p>";
            echo "<p class='phpFormS' >Number of participants: $guests </b></p>";
        }

    }
    ?>
    <br>

</section>
</html>