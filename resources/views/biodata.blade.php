

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="{{ asset('/assets/style.css') }}" rel="stylesheet" type="text/css" >
    <title>Biodata</title>
</head>
<body>

    @extends('layouts.main')
    @section('content')










<div class="container mt-4 mb-4 p-3 d-flex justify-content-center " > <div  class="card p-4 rounded-4 shadow-lg p-3 mb-5 bg-body rounded"> <div class=" image d-flex flex-column justify-content-center align-items-center ">  <img class="rounded-circle shadow-4-strong" src="https://images3.alphacoders.com/132/1322715.png" height="130" width="130" /></button> <span class="name mt-3">Arya Nugraha</span> <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 


    <input class="insien input" type="text" value="@ryawzy07_" id="textInput" disabled>
<!-- The button used to copy the text -->
<span><i class="fa fa-copy"  onclick="copyText()"></i></span></div>
    
    
    
    <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">812 <span class="follow">Followers</span></span> </div> <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Edit Profile</button> </div> <div class="text mt-3"> <span>Tanggal Lahir: july 2006</span><br>
    <span>Nomor Telp:{{ $telp }}<br><br> . </span> </div> <div class="gap-2 mt-2 icons d-flex flex-row justify-content-center align-items-center"> 
    
    </div> <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2025</span> </div> </div> </div>
</div>

@endsection
<script>
    function copyText(){
        var text = document.getElementById("textInput");
        text.select();
        document.execCommand("copy");
        alert("Copied the text: " + text.value);
    }
    </script>


</body>
</html>