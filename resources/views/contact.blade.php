<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="card-body col-lg-6 ml-4">
 
            <div class="card-body">

                <form action="{{route('store.contact')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Full Name:</label>
                      <input type="name" class="form-control  @error('name')is-invalid @enderror" value="{{old('name')}}" name="name" id="name" placeholder="Enter Your Name">
                      @error('name')
                      <strong class="alert text-danger">{{ $message }}</strong>
                  @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control @error('email')is-invalid @enderror" value="{{old('email')}}" name="email" placeholder="Enter Your Email" id="exampleInputEmail1" >
                      @error('email')
                      <strong class="alert text-danger">{{ $message }}</strong>
                  @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1"  class="form-label">Password</label>
                      <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" value="{{old('password')}}" placeholder="Enter Your Password"  id="exampleInputPassword1">
                      @error('password')
                      <strong class="alert text-danger">{{ $message }}</strong>
                  @enderror
                    </div>
            
                    <button type="submit" class="btn  btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>