
<body>
  <h2 class="quizHeader">Pre-Test Induction Quiz</h2>
  <div class = "timerC">Quiz End in  <span id="time"></span></div>
	<br><br><br>
  

    <table class="quizTable">
    <tr>
      <td>
        <div class="questionDiv">
            <p class="question">1. Quiz question #1</p>

            <ul>
            <input class="answer" type="radio" name="q1" value="1">
            <label id="correctString1">correct answer 1</label>
            <br>
            <input class="answer" type="radio" name="q1" value="0">
            <label>wrong answer</label>
            <br>
            <input class="answer" type="radio" name="q1" value="0">
            <label>wrong answer</label>
            <br>
            <input class="answer" type="radio" name="q1" value="0">
            <label>wrong answer</label>
            </ul>
        </div>
      </td>
      <tr>
      </tr>
      <td>
        <div class="questionDiv">
            <p class="question">2. Quiz question #2</p>

            <ul>
            <input class="answer" type="radio" name="q2" value="0">
            <label>True</label>
            <br>
            <input class="answer" type="radio" name="q2" value="1">
            <label id="correctString2">False</label>
            </ul>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="questionDiv">
            <p class="question">3. Quiz question #3</p>

            <ul>
            <input class="answer" type="radio" name="q3" value="0">
            <label>wrong answer</label>
            <br>
            <input class="answer" type="radio" name="q3" value="1">
            <label id="correctString3">correct answer 3</label>
            <br>
            <input class="answer" type="radio" name="q3" value="0">
            <label>wrong answer</label>
            <br>
            <input class="answer" type="radio" name="q3" value="0">
            <label>wrong answer</label>
            </ul>
        </div>
      </td>
      <tr>
      </tr>
      <td>
        <div class="questionDiv">
            <p class="question">4. Quiz question #4</p>

            <ul>
            <input class="answer" type="radio" name="q4" value="0">
            <label>wrong answer</label>
            <br>
            <input class="answer" type="radio" name="q4" value="1">
            <label id="correctString4">correct answer 4</label>
            <br>
            <input class="answer" type="radio" name="q4" value="0">
            <label>wrong answer</label>
            <br>
            <input class="answer" type="radio" name="q4" value="0">
            <label>wrong answer</label>
            </ul>
        </div>
      </td>
    </tr>
    </table>
<br/>
    <div class="quizBottomStuff">
    <div style="width: 100%;">
        <div class="submitter">
              <input class="quizSubmit" id="submitButton" onClick="submitQuiz()"
              type="submit" value="Submit" />
        </div>
	<br><br>
<!--FOR TESTING SHARE BUTTON-->

    </div>


    </div>
    </div>
    </div>
	


</body>
<script>
	function startTimer(duration, display) {
    var start = Date.now(),
        diff,
        minutes,
        seconds;
    function timer() {
        // get the number of seconds that have elapsed since 
        // startTimer() was called
        diff = duration - (((Date.now() - start) / 1000) | 0);

        // does the same job as parseInt truncates the float
        minutes = (diff / 60) | 0;
        seconds = (diff % 60) | 0;

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds; 

        if (diff <= 0) {
            // add one second so that the count down starts at the full duration
            // example 05:00 not 04:59
            start = Date.now() + 1000;
        }
    };
    // we don't want to wait a full second before the timer starts
    timer();
    setInterval(timer, 1000);
}

//minute
window.onload = function () {
    var fiveMinutes = 60 * 50,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
</script>

<style>
		/* css here */

	{
		border: 1px dotted black;
		
	}

	body{
		background-color : #6AD66C;
	}
p.question {
  font-family: 	Arial, sans-serif;
  font-size:19px;
  color: #2E2E2E;
  margin-bottom:0px;
  margin-top:0px;
}

h2.quizHeader {
  width: 100%;
  font-family: Arial, sans-serif;
  font-weight:normal;
  font-size:25px;
  line-height: 27px;
  margin: 24px 0 12px 0;
  padding: 0 0 4px 0;
  border-bottom: 1px solid #a2a2a2;
  color : white;
}

div.quizBottomStuff {
	width: 583px;

}

div.questionDiv {
	width : auto;
	border : 1px solid green;
	padding : 2%;
	display: block !important;
}

h2.quizScore{
  width: 483px;
  font-family: Arial, sans-serif;
  font-size:25px;
  margin: 6px 0 6px 0;
}

div.quizAnswers{
  font-family: Arial, sans-serif;
  font-size:16px;
  color: #424242;
}

.addPadding {
  padding: 4px 0 4px 0;
}

label {
  font-family: Arial, sans-serif;
  font-size:14px;
  color: #424242;
  vertical-align:top;
}

input.answer[type="radio"] {
  margin-bottom: 10px;
}

input.quizSubmit[type="submit"] {
  -webkit-background-clip: border-box;
  -webkit-background-origin: padding-box;
  -webkit-background-size: auto;
  -webkit-transition-delay: 0s, 0s;
  -webkit-transition-duration: 0.2s, 0.2s;
  -webkit-transition-property: color, background-color;
  -webkit-transition-timing-function: ease, ease;
  box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 5px 0px;
  color: #ffffff;
  background-color: #c30b0a;
  margin: 0;
  border: 0;
  outline: 0;
  text-transform:uppercase;
  height:35px;
  width:85px;
  border: 1px solid #5E5E5E;
  border-radius:5px;
  
 }

input.quizSubmit[type="submit"]:hover {
  color: #ffffff;
  background: #680f11;
  text-decoration: none;
  
}

table.quizTable {
  background-color: #F2F2F2;
  border:1px solid #BDBDBD;
  border-radius:5px;
  padding : 3%;
  width: 100%;
  box-shadow: rgba(0, 0, 0, 0.498039) 0px 0px 1px 0px;
}

th {

}

tr {

}

td {

}

ul {
	*border: 1px solid green;
	margin-bottom: 5px;
	margin-top: 10px;
}

.submitter {
	  width:85px;
	  float:left;
}

.hide {
	  display:none;
}

.shareButton {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	text-align:center;
	*border: 1px solid green;
	float:right;
	*width: 30px;
	*height: 15px;
	margin: 4px;
}

div.timerC{
	float : right;
	color : white;
	background-color : green;
	padding : 1%;
	border-radius : 10px;
}


/*SFS light red = #c30b0a;
SFS dark red = #9f2026; */

</style>

