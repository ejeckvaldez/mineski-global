<?php

$influencers = [
    [
        'photo' => '../assets/img/chooxtv.jpg',
        'name' => 'ChooxTV',
    ],
    [
        'photo' => '../assets/img/alodia.jpg',
        'name' => 'Alodia Gosiengfiao',
    ],
    [
        'photo' => '../assets/img/dexie.png',
        'name' => 'Dexie Diaz',
    ],
    [
        'photo' => '../assets/img/dogie.jpg',
        'name' => 'Akosi Dogie',
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

    <title>Mineski Global</title>

    <style>
        * {
            font-family: 'Santral SemiBold';
        }

        .btn-yellow-reverse {
            background-color: #FBCA00;
            color: #FFF;
            border: none;
            font-family: 'Basier Circle';
            padding: 10px;
            border-radius: 10px;
            width: 50%;
        }

        .btn-yellow-reverse:focus {
            box-shadow: none;
        }

        .host {
            background-color: #F8F8F8;
        }

        .host .host-photo-wrapper .host-photo {
            content: " ";
            padding-bottom: 275px;
            background-image: url('../assets/img/met-event.jpg');
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 20px;
        }

        .host .header {
            font-size: 24px;
        }

        .host .sub-header {
            font-size: 18px;
        }

        .host .description {
            font-family: 'Santral Book';
            font-size: 16px;
            color: #7A7A7A;
        }

        .sponsor .sponsor-photo-wrapper .sponsor-photo {
            content: " ";
            padding-bottom: 275px;
            background-image: url('../assets/img/pro-team.jpg');
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 20px;
        }

        .sponsor .header {
            font-size: 24px;
        }

        .sponsor .description {
            font-family: 'Santral Book';
            font-size: 16px;
            color: #7A7A7A;
        }

        .pro-team {
            background-color: #F8F8F8;
        }

        .pro-team .pro-team-photo-wrapper .pro-team-photo {
            content: " ";
            padding-bottom: 275px;
            background-image: url('../assets/img/pro-team.jpg');
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 20px;
        }

        .pro-team .mineski-pro-logo-wrapper {
            width: 165px;
        }

        .pro-team .mineski-pro-logo-wrapper .mineski-pro-logo {
            content: " ";
            padding-bottom: 30px;
            background-image: url('../assets/img/mineski-pro-team.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .pro-team .header {
            font-size: 24px;
        }

        .pro-team .description {
            font-family: 'Santral Book';
            font-size: 16px;
            color: #7A7A7A;
        }

        .influencer .header {
            font-size: 24px;
        }

        .influencer .description {
            font-family: 'Santral Book';
            font-size: 16px;
            color: #7A7A7A;
        }

        .influencer .influencer-list .influencer-photo {
            content: " ";
            padding-bottom: 165px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 75px;
        }

        .influencer .influencer-list .influencer-name {
            font-family: 'Santral Bold';
            font-size: 16px;
        }
    </style>
</head>

<body>
    <?php include('./partials/header.php'); ?>

    <div id="main-body" class="main mb-3">
        <div class="container-fluid">
            <?php include('./partials/esports-banner.php'); ?>

            <section id="host" class="host section-wrapper clearfix row pt-4 pb-4">
                <div class="host-photo-wrapper mb-4">
                    <div class="host-photo"></div>
                </div>

                <div class="header text-center p-2">Host Event</div>

                <div class="sub-header text-center p-2">
                    Southeast Asia’s largest esports event organizers
                </div>

                <div class="description text-center p-3">
                    MET Events is the company that brought to the region such events as the
                    Manila Masters, the MPGL Asia Championship, the PVP Esports Championship,
                    and many others. With offices in the Philippines, Indonesia, Thailand, and
                    Malaysia, MET Events is capable of organizing tournaments at the cybercafe
                    level all the way up to arena-filling international spectacles.

                    <br><br>

                    Founded in 2008, MET has gone from being a small dedicated team of local
                    tournament organizers to the multi-national premier events organizer
                    it is today.
                </div>

                <button type="button" class="btn btn-primary btn-yellow-reverse ms-auto me-auto">
                    CONTACT US
                </button>
            </section>

            <section id="sponsor" class="sponsor section-wrapper clearfix row pt-4 pb-4">
                <div class="sponsor-photo-wrapper mb-4">
                    <div class="sponsor-photo"></div>
                </div>

                <div class="header text-center p-2">Sponsor Event</div>

                <div class="description text-center p-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Posuere
                    suspendisse metus, gravida nisi pretium scelerisque mattis. Malesuada
                    suscipit augue convallis orci lorem volutpat sagittis, nisl.
                </div>

                <button type="button" class="btn btn-primary btn-yellow-reverse ms-auto me-auto">
                    CONTACT US
                </button>
            </section>

            <section id="pro-team" class="pro-team section-wrapper clearfix row pt-4 pb-4">
                <div class="pro-team-photo-wrapper mb-4">
                    <div class="pro-team-photo"></div>
                </div>

                <div class="mineski-pro-logo-wrapper mb-4 ms-auto me-auto">
                    <div class="mineski-pro-logo"></div>
                </div>

                <div class="header text-center p-2">Pro Team MGMT</div>

                <div class="description text-center p-3">
                    Mineski pro teams are known as powerhouse competitors across multiple game
                    titles in Southeast Asia. There are few organizations in esports that are
                    as storied as this, and have been as consistent in retaining their spot
                    among the region’s best competitors from as far back as 2004.

                    <br><br>

                    Starting off as a DotA squad of best friends, now the Mineski brand can be
                    found on pro teams in multiple esports titles, fielding top talent from
                    across Southeast Asia.
                </div>

                <button type="button" class="btn btn-primary btn-yellow-reverse ms-auto me-auto">
                    CONTACT US
                </button>
            </section>

            <section id="influencer" class="influencer section-wrapper clearfix row pt-4 pb-4">
                <div class="header text-center p-2">Influencers MGMT</div>

                <div class="description text-center p-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat dolor
                    tempus dolor, risus sed. Consequat praesent tincidunt non erat curabitur
                    venenatis, vitae lorem sagittis. Aliquam lobortis vitae ut viverra pharetra.
                </div>

                <div class="influencer-list col-sm-12 col-12 mb-4">
                    <div class="row">
                        <?php foreach ($influencers as $row) : ?>
                        <div class="influencer-item col-sm-6 col-6 mb-4">
                            <div class="influencer-photo mb-3" style="background-image: url('<?php echo $row['photo']; ?>');"></div>
                            <div class="influencer-name text-center"><?php echo $row['name']; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <button type="button" class="btn btn-primary btn-yellow-reverse ms-auto me-auto">
                    CONTACT US
                </button>
            </section>
        </div>
    </div>

    <?php include('./partials/footer.php'); ?>

    <script src="../assets/bootstrap-5.0.2/js/bootstrap.min.js"></script>
</body>

</html>