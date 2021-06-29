<style>
    #header .navbar.nav-header .navbar-brand:before {
        content: " ";
        padding-right: 160px;
        padding-bottom: 60px;
        background-image: url('../assets/img/mineski-logo.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .navbar-light .navbar-toggler {
        border: none;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
    }

    .nav-header .dropdown-menu {
        min-width: auto;
    }

    .nav-header .dropdown .nav-link {
        color: #000;
    }
</style>

<div id="header">
    <nav class="navbar nav-header navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#nav-header"
                aria-controls="nav-header"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="#"></a>

            <div class="dropdown">
                <a
                    id="country-dropdown"
                    class="nav-link"
                    href="#"
                    data-bs-toggle="dropdown"
                >
                    PH <i class="fas fa-chevron-down float-right"></i>
                </a>

                <ul class="dropdown-menu" aria-labelledby="country-dropdown">
                    <li><a class="dropdown-item" href="#">PH</a></li>
                    <li><a class="dropdown-item" href="#">TH</a></li>
                    <li><a class="dropdown-item" href="#">MY</a></li>
                    <li><a class="dropdown-item" href="#">SG</a></li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="nav-header">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Esports</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Gaming Platform</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Campaign Solution</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Work ENV Solution</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Media Center</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Join The Team</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                    <div class="dropdown-divider"></div>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>