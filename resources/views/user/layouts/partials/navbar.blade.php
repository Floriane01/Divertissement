
    <main class="main" id="top">

        <nav class="navbar navbar-expand-lg bg-primary-subtle navbar" data-bs-theme="light">

            <div class="container-fluid">

                <a class="navbar-brand" href="#">
                    Events
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrimaryExample" aria-controls="navbarPrimaryExample" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarPrimaryExample">

                    <ul class="navbar-nav align-items-center d-none d-lg-block">

                    </ul>

                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                        {{-- <li class="nav-item ps-2 pe-0">
                            <div class="dropdown theme-control-dropdown"><a
                                    class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0"
                                    href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7"
                                        data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span
                                        class="fas fa-moon fs-7" data-fa-transform="shrink-3"
                                        data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7"
                                        data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3"
                                    aria-labelledby="themeSwitchDropdown">
                                    <div class="bg-white dark__bg-1000 rounded-2 py-2"><button
                                            class="dropdown-item d-flex align-items-center gap-2" type="button"
                                            value="light" data-theme-control="theme"><span
                                                class="fas fa-sun"></span>Light<span
                                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                                            class="dropdown-item d-flex align-items-center gap-2" type="button"
                                            value="dark" data-theme-control="theme"><span class="fas fa-moon"
                                                data-fa-transform=""></span>Dark<span
                                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                                            class="dropdown-item d-flex align-items-center gap-2" type="button"
                                            value="auto" data-theme-control="theme"><span class="fas fa-adjust"
                                                data-fa-transform=""></span>Auto<span
                                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                                    </div>
                                </div>
                            </div>
                        </li> --}}

                        <li class="nav-item dropdown">
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                                id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                data-hide-on-body-scroll="data-hide-on-body-scroll">
                                <span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none">
                                        <div class="card-header">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <h6 class="card-header-title mb-0">
                                                        Notifications
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="scrollbar-overlay" style="max-height:19rem">
                                        <div class="list-group list-group-flush fw-normal fs-10">
                                            <div class="list-group-title border-bottom">
                                                NOUVEAU
                                            </div>

                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1">
                                                            <strong>
                                                                Emma Watson
                                                            </strong>
                                                            replied to your comment: "Hello world 😍"
                                                        </p>
                                                        <span class="notification-time">
                                                            <span class="me-2" role="img" aria-label="Emoji">
                                                                💬
                                                            </span>
                                                                Just now
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="list-group-title border-bottom">
                                                Deja vu
                                            </div>

                                            <div class="list-group-item">
                                                <a class="notification notification-flush" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle" src="../assets/img/icons/weather-sm.jpg" alt="" />
                                                        </div>
                                                    </div>

                                                    <div class="notification-body">
                                                        <p class="mb-1">
                                                            The forecast today shows a low of 20&#8451; in California. See today's weather.
                                                        </p>
                                                        <span class="notification-time">
                                                            <span class="me-2" role="img" aria-label="Emoji">
                                                                🌤️
                                                            </span>
                                                                1d
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown px-1">

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item fw-bold text-warning" href="#!">
                                        <span class="fas fa-crown me-1">
                                        </span>
                                        <span>
                                            Bienvenue
                                        </span>
                                    </a>

                                    <div class="dropdown-divider">

                                    </div>
                                    <a class="dropdown-item" href="../pages/user/settings.html">
                                        Profil
                                    </a>
                                    <a class="dropdown-item" href="../pages/authentication/card/logout.html">
                                        Deconnexion
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container" data-layout="container">
            @yield('content')
        </div>
        
    </main>

