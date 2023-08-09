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
            <p><input type="text" id="name" name="name">:الاسم</p>
            <p id="idq">:id</p>
            <p>{{$exam_id}}:exam</p>
        </div>
        <div class="quis">
            <h2 id="i">1</h2>
            <h1 id="qus"></h1>
        </div>
        <div class="awnser">
            <div class="d0">
                <div class="an an1" onclick="sel_ans('1');">
                    <input name="ans" id="ans(1)" value="1" type="radio">
                    <h3 id="ans1">1</h3>
                </div>
                <div class="an an2"  onclick="sel_ans('2');">
                    <input name="ans" id="ans(2)" value="2" type="radio">
                    <h3  id="ans2">2</h3>
                </div>
            </div>
            <div class="d1">
                <div class="an an3" onclick="sel_ans('3');">
                    <input type="radio" id="ans(3)" name="ans" value="3">
                    <h3 id="ans3">3</h3>
                </div>
                <div class="an an4" onclick="sel_ans('4');">
                    <input type="radio" id="ans(4)" name="ans"  value="4">
                    <h3 id="ans4">4</h3>
                </div>
            </div>
        </div>
        <div class="ne5">
            <button class="ne" onclick="nextq()">NEXT </button>
            <button class="ne0" onclick="backq()">BACK</button>
        </div>
           <center><button class="ne" onclick="end()">submit </button></center>

    </div>

<form method="post" id="formex">
    @csrf
    <input type="hidden" name="result" id="result">
    <input type="hidden" name="number" id="number">
    <input type="hidden" value="{{$exam_id}}" name="exam" id="examid">
    <input type="hidden" name="name" id="namest">
</form>

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
            document.querySelector(".an1").style=""
            document.querySelector(".an2").style=""
            document.querySelector(".an3").style=""
            document.querySelector(".an4").style=""
            if(ans[i] != null){
                document.querySelector(".an"+ans[i]).style="background-image: linear-gradient(45deg, rgb(50, 51, 134) , rgb(100, 74, 128) 80%);"

            }
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
        function sel_ans(nn) {
           document.getElementById('ans('+nn+')').checked = true
            val =document.getElementById('ans('+nn+')').value
            ans[i]=val
            document.querySelector(".an1").style=""
            document.querySelector(".an2").style=""
            document.querySelector(".an3").style=""
            document.querySelector(".an4").style=""
            document.querySelector(".an"+val).style="background-image: linear-gradient(45deg, rgb(50, 51, 134) , rgb(100, 74, 128) 80%);"
        }
        var result = 0
        function end() {
            for (let index = 0; index < ans.length; index++) {
                if(ans[index] !=null){
                    if(ans[index] == q[index].answer){
                        result++;
                    }
                }
            }
            document.getElementById('result').value = result
            document.getElementById('number').value = q.length
            document.getElementById('namest').value = document.getElementById('name').value
            document.getElementById('formex').submit()
        }

        ref()
      </script>

    <script src="exam.js"></script>
</body>
</html>
