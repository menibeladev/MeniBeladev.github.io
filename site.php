<?php include("header.php"); ?>


<html>


<div class="container">
    <div class="main">
        <h1><b> יום העצמאות בחיפה</b></h1>
        <h3><b> 30.06.2019</b></h3>


        <?php include("eventDetails.php"); ?>


        <br>

        <div class="pic">
            <img src="images/Haifa1.jpg" id="currentImage">
            <br> <br>
            <button id="prev" onclick="prevPhoto()" class="btn btn-info btn-me">הקודם</button>
            <button id="next" onclick="nextPhoto()" class="btn btn-info btn-me">הבא</button>
        </div>


        <br>
        <div class="luz">
            <ul class="list-group">
                <li class="list-group-item list-group-item-dark text-center"><h5><b>לוז האירוע</b></h5></li>
                <?php
                $items = [['time' => '20:00', 'title' => ' דבר ראש העיר עינת קליש רותם <i class="fas fa-chevron-left"></i>'],
                    ['time' => '20:30', 'title' => ' מופע זיקוקים מסורתי ומרהיב <i class="fas fa-chevron-left"></i>'],
                    ['time' => '20:45', 'title' => ' מופע של הלהקה המקומית <i class="fas fa-chevron-left"></i>'],
                    ['time' => '21:30', 'title' => '  מיטב האומנים,ביניהם אייל גולן, ליאור נרקיס ומשה פרץ <i class="fas fa-chevron-left"></i>']];

                foreach ($items as $item) {
                    ?>
                    <li class="list-group-item"><b><?php echo $item['time']; ?></b><?php echo $item['title']; ?></li>
                    <?php
                }
                ?>
            </ul>
        </div>

        <br><br>


        <h4><B>דרכי הגעה - הסעות</B></h4>
        <br>
        <table>
            <tr>

                <?php
                $free = ['כתובת', 'שם', 'שעה'];
                foreach ($free as $value) {
                    echo "<th>$value</th> ";
                }

                ?>


            </tr>

            <tr>
                <?php
                $OrAkiva = ['מחלף אור עקיבא', 'מני אור עקיבא', '18:30'];
                foreach ($OrAkiva as $value) {
                    echo "<td>$value</td> ";
                }

                ?>
            </tr>
            <tr>
                <?php
                $Netania = ['אצטדיון נתניה', 'דוד נתניה', '18:00'];
                foreach ($Netania as $value) {
                    echo "<td>$value</td> ";
                }

                ?>
            </tr>
            <tr>
                <?php
                $Nahariya = ['תחנת רכבת נהריה', 'איציק נהריה', '19:00'];
                foreach ($Nahariya as $value) {
                    echo "<td>$value</td> ";
                }

                ?>
            </tr>






        </table>

        <br>
        <br>
        <h4><b> מיקום האירוע</b></h4>


        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="300" height="300" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=%D7%A9%D7%93%D7%A8%D7%95%D7%AA%20%D7%9E%D7%95%D7%A8%D7%99%D7%94%20%D7%97%D7%99%D7%A4%D7%94&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://www.jetzt-drucken-lassen.de"></a></div>

        </div>
        <br> <br>


        <div class="SocialNetworks">

            <a href="https://plus.google.com/"> <img src="images/google.png" alt="google"/></a>
            <a href="https://www.instagram.com/"><img src="images/instegram.jpg" alt="instegram"/></a>
            <a href="https://www.facebook.com/"> <img src="images/facebook.png" alt="facebook"/>
            </a>
            <a href="https://twitter.com/"><img src="images/twitter.png" alt="twitter"/></a>
        </div>
        <br>


    </div>
    <br>

    <?php include("rsvp.php"); ?>

    <?php include("footer.php"); ?>

    <script src=indexJS.js async></script>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>