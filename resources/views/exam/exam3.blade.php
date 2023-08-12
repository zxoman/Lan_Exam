<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exam</title>
    <link rel="stylesheet" href="new.css">

    <link rel="stylesheet" href="exam3.css">
</head>

<body>
    <div class="container">
        <div class="head">
            <input type="text" id="name" placeholder="NAME" class="input-name">
            <p class="id">id</p>
        </div>
        <div class="pages">

            <?php $i = 1; ?>
            @foreach ($questions as $question)
                <button class="button-page" id="r{{ $i }}-button"
                    onclick="displayR1({{ $i }})">{{ $i }}</button>
                <?php $i++; ?>
            @endforeach
        </div>
        <?php $i = 1; ?>
        @foreach ($questions as $question)
            <section id="r{{ $i }}" class="section">
                <div class="content">
                    <div class="quis">
                        <div class="number">
                            <p class="nu">{{$i}}</p>
                        </div>
                        <div class="quistion">
                            <h2>{{$question->text}}</h2>
                        </div>
                    </div>
                    <div class="unswer">

                        <div class="uns uns1 x{{$i}}x1" onclick="sel_ans('{{$i}}','1');">
                            <input type="radio" id="ans({{$i}},1)" name="ans" value="4">

                            <div class="u">{{$question->a1}}</div>
                        </div>
                        <div class="uns uns2 x{{$i}}x2" onclick="sel_ans('{{$i}}','2');">
                            <input type="radio" id="ans({{$i}},2)" name="ans" value="4">

                            <div class="u">{{$question->a2}}</div>
                        </div>
                        <div class="uns uns3 x{{$i}}x3" onclick="sel_ans('{{$i}}','3');">
                            <input type="radio" id="ans({{$i}},3)" name="ans" value="4">

                            <div class="u">{{$question->a3}}</div>
                        </div>
                        <div class="uns uns4 x{{$i}}x4" onclick="sel_ans('{{$i}}','4');">
                            <input type="radio" id="ans({{$i}},4)" name="ans" value="4">

                            <div class="u">{{$question->a4}}</div>
                        </div>
                    </div>
                </div>
            </section>
            <?php $i++; ?>
            @endforeach
            <div class="buttons-div">
                <div class="next-button">
                    <button class="next buttons" onclick="displayNext()">NEXT</button>
                </div>
                <div class="back-button">
                    <button class="back buttons" onclick="displayPrevious()">BACK</button>
                </div>
                <div class="supmit-button">
                    <button class="supmit buttons" onclick="end()">SUPMIT</button>
                </div>
            </div>
            <form method="post" id="formex">
                @csrf
                <input type="hidden" name="result" id="result">
                <input type="hidden" name="number" id="number">
                <input type="hidden" value="{{$exam_id}}" name="exam" id="examid">
                <input type="hidden" name="name" id="namest">
            </form>
    </div>
</body>
<script>
    document.querySelector('#r1').classList.add("active");
    var sectionContent = [];
    var ans = []
    var real = []
    <?php $i = 1; ?>
    @foreach ($questions as $question)
        sectionContent[sectionContent.length] = 'r{{ $i }}'
        ans[ans.length] = ''
        real[real.length] = '{{ $question->answer }}';
        <?php $i++; ?>
    @endforeach
    let currentSection = sectionContent[0];

    const displayContent = (q, area) => {
        document.getElementById(q).classList.add("active");
        currentSection = sectionContent[area.indexOf(q)];
        const toNone = area.filter(e => e !== q);
        for (i in toNone) {
            document.getElementById(toNone[i]).classList.remove("active");
        }

    }

    const displayR1 = (num) => displayContent("r" + num, sectionContent);


    const displayNext = () => displayContent(sectionContent[sectionContent.indexOf(currentSection) + 1],
        sectionContent);
    const displayPrevious = () => displayContent(sectionContent[sectionContent.indexOf(currentSection) - 1],
        sectionContent);

    function sel_ans(numb, nn) {
        document.getElementById('ans(' + numb + ',' + nn + ')').checked = true
        ans[numb - 1] = nn
        document.querySelector('.x' + numb + 'x1').style = ""
        document.querySelector('.x' + numb + 'x2').style = ""
        document.querySelector('.x' + numb + 'x3').style = ""
        document.querySelector('.x' + numb + 'x4').style = ""
        document.querySelector('.x' + numb + 'x' + nn).style =
            "background-image: linear-gradient(45deg, rgb(50, 51, 134) , rgb(100, 74, 128) 80%);"

    }
    var result = 0

    function end() {
        for (let index = 0; index < ans.length; index++) {
            if (ans[index] != "") {
                if (ans[index] == real[index]) {
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

</html>
