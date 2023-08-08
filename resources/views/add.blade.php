<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add - dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/quill/quill.snow.css" rel="stylesheet">
  <link href="/quill/quill.bubble.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">dashboard</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->
        </li><!-- End Notification Nav -->
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Sir. </span>
          </a><!-- End Profile Iamge Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Sir. </h6>
              <span>... Maestro</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->

  <aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="add.html">
        <i class="bi bi-grid"></i>
        <span>Add Question
        </span>
      </a>
      <a class="nav-link collapsed" href="print.html">
        <i class="bi bi-grid"></i>
        <span>Create Exams
        </span>
      </a>
      <a class="nav-link collapsed" href="data.html">
        <i class="bi bi-grid"></i>
        <span>Bank Exams
        </span>
      </a>
    </li>

  </ul>
  </aside>


  <main id="main" class="main" style="text-align:center;">

    <div class="pagetitle">
      <h1>Form Editors</h1>
    </div><!-- End Page Title -->

    

    
    

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Select Options</h5>

        <!-- No Labels Form -->
        <form class="row g-3" method="POST">
          {{csrf_field()}}
          <div class="col-md-4">
            <select id="inputState" name="class" class="form-select">
              <option value="" selected>الصف</option>
              <option value="1">الأول الثانوي</option>
              <option value="2">الثاني الثانوي</option>
              <option value="3">الثالث الثانوي</option>
              <option value="1d">الأول الإعدادي</option>
              <option value="2d">الثاني الإعدادي</option>
              <option value="3d">الثالث الإعدادي</option>
              
              
            </select>
          </div>
          <div class="col-md-4">
            <select id="inputState" name="term" class="form-select">
              <option  value="" selected>الترم</option>
              <option value="1">الأول</option>
              <option value="2">الثاني</option>
            </select>
          </div>
          <div class="col-md-4">
            <select id="inputState" name="unit" class="form-select">
              <option value="" selected>الباب</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
          <div class="col-md-4">
            <select id="inputState" name="lesson" class="form-select">
              <option value="" selected>الدرس</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
          
          <section class="section" >
              <div class="col-lg-6" style="width:100%;" >
                <div class="card" >
                  <div class="card-body">
                    <h4 class="card-title">Type Your Question</h4>
                    <div class="quill-editor-full">
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>
          </section>
          <div class="awnser0">
            <div class="col0" id="col0">
              <div class="awnser-editor-full">
                <p></p>
              </div>
            </div>
            <div class="col" id="col">
              <div class="col-md-6">
                <input type="radio" name="answer" value="1" class="rad">
                <input type="text" name="a1" class="form-control" placeholder="ANS-1">
             </div>
              <div class="col-md-6">
                <input type="radio" name="answer" value="2" class="rad">
                <input type="text" name="a2" class="form-control" placeholder="ANS-2">
              </div>
              <div class="col-md-6">
                <input type="radio" name="answer" value="3" class="rad">
                <input type="text" name="a3" class="form-control" placeholder="ANS-3">
              </div>
              <div class="col-md-6">
                <input type="radio" name="answer" value="4" class="rad">
                <input type="text" name="a4" class="form-control" placeholder="ANS-4">
              </div>
              <input type="hidden" id="q" name="text">
              <div class="text-center">
                <button type="button" onclick="mesh()" class="btn btn-primary">Submit</button>
                <button style="display: none" type="submit" id="sub" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </div>
          </div> 
        </form><!-- End No Labels Form -->

      </div>
    </div>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>dashboard</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://wa.me/+201019630362">mohamed samir</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script>
  function mesh() {
    var qu = document.querySelector(".ql-editor").innerHTML;
    document.querySelector("#q").value = qu;
    document.querySelector("#sub").click();
  }
</script>
  <!-- Vendor JS Files -->
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/quill/quill.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>