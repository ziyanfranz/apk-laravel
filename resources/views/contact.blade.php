<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('/assets/style.css') }}" rel="stylesheet" type="text/css" >
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    @extends('layouts.main')
    @section('content')
  
  

    
      <!-- Contact Start -->
      <div class="col-lg-5 mt-5 mt-lg-0">

        <form action="/contact" method="post" >
        @csrf
      
        <div class="row form-group mt-3">
          <textarea class="form-control" id="komen" name="komen" rows="4" placeholder="message" required></textarea>
        </div>
        <div class="text-center mt-2"><button class="btn btn-primary center" type="submit">Send Message</button></div>
      </form>

      </div>
    @foreach ($items as $item)
    <div class="container text-center">
        <div class="row g-3">
          <div class="col-auto">
    <div class="card w-30 mb-3">
      <div class="card-body">
        <h5 class="card-title">Isi Pesan</h5>
        <p class="card-text">{{ $item->komen }}</p>
        <button type="button" class="btn btn-primary center">button</button>
    </div>  
    </div>
    </div>
</div>
</div>

    @endforeach
    <!-- Contact End -->
   

  @endsection
  </body>
</html>
    
  


