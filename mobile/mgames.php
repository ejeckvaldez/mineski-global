<?php

$games = [
    [
        'photo' => '../assets/img/whack-a-mole.jpg',
        'label' => 'Whack-a-Mole',
    ],
    [
        'photo' => '../assets/img/ski-hero.jpg',
        'label' => 'Ski Hero',
    ],
    [
        'photo' => '../assets/img/stack-the-pancake.jpg',
        'label' => 'Stack The Pancake',
    ],
    [
        'photo' => '../assets/img/drift-boss.png',
        'label' => 'Drift Boss',
    ],
    [
        'photo' => '../assets/img/spiral-stairs.jpg',
        'label' => 'Spiral Stairs',
    ],
    [
        'photo' => '../assets/img/flip-jump.jpg',
        'label' => 'Flip Jump',
    ],
];

$case_studies = [
    [
        'photo_wide' => '../assets/img/case-study-wide.jpg',
        'photo_thin' => '../assets/img/case-study-thin.jpg',
        'header' => '200+ Exclusive Games',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Erat quis commodo leo ut adipiscing convallis et sit. Est nascetur interdum tellus mi tincidunt amet odio vitae. Non vitae eu habitant condimentum nisl, adipiscing lectus.',
    ],
    [
        'photo_wide' => '../assets/img/case-study-wide.jpg',
        'photo_thin' => '../assets/img/case-study-thin.jpg',
        'header' => '200+ Exclusive Games',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Erat quis commodo leo ut adipiscing convallis et sit. Est nascetur interdum tellus mi tincidunt amet odio vitae. Non vitae eu habitant condimentum nisl, adipiscing lectus.',
    ],
    [
        'photo_wide' => '../assets/img/case-study-wide.jpg',
        'photo_thin' => '../assets/img/case-study-thin.jpg',
        'header' => '200+ Exclusive Games',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Erat quis commodo leo ut adipiscing convallis et sit. Est nascetur interdum tellus mi tincidunt amet odio vitae. Non vitae eu habitant condimentum nisl, adipiscing lectus.',
    ],
];

?>

<!DOCTYPE html>
<html>

<head>
    <link href="../assets/bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="../assets/fonts/santral/style.css" rel="stylesheet">
    <link href="../assets/fonts/basier/style.css" rel="stylesheet">
    <link href="../assets/slick-1.8.1/slick/slick.css" rel="stylesheet">
    <link href="../assets/slick-1.8.1/slick/slick-theme.css" rel="stylesheet">

    <title>Mineski Global</title>

    <style>
        * {
            font-family: 'Santral SemiBold';
        }

        .mgames-about .mgames-featured .game {
            width: 100%;
            height: 130px;
            background-position: center;
            background-size: cover;
            border-radius: 5px;
        }

        .mgames-about .mgames-featured .game.whack-a-mole {
            background-image: url('../assets/img/whack-a-mole.jpg');
            border-top-left-radius: 30px;
        }

        .mgames-about .mgames-featured .game.ski-hero {
            background-image: url('../assets/img/ski-hero.jpg');
            background-position: right;
            border-bottom-left-radius: 30px;
        }

        .mgames-about .mgames-featured .game.stack-the-pancake {
            background-image: url('../assets/img/stack-the-pancake.jpg');
        }

        .mgames-about .mgames-featured .game.drift-boss {
            background-image: url('../assets/img/drift-boss.png');
        }

        .mgames-about .mgames-featured .game.spiral-stairs {
            background-image: url('../assets/img/spiral-stairs.jpg');
            border-top-right-radius: 30px;
        }

        .mgames-about .mgames-featured .game.flip-jump {
            background-image: url('../assets/img/flip-jump.jpg');
            border-bottom-right-radius: 30px;
        }

        .mgames-about .mgames-description .header {
            font-size: 24px;
        }

        .mgames-about .mgames-description .body {
            font-family: 'Santral Book';
            font-size: 16px;
            color: #7A7A7A;
        }

        .mgames-about .mgames-description .btn-yellow-reverse {
            background-color: #FBCA00;
            color: #FFF;
            border: none;
            font-family: 'Basier Circle';
            padding: 10px;
            border-radius: 10px;
            width: 50%;
        }

        .mgames-about .mgames-description .btn-yellow-reverse:focus {
            box-shadow: none;
        }

        .games {
            background-color: #FBCA00;
        }

        .games .header {
            font-size: 24px;
        }

        .games .game-selection .game-photo {
            width: 100%;
            height: 165px;
            background-position: center;
            background-size: cover;
            border-radius: 20px;
        }

        .games .game-selection .game-photo.brick-breaker {
            background-image: url('../assets/img/brick-breaker.png');
        }

        .games .game-selection .game-photo.donut-slam-dunk {
            background-image: url('../assets/img/donut-slam-dunk.jpg');
        }

        .games .game-selection .game-photo.kawaii-jump {
            background-image: url('../assets/img/kawaii-jump.jpg');
        }

        .games .game-selection .game-photo.drift-boss {
            background-image: url('../assets/img/drift-boss.png');
        }

        .games .game-selection .game-photo.whack-a-mole {
            background-image: url('../assets/img/whack-a-mole.jpg');
        }

        .games .game-selection .game-photo.flip-jump {
            background-image: url('../assets/img/flip-jump.jpg');
        }

        .case-studies .photo-wide {
            width: 60%;
            height: 215px;
            background-position: center;
            background-size: cover;
            border-radius: 20px;
            margin-right: 5%;
        }

        .case-studies .photo-thin {
            width: 35%;
            height: 215px;
            background-position: center;
            background-size: cover;
            border-radius: 20px;
        }

        .case-studies .header {
            font-size: 24px;
        }

        .case-studies .description {
            font-family: 'Santral Book';
            font-size: 16px;
            color: #7A7A7A;
        }

        .tournament {
            background-color: #F8F8F8;
        }

        .tournament .tournament-photo-wrapper .tournament-photo {
            content: " ";
            padding-bottom: 425px;
            background-image: url('../assets/img/tournament.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 20px;
        }

        .tournament .header {
            font-size: 24px;
        }

        .tournament .description {
            font-family: 'Santral Book';
            font-size: 16px;
            color: #7A7A7A;
        }

        .tournament .btn-yellow-reverse {
            background-color: #FBCA00;
            color: #FFF;
            border: none;
            font-family: 'Basier Circle';
            padding: 10px;
            border-radius: 10px;
            width: 50%;
        }

        .tournament .btn-yellow-reverse:focus {
            box-shadow: none;
        }

        .partner .partner-photo-wrapper .partner-photo {
            content: " ";
            padding-bottom: 425px;
            background-image: url('../assets/img/video-partner.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 20px;
        }

        .partner .header {
            font-size: 24px;
        }

        .partner .description {
            font-family: 'Santral Book';
            font-size: 16px;
            color: #7A7A7A;
        }

        .partner .btn-yellow-reverse {
            background-color: #FBCA00;
            color: #FFF;
            border: none;
            font-family: 'Basier Circle';
            padding: 10px;
            border-radius: 10px;
            width: 50%;
        }

        .partner .btn-yellow-reverse:focus {
            box-shadow: none;
        }

        .download .preview-photo-wrapper {
            position: absolute;
        }

        .download .preview-photo-wrapper .preview-photo {
            content: " ";
            padding-bottom: 370px;
            background-image: url('../assets/img/mobile-preview.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 20px;
        }

        .download .download-background {
            background-color: #FBCA00;
            margin-top: 200px;
            padding-top: 170px;
            padding-bottom: 30px;
        }

        .download .download-background .header {
            font-size: 24px;
        }

        .download .download-background .description {
            font-family: 'Santral Book';
            font-size: 16px;
            color: #7A7A7A;
        }

        .download .download-background .app-download .download {
            width: 150px;
        }
    </style>

    <script src="../assets/bootstrap-5.0.2/js/bootstrap.min.js"></script>
    <script src="../assets/jquery-3.6.0/jquery-3.6.0.js"></script>
    <script src="../assets/slick-1.8.1/slick/slick.js"></script>
</head>

<body>
    <?php include('./partials/header.php'); ?>

    <div id="main-body" class="main mb-3">
        <div class="container-fluid">
            <?php include('./partials/mgames-banner.php'); ?>

            <section id="mgames-about" class="mgames-about section-wrapper clearfix mb-4">
                <div class="col-sm-12 col-12">
                    <div class="mgames-featured row">
                        <div class="col-sm-4 col-4">
                            <div class="game whack-a-mole mb-3"></div>
                            <div class="game ski-hero mb-3"></div>
                        </div>

                        <div class="col-sm-4 col-4 mt-5">
                            <div class="game stack-the-pancake mb-3"></div>
                            <div class="game drift-boss mb-3"></div>
                        </div>

                        <div class="col-sm-4 col-4 mt-3">
                            <div class="game spiral-stairs mb-3"></div>
                            <div class="game flip-jump mb-3"></div>
                        </div>
                    </div>

                    <div class="mgames-description row">
                        <div class="header text-center mb-3">What is M-Games?</div>

                        <div class="body text-center mb-3">
                            M-Games offers a wide selection of fun casual games that appeal to a wide
                            variety of audiences. We have relaxing puzzle games, intense running games,
                            colorful platformers, exciting shooters, and many more that you can enjoy
                            with family and friends, wherever you are
                        </div>

                        <button type="button" class="btn btn-primary btn-yellow-reverse ms-auto me-auto">
                            GET STARTED
                        </button>
                    </div>
                </div>
            </section>

            <section id="games" class="games section-wrapper clearfix row pt-4 pb-4">
                <div class="col-sm-12 col-12">
                    <div class="header text-center">Click a game to play!</div>

                    <div class="game-selection row">
                        <div class="col-sm-6 col-6 mb-3">
                            <div class="game-photo brick-breaker"></div>
                        </div>

                        <div class="col-sm-6 col-6 mb-3">
                            <div class="game-photo donut-slam-dunk"></div>
                        </div>

                        <div class="col-sm-6 col-6 mb-3">
                            <div class="game-photo kawaii-jump"></div>
                        </div>

                        <div class="col-sm-6 col-6 mb-3">
                            <div class="game-photo drift-boss"></div>
                        </div>

                        <div class="col-sm-6 col-6 mb-3">
                            <div class="game-photo whack-a-mole"></div>
                        </div>

                        <div class="col-sm-6 col-6 mb-3">
                            <div class="game-photo flip-jump"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="case-studies" class="case-studies section-wrapper clearfix pt-4 pb-4">
                <div class="col-sm-12 col-12">
                    <div class="case-study-block">
                        <?php foreach ($case_studies as $row) : ?>
                            <div class="case-study-item">
                                <div class="row p-3">
                                    <div class="photo-wide" style="background-image: url('<?php echo $row['photo_wide']; ?>');"></div>

                                    <div class="photo-thin" style="background-image: url('<?php echo $row['photo_thin']; ?>');"></div>
                                </div>

                                <div class="row">
                                    <div class="header text-center mb-4"><?php echo $row['header']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="description text-center"><?php echo $row['description']; ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section id="tournament" class="tournament section-wrapper clearfix row pt-4 pb-4">
                <div class="tournament-photo-wrapper mb-4">
                    <div class="tournament-photo"></div>
                </div>

                <div class="header text-center p-3">Tournaments</div>

                <div class="description text-center p-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Posuere suspendisse
                    metus, gravida nisi pretium scelerisque mattis. Malesuada suscipit augue
                    convallis orci lorem volutpat sagittis, nisl.
                </div>

                <button type="button" class="btn btn-primary btn-yellow-reverse ms-auto me-auto">
                    PLAY NOW
                </button>
            </section>

            <section id="partner" class="partner section-wrapper clearfix row pt-4 pb-4">
                <div class="partner-photo-wrapper mb-4">
                    <div class="partner-photo"></div>
                </div>

                <div class="header text-center p-3">How to Partner with M-Games?</div>

                <div class="description text-center p-3">
                    Looking to gamify your platform and increase your engagement rates?
                    We’re happy to help. Just contact us and we’ll get back to you as soon
                    as we can.
                </div>

                <button type="button" class="btn btn-primary btn-yellow-reverse ms-auto me-auto">
                    CONTACT US
                </button>
            </section>

            <section id="download" class="download section-wrapper clearfix row pt-4 pb-4">
                <div class="preview-photo-wrapper mb-4">
                    <div class="preview-photo"></div>
                </div>

                <div class="download-background">
                    <div class="header text-center p-1">Download Now</div>

                    <div class="description text-center p-1 mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Erat quis commodo leo ut adipiscing convallis et sit.
                    </div>

                    <div class="app-download d-flex">
                        <img src="../assets/img/download-ios.png" class="download ios me-4">

                        <img src="../assets/img/download-android.png" class="download android">
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php include('./partials/footer.php'); ?>

    <script>
        $(document).ready(function() {
            $('.case-study-block').slick({
                'accessibility': true,
                'adaptiveHeight': false,
                'autoplay': true,
                'autoplaySpeed': '3000',
                'arrows': false,
                'dots': true,
                'infinite': true,
            });
        });
    </script>
</body>

</html>