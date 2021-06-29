<!DOCTYPE html>
<html>

<head>
    <link href="../assets/bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="../assets/fonts/santral/style.css" rel="stylesheet">
    <link href="../assets/fonts/basier/style.css" rel="stylesheet">

    <style>
        * {
            font-family: 'Santral Light';
        }

        .main {
            margin-bottom: 30px;
        }

        .main .event .event-content {
            color: #7A7A7A;
        }
    </style>
</head>

<body>
    <?php include('./partials/header.php'); ?>

    <div id="main-body" class="main">
        <div class="container-fluid">
            <div class="col-sm-12 col-12">
                <div class="row">
                    <?php include('./partials/banner.php'); ?>
                </div>

                <div class="row"></div>
            </div>

            <section id="event" class="event section-wrapper clearfix">
                <div class="col-sm-12 col-12">
                    <div class="row header text-center">
                        <h1>What are you interested in?</h1>
                    </div>

                    <div class="row text-center">
                        <p class="event-content">
                            At Mineski Global, we do more than just play games;
                            we aim to unlock the gamer in everyone and connect them to your brand.
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="event-photo"></div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="event-photo"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="event-photo"></div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="event-photo"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="event-photo"></div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="event-photo"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="event-photo"></div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="event-photo"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php include('./partials/footer.php'); ?>

    <script src="../assets/bootstrap-5.0.2/js/bootstrap.min.js"></script>
</body>

</html>