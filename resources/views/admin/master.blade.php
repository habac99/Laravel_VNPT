<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
    <link href="/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans&display=swap" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <title>
        @section('title')

        @show
    </title>
</head>
<body id="page-top">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyBotcabYBiDWN_uhImcTNVqIuz3DoMr2P0",
        authDomain: "vnpt-918d6.firebaseapp.com",
        databaseURL: "https://vnpt-918d6.firebaseio.com",
        projectId: "vnpt-918d6",
        storageBucket: "vnpt-918d6.appspot.com",
        messagingSenderId: "961509214235",
        appId: "1:961509214235:web:c594ade4ba40b4b59690be",
        measurementId: "G-NF4VWTH64M"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
</script>

<script src="/js/admin.js" type="text/javascript"></script>

<div id="wrapper">
        @yield('content')
    </div>

{{--@include('footer')--}}
</body>
</html>
