@extends('LabCoding.lab.index')

@section('content')
    {{-- <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Lab Coding</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span
                                    class="ms-1 d-none d-sm-inline">{{ $category->language }}</span>
                            </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                @foreach ($daftarsoal as $sol)
                                    <li class="w-100">
                                        <a href="{{ url('exercise/' . $sol->id) }}" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Exercise
                                                {{ $sol->exercise }}</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div> --}}
    <h2>Exercise :</h2>
    <p>Use the correct operator to increase the value of the variable x by 1.</p>
    <div>
        <img src="{{ asset('assets/uploads/soal/' . $soal->image) }}" class="w-50" alt="Category Image">
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
    <div id="answerbuttoncontainer">
        <button id="submitbutton" onclick="Correct();" style="visibility: visible;" type="button">Submit
            Answer</button>
        <button id="tryAgain" onclick="changeVisibilityTry();" style="visibility: hidden;" type="button">Try
            Again</button>
        <button id="showAnswer" onclick="changeVisibility();" style="visibility: hidden;">Show
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
    <div id="assignmentNotCorrect" onclick="closeNotCorrect(event)" style="display:none">
        <h2>Not Correct</h2>
        <p>Click <u>here</u> to try again.</p>
    </div>
    <script>
        function Correct() {
            document.getElementById("assignmentCorrect").style.visibility = "visible";
            // document.getElementById("hideanswerbutton").style.visibility = "visible";
            // document.getElementById("submitbutton").style.visibility = "hidden";
        }

        function changeVisibility() {
            document.getElementById("showAnswer").style.visibility = "hidden";
            document.getElementById("hideanswerbutton").style.visibility = "visible";
            document.getElementById("submitbutton").style.visibility = "hidden";
        }

        function changeVisibilityHide() {
            document.getElementById("showAnswer").style.visibility = "visible";
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
