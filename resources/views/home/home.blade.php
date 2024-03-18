<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creative-Quill</title>

    <!--fontawsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!--Bootstrap cdn file-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .background{
            background-color: #ffffdb;
            height: 97vh;
        }
        .background h2{
            font-family:Georgia, 'Times New Roman', Times, serif
        }
        .log-background{
            background-color: #ffffff;
        }
        .log-background h2{
            margin-top: 100px
        }
    </style>
</head>
<body>
   <div class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 background">
                <h2 class="m-5 mt-5"><i class="fa-solid fa-brain"></i> Creative-Quill</h2>
                <ul class="text-center p-5" style="font-size:30px; list-style-type:none;font-family: Georgia, serif;">
                    <li><i class="fa-solid fa-arrow-right-long"></i> Give me some Idea</li>
                    <li><i class="fa-solid fa-arrow-right-long"></i> Get sumarize answer</li>
                    <li><i class="fa-solid fa-arrow-right-long"></i> Get effective answer</li>
                </ul>
            </div>
            <div class="col-md-6 log-background">
                <h2 class="text-center">Get Started</h2>
                <div  class="center-block text-center mt-5">
                    <a href="{{route('login-user')}}" type="submit" class="btn btn-primary btn-lg px-5">Login</a>
                    <a href="{{route('registration')}}" type="submit" class="btn btn-primary btn-lg px-5">sign up</a>
                </div>
            </div>
        </div>
    </div>
   </div>
</body>
</html>



