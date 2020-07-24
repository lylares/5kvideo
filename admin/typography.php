<?php
require('header.php');
?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="./assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Typography</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Components</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Typography</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-8 card-wrapper">
          <!-- Headings -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">Headings</h3>
            </div>
            <div class="card-body">
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Heading 1</small>
                </div>
                <div class="col-sm-9">
                  <h1 class="mb-0">Argon Dashboard PRO</h1>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Heading 2</small>
                </div>
                <div class="col-sm-9">
                  <h2 class="mb-0">Argon Dashboard PRO</h2>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Heading 3</small>
                </div>
                <div class="col-sm-9">
                  <h3 class="mb-0">Argon Dashboard PRO</h3>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Heading 4</small>
                </div>
                <div class="col-sm-9">
                  <h4 class="mb-0">Argon Dashboard PRO</h4>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Heading 5</small>
                </div>
                <div class="col-sm-9">
                  <h5 class="mb-0">Argon Dashboard PRO </h5>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Heading 6</small>
                </div>
                <div class="col-sm-9">
                  <h6 class="mb-0">Argon Dashboard PRO </h6>
                </div>
              </div>
            </div>
          </div>
          <!-- Display titles -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">Display titles</h3>
            </div>
            <div class="card-body">
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Display 1</small>
                </div>
                <div class="col-sm-9">
                  <h1 class="display-1 mb-0">Argon Dashboard PRO</h1>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Display 2</small>
                </div>
                <div class="col-sm-9">
                  <h2 class="display-2 mb-0">Argon Dashboard PRO</h2>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Display 3</small>
                </div>
                <div class="col-sm-9">
                  <h3 class="display-3 mb-0">Argon Dashboard PRO</h3>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Display 4</small>
                </div>
                <div class="col-sm-9">
                  <h4 class="display-4 mb-0">Argon Dashboard PRO</h4>
                </div>
              </div>
            </div>
          </div>
          <!-- Specialized titles -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">Specialized titles</h3>
            </div>
            <div class="card-body">
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Heading</small>
                </div>
                <div class="col-sm-9">
                  <h3 class="heading mb-0">Argon Dashboard PRO</h3>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Heading title</small>
                </div>
                <div class="col-sm-9">
                  <h3 class="heading-title text-warning mb-0">Argon Dashboard PRO</h3>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Heading seaction</small>
                </div>
                <div class="col-sm-9">
                  <div>
                    <h2 class="display-3">Header with small subtitle </h2>
                    <p class="lead text-muted">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record maximum.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Paragraphs -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">Paragraphs</h3>
            </div>
            <div class="card-body">
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Paragraph</small>
                </div>
                <div class="col-sm-9">
                  <p>I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show
                    people, this is the level that things could be at.</p>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Lead text</small>
                </div>
                <div class="col-sm-9">
                  <p class="lead">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push
                    possibilities, to show people, this is the level that things could be at.</p>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Quote</small>
                </div>
                <div class="col-sm-9">
                  <blockquote class="blockquote">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">Someone famous in
                      <cite title="Source Title">Source Title</cite>
                    </footer>
                  </blockquote>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Muted text</small>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Primary text</small>
                </div>
                <div class="col-sm-9">
                  <p class="text-primary">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Info text</small>
                </div>
                <div class="col-sm-9">
                  <p class="text-info mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Success text</small>
                </div>
                <div class="col-sm-9">
                  <p class="text-success mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Warning text</small>
                </div>
                <div class="col-sm-9">
                  <p class="text-warning mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                </div>
              </div>
              <div class="row py-3 align-items-center">
                <div class="col-sm-3">
                  <small class="text-uppercase text-muted font-weight-bold">Danger text</small>
                </div>
                <div class="col-sm-9">
                  <p class="text-danger mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
<?php 
$pscript=[
  './assets/vendor/chart.js/dist/Chart.min.js',
  './assets/vendor/chart.js/dist/Chart.extension.js',
  './assets/vendor/jvectormap-next/jquery-jvectormap.min.js',
  './assets/js/vendor/jvectormap/jquery-jvectormap-world-mill.js'
];
require('footer.php');