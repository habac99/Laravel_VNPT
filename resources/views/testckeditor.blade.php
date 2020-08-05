<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Template</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
{{--    <link rel="stylesheet" href="/css/login.css">--}}
</head>
<body>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 login-section-wrapper">
                <div class="brand-wrapper">
                    <img src="https://vnptproject.blob.core.windows.net/imagecontainer/dcvlogo.png" alt="logo" class="logo">
                </div>
                <div class="login-wrapper my-auto">
                    <h1 class="login-title">Log in</h1>
                    <form method="post" action="{{route('ckeditor_save')}}">
                        <div class="form-group">
                            <label for="email">test</label>
                            <textarea class="form-control" id="summary_ckeditor" name="summary_ckeditor"></textarea>
                        </div>

                                                <button name="login" id="login" class="btn btn-block login-btn" type="submit" value="Login">Summit</button>
                        {{csrf_field()}}
                        <script src="ckeditor/ckeditor.js"></script>
                        <script>
                            CKEDITOR.replace( 'summary_ckeditor', {
                                filebrowserUploadUrl: "{{route('ckeditor', ['_token' => csrf_token() ])}}",
                                filebrowserUploadMethod: 'form'
                            });
                        </script>

                    </form>

                </div>
            </div>
{{--            <div class="col-sm-6 px-0 d-none d-sm-block">--}}
{{--                <img src="https://vnptproject.blob.core.windows.net/imagecontainer/55928073_2023314144434003_5576748795473553302_n.jpg" alt="login image" class="login-img">--}}
{{--            </div>--}}
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
