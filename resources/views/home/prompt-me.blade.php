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
    .search{
       position: relative;
       box-shadow: 0 0 40px rgba(51, 51, 51, .1);
         
       }

       .search input{

        height: 60px;
        text-indent: 25px;
        border: 2px solid #d6d4d4;


       }


       .search input:focus{

        box-shadow: none;
        border: 2px solid blue;


       }

       .search .fa-search{

        position: absolute;
        top: 20px;
        left: 16px;

       }

       .search button{

        position: absolute;
        top: 5px;
        right: 5px;
        height: 50px;
        width: 50px;
        font-weight:bolder;
        font-size: x-large;
        border: none

       }
   </style>
</head>
<body>
   <div class="section">
    <nav class="navbar bg-body-tertiary bg-dark">
        <div class="container-fluid">
          <h2 class="navbar-brand text-warning mx-auto">Creative-Quill</h2>
          <a href="{{route('login-user')}}" type="submit" class="btn btn-secondary">profile</a>
        </div>
      </nav>


    <div class="row mt-0">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="m-0 p-0">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="17" placeholder="Have any question, search the box"></textarea>
                      </div>
                      <div class="row height d-flex justify-content-center align-items-center">

                        <div class="col-md-8">
  
                          <div class="search mt-3">
                            <input type="text" class="form-control" placeholder="Have a question? Ask Now">
                            <button type="submit"><i class="fa-solid fa-arrow-up-long"></i></button>
                          </div>
                          
                        </div>
                        
                      </div>
                </div>
            </div>
        </div>
    </div>
   </div>
</body>
</html>