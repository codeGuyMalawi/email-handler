<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ url('img/log.png') }}" rel="icon">
    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <!-- Font-awsome -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css') }}">
    <!-- bootstrap -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" />

</head>
<body>
<br>
<br>
    <div class="container">

        <h2 class="text-center">Email Handler</h2>

        <form  action="{{ url('/sendMail') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Message</label>
              <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="6"></textarea>
            </div>
         
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>



<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/popper.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/sweetalert.js') }}"></script>
<script src="{{ url('js/dataTables.min.js') }}"></script>
</body>

</html>