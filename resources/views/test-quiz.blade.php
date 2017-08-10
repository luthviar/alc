@include('layouts.head')


<body>

  <!-- Header -->
  <div id="wrapper">
    <div class="wrapper-holder">
      @include('layouts.header')
      
    <section id="main">
      <div class="container">
        <div class="row">
        <h2>Training</h2>
          <div class="btn-group btn-breadcrumb">
            <a  class="btn btn-default">Introduction</i></a>
            @if($type->id==1)
            <a  class="btn btn-success">Pre-Test</a>
            @elseif($type->id==3)
            <a  class="btn btn-default">Pre-Test</a>
            @endif
            <a  class="btn btn-default">Modul</a>
            @if($type->id==1)
            <a  class="btn btn-default">Post-Test</a>
            @elseif($type->id==3)
            <a  class="btn btn-success">Post-Test</a>
            @endif
            
          </div>
        </div>
     
      </div>
      <br>
      
      <div class="block-advice">
          <div class = "text-center">
          <h2 class="brand-before">
              <small>Induction Training</small>
            </h2>
            <h1 class="brand-name">{{$type->nama}}</h1>
            <hr class="tagline-divider">
            <h2>
            </h2><br>
              <h4>
                Quiz Duration = {{$test->time}} Minutes<br><br>
                Total Question = {{$test->jumlah_soal}} Question<br><br>
                
              </h4>
              <!-- Button modal fullscreen -->
              <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal-fullscreen" onclick="start_timer()">
                Mulai Test
              </button>

              <!-- Modal fullscreen -->
              <div class="modal modal-fullscreen fade" id="modal-fullscreen" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                  <form class="" action="{{ URL::action('JawabanTraineeController@store') }}" method="post" id="myquiz">
                    <input type="hidden" name="id_user" value="{{Auth::user()->id}}"><br>
                    <input type="hidden" name="id_test" value="{{$test->id}}"><br>
                    <div class="modal-header">
                      
                      <h4 class="modal-title" id="myModalLabel">Aerofood Learning Center</h4>
                      <div class = "timerC">Quiz End in  <span id="time"></span></div>
                    </div>
                    <div class="modal-body">
                      <table class="quizTable">
                      @foreach($questions as $question)
                      <tr>
                        <td>
                          <div class="questionDiv" align="left">
                            <p class="question">{{$question->pertanyaan}}</p>
                              @foreach($question->opsi as $opsi)
                              <div class="row" style="margin-left: 5%;">
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="{{$question->id}}" id="optionsRadios1" value="{{$opsi->id}}">
                                    {{$opsi->isi_opsi}}
                                  </label>
                                </div>
                              </div>    
                              @endforeach
                          </div>
                        </td>
                      </tr>
                      @endforeach
                  </table>
                    </div>
                    <div class="modal-footer">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  
                      <input type="submit"  value="submit">
                    </div> <colgroup></colgroup>
                  </div>
                  </form>   
                </div>
              </div>

          </div>
        </div>
    </section>

        

  </div>
  
  <!-- Modul -->
  @include('layouts.footer')
  </div>

  @include('layouts.script')
</body>
</html>

<style type="text/css">





/* .modal-fullscreen */

.modal-fullscreen {
  background: white;
}
.modal-fullscreen .modal-content {
  background: transparent;
  border: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.modal-backdrop.modal-backdrop-fullscreen {
  background: #ffffff;
}
.modal-backdrop.modal-backdrop-fullscreen.in {
  opacity: .97;
  filter: alpha(opacity=97);
}

/* .modal-fullscreen size: we use Bootstrap media query breakpoints */

.modal-fullscreen .modal-dialog {
  margin: 0;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
}
@media (min-width: 768px) {
  .modal-fullscreen .modal-dialog {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .modal-fullscreen .modal-dialog {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .modal-fullscreen .modal-dialog {
     width: 1170px;
  }
}

/* centering styles for jsbin */
html,
body {
  width:100%;
  height:100%;
}
html {
  display:table;
}
body {
  display:table-cell;
  vertical-align:middle;
}
body > .btn {
  display: block;
  margin: 0 auto;
}
</style>

<script type="text/javascript">
  // .modal-backdrop classes

$(".modal-transparent").on('show.bs.modal', function () {
  setTimeout( function() {
    $(".modal-backdrop").addClass("modal-backdrop-transparent");
  }, 0);
});
$(".modal-transparent").on('hidden.bs.modal', function () {
  $(".modal-backdrop").addClass("modal-backdrop-transparent");
});

$(".modal-fullscreen").on('show.bs.modal', function () {
  setTimeout( function() {
    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
  }, 0);
});
$(".modal-fullscreen").on('hidden.bs.modal', function () {
  $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
});
  


</script>



<!-- Quiz style -->
<style type="text/css">
p.question {
  font-family:  Arial, sans-serif;
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
  opacity: 1;
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

<!-- Quiz script-->
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
        if (minutes < 1 && seconds < 1) {
          document.getElementById('myquiz').submit();
        }
    };
    // we don't want to wait a full second before the timer starts
    timer();
    setInterval(timer, 1000);
}

//minute
 function start_timer() {
    var fiveMinutes = 60 * {{$test->time}},
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};

</script>



