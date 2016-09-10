<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

    <title>Minimum Bootstrap HTML Skeleton</title>

    <!--  -->

    <style>
        #notification_count {
            padding: 0px 3px 3px 7px;
            background: #cc0000;
            color: #ffffff;
            font-weight: bold;
            margin-left: 77px;
            border-radius: 9px;
            -moz-border-radius: 9px;
            -webkit-border-radius: 9px;
            position: absolute;
            margin-top: -1px;
            font-size: 10px;
        }
    </style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        function addmsg(type, msg) {

            $('#notification_count').html(msg);

        }

        function waitForMsg() {

            $.ajax({
                type: "GET",
                url: "select.php",

                async: true,
                cache: false,
                timeout: 50000,

                success: function(data) {
                    addmsg("new", data);
                    setTimeout(
                        waitForMsg,
                        1000
                    );
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    addmsg("error", textStatus + " (" + errorThrown + ")");
                    setTimeout(
                        waitForMsg,
                        15000);
                }
            });
        };

        $(document).ready(function() {

            waitForMsg();

        });
    </script>



    <script type="text/javascript">
        $(function getNotification() {



            $.ajax({
                type: "POST",
                url: "update.php",

            });




        });
    </script>
    <span id="notification_count"></span>
    <a href="#" id="notificationLink" onclick="return getNotification()">Notifications</a>
    <div id="HTMLnoti" style="textalign:center"></div>

</head>

<body>

<div class="container">

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
</script>

</body>

</html>