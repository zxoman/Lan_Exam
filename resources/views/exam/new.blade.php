<link rel="stylesheet" href="new.css">
<link rel="stylesheet" href="exam.css">

<div class="container">
    <nav class="nav">
        <button class="button-active" id="r1-button" onclick="displayR1()">1</button>
        <button id="r2-button" onclick="displayR2()">2</button>
        <button id="r3-button" onclick="displayR3()">3</button>
    </nav>

    <section id="r1" class="section active">
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
    </section>
    <section id="r2" class="section">
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
                    <h3 id="ans3">3666</h3>
                </div>
                <div class="an an4" onclick="sel_ans('4');">
                    <input type="radio" id="ans(4)" name="ans"  value="4">
                    <h3 id="ans4">45546</h3>
                </div>
            </div>
        </div>
    </section>
    <section id="r3" class="section">
        <div class="quis">
            <h2 id="i">1</h2>
            <h1 id="qus"></h1>
        </div>
        <div class="awnser">
            <div class="d0">
                <div class="an an1" onclick="sel_ans('1');">
                    <input name="ans" id="ans(1)" value="1" type="radio">
                    <h3 id="ans1">1gdgg</h3>
                </div>
                <div class="an an2"  onclick="sel_ans('2');">
                    <input name="ans" id="ans(2)" value="2" type="radio">
                    <h3  id="ans2">2</h3>
                </div>
            </div>
            <div class="d1">
                <div class="an an3" onclick="sel_ans('3');">
                    <input type="radio" id="ans(3)" name="ans" value="3">
                    <h3 id="ans3">344</h3>
                </div>
                <div class="an an4" onclick="sel_ans('4');">
                    <input type="radio" id="ans(4)" name="ans"  value="4">
                    <h3 id="ans4">644</h3>
                </div>
            </div>
        </div>
    </section>

    <nav>
        <button class="previous" id="previous" onclick="displayPrevious()">Previous</button>
        <button class="next button-active" id="next" onclick="displayNext()">Next</button>
    </nav>
</div>
<script src="new.js"></script>
