<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exam.css">
    <title>exam</title>
</head>
<body>




    <div class="container">

        <div class="header">
            <p><input type="text" name="name">:الاسم</p>
            <p id="idq">:id</p>
            <p>{{$exam_id}}:exam</p>
        </div>
        <div class="quis">
            <h2 id="i">1</h2>
            <h1 id="qus"></h1>
        </div>
        <div class="awnser">
            <div class="d0">
                <div class="an an1" onclick="_('input[value=`1`]').checked = true; selans()">
                    <input name="ans" value="1" type="radio">
                    <h3 id="ans1">1</h3>
                </div>
                <div class="an an2"  onclick="_('input[value=`2`]').checked = true; selans()">
                    <input name="ans" value="2" type="radio">
                    <h3  id="ans2">2</h3>
                </div>
            </div>
            <div class="d1">
                <div class="an an3" onclick="_('input[value=`3`]').checked = true; selans()">
                    <input type="radio"  name="ans" value="3">
                    <h3 id="ans3">3</h3>
                </div>
                <div class="an an4" onclick="_('input[value=`4`]').checked = true;selans()">
                    <input type="radio" name="ans" value="4">
                    <h3 id="ans4">4</h3>
                </div>
            </div>
        </div>
        <div class="ne5">
            <button class="ne" onclick="nextq()">NEXT </button>
            <button class="ne0" onclick="backq()">BACK</button>
        </div>
    </div>



     <!-- ======= Footer ======= -->
     <footer id="footer" class="footer">
        <div class="copyright">
          &copy; Copyright <strong><span>exam</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://wa.me/+201019630362">Team X</a>
        </div>
      </footer><!-- End Footer -->
      <script src="jquery.min.js"></script>
      <script>
        _ = e => {return document.querySelector(e)};
        var q = JSON.parse('<?php echo $questions; ?>')
        i = 0
        var ans = []
        function ref() {
            var qu = q[i];
            _('#i').innerHTML = i+1
            _('#idq').innerHTML = qu.id+":id"
            _('#qus').innerHTML = qu.text
            _('#ans1').innerHTML = qu.a1
            _('#ans2').innerHTML = qu.a2
            _('#ans3').innerHTML = qu.a3
            _('#ans4').innerHTML = qu.a4

        }
        function nextq() {
            if (i<(q.length-1)) {
                i++;
                ref()
            }

        }
        function backq() {
            if (i>0) {
                i--;
                ref()

            }
        }
        function selans() {
            val = _('input[checked=true]').value
            ans[i]=val
            document.querySelectorAll('an').style=""
            document.querySelectorAll("an"+val).style="background-image: linear-gradient(45deg, rgb(50, 51, 134) , rgb(100, 74, 128) 80%);"
        }
        ref()
      </script>

    <script src="exam.js"></script>
</body>
</html>
