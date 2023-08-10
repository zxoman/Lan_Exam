<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="exam.css">

    <div class="container">
        <div class="header">
            <input type="text" placeholder="NAME" id="name" class="in0">
            <p class="p5">id</p>
        </div>
        <nav class="nav">
            <?php $i = 1; ?>
            @foreach ($questions as $question)
                <button class="button-active" id="r{{ $i }}-button"
                    onclick="displayR1({{ $i }})">{{ $i }}</button>
                <?php $i++; ?>
            @endforeach
        </nav>
        <?php $i = 1; ?>
        @foreach ($questions as $question)
            <section id="r{{ $i }}" class="section">
                <div class="quis">
                    <h2 id="i">{{ $i }}</h2>
                    <h1 id="qus">{{$question->text}}</h1>
                </div>
                <div class="awnser">
                    <div class="d0">
                        <div class="an an1 x{{$i}}x1" onclick="sel_ans('{{$i}}','1');">
                            <input name="ans" id="ans({{$i}},1)" value="1" type="radio">
                            <h3 id="ans1">{{ $question->a1 }}</h3>
                        </div>
                        <div class="an an2 x{{$i}}x2" onclick="sel_ans('{{$i}}','2');">
                            <input name="ans" id="ans({{$i}},2)" value="2" type="radio">
                            <h3 id="ans2">{{ $question->a2 }}</h3>
                        </div>
                    </div>
                    <div class="d1">
                        <div class="an an3 x{{$i}}x3" onclick="sel_ans('{{$i}}','3');">
                            <input type="radio" id="ans({{$i}},3)" name="ans" value="3">
                            <h3 id="ans3">{{ $question->a3 }}</h3>
                        </div>
                        <div class="an an4 x{{$i}}x4" onclick="sel_ans('{{$i}}','4');">
                            <input type="radio" id="ans({{$i}},4)" name="ans" value="4">
                            <h3 id="ans4">{{ $question->a4 }}</h3>
                        </div>
                    </div>
                </div>
            </section>

            <?php $i++; ?>
        @endforeach

        <form method="post" id="formex">
            @csrf
            <input type="hidden" name="result" id="result">
            <input type="hidden" name="number" id="number">
            <input type="hidden" value="{{$exam_id}}" name="exam" id="examid">
            <input type="hidden" name="name" id="namest">
        </form>
        <nav>
            <button class="previous" id="previous" onclick="displayPrevious()">Previous</button>
            <button class="next button-active" id="next" onclick="displayNext()">Next</button>
        </nav>
        <div class="d6">
            <button class="next button-active" onclick="end()">submit</button>
        </div>
    </div>
    <script>
        document.querySelector('#r1').classList.add("active");
        var sectionContent = [];
        var ans = []
        var real = []
        <?php $i = 1; ?>
        @foreach ($questions as $question)
            sectionContent[sectionContent.length] = 'r{{$i}}'
            ans[ans.length] = ''
            real[real.length] = '{{$question->answer}}';
            <?php $i++; ?>
        @endforeach
        let currentSection = sectionContent[0];

        const displayContent = (q, area) => {
            document.getElementById(q).classList.add("active");
            document.getElementById(q + "-button").classList.add("button-active");
            currentSection = sectionContent[area.indexOf(q)];
            const toNone = area.filter(e => e !== q);
            for (i in toNone) {
                document.getElementById(toNone[i]).classList.remove("active");
                document.getElementById(toNone[i] + "-button").classList.remove("button-active");
            }
            if (sectionContent.indexOf(q) == 0) {
                document.getElementById("previous").classList.remove("button-active");
                document.getElementById("next").classList.add("button-active");
            } else if (sectionContent.indexOf(q) == sectionContent.length - 1) {
                document.getElementById("previous").classList.add("button-active");
                document.getElementById("next").classList.remove("button-active");
            } else {
                document.getElementById("previous").classList.add("button-active");
                document.getElementById("next").classList.add("button-active");
            }
        }

        const displayR1 = (num) => displayContent("r" + num, sectionContent);


        const displayNext = () => displayContent(sectionContent[sectionContent.indexOf(currentSection) + 1],
        sectionContent);
        const displayPrevious = () => displayContent(sectionContent[sectionContent.indexOf(currentSection) - 1],
            sectionContent);
            function sel_ans(numb,nn) {
                document.getElementById('ans('+numb+','+nn+')').checked = true
                ans[numb-1] = nn
                document.querySelector('.x'+numb+'x1').style = ""
                document.querySelector('.x'+numb+'x2').style = ""
                document.querySelector('.x'+numb+'x3').style = ""
                document.querySelector('.x'+numb+'x4').style = ""
                document.querySelector('.x'+numb+'x'+nn).style = "background-image: linear-gradient(45deg, rgb(50, 51, 134) , rgb(100, 74, 128) 80%);"

            }
        var result = 0
        function end() {
            for (let index = 0; index < ans.length; index++) {
                if(ans[index] !=""){
                    if(ans[index] == real[index]){
                        result++;
                    }
                }
            }
            console.log(result);
            document.getElementById('result').value = result
            document.getElementById('number').value = ans.length
            document.getElementById('namest').value = document.getElementById('name').value
            document.getElementById('formex').submit()
        }
    </script>
    <script src="new.js"></script>
</body>

</html>
