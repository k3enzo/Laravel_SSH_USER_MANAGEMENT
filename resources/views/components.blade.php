@extends('layouts.app') @section('content')
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">
                            Total traffic
                        </h5>
                        <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                            <i class="ni ni-active-40"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">
                            New users
                        </h5>
                        <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                            <i class="ni ni-chart-pie-35"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">
                            Sales
                        </h5>
                        <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                            <i class="ni ni-money-coins"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">
                            Performance
                        </h5>
                        <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                            <i class="ni ni-chart-bar-32"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                </p>
            </div>
        </div>
    </div>
</div>


<div class="row mb-4">
    <div class="col-lg-6">
        <div class="card bg-gradient-default">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Total traffic
                        </h5>
                        <span class="h2 font-weight-bold mb-0 text-white">350,897</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                            <i class="ni ni-active-40"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap text-light">Since last month</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card bg-gradient-primary">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">New users</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">2,356</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                            <i class="ni ni-atom"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap text-light">Since last month</span>
                </p>
            </div>
        </div>
    </div>
</div>


<!-- ================= -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3>Alerts</h3>
            </div>
            <div class="card-body">
                <div class="alert alert-default" role="alert">
                    <strong>Default!</strong> This is a default alert—check it
                    out!
                </div>

                <div class="alert alert-primary" role="alert">
                    <strong>Primary!</strong> This is a primary alert—check it
                    out!
                </div>

                <div class="alert alert-secondary" role="alert">
                    <strong>Secondary!</strong> This is a secondary alert—check
                    it out!
                </div>

                <div class="alert alert-info" role="alert">
                    <strong>Info!</strong> This is a info alert—check it out!
                </div>

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Success!</strong> This is a success alert—check
                        it out!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Danger!</strong> This is a danger alert—check
                        it out!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Warning!</strong> This is a warning alert—check
                        it out!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================== -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3>Avatars</h3>
            </div>
            <div class="card-body">
                <a href="#!" class="avatar">
                    <img alt="Image placeholder"
                        src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                </a>
                <a href="#!" class="avatar rounded-circle">
                    <img alt="Image placeholder"
                        src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                </a>
                <a href="#!" class="avatar avatar-lg rounded-circle">
                    <img alt="Image placeholder"
                        src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                </a>

                <a href="#!" class="avatar avatar-xl rounded-circle">
                    <img alt="Image placeholder"
                        src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                </a>
                <div class="avatar-group d-inline ml-5">
                    <a href="#!" class="avatar rounded-circle">
                        <img alt="Image placeholder"
                            src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-1.jpg">
                    </a>
                    <a href="#!" class="avatar rounded-circle">
                        <img alt="Image placeholder"
                            src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-3.jpg">
                    </a>
                    <a href="#!" class="avatar rounded-circle">
                        <img alt="Image placeholder"
                            src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                    </a>
                    <a href="#!" class="avatar rounded-circle">
                        <img alt="Image placeholder"
                            src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-2.jpg">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ================== -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3>Badges</h3>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-default">
                    <span>Unread messages</span>
                    <span class="badge badge-primary">24</span>
                </button>
                <button type="button" class="btn btn-primary">
                    <span>Notifications</span>
                    <span class="badge badge-md badge-circle badge-floating badge-danger border-white">4</span>
                </button>
                <span class="badge badge-default">Default</span>
                <span class="badge badge-primary">Primary</span>
                <span class="badge badge-secondary">Secondary</span>
                <span class="badge badge-info">Info</span>
                <span class="badge badge-success">Success</span>
                <span class="badge badge-danger">Danger</span>
                <span class="badge badge-warning">Warning</span>
                <span class="badge badge-pill badge-default">Default</span>
                <span class="badge badge-pill badge-primary">Primary</span>
                <span class="badge badge-pill badge-secondary">Secondary</span>
                <span class="badge badge-pill badge-info">Info</span>
                <span class="badge badge-pill badge-success">Success</span>
                <span class="badge badge-pill badge-danger">Danger</span>
                <span class="badge badge-pill badge-warning">Warning</span>
                <span class="badge badge-pill badge-primary">Default</span>
                <span class="badge badge-pill badge-md badge-warning">Medium</span>
                <span class="badge badge-pill badge-lg badge-success">Large badge</span>
            </div>
        </div>
    </div>
</div>
<!-- ================== -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3>Buttons</h3>
            </div>
            <div class="card-body">
                <button class="btn btn-primary" type="button">Button</button>
                <button class="btn btn-icon btn-3 btn-primary" type="button">
                    <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                    <span class="btn-inner--text">With icon</span>
                </button>
                <button class="btn btn-icon btn-2 btn-primary" type="button">
                    <span class="btn-inner--icon"><i class="ni ni-atom"></i></span>
                </button>

                <button type="button" class="btn btn-default">Default</button>
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-secondary">Secondary</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-outline-default">Default</button>
                <button type="button" class="btn btn-outline-primary">Primary</button>

                <button type="button" class="btn btn-outline-success">Success</button>
                <button type="button" class="btn btn-outline-danger">Danger</button>
                <button type="button" class="btn btn-outline-warning">Warning</button>
                <button type="button" class="btn btn-primary my-4 btn-lg btn-block">Block level button</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
            </div>
        </div>
    </div>
</div>

<!-- ================== -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3>Card</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">

                        <div class="card d-inline-block">
                            <img class="card-img-top"
                                src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/img-1-1000x600.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-inline d-block">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                                            <span class="h2 font-weight-bold mb-0">2,356</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                <i class="ni ni-chart-pie-35"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile">

                            <img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/img-1-1000x600.jpg"
                                alt="Image placeholder" class="card-img-top">

                            <div class="row justify-content-center">
                                <div class="col-lg-3 order-lg-2">
                                    <div class="card-profile-image">
                                        <a href="#">
                                            <img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg"
                                                class="rounded-circle">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                                    <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col">
                                        <div class="card-profile-stats d-flex justify-content-center">
                                            <div>
                                                <span class="heading">22</span>
                                                <span class="description">Friends</span>
                                            </div>
                                            <div>
                                                <span class="heading">10</span>
                                                <span class="description">Photos</span>
                                            </div>
                                            <div>
                                                <span class="heading">89</span>
                                                <span class="description">Comments</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h5 class="h3">
                                        Jessica Jones<span class="font-weight-light">, 27</span>
                                    </h5>
                                    <div class="h5 font-weight-300">
                                        <i class="ni location_pin mr-2"></i>Bucharest, Romania
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- ================== -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3>Dropdown</h3>
            </div>
            <div class="card-body">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Primary</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div><!-- /btn-group -->
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Secondary</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div><!-- /btn-group -->
                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Success</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div><!-- /btn-group -->
                <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Info</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div><!-- /btn-group -->
                <div class="btn-group">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Warning</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div><!-- /btn-group -->
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Danger</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div><!-- /btn-group -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Regular
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>

                <div class="dropdown">
                    <a href="#" class="btn btn-default dropdown-toggle " data-toggle="dropdown"
                        id="navbarDropdownMenuLink2">
                        <img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/icons/flags/US.png" />
                        Flags
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <li>
                            <a class="dropdown-item" href="#">
                                <img
                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/icons/flags/DE.png" />
                                Deutsch
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <img
                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/icons/flags/GB.png" />
                                English(UK)
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <img
                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/icons/flags/FR.png" />
                                Français
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- ================== -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3>Dropdown</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Text</label>
                        <input class="form-control" type="text" value="John Snow" id="example-text-input">
                    </div>
                    <div class="form-group">
                        <label for="example-search-input" class="form-control-label">Search</label>
                        <input class="form-control" type="search" value="Tell me your secret ..."
                            id="example-search-input">
                    </div>
                    <div class="form-group">
                        <label for="example-email-input" class="form-control-label">Email</label>
                        <input class="form-control" type="email" value="@example.com" id="example-email-input">
                    </div>
                    <div class="form-group">
                        <label for="example-url-input" class="form-control-label">URL</label>
                        <input class="form-control" type="url" value="" id="example-url-input">
                    </div>
                    <div class="form-group">
                        <label for="example-tel-input" class="form-control-label">Phone</label>
                        <input class="form-control" type="tel" value="40-(770)-888-444" id="example-tel-input">
                    </div>
                    <div class="form-group">
                        <label for="example-password-input" class="form-control-label">Password</label>
                        <input class="form-control" type="password" value="password" id="example-password-input">
                    </div>
                    <div class="form-group">
                        <label for="example-number-input" class="form-control-label">Number</label>
                        <input class="form-control" type="number" value="23" id="example-number-input">
                    </div>
                    <div class="form-group">
                        <label for="example-datetime-local-input" class="form-control-label">Datetime</label>
                        <input class="form-control" type="datetime-local" value="2018-11-23T10:30:00"
                            id="example-datetime-local-input">
                    </div>
                    <div class="form-group">
                        <label for="example-date-input" class="form-control-label">Date</label>
                        <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
                    </div>
                    <div class="form-group">
                        <label for="example-month-input" class="form-control-label">Month</label>
                        <input class="form-control" type="month" value="2018-11" id="example-month-input">
                    </div>
                    <div class="form-group">
                        <label for="example-week-input" class="form-control-label">Week</label>
                        <input class="form-control" type="week" value="2018-W23" id="example-week-input">
                    </div>
                    <div class="form-group">
                        <label for="example-time-input" class="form-control-label">Time</label>
                        <input class="form-control" type="time" value="10:30:00" id="example-time-input">
                    </div>
                    <div class="form-group">
                        <label for="example-color-input" class="form-control-label">Color</label>
                        <input class="form-control" type="color" value="#5e72e4" id="example-color-input">
                    </div>
                    <label class="custom-toggle">
                        <input type="checkbox" checked>
                        <span class="custom-toggle-slider rounded-circle"></span>
                    </label>
                    <label class="custom-toggle">
                        <input type="checkbox" checked>
                        <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                            data-label-on="Yes"></span>
                    </label>
                    <!-- Simple slider -->
                    <div class="input-slider-container">
                        <div id="input-slider" class="input-slider" data-range-value-min="100"
                            data-range-value-max="500"></div>
                        <!-- Input slider values -->
                        <div class="row mt-3">
                            <div class="col-6">
                                <span id="input-slider-value" class="range-slider-value"
                                    data-range-value-low="100"></span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <!-- Range slider container -->
                        <div id="input-slider-range" data-range-value-min="100" data-range-value-max="500"></div>
                        <!-- Range slider values -->
                        <div class="row">
                            <div class="col-6">
                                <span class="range-slider-value value-low" data-range-value-low="200"
                                    id="input-slider-range-value-low"></span>
                            </div>
                            <div class="col-6 text-right">
                                <span class="range-slider-value value-high" data-range-value-high="400"
                                    id="input-slider-range-value-high"></span>
                            </div>
                        </div>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="customRadioInline1"
                            class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="customRadioInline1"
                            class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom
                            radio</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



<!-- ================== -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3>Tables</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div>
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Project</th>
                                    <th scope="col" class="sort" data-sort="budget">Budget</th>
                                    <th scope="col" class="sort" data-sort="status">Status</th>
                                    <th scope="col">Users</th>
                                    <th scope="col" class="sort" data-sort="completion">Completion</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/bootstrap.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Argon Design System</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $2500 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-warning"></i>
                                            <span class="status">pending</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Romina Hadid">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Alexander Smith">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Jessica Doe">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">60%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 60%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/angular.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $1800 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-success"></i>
                                            <span class="status">completed</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Romina Hadid">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Alexander Smith">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Jessica Doe">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">100%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/sketch.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Black Dashboard</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $3150 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-danger"></i>
                                            <span class="status">delayed</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Romina Hadid">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Alexander Smith">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Jessica Doe">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">72%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 72%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/react.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">React Material Dashboard</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $4400 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-info"></i>
                                            <span class="status">on schedule</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Romina Hadid">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Alexander Smith">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Jessica Doe">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">90%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 90%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/vue.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Vue Paper UI Kit PRO</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $2200 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-success"></i>
                                            <span class="status">completed</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Romina Hadid">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Alexander Smith">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Jessica Doe">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">100%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/bootstrap.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Argon Design System</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $2500 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-warning"></i>
                                            <span class="status">pending</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Romina Hadid">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Alexander Smith">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Jessica Doe">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">60%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 60%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/angular.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $1800 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-success"></i>
                                            <span class="status">completed</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Romina Hadid">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Alexander Smith">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Jessica Doe">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">100%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/sketch.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Black Dashboard</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $3150 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-danger"></i>
                                            <span class="status">delayed</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Romina Hadid">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Alexander Smith">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Jessica Doe">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">72%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 72%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/angular.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $1800 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-success"></i>
                                            <span class="status">completed</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Romina Hadid">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Alexander Smith">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Jessica Doe">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">100%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/sketch.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Black Dashboard</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $3150 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-danger"></i>
                                            <span class="status">delayed</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Romina Hadid">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Alexander Smith">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Jessica Doe">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">72%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 72%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/react.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">React Material Dashboard</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        $4400 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-info"></i>
                                            <span class="status">on schedule</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Ryan Tompson">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-1.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Romina Hadid">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-2.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Alexander Smith">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-3.jpg">
                                            </a>
                                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                data-original-title="Jessica Doe">
                                                <img alt="Image placeholder"
                                                    src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">90%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 90%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- ================== -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3>Modal</h3>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4">
                        <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal"
                            data-target="#modal-default">Default</button>
                        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog"
                            aria-labelledby="modal-default" aria-hidden="true">
                            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="modal-title-default">Type your modal title</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                                        </p>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                        <button type="button" class="btn btn-link  ml-auto"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-block btn-warning mb-3" data-toggle="modal"
                            data-target="#modal-notification">Notification</button>
                        <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog"
                            aria-labelledby="modal-notification" aria-hidden="true">
                            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                <div class="modal-content bg-gradient-danger">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="modal-title-notification">Your attention is required
                                        </h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="py-3 text-center">
                                            <i class="ni ni-bell-55 ni-3x"></i>
                                            <h4 class="heading mt-4">You should read this!</h4>
                                            <p>A small river named Duden flows by their place and supplies it with the
                                                necessary regelialia.</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white">Ok, Got it</button>
                                        <button type="button" class="btn btn-link text-white ml-auto"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-block btn-default" data-toggle="modal"
                            data-target="#modal-form">Form</button>
                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form"
                            aria-hidden="true">
                            <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="card bg-secondary shadow border-0">
                                            <div class="card-header bg-white pb-5">
                                                <div class="text-muted text-center mb-3"><small>Sign in with</small>
                                                </div>
                                                <div class="btn-wrapper text-center">
                                                    <a href="#" class="btn btn-neutral btn-icon">
                                                        <span class="btn-inner--icon"><img
                                                                src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/icons/common/github.svg"></span>
                                                        <span class="btn-inner--text">Github</span>
                                                    </a>
                                                    <a href="#" class="btn btn-neutral btn-icon">
                                                        <span class="btn-inner--icon"><img
                                                                src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/icons/common/google.svg"></span>
                                                        <span class="btn-inner--text">Google</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body px-lg-5 py-lg-5">
                                                <div class="text-center text-muted mb-4">
                                                    <small>Or sign in with credentials</small>
                                                </div>
                                                <form role="form">
                                                    <div class="form-group mb-3">
                                                        <div class="input-group input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="ni ni-email-83"></i></span>
                                                            </div>
                                                            <input class="form-control" placeholder="Email"
                                                                type="email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="ni ni-lock-circle-open"></i></span>
                                                            </div>
                                                            <input class="form-control" placeholder="Password"
                                                                type="password">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="custom-control custom-control-alternative custom-checkbox">
                                                        <input class="custom-control-input" id=" customCheckLogin"
                                                            type="checkbox">
                                                        <label class="custom-control-label"
                                                            for=" customCheckLogin"><span>Remember me</span></label>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-primary my-4">Sign
                                                            in</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ================== -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3>Tabs</h3>
            </div>
            <div class="card-body">

                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab"
                                href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3"
                                aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Messages</a>
                        </li>
                    </ul>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                aria-labelledby="tabs-icons-text-1-tab">
                                <p class="description">Raw denim you probably haven't heard of them jean shorts Austin.
                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor,
                                    williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh
                                    dreamcatcher synth.</p>
                                <p class="description">Raw denim you probably haven't heard of them jean shorts Austin.
                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                aria-labelledby="tabs-icons-text-2-tab">
                                <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                                    Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel,
                                    butcher voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel"
                                aria-labelledby="tabs-icons-text-3-tab">
                                <p class="description">Raw denim you probably haven't heard of them jean shorts Austin.
                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor,
                                    williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh
                                    dreamcatcher synth.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-pills nav-pills-circle" id="tabs_2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded-circle active" id="home-tab" data-toggle="tab" href="#tabs_2_1"
                            role="tab" aria-controls="home" aria-selected="true">
                            <span class="nav-link-icon d-block"><i class="ni ni-atom"></i></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabs_2_2" role="tab"
                            aria-controls="profile" aria-selected="false">
                            <span class="nav-link-icon d-block"><i class="ni ni-chat-round"></i></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tabs_2_3" role="tab"
                            aria-controls="contact" aria-selected="false">
                            <span class="nav-link-icon d-block"><i class="ni ni-cloud-download-95"></i></span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>


<!-- ================== -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3>Popovers</h3>
            </div>
            <div class="card-body">

                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                    data-placement="top" data-content="This is a very beautiful popover, show some love.">
                    Popover on top
                </button>

                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                    data-placement="right" data-content="This is a very beautiful popover, show some love.">
                    Popover on right
                </button>

                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                    data-placement="bottom" data-content="Vivamus
                  sagittis lacus vel augue laoreet rutrum faucibus.">
                    Popover on bottom
                </button>

                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                    data-placement="left" data-content="This is a very beautiful popover, show some love.">
                    Popover on left
                </button>
                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                    data-color="default" data-placement="top"
                    data-content="This is a very beautiful popover, show some love.">
                    Default popover
                </button>

                <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover"
                    data-color="primary" data-placement="top"
                    data-content="This is a very beautiful popover, show some love.">
                    Primary popover
                </button>

                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover"
                    data-color="secondary" data-placement="top"
                    data-content="This is a very beautiful popover, show some love.">
                    Secondary popover
                </button>

                <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-color="info"
                    data-placement="top" data-content="This is a very beautiful popover, show some love.">
                    Info popover
                </button>

                <button type="button" class="btn btn-success" data-container="body" data-toggle="popover"
                    data-color="success" data-placement="top"
                    data-content="This is a very beautiful popover, show some love.">
                    Success popover
                </button>

                <button type="button" class="btn btn-danger" data-container="body" data-toggle="popover"
                    data-color="danger" data-placement="top"
                    data-content="This is a very beautiful popover, show some love.">
                    Danger popover
                </button>

                <button type="button" class="btn btn-warning" data-container="body" data-toggle="popover"
                    data-color="warning" data-placement="top"
                    data-content="This is a very beautiful popover, show some love.">
                    Warning popover
                </button>
            </div>
        </div>
    </div>
</div>


<!-- ================== -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3>Navbar</h3>
            </div>
            <div class="card-body">
                <nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-default">
                    <div class="container">
                        <a class="navbar-brand" href="#">Default Color</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-default">
                            <div class="navbar-collapse-header">
                                <div class="row">
                                    <div class="col-6 collapse-brand">
                                        <a href="javascript:void(0)">
                                            <img
                                                src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/brand/blue.png">
                                        </a>
                                    </div>
                                    <div class="col-6 collapse-close">
                                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                            data-target="#navbar-default" aria-controls="navbar-default"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ul class="navbar-nav ml-lg-auto">
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="#">
                                        <i class="ni ni-favourite-28"></i>
                                        <span class="nav-link-inner--text d-lg-none">Discover</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="#">
                                        <i class="ni ni-notification-70"></i>
                                        <span class="nav-link-inner--text d-lg-none">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ni ni-settings-gear-65"></i>
                                        <span class="nav-link-inner--text d-lg-none">Settings</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="navbar-default_dropdown_1">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Navbar primary -->
                <nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-primary mt-4">
                    <div class="container">
                        <a class="navbar-brand" href="#">Primary Color</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-primary">
                            <div class="navbar-collapse-header">
                                <div class="row">
                                    <div class="col-6 collapse-brand">
                                        <a href="javascript:void(0)">
                                            <img
                                                src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/brand/blue.png">
                                        </a>
                                    </div>
                                    <div class="col-6 collapse-close">
                                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                            data-target="#navbar-primary" aria-controls="navbar-primary"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ul class="navbar-nav ml-lg-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Discover <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbar-primary_dropdown_1" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="navbar-primary_dropdown_1">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>


                <!-- Navbar success -->
                <nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-success mt-4">
                    <div class="container">
                        <a class="navbar-brand" href="#">Success Color</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbar-success" aria-controls="navbar-success" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-success">
                            <div class="navbar-collapse-header">
                                <div class="row">
                                    <div class="col-6 collapse-brand">
                                        <a href="javascript:void(0)">
                                            <img
                                                src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/brand/blue.png">
                                        </a>
                                    </div>
                                    <div class="col-6 collapse-close">
                                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                            data-target="#navbar-success" aria-controls="navbar-success"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ul class="navbar-nav ml-lg-auto">
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="#">
                                        <i class="ni ni-favourite-28"></i>
                                        <span class="nav-link-inner--text d-lg-none">Favorites</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="#">
                                        <i class="ni ni-planet"></i>
                                        <span class="nav-link-inner--text d-lg-none">Another action</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link nav-link-icon" href="#" id="navbar-success_dropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ni ni-settings-gear-65"></i>
                                        <span class="nav-link-inner--text d-lg-none">Settings</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="navbar-success_dropdown_1">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>

                <!-- Navbar danger -->
                <nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-danger mt-4">
                    <div class="container">
                        <a class="navbar-brand" href="#">Danger Color</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-danger"
                            aria-controls="navbar-danger" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-danger">
                            <div class="navbar-collapse-header">
                                <div class="row">
                                    <div class="col-6 collapse-brand">
                                        <a href="javascript:void(0)">
                                            <img
                                                src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/brand/blue.png">
                                        </a>
                                    </div>
                                    <div class="col-6 collapse-close">
                                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                            data-target="#navbar-danger" aria-controls="navbar-danger"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="#">
                                        <i class="fab fa-facebook-square"></i>
                                        <span class="nav-link-inner--text d-lg-none">Facebook</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="#">
                                        <i class="fab fa-twitter"></i>
                                        <span class="nav-link-inner--text d-lg-none">Twitter</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="#">
                                        <i class="fab fa-google-plus"></i>
                                        <span class="nav-link-inner--text d-lg-none">Google +</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="#">
                                        <i class="fab fa-instagram"></i>
                                        <span class="nav-link-inner--text d-lg-none">Instagram</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>

                <!-- Navbar warning -->

                <nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-warning mt-4">
                    <div class="container">
                        <a class="navbar-brand" href="#">Warning Color</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbar-warning" aria-controls="navbar-warning" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-warning">
                            <div class="navbar-collapse-header">
                                <div class="row">
                                    <div class="col-6 collapse-brand">
                                        <a href="javascript:void(0)">
                                            <img
                                                src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/brand/blue.png">
                                        </a>
                                    </div>
                                    <div class="col-6 collapse-close">
                                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                            data-target="#navbar-warning" aria-controls="navbar-warning"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="#">
                                        <i class="fab fa-facebook-square"></i>
                                        <span class="nav-link-inner--text d-lg-none">Share</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="#">
                                        <i class="fab fa-twitter"></i>
                                        <span class="nav-link-inner--text d-lg-none">Tweet</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="#">
                                        <i class="fab fa-pinterest"></i>
                                        <span class="nav-link-inner--text d-lg-none">Pin</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>

                <!-- Navbar info -->
                <nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-info mt-4">
                    <div class="container">
                        <a class="navbar-brand" href="#">Info Color</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-info"
                            aria-controls="navbar-info" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-info">
                            <div class="navbar-collapse-header">
                                <div class="row">
                                    <div class="col-6 collapse-brand">
                                        <a href="javascript:void(0)">
                                            <img
                                                src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/brand/blue.png">
                                        </a>
                                    </div>
                                    <div class="col-6 collapse-close">
                                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                            data-target="#navbar-info" aria-controls="navbar-info" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="#">
                                        <i class="fab fa-facebook-square"></i>
                                        <span class="nav-link-inner--text">Facebook</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="#">
                                        <i class="fab fa-twitter"></i>
                                        <span class="nav-link-inner--text">Twitter</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-icon" href="#">
                                        <i class="fab fa-instagram"></i>
                                        <span class="nav-link-inner--text">Instagram</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>
</div>


@endsection
