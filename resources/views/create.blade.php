<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bank - dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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

    <div class="pagetitle" style="text-align:center;">
      <h1>Bank - Data</h1>
    </div><!-- End Page Title -->

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Your Questions</h5>

        <!-- No Labels Form -->
        <form class="row g-3" method="POST">
          {{ csrf_field() }}
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
            <select name="term" id="inputState" class="form-select">
              <option value="" selected>الترم</option>
              <option value="1">الأول</option>
              <option value="2">الثاني</option>
            </select>
          </div>
          <div class="col-md-4">
            <select id="inputState" class="form-select">
              <option selected name="unit">الباب</option>
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
            <select id="inputState" class="form-select">
              <option selected name="lesson">الدرس</option>
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

          </section>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">get data</button>
          </div>
        </form><!-- End No Labels Form -->
        <form method="post" id="nform">
            @method('delete')
            @csrf
            <div class="col-md-6">
                <input type="text" name="number" class="form-control" placeholder="عدد الاسئله">
              </div>
              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="اسم الامتحان">
              </div>
            <input type="hidden" id="exam" name="exam">
            <button type="button" onclick="createEx()" class="btn btn-secondary">create EXAM</button>

        </form>
      </div>
    </div>
    <center><button onclick="allz()">Select All</button></center>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Bank</h5>
        <!-- Bordered Table -->
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Quistion</th>
              <th scope="col">Awnser</th>
              <th scope="col">class</th>
              <th scope="col">1</th>
              <th scope="col">2</th>
              <th scope="col">3</th>
              <th scope="col">4</th>
              <th scope="col">select</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($questions as $question)
            <tr>
              <th scope="row">1</th>
              <td>{{$question->text}}</td>
              <td>{{$question->answer}}</td>
              <td>{{$question->class}}</td>
              <td>{{$question->a1}}</td>
              <td>{{$question->a2}}</td>
              <td>{{$question->a3}}</td>
              <td>{{$question->a4}}</td>
              <td><input type="checkbox" onchange="selectb('in{{$question->id}}')" id="in{{$question->id}}" value="{{$question->id}}"></td>
            </tr>
            @endforeach

          </tbody>
        </table>
        <!-- End Bordered Table -->



      </div>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="quill/quill.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    var z = [];

    function createEx() {
        ids = z.toLocaleString()
        document.getElementById('exam').value = ids;
        document.getElementById('nform').submit()
    }
    function selectb(id) {
      e = document.getElementById(id);

      if (e.checked) {
        z[z.length] = e.value
      }else{
        if (z.indexOf(e.value)> -1) {

          z[z.indexOf(e.value)] = ""
        }
      }
    }
    function allz() {
        z = [];
        for (let index = 0; index < document.querySelectorAll('input[type=checkbox]').length; index++) {

            document.querySelectorAll('input[type=checkbox]')[index].checked = !document.querySelectorAll('input[type=checkbox]')[index].checked
            if (document.querySelectorAll('input[type=checkbox]')[index].checked){
                z[z.length] = document.querySelectorAll('input[type=checkbox]')[index].value;
            }
        }
    }
  </script>

</body>

</html>
