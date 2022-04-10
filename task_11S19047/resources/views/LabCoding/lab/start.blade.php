@extends('LabCoding.lab.index')

@section('start')
    <!-- Container-fluid starts-->
    <div class="ws-black w3-center" style="padding-top:90px;padding-bottom:90px;background-color:#626B6D;">
        <div class="w3-content learntocodecontent" style="max-width:1400px">
            <center>
                <h1 style="color:white;font-size: 70px;font-weight: bold;"><b>LAB CODE</b></h1>
                <h3 style="color: white;font-size: 25px;">Learn how to code</h3>
            </center>
            <br>
            <form class="example" action="/action_page.php" style="margin:auto;max-width:500px">
                <center><a href={{ 'category' }} class="btn btn-primary btn-lg" tabindex="-1" role="button">
                        <h4 style="font-size:15px; color: white;">Click here</h4>
                    </a></center>
        </div>
    </div>
    <script>
        (
            function setThemeMode() {
                var x = localStorage.getItem("preferredmode");
                var y = localStorage.getItem("preferredpagemode");
                if (x == "dark") {
                    document.body.className += " darktheme";
                    document.getElementById("radio_darkcode").checked = true;

                }
                if (y == "dark") {
                    document.body.className += " darkpagetheme";
                    document.getElementById("wavepath").style.fill = "rgb(13,23,33)";
                    document.getElementById("radio_darkpage").checked = true;

                }
            })();
    </script>
    <div class="w3-row w3-padding-32" style="margin-top:-10px;background-color: white;">
        <div class="w3-content" style="max-width:1400px">
            <div class="row">
                <div class="col-sm-8">
                    <div class="w3-col l6 w3-center" style="padding:3%;">
                        <p style="font-size:25px;color:black;font-weight: 600; margin-top: 60px;margin-right: 80px;">
                            Learn with usbuild your own code and be Developer of future!</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img src="../image/welcome/1.png" style="height: 200px;width: 220;margin: 30px;margin-left: 80px;">
                </div>
            </div>
        </div>
    </div>
@endsection
