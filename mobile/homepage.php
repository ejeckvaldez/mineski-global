<!DOCTYPE html>
<html>

<head>
    <link href="../assets/bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="../assets/fonts/santral/style.css" rel="stylesheet">
    <link href="../assets/fonts/basier/style.css" rel="stylesheet">

    <title>Mineski Global</title>

    <style>
        * {
            font-family: 'Santral SemiBold';
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

        .main .interests .interest-block .interest-photo.esports-event {
            background-image: url('../assets/img/esports-event.png');
        }

        .main .interests .interest-block .interest-photo.esports-team {
            background-image: url('../assets/img/esports-team.png');
        }

        .main .interests .interest-block .interest-photo.gamify {
            background-image: url('../assets/img/gamify.png');
        }

        .main .interests .interest-block .interest-photo.campaign {
            background-image: url('../assets/img/campaign.png');
        }

        .main .interests .interest-block .interest-photo.employees {
            background-image: url('../assets/img/employees.png');
        }

        .main .interests .interest-block .interest-photo.mnski {
            background-image: url('../assets/img/mnski.png');
        }

        .main .interests .interest-block .interest-photo.investment {
            background-image: url('../assets/img/investment.png');
        }

        .main .interests .interest-block .interest-photo.others {
            background-image: url('../assets/img/others.png');
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

        .main .partners .partner-block {
            justify-content: center;
            align-items: center;
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

        .main .announcements .announcement-block {
            border: 1px solid #EEE;
            border-radius: 20px;
            flex: 1;
            box-shadow: 0px 0px 25px 0px #A7A7A740;
            background-color: #FFF;
        }

        .main .announcements .announcement-block .announcement-photo {
            background-image: url('../assets/img/announcement.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 190px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .main .announcements .announcement-block .announcement-header {
            font-family: 'Santral Bold';
            font-size: 16px;
            color: #1A1A1A;
        }

        .main .announcements .announcement-block .announcement-body {
            font-family: 'Santral Book';
            font-size: 14px;
            color: #858585;
        }

        .main .announcements .announcement-block .announcement-footer .announcement-link {
            font-family: 'Santral SemiBold';
            font-size: 14px;
            color: #FBCA00;
            text-decoration: none;
        }

        .main .announcements .announcement-block .announcement-footer .announcement-date {
            font-family: 'Santral Book';
            font-size: 14px;
            color: #858585;
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
                        <div class="col-sm-6 col-6 d-flex">
                            <div class="interest-block mb-3">
                                <div class="interest-photo esports-event"></div>

                                <div class="interest-details p-2">Sponsor or Host Esports Event</div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-6 d-flex">
                            <div class="interest-block mb-3">
                                <div class="interest-photo esports-team"></div>

                                <div class="interest-details p-2">Create an Esports Team</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-6 d-flex">
                            <div class="interest-block mb-3">
                                <div class="interest-photo gamify"></div>

                                <div class="interest-details p-2">Gamify your Platform</div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-6 d-flex">
                            <div class="interest-block mb-3">
                                <div class="interest-photo campaign"></div>

                                <div class="interest-details p-2">Plan Marketing Campaign</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-6 d-flex">
                            <div class="interest-block mb-3">
                                <div class="interest-photo employees"></div>

                                <div class="interest-details p-2">Improve Productivity of Employees</div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-6 d-flex">
                            <div class="interest-block mb-3">
                                <div class="interest-photo mnski"></div>

                                <div class="interest-details p-2">Mineski Global</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-6 d-flex">
                            <div class="interest-block mb-3">
                                <div class="interest-photo investment"></div>

                                <div class="interest-details p-2">Investment Opportunities</div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-6 d-flex">
                            <div class="interest-block mb-3">
                                <div class="interest-photo others"></div>

                                <div class="interest-details p-2">Others</div>
                            </div>
                        </div>
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
                        <div class="partner-item disney col-sm-6 col-6">
                            <img src="../assets/img/disney.png" class="w-100 h-auto">
                        </div>

                        <div class="partner-item asus col-sm-6 col-6">
                            <img src="../assets/img/asus.png" class="w-100 h-auto">
                        </div>
                    </div>
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
                        <div class="announcement-photo esports-event"></div>

                        <div class="announcement-header text-center p-2">
                            THE FINAL ROAD TO MASTERS BERLIN: VCT Stage 3 – Challengers PH kicks off Registrations this June
                        </div>

                        <div class="announcement-body text-center p-2">
                            The Philippine Pro Gaming League (PPGL) returns for the third and final Stage of
                            the 2021 VALORANT Challengers, the qualification path for Filipino gamers...
                        </div>

                        <div class="announcement-footer p-3">
                            <a class="announcement-link float-start">Read More <i class="fas fa-arrow-right"></i></a>
                            <div class="announcement-date float-end"><i class="fas fa-calendar"></i> 18, June 2021</div>
                        </div>
                    </div>
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

    <script src="../assets/bootstrap-5.0.2/js/bootstrap.min.js"></script>
</body>

</html>