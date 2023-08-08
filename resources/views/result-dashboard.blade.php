<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result-dashboard</title>
     <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="C:\Users\محمد سمير\Documents\Printer2/assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">result</h5>
          <!-- Bordered Table -->
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Exam</th>
                <th scope="col">result</th>
                <th scope="col">total</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($results as $result)
              <tr>
                <th scope="row">1</th>
                <td>{{$result->name}}</td>
                <td>{{$exam->name}}</td>
                <td>{{$result->result}}</td>
                <td>{{$result->number}}</td>
              </tr>
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