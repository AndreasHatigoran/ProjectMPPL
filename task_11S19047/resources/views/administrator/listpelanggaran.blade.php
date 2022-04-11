<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/dc.png.png" type="image/x-icon">
      <link rel="shortcut icon" href="../assets/images/dc.png.png" type="image/x-icon">
      <title>List Pelanggaran - Administrators</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/fontawesome.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/icofont.css') }}">
     <!-- Themify icon-->
     <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/themify.css') }}">
     <!-- Flag icon-->
     <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/flag-icon.css.css') }}">
     <!-- Feather icon-->
     <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/feather-icon.css') }}">

     <!-- Bootstrap css-->
     <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/bootstrap.css') }}">
    <!-- App css-->
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('css/welcome/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome/responsive.css') }}">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="dashboard04.html"><img class="img-fluid" src="../assets/images/logo-del-creative.png.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li>
                    <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                  </li>
                  <li class="noti-primary">
                    <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                      <div class="media-body">
                        <p>Delivery processing </p><span>10 minutes ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-secondary">
                    <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                      <div class="media-body">
                        <p>Order Complete</p><span>1 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-success">
                    <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                      <div class="media-body">
                        <p>Tickets Generated</p><span>3 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-danger">
                    <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                      <div class="media-body">
                        <p>Delivery Complete</p><span>6 hour ago</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="login.html"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center">
            <a href="profile04.html" class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><a href="dashboard04.html"><img class="img-90 rounded-circle" src="{{ asset('image/dashboard/1.png') }}" alt="" href="dashboard04.html"></a>
            <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="dashboard04.html">
                <a href="profile04.html">
                  <h3 class="mt-3 f-14 f-w-600">ADMIN</h6>
                  </a>
                  
                  
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Features             </h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="labcoding04.html"><svg aria-hidden="true" weidth="24" height="24" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-code UnderlineNav-octicon d-none d-sm-inline">
                    <path fill-rule="evenodd" d="M4.72 3.22a.75.75 0 011.06 1.06L2.06 8l3.72 3.72a.75.75 0 11-1.06 1.06L.47 8.53a.75.75 0 010-1.06l4.25-4.25zm6.56 0a.75.75 0 10-1.06 1.06L13.94 8l-3.72 3.72a.75.75 0 101.06 1.06l4.25-4.25a.75.75 0 000-1.06l-4.25-4.25z"></path>
                    </svg><span>Lab Coding</span></a></li>
                    <li class="dropdown"><a class="nav-link menu-title link-nav active" href="listpelanggaran04.html"><i data-feather="file"></i><span>List Pelanggaran</span></a>
                    <li class="dropdown"><a class="nav-link menu-title link-nav" href="leaderboardforum04.html"><i data-feather="briefcase"></i><span>LeaderBoard</span></a>
                    <li class="dropdown"><a class="nav-link menu-title link-nav" href="forumdiskusi04.html"><i data-feather="list"></i><span>Forum Diskusi</span></a></li>
                    <li class="dropdown"><a class="nav-link menu-title link-nav" href="listakun04.html"><i data-feather="layers"></i></i><span>List Akun</span></a>
                    <li class="dropdown"><a class="nav-link menu-title link-nav" href="konversipoint04.html"><i data-feather="package"></i><span>Konversi Point</span></a>
                    <div>
                     
                        <div class="according-menu">
                          <i class="fa fa-angle-right"></i>
                        </div>
                      <div class="according-menu"><i class="fa fa-angle-right"></i>
                      </div>
                    </a>
                  </li>  
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-12">
                  <h1>List Pelanggaran </h1>
                </div>     
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h6>Daftar Mahasiswa yang Melakukan Pelanggaran</h6>
                      <div class="row">
                        <div class="col-sm-10"></div>
                        <div class="col-sm-2">
                        </div>
                      </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Mahasiswa</th>
                          <th scope="col">NIM</th>
                          <th scope="col">Jumlah Laporan</th>
                          <th scope="col">Bukti Pelanggaran</th>
                          <th colspan="2" style="text-align: center;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Samuel Ferdi Rajagukguk</td>
                          <td>11S21008</td>
                          <td>10</td>
                          <td>Apasi anjir, gak jelas banget pertanyaan</td>
                          <td><button class="btn btn-light btn-xs" type="button">Terima</button></td>
                          <td><button class="btn btn-danger btn-xs" type="button">Tolak</button></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Dina Efrina Sitinjak</td>
                          <td>14S19015</td>
                          <td>6</td>
                          <td>Dang huantusi</td>
                          <td><button class="btn btn-light btn-xs" type="button">Terima</button></td>
                          <td><button class="btn btn-danger btn-xs" type="button">Tolak</button></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Antonio Nababan</td>
                          <td>12S19010</td>
                          <td>20</td>
                          <td>Fuck you man</td>
                          <td><button class="btn btn-light btn-xs" type="button">Terima</button></td>
                          <td><button class="btn btn-danger btn-xs" type="button">Tolak</button></td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <ul>
                <center>
                <li>
                  <button class="btn btn-outline-success btn-sm" type="button"> << </button></a>
                  <button class="btn btn-outline-success btn-sm" type="button"> 1 </button></a>
                  <button class="btn btn-outline-success btn-sm" type="button"> 2 </button></a>
                  <button class="btn btn-outline-success btn-sm" type="button"> 3 </button></a>
                  <button class="btn btn-outline-success btn-sm" type="button"> 4 </button></a>
                  <button class="btn btn-outline-success btn-sm" type="button"> 5 </button></a>
                  <button class="btn btn-outline-success btn-sm" type="button"> >> </button></a>
                </li>
              </ul>
            </center>
            </div>
          </div>
          </div>
             <!-- Container-fluid Ends-->
        
        <!-- footer start-->
        <footer class="footer" style="margin-left: -12px; margin-right: -15px; background: url('{{ asset('image/footer/coming_soon_bg_1.png') }}'); margin-top: 100px;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-9">
                <h6><a href="#" style="color: white; font-weight: bold;">Institut Teknologi Del</h6></a>
                <br><a href="#" style="color: white;">Jl. Sisingamangaraja, Sitoluama</a>
                <br><a href="#" style="color: white;">Laguboti, Toba Samosir</a>
                <br><a href="#" style="color: white;">Sumatera Utara, Indonesia</a>
                <br><a href="#" style="color: white;">Kode Pos: 22381</a>
                <br><a href="#" style="color: white;">Telp: +62 632 331234</a>
                <br><a href="#" style="color: white;">Fax: +62 632 331116</a>
              </div>
              <div class="col-md-3">
                <br>
                <br><a href="index.html" style="color: white;">About</a>
                <br><p style="color: white; margin-top: 82px;"><b>Copyright @ 2022</b></p>
              </div>
            </div>
          </div>
        </footer>
    </div>
      <!-- latest jquery-->
      <script src="{{ asset('js/login/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('js/welcome/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('js/welcome/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('js/welcome/sidebar-menu.js') }}"></script>
    <script src="{{ asset('js/welcome/config.js') }}"></script>
      <!-- Bootstrap js-->
      <script src="{{ asset('js/welcome/bootstrap/popper.min.js') }}"></script>
      <script src="{{ asset('js/welcome/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
     <!-- Theme js-->
     <script src="{{ asset('js/welcome/script.js') }}"></script>
  </body>


</html>