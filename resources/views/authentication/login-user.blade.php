<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!--fontawsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!--Bootstrap cdn file-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mt-5">
					<h2 class="heading-section">Crative Quill</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="card">
                            <div class="card-body">
                                <div class="login-wrap p-4 p-md-5">
                                    <div class="d-flex">
                                        <div class="w-100">
                                            <h3 class="mb-4">Sign In</h3>
                                        </div>
                                    </div>
                                          <form action="#" class="signin-form">
                                        <div class="form-group mt-3">
                                            <label class="form-control-placeholder" for="username">Email</label>
                                            <input type="email" name="email" class="form-control" required>
                                            
                                        </div>
                                  <div class="form-group mt-3">
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <input id="password-field" name="password" type="password" class="form-control" required>
                                  </div>
                                  <div class="form-group mt-4">
                                      <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                                  </div>
                                </form>
                                <p class="text-center mt-3">Not a member? <a data-toggle="tab" href="{{route('registration')}}">Sign Up</a></p>
                              </div>
                            </div>
                        </div>
		            </div>
			    </div>
		    </div>
		</div>
	</section>
</body>
</html>