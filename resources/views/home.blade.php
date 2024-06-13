{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/falcon/v3.19.0/pages/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2024 20:12:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
        <title>Events | Bienvenue</title>

        <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
        <link rel="manifest" href="../assets/img/favicons/manifest.json">
        <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff">
        <script src="../assets/js/config.js"></script>
        <script src="../vendors/simplebar/simplebar.min.js"></script>

        <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
        <link href="../vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
        <link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
        <link href="../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
        <link href="../assets/css/theme.min.css" rel="stylesheet" id="style-default">
        <link href="../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
        <link href="../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
        <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
        </script>
    </head>

        <body>
            <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
            <main class="main" id="top">

                <nav class="navbar navbar-standard navbar-expand-lg fixed-top navbar-dark" data-navbar-darken-on-scroll="data-navbar-darken-on-scroll">

                    <div class="container">
                        <a class="navbar-brand" href="../index-2.html">
                            <span class="text-white dark__text-white">
                                Events
                            </span>
                        </a>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                            </span>
                        </button>

                        <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                            {{-- <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../index-2.html">Default</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/lms.html">LMS<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="../dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/saas.html">SaaS</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/support-desk.html">Support desk<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                                <div class="card navbar-card-app shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                                    <div class="row">
                                        <div class="col-6 col-md-4">
                                        <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="../app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="../app/kanban.html">Kanban</a>
                                            <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="../app/social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="../app/social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="../app/social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="../app/social/followers.html">Followers</a>
                                            <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="../app/support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="../app/support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="../app/support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="../app/support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="../app/support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="../app/support-desk/quick-links.html">Quick links</a>
                                        </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="../app/e-learning/course/course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-learning/course/course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-learning/course/course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-learning/course/create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-learning/student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-learning/trainer-profile.html">Trainer profile</a>
                                            <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="../app/events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="../app/events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="../app/events/event-list.html">Event list</a>
                                            <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="../app/email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="../app/email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="../app/email/compose.html">Compose</a>
                                        </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/invoice.html">Invoice</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                                <div class="card navbar-card-pages shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/simple/lock-screen.html">Lock screen</a>
                                        </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/lock-screen.html">Lock screen</a>
                                        </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/lock-screen.html">Lock screen</a>
                                        </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a class="nav-link py-1 link-600 fw-medium" href="../demo/navbar-vertical.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../demo/navbar-top.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="../demo/navbar-double-top.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../demo/combo-nav.html">Combo nav</a>
                                            <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="landing.html">Landing</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="user/settings.html">Settings</a>
                                        </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="pricing/pricing-alt.html">Pricing alt</a>
                                        </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="errors/500.html">500</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="miscellaneous/privacy-policy.html">Privacy policy</a>
                                        </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a class="nav-link py-1 link-600 fw-medium" href="faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="faq/faq-accordion.html">Faq accordion</a>
                                        </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../index.html#authentication-modal" data-bs-toggle="modal">Modal</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                                <div class="card navbar-card-components shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/carousel/bootstrap.html">Bootstrap carousel</a>
                                        </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/draggable.html">Draggable</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a></div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/top-navbar.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/placeholder.html">Placeholder</a></div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pagination.html">Pagination</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/videos/plyr.html">Plyr</a></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/visibility.html">Visibility</a>
                                        </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/bulk-select.html">Bulk select</a>
                                            <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                                            <p class="nav-link text-700 mb-0 fw-bold">ELook</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/how-to-use.html">How to use</a>
                                        </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column">
                                            <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/validation.html">Validation</a>
                                        </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                        <div class="nav flex-column pt-xxl-1">
                                            <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/material-icons.html">Material icons</a>
                                            <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/maps/leaflet-map.html">Leaflet map</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/styling.html">Styling<span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/dark-mode.html">Dark mode</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="../documentation/faq.html">Faq</a><a class="dropdown-item link-600 fw-medium" href="../documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="../documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="../changelog.html">Changelog</a></div>
                                </div>
                            </li>
                            </ul> --}}


                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item d-flex align-items-center me-2">
                                    <div class="dropdown theme-control-dropdown landing-drop">
                                        <a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait pe-1" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="d-none d-lg-block">
                                                <span class="fas fa-sun" data-theme-dropdown-toggle-icon="light">
                                                </span>
                                                <span class="fas fa-moon" data-theme-dropdown-toggle-icon="dark">
                                                </span>
                                                <span class="fas fa-adjust" data-theme-dropdown-toggle-icon="auto">
                                                </span>
                                            </span>
                                            <span class="d-lg-none">
                                                Changer de thème
                                            </span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-1" aria-labelledby="themeSwitchDropdown">
                                            <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                                <button class="dropdown-item link-600 d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme">
                                                    <span class="fas fa-sun">
                                                    </span>
                                                    Clair
                                                    <span class="fas fa-check dropdown-check-icon ms-auto text-600">
                                                    </span>
                                                </button>
                                                <button class="dropdown-item link-600 d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme">
                                                    <span class="fas fa-moon" data-fa-transform="">
                                                    </span>
                                                    Sombre
                                                    <span class="fas fa-check dropdown-check-icon ms-auto text-600">
                                                    </span>
                                                </button>
                                                <button class="dropdown-item link-600 d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme">
                                                    <span class="fas fa-adjust" data-fa-transform="">
                                                    </span>
                                                    Auto
                                                    <span class="fas fa-check dropdown-check-icon ms-auto text-600">
                                                    </span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <ul>
                                    @auth
                                        <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none">
                                            @csrf
                                        </form>
                                    @endauth
                                </ul>

                                <li class="nav-item d-flex align-items-center me-2">

                                    <div class="dropdown theme-control-dropdown landing-drop">
                                        <a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait pe-1" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="d-none d-lg-block">
                                                <span class="fas fa-person" data-theme-dropdown-toggle-icon="light">

                                                </span>
                                                <span class="fas fa-person" data-theme-dropdown-toggle-icon="dark">

                                                </span>
                                                <span class="fas fa-person" data-theme-dropdown-toggle-icon="auto">

                                                </span>
                                            </span>
                                            <span class="d-lg-none">
                                                Paramètres
                                            </span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-1" aria-labelledby="themeSwitchDropdown">

                                            <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                                <button class="dropdown-item link-600 d-flex align-items-center gap-2" type="button" value="light">

                                                    <span class="fas fa-person">

                                                    </span>

                                                    Se connecter

                                                    <span class="fas fa-check dropdown-check-icon ms-auto text-600">

                                                    </span>

                                                </button>

                                                <button class="dropdown-item link-600 d-flex align-items-center gap-2" type="button" value="dark">

                                                    <span class="fas fa-person">

                                                    </span>

                                                    S'inscrire

                                                    <span class="fas fa-check dropdown-check-icon ms-auto text-600">

                                                    </span>

                                                </button>

                                                <button class="dropdown-item link-600 d-flex align-items-center gap-2" type="button" value="auto" onclick="document.getElementById('logout-form').submit();">

                                                    <span class="fas fa-person">

                                                    </span>

                                                    Se déconnecter

                                                    <span class="fas fa-check dropdown-check-icon ms-auto text-600">

                                                    </span>

                                                </button>

                                            </div>

                                        </div>

                                    </div>

                                </li>



                            {{-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownLogin" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Se connecter</a>
                                <div class="dropdown-menu dropdown-caret dropdown-menu-end dropdown-menu-card" aria-labelledby="navbarDropdownLogin">
                                <div class="card shadow-none navbar-card-login">
                                    <div class="card-body fs-10 p-4 fw-normal">
                                    <div class="row text-start justify-content-between align-items-center mb-2">
                                        <div class="col-auto">
                                        <h5 class="mb-0">Log in</h5>
                                        </div>
                                        <div class="col-auto">
                                        <p class="fs-10 text-600 mb-0">or <a href="authentication/simple/register.html">Create an account</a></p>
                                        </div>
                                    </div>
                                    {{-- <form>
                                        <div class="mb-3"><input class="form-control" type="email" placeholder="Email address" /></div>
                                        <div class="mb-3"><input class="form-control" type="password" placeholder="Password" /></div>
                                        <div class="row flex-between-center">
                                        <div class="col-auto">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="modal-checkbox" /><label class="form-check-label mb-0" for="modal-checkbox">Remember me</label></div>
                                        </div>
                                        <div class="col-auto"><a class="fs-10" href="authentication/simple/forgot-password.html">Forgot Password?</a></div>
                                        </div>
                                        <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Log in</button></div>
                                    </form> --}}
                                    {{-- <div class="position-relative mt-4">
                                        <hr />
                                        <div class="divider-content-center">or log in with</div>
                                    </div> --}}
                                    {{-- <div class="row g-2 mt-2">
                                        <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                                        <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                                    </div> --}}
                                    </div>
                                </div>
                                </div>
                            {{-- </li> --}}
                            {{-- <li class="nav-item"><a class="nav-link" href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">Register</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </nav>
            {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body p-4">
                    <div class="row text-start justify-content-between align-items-center mb-2">
                        <div class="col-auto">
                        <h5 id="modalLabel">Register</h5>
                        </div>
                        <div class="col-auto">
                        <p class="fs-10 text-600 mb-0">Have an account? <a href="authentication/simple/login.html">Login</a></p>
                        </div>
                    </div>
                    <form>
                        <div class="mb-3"><input class="form-control" type="text" autocomplete="on" placeholder="Name" /></div>
                        <div class="mb-3"><input class="form-control" type="email" autocomplete="on" placeholder="Email address" /></div>
                        <div class="row gx-2">
                        <div class="mb-3 col-sm-6"><input class="form-control" type="password" autocomplete="on" placeholder="Password" /></div>
                        <div class="mb-3 col-sm-6"><input class="form-control" type="password" autocomplete="on" placeholder="Confirm Password" /></div>
                        </div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="modal-register-checkbox" /><label class="form-label" for="modal-register-checkbox">I accept the <a href="#!">terms </a>and <a class="white-space-nowrap" href="#!">privacy policy</a></label></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button></div>
                    </form>
                    <div class="position-relative mt-4">
                        <hr />
                        <div class="divider-content-center">or register with</div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                        <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                    </div>
                    </div>
                </div>
                </div>
            </div> --}}

            <!-- ============================================--><!-- <section> begin ============================-->
            <section class="py-0 overflow-hidden" id="banner" data-bs-theme="light">

                <div class="bg-holder overlay" style="background-image:url(../assets/img/generic/bg-1.jpg);background-position: center bottom;">

                </div><!--/.bg-holder-->

                <div class="container">

                    <div class="row flex-center pt-8 pt-lg-10 pb-lg-9 pb-xl-0">

                        <div class="col-md-11 col-lg-8 col-xl-4 pb-7 pb-xl-9 text-center text-xl-start">

                            <a class="btn btn-outline-danger mb-4 fs-10 border-2 rounded-pill" href="#!">
                                <span class="me-2" role="img" aria-label="Gift">
                                    🎁
                                </span>
                                Devenez un pro
                            </a>

                            <h1 class="text-white fw-light">
                                Apporter
                                <span class="typed-text fw-bold" data-typed-text='["design","beauty","elegance","perfection"]'>
                                </span>
                                <br />
                                à votre application Web
                            </h1>

                            <p class="lead text-white opacity-75">
                                Grâce à la puissance de Falcon, vous pouvez désormais vous concentrer uniquement sur les fonctionnalités de vos produits numériques, tout en nous confiant la conception de l'interface utilisateur!
                            </p>

                            <a class="btn btn-outline-light border-2 rounded-pill btn-lg mt-4 fs-9 py-2" href="#!">
                                Commencez à construire avec le Falcon
                                <span class="fas fa-play ms-2" data-fa-transform="shrink-6 down-1">
                                </span>
                            </a>

                        </div>

                        <div class="col-xl-7 offset-xl-1 align-self-end mt-4 mt-xl-0">
                            <a class="img-landing-banner rounded" href="../index-2.html">
                                <img class="img-fluid d-dark-none" src="../assets/img/generic/dashboard-alt.jpg" alt="" />
                                <img class="img-fluid d-light-none" src="../assets/img/generic/dashboard-alt-dark.png" alt="" />
                            </a>
                        </div>

                    </div>
                </div><!-- end of .container-->

            </section><!-- <section> close ============================--><!-- ============================================-->



            <!-- ============================================--><!-- <section> begin ============================-->
            <section class="py-3 bg-body-tertiary shadow-sm">

                <div class="container">

                    <div class="row flex-center">

                        <div class="col-3 col-sm-auto my-1 my-sm-3 px-x1">
                            <img class="landing-cta-img" height="40" src="../assets/img/logos/b%26w/6.png" alt="" />
                        </div>

                        <div class="col-3 col-sm-auto my-1 my-sm-3 px-x1">
                            <img class="landing-cta-img" height="45" src="../assets/img/logos/b%26w/11.png" alt="" />
                        </div>

                        <div class="col-3 col-sm-auto my-1 my-sm-3 px-x1">
                            <img class="landing-cta-img" height="30" src="../assets/img/logos/b%26w/2.png" alt="" />
                        </div>

                        <div class="col-3 col-sm-auto my-1 my-sm-3 px-x1">
                            <img class="landing-cta-img" height="30" src="../assets/img/logos/b%26w/4.png" alt="" />
                        </div>

                        <div class="col-3 col-sm-auto my-1 my-sm-3 px-x1">
                            <img class="landing-cta-img" height="35" src="../assets/img/logos/b%26w/1.png" alt="" />
                        </div>

                        <div class="col-3 col-sm-auto my-1 my-sm-3 px-x1">
                            <img class="landing-cta-img" height="40" src="../assets/img/logos/b%26w/10.png" alt="" />
                        </div>

                        <div class="col-3 col-sm-auto my-1 my-sm-3 px-x1">
                            <img class="landing-cta-img" height="40" src="../assets/img/logos/b%26w/12.png" alt="" />
                        </div>

                    </div>

                </div><!-- end of .container-->

            </section><!-- <section> close ============================--><!-- ============================================-->



            <!-- ============================================--><!-- <section> begin ============================-->
            <section>

                <div class="container">

                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <h1 class="fs-7 fs-sm-5 fs-md-4">
                                WebApp theme of the future
                            </h1>
                            <p class="lead">
                                Built on top of Bootstrap 5, super modular Falcon provides you gorgeous design &amp; streamlined UX for your WebApp.
                            </p>
                        </div>
                    </div>

                    <div class="row flex-center mt-8">
                        <div class="col-md col-lg-5 col-xl-4 ps-lg-6">
                            <img class="img-fluid px-6 px-md-0" src="../assets/img/icons/spot-illustrations/50.png" alt="" />
                        </div>
                        <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
                            <h5 class="text-danger">
                                <span class="far fa-lightbulb me-2">
                                </span>
                                PLAN
                            </h5>
                            <h3>
                                Plan &amp; conception
                            </h3>
                            <p>
                                Avec Falcon comme guide, vous disposez désormais d'un outil d'état de la terre affiné pour faire de votre wireframe une réalité.
                            </p>
                        </div>
                    </div>

                    <div class="row flex-center mt-7">
                        <div class="col-md col-lg-5 col-xl-4 pe-lg-6 order-md-2">
                            <img class="img-fluid px-6 px-md-0" src="../assets/img/icons/spot-illustrations/49.png" alt="" />
                        </div>
                        <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
                            <h5 class="text-info">
                                <span class="far fa-object-ungroup me-2">
                                </span>
                                Plan
                            </h5>
                            <h3>
                                38 Ensembles de composants
                            </h3>
                            <p>
                                Créez n'importe quelle interface utilisateur sans effort grâce à l'ensemble robuste de mises en page de Falcon, 38 ensembles d'éléments intégrés, des couleurs, une typographie et des assistants CSS soigneusement choisi.
                            </p>
                        </div>
                    </div>

                    <div class="row flex-center mt-7">
                        <div class="col-md col-lg-5 col-xl-4 ps-lg-6">
                            <img class="img-fluid px-6 px-md-0" src="../assets/img/icons/spot-illustrations/48.png" alt="" />
                        </div>
                        <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
                            <h5 class="text-success">
                                <span class="far fa-paper-plane me-2">
                                </span>
                                Déployer
                            </h5>
                            <h3>
                                Réviser et tester
                            </h3>
                            <p>
                                De IE à IOS, Falcon rigoureusement testé et optimisé donnera une finition presque parfaite à votre application Web; de la page de destination à l'écran de déconnexion.
                            </p>
                        </div>
                    </div>

                </div><!-- end of .container-->

            </section><!-- <section> close ============================--><!-- ============================================-->



            <!-- ============================================--><!-- <section> begin ============================-->
            <section class="bg-body-tertiary dark__bg-opacity-50 text-center">

                <div class="container">

                    <div class="row">
                        <div class="col">
                            <h1 class="fs-7 fs-sm-5 fs-md-4">
                                Voici ce que vous y gagnerez
                            </h1>
                            <p class="lead">
                                Des choses que vous obtiendrez immédiatement avec Falcon.
                            </p>
                        </div>
                    </div>

                    <div class="row mt-6">

                        <div class="col-lg-4">
                            <div class="card card-span h-100">
                                <div class="card-span-img">
                                    <span class="fab fa-sass fs-5 text-info">
                                    </span>
                                </div>
                                <div class="card-body pt-6 pb-4">
                                    <h5 class="mb-2">
                                        Ammorcez 5.x
                                    </h5>
                                    <p>
                                        Créez votre application Web avec la bibliothèque de composants frontaux la plus populaire au monde ainsi que les 32 ensembles d'éléments soigneusement conçus de Falcon.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-6 mt-lg-0">
                            <div class="card card-span h-100">
                                <div class="card-span-img">
                                    <span class="fab fa-node-js fs-4 text-success">
                                    </span>
                                </div>
                                <div class="card-body pt-6 pb-4">
                                    <h5 class="mb-2">
                                        SCSS &amp; Fichiers Javascript
                                    </h5>
                                    <p>
                                        Avec votre copie achetée de Falcon, vous obtiendrez tous les fichiers de code source SCSS et Javascript non compressés et documentés.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-6 mt-lg-0">
                            <div class="card card-span h-100">
                                <div class="card-span-img">
                                    <span class="fab fa-gulp fs-3 text-danger">
                                    </span>
                                </div>
                                <div class="card-body pt-6 pb-4">
                                    <h5 class="mb-2">
                                        Flux de travail basé sur Gulp
                                    </h5>
                                    <p>
                                        Toutes les tâches pénibles ou chronophages de votre flux de travail de développement, telles que la compilation du SCSS ou l'exécution du JS, sont automatisées.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- end of .container-->

            </section><!-- <section> close ============================--><!-- ============================================-->



            <!-- ============================================--><!-- <section> begin ============================-->
            <section class="bg-200 text-center">

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-lg-9 col-xl-8">

                            <div class="swiper-container theme-slider" data-swiper='{"autoplay":true,"spaceBetween":5,"loop":true,"loopedSlides":5,"slideToClickedSlide":true}'>

                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="px-5 px-sm-6">
                                            <p class="fs-sm-8 fs-md-7 fst-italic text-1100">
                                                Falcon est la meilleure option si vous recherchez un thème construit avec Bootstrap. De plus, les créateurs et l'équipe d'assistance de Falcon sont très brillants et attentifs aux utilisateurs&apos;les créteurs et le personnel d'assistance sont très brillants et attentifs aux utilisateurs&apos; besoins.
                                            </p>

                                            <p class="fs-9 text-600">
                                                - Scott Tolinski, Développeur web
                                            </p>

                                            <img class="w-auto mx-auto" src="../assets/img/logos/google.png" alt="" height="45" />
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="px-5 px-sm-6">
                                            <p class="fs-sm-8 fs-md-7 fst-italic text-1100">
                                               Nous sommes devenus des fanboys! Conception modulaire facile à modifier, excellente interface utilisateurdu tableau de bord, prise en charge de classe entreprise, temps de chargement rapide. Qu'attendez vous d'autre d'un thème Bootstrap?
                                            </p>

                                            <p class="fs-9 text-600">
                                                - Jeff Escalante, Développeur
                                            </p>

                                            <img class="w-auto mx-auto" src="../assets/img/logos/netflix.png" alt="" height="30" />
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="px-5 px-sm-6">
                                            <p class="fs-sm-8 fs-md-7 fst-italic text-1100">
                                                Lorsque j'ai vu Falcon pour la première fois, j'ai été totalement épostouflé par le soin apporté à l'interface. Cela ressemblait à quelque chose que je voulais vraiment utiliser et que je pouvais considérer comme un véritable remplacement moderne de la classe actuelle de thèmes Bootstrap.
                                            </p>

                                            <p class="fs-9 text-600">
                                                - Liam Martens, Concepteur
                                            </p>

                                            <img class="w-auto mx-auto" src="../assets/img/logos/paypal.png" alt="" height="45" />

                                        </div>
                                    </div>

                                </div>

                                <div class="swiper-nav">
                                    <div class="swiper-button-next swiper-button-white">

                                    </div>
                                    <div class="swiper-button-prev swiper-button-white">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div><!-- end of .container-->

            </section><!-- <section> close ============================--><!-- ============================================-->



            <!-- ============================================--><!-- <section> begin ============================-->
            <section class="bg-dark" data-bs-theme="light">

                <div class="bg-holder overlay" style="background-image:url(../assets/img/generic/bg-2.jpg);background-position: center top;">

                </div><!--/.bg-holder-->
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8">
                            <p class="fs-6 fs-sm-5 text-white">
                                Join our community of 20,000+ developers and content creators on their mission to build better sites and apps.
                            </p>
                            <button class="btn btn-outline-light border-2 rounded-pill btn-lg mt-4 fs-9 py-2" type="button">
                                Start your webapp
                            </button>
                        </div>
                    </div>
                </div><!-- end of .container-->

            </section><!-- <section> close ============================--><!-- ============================================-->



            <!-- ============================================--><!-- <section> begin ============================-->
            <section class="bg-dark pt-8 pb-4" data-bs-theme="light">

                <div class="container">

                    <div class="position-absolute btn-back-to-top bg-dark">

                        <a class="text-600" href="#banner" data-bs-offset-top="0">

                            <span class="fas fa-chevron-up" data-fa-transform="rotate-45">
                            </span>

                        </a>
                    </div>

                    <div class="row">

                        <div class="col-lg-4">

                            <h5 class="text-uppercase text-white opacity-85 mb-3">
                                Nottre mission
                            </h5>

                            <p class="text-600">
                               Falcon permet aux développeurs Front-end de créer des interfaces utilisateur rationalisées personnalisés en quelques heures, tout en donnant aux développeurs back_end tous les éléments d'interface utilisateur dont ils ont besoin pour développer leur application Web. Et sa conception riche peut être facilement intégrée aux backends, que votre application soit basée sur Ruby on Rails, Laravel, Express ou tout autre système côté serveur.
                            </p>

                            <div class="icon-group mt-4">

                                <a class="icon-item bg-white text-facebook" href="#!">
                                    <span class="fab fa-facebook-f">
                                    </span>
                                </a>

                                <a class="icon-item bg-white text-twitter" href="#!">
                                    <span class="fab fa-twitter">
                                    </span>
                                </a>

                                <a class="icon-item bg-white text-google-plus" href="#!">
                                    <span class="fab fa-google-plus-g">
                                    </span>
                                </a>

                                <a class="icon-item bg-white text-linkedin" href="#!">
                                    <span class="fab fa-linkedin-in">
                                    </span>
                                </a>

                                <a class="icon-item bg-white" href="#!">
                                    <span class="fab fa-medium-m">
                                    </span>
                                </a>

                            </div>

                        </div>

                        <div class="col ps-lg-6 ps-xl-8">

                            <div class="row mt-5 mt-lg-0">

                                <div class="col-6 col-md-3">

                                    <h5 class="text-uppercase text-white opacity-85 mb-3">
                                        Entreprise
                                    </h5>

                                    <ul class="list-unstyled">

                                        <li class="mb-1">
                                            <a class="link-600" href="#!">
                                                About
                                            </a>
                                        </li>

                                        <li class="mb-1">
                                            <a class="link-600" href="#!">
                                                Contact
                                            </a>
                                        </li>

                                        <li class="mb-1">
                                            <a class="link-600" href="#!">
                                                Carrières
                                            </a>
                                        </li>

                                        <li class="mb-1">
                                            <a class="link-600" href="#!">
                                                Blog
                                            </a>
                                        </li>

                                        <li class="mb-1">
                                            <a class="link-600" href="#!">
                                                Termes
                                            </a>
                                        </li>

                                        <li class="mb-1">
                                            <a class="link-600" href="#!">
                                                Confidentialité
                                            </a>
                                        </li>

                                        <li>
                                            <a class="link-600" href="#!">
                                                Imprimer
                                            </a>
                                        </li>

                                    </ul>

                                </div>

                                <div class="col-6 col-md-3">

                                    <h5 class="text-uppercase text-white opacity-85 mb-3">
                                        Produit
                                    </h5>

                                    <ul class="list-unstyled">

                                        <li class="mb-1">
                                            <a class="link-600" href="#!">
                                                Caractéristiques
                                            </a>
                                        </li>

                                        <li class="mb-1">
                                            <a class="link-600" href="#!">
                                                Feuille de route
                                            </a>
                                        </li>

                                        <li class="mb-1">
                                            <a class="link-600" href="#!">
                                                Journal des modifications
                                            </a>
                                        </li>

                                        <li class="mb-1">
                                            <a class="link-600" href="#!">
                                                Tarifs
                                            </a>
                                        </li>

                                        <li class="mb-1">
                                            <a class="link-600" href="#!">
                                                Documents
                                            </a>
                                        </li>

                                        <li class="mb-1">
                                            <a class="link-600" href="#!">
                                                Etat du sytème
                                            </a>
                                        </li>

                                        <li class="mb-1">
                                            <a class="link-600" href="#!">
                                                Agences
                                            </a>
                                        </li>

                                        <li class="mb-1">
                                            <a class="link-600" href="#!">
                                                Enterprise
                                            </a>
                                        </li>

                                    </ul>

                                </div>

                                <div class="col mt-5 mt-md-0">

                                    <h5 class="text-uppercase text-white opacity-85 mb-3">
                                        Du Blog
                                    </h5>

                                    <ul class="list-unstyled">
                                        <li>
                                            <h5 class="fs-9 mb-0">
                                                <a class="link-600" href="#!">
                                                    Graphiques et diagrammes interactifs
                                                </a>
                                            </h5>
                                            <p class="text-600 opacity-50">
                                                15 Janvier  &bull; 8 minutes de lecture
                                            </p>
                                        </li>

                                        <li>
                                            <h5 class="fs-9 mb-0">
                                                <a class="link-600" href="#!">
                                                    Mises à jour gratuites à vie
                                                </a>
                                            </h5>
                                            <p class="text-600 opacity-50">
                                                5 Janvier &bull; 3 minutes de lecture &starf;
                                            </p>
                                        </li>

                                        <li>
                                            <h5 class="fs-9 mb-0">
                                                <a class="link-600" href="#!">
                                                    Joyeux Noël de notre part
                                                </a>
                                            </h5>
                                            <p class="text-600 opacity-50">
                                                25 Décembre &bull; 2 minutes de lecture
                                            </p>
                                        </li>

                                        <li>
                                            <h5 class="fs-9 mb-0">
                                                <a class="link-600" href="#!">
                                                    Le nouveau thème de Falcon
                                                </a>
                                            </h5>
                                            <p class="text-600 opacity-50">
                                                23 Décembre  &bull; 10 minutes de lecture
                                            </p>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                     </div>

                </div><!-- end of .container-->

            </section><!-- <section> close ============================--><!-- ============================================-->



            <!-- ============================================--><!-- <section> begin ============================-->
            <section class="py-0 bg-dark" data-bs-theme="light">

                <div>

                    <hr class="my-0 text-600 opacity-25" />

                    <div class="container py-3">
                        <div class="row justify-content-between fs-10">
                            <div class="col-12 col-sm-auto text-center">
                                <p class="mb-0 text-600 opacity-85">
                                    Merci d'avoir créé avec Falcon
                                    <span class="d-none d-sm-inline-block">
                                        |
                                    </span>
                                    <br class="d-sm-none" />
                                    2023 &copy;
                                    <a class="text-white opacity-85" href="https://themewagon.com/">
                                        Thèmewagon
                                    </a>
                                </p>
                            </div>

                            <div class="col-12 col-sm-auto text-center">
                                <p class="mb-0 text-600 opacity-85">
                                    v3.19.0
                                </p>
                            </div>
                        </div>
                    </div>

                </div><!-- end of .container-->

            </section><!-- <section> close ============================--><!-- ============================================-->

        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
                <div class="modal-dialog mt-6" role="document">
                    <div class="modal-content border-0">
                        <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                            <div class="position-relative z-1">
                                <h4 class="mb-0 text-white" id="authentication-modal-label">
                                    Inscription
                                </h4>
                                <p class="fs-10 mb-0 text-white">
                                    Veuillez créer votre compte Falcon gratuit
                                </p>
                            </div>
                            <button class="btn-close position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close">

                            </button>
                        </div>
                        <div class="modal-body py-4 px-5">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label" for="modal-auth-name">
                                        Nom
                                    </label>
                                    <input class="form-control" type="text" autocomplete="on" id="modal-auth-name" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="modal-auth-email">
                                        Adresse Mail
                                    </label>
                                    <input class="form-control" type="email" autocomplete="on" id="modal-auth-email" />
                                </div>

                                <div class="row gx-2">
                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="modal-auth-password">
                                            Mot de passe
                                        </label>
                                        <input class="form-control" type="password" autocomplete="on" id="modal-auth-password" />
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="modal-auth-confirm-password">
                                            Confirmer mot de passe
                                        </label>
                                        <input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" />
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
                                    <label class="form-label" for="modal-auth-register-checkbox">
                                        J'accepte les
                                        <a href="#!">
                                            termes
                                        </a>et
                                        <a class="white-space-nowrap" href="#!">
                                            politiques de confidentialités
                                        </a>
                                    </label>
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">
                                        S'inscrire
                                    </button>
                                </div>
                            </form>

                            <div class="position-relative mt-5">
                                <hr />
                                <div class="divider-content-center">
                                    s'inscrire avec
                                </div>
                            </div>

                            <div class="row g-2 mt-2">
                                <div class="col-sm-6">
                                    <a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#">
                                        <span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8">
                                        </span>
                                        google
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a class="btn btn-outline-facebook btn-sm d-block w-100" href="#">
                                        <span class="fab fa-facebook-square me-2" data-fa-transform="grow-8">
                                        </span>
                                        facebook
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </div>

            </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

            <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">

                <div class="offcanvas-header settings-panel-header bg-shape">
                    <div class="z-1 py-1">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="text-white mb-0 me-2">
                                <span class="fas fa-palette me-2 fs-9">
                                </span>
                                Paramètres
                            </h5>
                            <button class="btn btn-primary btn-sm rounded-pill mt-0 mb-0" data-theme-control="reset" style="font-size:12px">
                                <span class="fas fa-redo-alt me-1" data-fa-transform="shrink-3">
                                </span>
                                Réinitialiser
                            </button>
                        </div>
                        <p class="mb-0 fs-10 text-white opacity-75">
                            Définissez votre propre style personnalisé
                        </p>
                    </div>

                    <div class="z-1" data-bs-theme="dark">
                        <button class="btn-close z-1 mt-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                        </button>
                    </div>
                </div>

                <div class="offcanvas-body scrollbar-overlay px-x1 h-100" id="themeController">
                    <h5 class="fs-9">
                        Schéma de couleur
                    </h5>
                    <p class="fs-10">
                        Choisissez le mode couleur parfait pour votre application
                    </p>
                    <div class="btn-group d-block w-100 btn-group-navbar-style">
                        <div class="row gx-2">

                            <div class="col-4">
                                <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" />
                                <label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherLight">
                                    <span class="hover-overlay mb-2 rounded d-block">
                                        <img class="img-fluid img-prototype mb-0" src="../assets/img/generic/falcon-mode-default.jpg" alt=""/>
                                    </span>
                                    <span class="label-text">
                                        Clair
                                    </span>
                                </label>
                            </div>

                            <div class="col-4">
                                <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" />
                                <label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherDark">
                                    <span class="hover-overlay mb-2 rounded d-block">
                                        <img class="img-fluid img-prototype mb-0" src="../assets/img/generic/falcon-mode-dark.jpg" alt=""/>
                                    </span>
                                    <span class="label-text">
                                        Sombre
                                    </span>
                                </label>
                            </div>

                            <div class="col-4">
                                <input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="theme" />
                                <label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherAuto">
                                    <span class="hover-overlay mb-2 rounded d-block">
                                        <img class="img-fluid img-prototype mb-0" src="../assets/img/generic/falcon-mode-auto.jpg" alt=""/>
                                    </span>
                                    <span class="label-text">
                                        Automatique
                                    </span>
                                </label>
                            </div>

                        </div>
                    </div>
                    <hr />
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-start"><img class="me-2" src="../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                            <div class="flex-1">
                                <h5 class="fs-9">
                                    Mode RTL
                                </h5>
                                <p class="fs-10 mb-0">
                                    Changez la direction de votre langue
                                </p>
                                <a class="fs-10" href="../documentation/customization/configuration.html">
                                    Documentation RTL
                                </a>
                            </div>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" />
                        </div>
                    </div>
                    <hr />
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-start">
                            <img class="me-2" src="../assets/img/icons/arrows-h.svg" width="20" alt="" />
                            <div class="flex-1">
                            <h5 class="fs-9">
                                Disposition Fluide
                            </h5>
                            <p class="fs-10 mb-0">
                                Basculer le système de disposition des conteneurs
                            </p>
                            <a class="fs-10" href="../documentation/customization/configuration.html">
                                Documentation fluide
                            </a>

                        </div>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" />
                    </div>
                </div>
                    <hr />
                    <div class="d-flex align-items-start">
                        <img class="me-2" src="../assets/img/icons/paragraph.svg" width="20" alt="" />
                    <div class="flex-1">
                        <h5 class="fs-9 d-flex align-items-center">
                            Position de navigation
                        </h5>
                        <p class="fs-10 mb-2">
                            Sélectionnez un système de navigation adapté à votre application Web
                        </p>
                        <div>
                            <select class="form-select form-select-sm" aria-label="Navbar position" data-theme-control="navbarPosition">
                                <option value="vertical">Verticale</option>
                                <option value="top">Haut</option>
                                <option value="combo">Combo</option>
                                <option value="double-top">Double dessus</option>
                            </select></div>
                        </div>
                    </div>
                    <hr />
                    <h5 class="fs-9 d-flex align-items-center">
                        Style de barre de navigation verticale
                    </h5>
                    <p class="fs-10 mb-0">
                        Basculez entre les styles pour votre barre de navigation verticale
                    </p>
                    <p>
                        <a class="fs-10" href="../modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">
                            Voir Documentation
                        </a>
                    </p>
                    <div class="btn-group d-block w-100 btn-group-navbar-style">
                        <div class="row gx-2">
                            <div class="col-6">
                                <input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" />
                                <label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-transparent">
                                    <img class="img-fluid img-prototype" src="../assets/img/generic/default.png" alt="" />
                                    <span class="label-text">
                                        Transparent
                                    </span>
                                </label>
                            </div>
                            <div class="col-6">
                                <input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" />
                                <label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-inverted">
                                    <img class="img-fluid img-prototype" src="../assets/img/generic/inverted.png" alt="" />
                                    <span class="label-text">
                                        Inversée
                                    </span>
                                </label>
                            </div>
                            <div class="col-6">
                                <input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" />
                                <label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-card">
                                    <img class="img-fluid img-prototype" src="../assets/img/generic/card.png" alt="" />
                                    <span class="label-text">
                                        Carte
                                    </span>
                                </label>
                            </div>
                            <div class="col-6">
                                <input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" />
                                <label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-vibrant">
                                    <img class="img-fluid img-prototype" src="../assets/img/generic/vibrant.png" alt="" />
                                    <span class="label-text">
                                        Vibrant
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <img class="mb-4" src="../assets/img/icons/spot-illustrations/47.png" alt="" width="120" />
                        <h5>
                            Aimez vous ce que vous voyez?
                        </h5>
                        <p class="fs-10">
                            Obtenez Falcon maintenant et créez de superbes tableaux de bord avec des centaines de widgets.
                        </p>
                        <a class="mb-3 btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">
                            Achat
                        </a>
                    </div>
                </div>
            </div>
            <a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">

            <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">

                <div class="bg-primary-subtle position-relative rounded-start" style="height:34px;width:28px">

                <div class="settings-popover">
                    <span class="ripple">
                        <span class="fa-spin position-absolute all-0 d-flex flex-center">
                            <span class="icon-spin position-absolute all-0 d-flex flex-center">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4">
                                    </path>
                                </svg>
                            </span>
                        </span>
                    </span>
                </div>
            </div>
            <small class="text-uppercase text-primary fw-bold bg-primary-subtle py-2 pe-2 ps-1 rounded-end">
                Personnaliser
            </small>
        </div>
            </a>

            <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
            <script src="../vendors/popper/popper.min.js"></script>
            <script src="../vendors/bootstrap/bootstrap.min.js"></script>
            <script src="../vendors/anchorjs/anchor.min.js"></script>
            <script src="../vendors/is/is.min.js"></script>
            <script src="../vendors/swiper/swiper-bundle.min.js"> </script>
            <script src="../vendors/typed.js/typed.js"></script>
            <script src="../vendors/fontawesome/all.min.js"></script>
            <script src="../vendors/lodash/lodash.min.js"></script>
            <script src="../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
            <script src="../vendors/list.js/list.min.js"></script>
            <script src="../assets/js/theme.js"></script>
        </body>


        <!-- Mirrored from prium.github.io/falcon/v3.19.0/pages/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2024 20:13:05 GMT -->
</html>
