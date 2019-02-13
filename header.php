<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Skills for care</title>
  <base href="/">

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=11" />

  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./SopraSteria-SFC-PHP/assets/css/main.css" type="text/css">
</head>
<body>

  <header id="header-container" class="container-fluid p-0">
    <div class="main-header container-fluid">
      <div class="container">
        <div class="row">
          <div class="logo col-2">
            <img src="./SopraSteria-SFC-PHP/assets/img/logo.png" alt="Skills for Care" />
          </div>
          <div class="strapline col-6">Adult Social Care Workforce Data Set</div>
          <div class="auth-controls col-12 col-md-4 col-lg-4">
            <ul>
              <li *ngIf="!isLoggedIn()">
                <a routerLink="/registered-question" title="Create an account">Create an account</a>
              </li>
              <li>
                <a *ngIf="!isLoggedIn()" routerLink="/login" title="Sign in">Sign in</a>
                <a *ngIf="isLoggedIn()" href="#" (click)="signOut($event)" title="Sign out">Sign out</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="nav-container "class="container p-0">

      <nav class="main-nav navbar navbar-expand-lg col-12 p-0">

        <div class="col-12 col-centered p-0" *ngIf="username">
          <div class="col-12 p-0">

            <!-- <span class="mobile-nav-btn navbar-toggler ml-3 collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="nav-menu-title">Menu<span class="arrow"></span></span>
            </span> -->

            <div id="navbarSupportedContent">

              <ul class="navbar-nav main-menu">
                <li class="nav-item pl-0 pr-0 active">
                  <a routerLink="/your-account">Your account</a>
                </li>
                <li class="nav-item pl-0 pr-0">
                  <a routerLink="/staff-records">Staff records</a>
                </li>
                <li class="nav-item pl-0 pr-0">
                  <a routerLink="/workplaces">Workplaces</a>
                </li>
              </ul>
            </div>
              <ul class="navbar-nav logout-menu flex-row ml-auto justify-content-end">
                <li class="subnav-menu-title">
                  <a title="Signed in Users name" [routerLink]="">Signed in as {{ username }} <span class="arrow"></span></a>
                </li>
              </ul>
          </div>
        </div>
      </nav>

    </div>
    <div class="header-line container">
      <div class="container">
        <div class="m-0 d-inline-block beta-txt">Beta</div>
        <div class="m-0 d-inline-block ml-3" *ngIf="router && router.url == '/feedback' ? false : true">
          <span>This is a new service - your <a routerLink="/feedback" title="Leave feedback" target="_blank">feedback</a> will help us to improve it.</span>
        </div>
      </div>
    </div>
  </header>
