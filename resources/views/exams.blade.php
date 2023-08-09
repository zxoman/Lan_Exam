<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exams-dashboard</title>
     <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Vendor CSS Files -->
  <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Exams</h5>
          <!-- Bordered Table -->
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Exam</th>
                <th scope="col">total</th>
                <th scope="col">result</th>
                <th scope="col">delete</th>
              </tr>
            </thead>
            <tbody>
                <?php $ni = 1;?>
                @foreach ($exams as $exam)
              <tr>
                <th scope="row">{{$ni}}</th>
                <td>{{$exam->name}}</td>
                <td>{{$exam->number}}</td>
                <td><a href="/results?id={{$exam->id}}"><button class="edit">result</button></a></td>
                <td><a href="/qr?id={{$exam->id}}"><button class="delete">QR</button></a></td>
              </tr>
              <?php $ni++;?>
                @endforeach

            </tbody>
          </table>
          <!-- End Bordered Table -->



        </div>
      </div>


        <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>dashboard</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://wa.me/+201019630362">mohamed samir</a>
    </div>
  </footer><!-- End Footer -->
</body>
</html>
