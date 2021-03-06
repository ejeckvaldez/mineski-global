<?php

$interests = [
    [
        'photo' => '../assets/img/esports-event.png',
        'label' => 'Sponsor or Host Esports Event',
    ],
    [
        'photo' => '../assets/img/esports-team.png',
        'label' => 'Create an Esports Team',
    ],
    [
        'photo' => '../assets/img/gamify.png',
        'label' => 'Gamify your Platform',
    ],
    [
        'photo' => '../assets/img/campaign.png',
        'label' => 'Plan Marketing Campaign',
    ],
    [
        'photo' => '../assets/img/employees.png',
        'label' => 'Improve Productivity of Employees',
    ],
    [
        'photo' => '../assets/img/mnski.png',
        'label' => 'Mineski Global',
    ],
    [
        'photo' => '../assets/img/investment.png',
        'label' => 'Investment Opportunities',
    ],
    [
        'photo' => '../assets/img/others.png',
        'label' => 'Others',
    ],
];

$partners = [
    [
        'photo' => '../assets/img/disney.png',
        'label' => 'Disney',
    ],
    [
        'photo' => '../assets/img/asus.png',
        'label' => 'ASUS',
    ],
    [
        'photo' => '../assets/img/disney.png',
        'label' => 'Disney',
    ],
    [
        'photo' => '../assets/img/asus.png',
        'label' => 'ASUS',
    ],
];

$announcements = [
    [
        'photo' => '../assets/img/announcement.jpg',
        'headline' => 'THE FINAL ROAD TO MASTERS BERLIN: VCT Stage 3 – Challengers PH kicks off Registrations this June',
        'body' => 'The Philippine Pro Gaming League (PPGL) returns for the third and final Stage of the 2021 VALORANT Challengers, the qualification path for Filipino gamers...',
        'date_created' => date('Y, F d', strtotime('2021-06-18')),
    ],
    [
        'photo' => '../assets/img/announcement.jpg',
        'headline' => 'THE FINAL ROAD TO MASTERS BERLIN: VCT Stage 3 – Challengers PH kicks off Registrations this June',
        'body' => 'The Philippine Pro Gaming League (PPGL) returns for the third and final Stage of the 2021 VALORANT Challengers, the qualification path for Filipino gamers...',
        'date_created' => date('Y, F d', strtotime('2021-06-18')),
    ],
    [
        'photo' => '../assets/img/announcement.jpg',
        'headline' => 'THE FINAL ROAD TO MASTERS BERLIN: VCT Stage 3 – Challengers PH kicks off Registrations this June',
        'body' => 'The Philippine Pro Gaming League (PPGL) returns for the third and final Stage of the 2021 VALORANT Challengers, the qualification path for Filipino gamers...',
        'date_created' => date('Y, F d', strtotime('2021-06-18')),
    ],
    [
        'photo' => '../assets/img/announcement.jpg',
        'headline' => 'THE FINAL ROAD TO MASTERS BERLIN: VCT Stage 3 – Challengers PH kicks off Registrations this June',
        'body' => 'The Philippine Pro Gaming League (PPGL) returns for the third and final Stage of the 2021 VALORANT Challengers, the qualification path for Filipino gamers...',
        'date_created' => date('Y, F d', strtotime('2021-06-18')),
    ],
    [
        'photo' => '../assets/img/announcement.jpg',
        'headline' => 'THE FINAL ROAD TO MASTERS BERLIN: VCT Stage 3 – Challengers PH kicks off Registrations this June',
        'body' => 'The Philippine Pro Gaming League (PPGL) returns for the third and final Stage of the 2021 VALORANT Challengers, the qualification path for Filipino gamers...',
        'date_created' => date('Y, F d', strtotime('2021-06-18')),
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

        .btn-slick {
            background-color: #E9E9E9;
        }

        .btn-slick:not(:last-child) {
            margin-right: 20px;
        }

        .btn-slick:focus {
            box-shadow: none;
        }

        .main .interests .interest-description {
            color: #7A7A7A;
            font-family: 'Santral Book';
        }

        .main .interests .interest-block {
            border: 1px solid #EEE;
            border-radius: 20px;
            flex: 1;
        }

        .main .interests .interest-block .interest-photo {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 120px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .main .interests .interest-block .interest-details {
            font-family: 'Santral Bold';
            font-size: 16px;
            color: #1A1A1A;
        }

        .main .numbers {
            background-color: #FBCA00;
        }

        .main .numbers .number-wrapper .count {
            font-family: 'Santral Bold';
            font-size: 36px;
            color: #FFF;
        }

        .main .numbers .number-wrapper .label {
            font-family: 'Santral Book';
            font-size: 16px;
        }

        .main .partners .header {
            font-family: 'Santral Medium';
            font-size: 14px;
        }

        .main .partners .partner-description {
            font-family: 'Santral Medium';
            font-size: 14px;
        }

        .main .partners .partner-block .slick-track {
            align-items: center;
            display: flex !important;
        }

        .main .announcements {
            background-color: #F8F8F8;
        }

        .main .announcements .header {
            font-family: 'Santral SemiBold';
            font-size: 24px;
        }

        .main .announcements .announcement-description {
            font-family: 'Santral Medium';
            font-size: 14px;
            color: #7A7A7A;
        }

        .main .announcements .announcement-block .announcement-item {
            border: 1px solid #EEE;
            border-radius: 20px;
            flex: 1;
            background-color: #FFF;
        }

        .main .announcements .announcement-block .announcement-item .announcement-photo {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 190px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .main .announcements .announcement-block .announcement-item .announcement-header {
            font-family: 'Santral Bold';
            font-size: 16px;
            color: #1A1A1A;
        }

        .main .announcements .announcement-block .announcement-item .announcement-body {
            font-family: 'Santral Book';
            font-size: 14px;
            color: #858585;
        }

        .main .announcements .announcement-block .announcement-item .announcement-footer .announcement-link {
            font-family: 'Santral SemiBold';
            font-size: 14px;
            color: #FBCA00;
            text-decoration: none;
        }

        .main .announcements .announcement-block .announcement-item .announcement-footer .announcement-date {
            font-family: 'Santral Book';
            font-size: 14px;
            color: #858585;
        }

        .main .announcements .announcement-dots {
            width: 100%;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .main .announcements .announcement-dots li {
            position: relative;
            display: inline-flex;
            width: 15px;
            height: 15px;
            padding: 0;
            cursor: pointer;
        }

        .main .announcements .announcement-dots li button {
            display: block;
            font-size: 0;
            line-height: 0;
            width: 15px;
            height: 15px;
            padding: 5px;
            color: transparent;
            border: 0;
            outline: none;
            background-color: transparent;
        }

        .main .announcements .announcement-dots li button:before {
            font-family: 'slick';
            font-size: 6px;
            line-height: 15px;
            position: absolute;
            top: -1px;
            left: 0;
            width: 15px;
            height: 15px;
            content: '•';
            text-align: center;
            color: #E2E2E2;
        }

        .main .announcements .announcement-dots li.slick-active button:before {
            color: #C4C4C4;
            font-size: 10px;
            top: 0;
        }

        .main .subscriptions {
            background-color: #FBCA00;
        }

        .main .subscriptions .header {
            font-family: 'Santral SemiBold';
            font-size: 24px;
        }

        .main .subscriptions .subscription-description {
            font-family: 'Santral Book';
            font-size: 14px;
        }

        .main .subscriptions .subscription-form .input-subscription-email {
            border-radius: 20px;
        }

        .main .subscriptions .subscription-form .input-subscription-email::placeholder {
            color: #858585;
            font-family: 'Santral Book';
            font-size: 12px;
        }

        .main .subscriptions .subscription-form .input-subscription-email:focus {
            box-shadow: none;
        }

        .main .subscriptions .subscription-form .btn-subscription-submit {
            border-radius: 20px;
            background-color: #1A1A1A;
            color: #FFF;
            border: none;
        }

        .main .subscriptions .subscription-form .btn-subscription-submit:focus {
            box-shadow: none;
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
            <?php include('./partials/banner.php'); ?>

            <section id="interests" class="interests section-wrapper clearfix mb-5">
                <div class="col-sm-12 col-12">
                    <div class="row text-center mb-3">
                        <h1 class="header">What are you interested in?</h1>
                    </div>

                    <div class="row text-center mb-3">
                        <p class="interest-description">
                            At Mineski Global, we do more than just play games;
                            we aim to unlock the gamer in everyone and connect them to your brand.
                        </p>
                    </div>

                    <div class="row">
                        <?php foreach ($interests as $interest) : ?>
                            <div class="col-sm-6 col-6 d-flex">
                                <div class="interest-block mb-3">
                                    <div class="interest-photo" style="background-image: url('<?php echo $interest['photo']; ?>');"></div>

                                    <div class="interest-details p-2"><?php echo $interest['label']; ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section id="numbers" class="numbers section-wrapper row clearfix p-5">
                <div class="number-wrapper text-center mb-3">
                    <div class="count p-3">1,642,970</div>

                    <div class="label">Mineski Brand Followers</div>
                </div>

                <div class="number-wrapper text-center mb-3">
                    <div class="count p-3">3,000+</div>

                    <div class="label">Hours of esports entertainment produced</div>
                </div>

                <div class="number-wrapper text-center mb-3">
                    <div class="count p-3">120,000+</div>

                    <div class="label">Attendees in all Mineski interests</div>
                </div>
            </section>

            <section id="partners" class="partners section-wrapper clearfix mb-5 p-5">
                <div class="col-sm-12 col-12">
                    <div class="row text-center mb-3">
                        <h1 class="header">Brands We've Partnered With</h1>
                    </div>

                    <div class="row text-center mb-3">
                        <span class="partner-description">
                            Click a logo to see what we've done with this brand
                        </span>
                    </div>

                    <div class="partner-block row">
                        <?php foreach ($partners as $partner) : ?>
                            <div class="partner-item disney">
                                <img src="<?php echo $partner['photo']; ?>" alt="<?php echo $partner['label']; ?>" class="w-100 h-auto">
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="arrow d-flex justify-content-center"></div>
                </div>
            </section>

            <section id="announcements" class="announcements section-wrapper row clearfix p-5">
                <div class="col-sm-12 col-12">
                    <div class="row text-center mb-3">
                        <h1 class="header">Latest Announcements</h1>
                    </div>

                    <div class="row text-center mb-3">
                        <span class="announcement-description">
                            Join us in our journey and build value together
                        </span>
                    </div>

                    <div class="announcement-block row">
                        <?php foreach ($announcements as $announcement) : ?>
                            <div class="announcement-item">
                                <div class="announcement-photo" style="background-image: url('<?php echo $announcement['photo']; ?>'); "></div>

                                <div class="announcement-header text-center p-2">
                                    <?php echo $announcement['headline']; ?>
                                </div>

                                <div class="announcement-body text-center p-2">
                                    <?php echo $announcement['body']; ?>
                                </div>

                                <div class="announcement-footer p-3">
                                    <a class="announcement-link float-start">Read More <i class="fas fa-arrow-right"></i></a>
                                    <div class="announcement-date float-end"><i class="fas fa-calendar"></i> <?php echo $announcement['date_created']; ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="dot d-flex justify-content-center"></div>
                </div>
            </section>

            <section id="subscriptions" class="subscriptions section-wrapper row clearfix pt-5 pb-5">
                <div class="col-sm-12 col-12">
                    <div class="row text-center mb-3">
                        <h1 class="header">How can we help?</h1>
                    </div>

                    <div class="row text-center mb-3">
                        <span class="subscription-description">
                            Give us 3 minutes of your time and we’ll figure out how to solve your challenges
                        </span>
                    </div>

                    <div class="row">
                        <div class="subscription-form">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control input-subscription-email" placeholder="What is your work email?">
                                <button type="button" class="input-group-text btn btn-primary btn-subscription-submit">
                                    GET IN TOUCH
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php include('./partials/footer.php'); ?>

    <script>
        $(document).ready(function() {
            $('.partner-block').slick({
                'accessibility': true,
                'adaptiveHeight': false,
                'autoplay': true,
                'autoplaySpeed': '3000',
                'arrows': true,
                'appendArrows': $('#partners .arrow'),
                'prevArrow': '<button type="button" class="btn btn-slick fas fa-arrow-left"></button>',
                'nextArrow': '<button type="button" class="btn btn-slick fas fa-arrow-right"></button>',
                'dots': false,
                'infinite': true,
                'slidesToShow': 2,
                'slidesToScroll': 2,
            });

            $('.announcement-block').slick({
                'accessibility': true,
                'adaptiveHeight': false,
                'autoplay': true,
                'autoplaySpeed': '3000',
                'arrows': false,
                'appendDots': $('#announcements .dot'),
                'dots': true,
                'dotsClass': 'announcement-dots text-center',
                'infinite': true,
            });
        });
    </script>
</body>

</html>