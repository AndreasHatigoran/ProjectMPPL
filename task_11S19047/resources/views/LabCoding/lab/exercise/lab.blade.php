@extends('LabCoding.lab.index')

@section('content')
    <h2>Exercise {{ $soal->exercise }}:</h2>
    <div>
        <img src="{{ asset('assets/uploads/soal/' . $soal->image) }}" class="w-25" alt="Category Image">
    </div>
    <br>
    <div class="row">
        <div class="col">
            <label>Your Answer : </label>
            <input type="text" class="editablesection">
        </div>
    </div>
    <br>
    <br>
    <div id="showans" onclick="" style="visibility:hidden">
        <label>Answer : <b>{{ $soal->answer }}</b></label>
    </div>
    <br>
    <br>
    <div id="answerbuttoncontainer">
        <button id="submitbutton" onclick="Correct();" style="visibility: visible;" type="button">Submit
            Answer</button>
        <button id="tryAgain" onclick="changeVisibilityTry();" style="visibility: hidden;" type="button">Try
            Again</button>
        <button id="showAnswer" type="button" onclick="changeVisibility();" style="visibility: visible;">Show
            Answer</button>
        <button id="hideanswerbutton" type="button" style="visibility: hidden;" onclick="changeVisibilityHide()">Hide
            Answer</button>
        {{-- <button style="visibility: visible;" type="button">Hint</button> --}}
    </div>
    {{-- <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-primary" type="button" href="{{ url('category') }}">Prev</button>
        <button class="btn btn-primary" type="button" href="{{ url('category') }}">Next</button>
    </div> --}}
    <div id="assignmentCorrect" onclick="" style="visibility: hidden;">
        <h2>Correct!</h2>
        {{-- <span style="cursor:pointer" id="correctnextbtn">Next ❯</span> --}}
    </div>
    {{-- <div id="assignmentNotCorrect" onclick="closeNotCorrect(event)" style="display:none">
        <h2>Not Correct</h2>
        <p>Click <u>here</u> to try again.</p>
    </div> --}}
    <script>
        function Correct() {
            document.getElementById("assignmentCorrect").style.visibility = "visible";
            // document.getElementById("hideanswerbutton").style.visibility = "visible";
            // document.getElementById("submitbutton").style.visibility = "hidden";
        }

        function changeVisibility() {
            document.getElementById("showAnswer").style.visibility = "hidden";
            document.getElementById("showans").style.visibility = "visible";
            document.getElementById("hideanswerbutton").style.visibility = "visible";
            document.getElementById("submitbutton").style.visibility = "hidden";
        }

        function changeVisibilityHide() {
            document.getElementById("showAnswer").style.visibility = "visible";
            document.getElementById("showans").style.visibility = "hidden";
            document.getElementById("hideanswerbutton").style.visibility = "hidden";
            document.getElementById("submitbutton").style.visibility = "visible";
        }

        function changeVisibilityAnswer() {
            document.getElementById("submitbutton").style.visibility = "hidden";
            document.getElementById("tryAgain").style.visibility = "visible";
            document.getElementById("showAnswer").style.visibility = "hidden";
        }

        function changeVisibilityTry() {
            document.getElementById("submitbutton").style.visibility = "visible";
            document.getElementById("tryAgain").style.visibility = "hidden";
            document.getElementById("showAnswer").style.visibility = "visible";
        }



        // function resetElement() {
        //     document.getElementById("imgbox1").style.display = "block";
        //     document.getElementById("imgbox2").style.visibility = "visible";
        // }
    </script>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
