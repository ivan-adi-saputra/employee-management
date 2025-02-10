<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Halaman Login</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>

  <body>

    <!-- Page Content -->
    <div class="page-content page-auth">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row align-items-center row-login">
            <div class="col-lg-6 text-center d-sm-none d-md-block">
              
            </div>
            <div class="col-lg-5">
              <h2>
                Deptech
              </h2>
              @if (session()->has('success'))
                <div id="successAlert" class="alert alert-success alert-dismissible fade show mt-2 w-75" role="alert">
                  {{ session('success') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
              @if (session()->has('error'))
                <div id="successAlert" class="alert alert-danger alert-dismissible fade show mt-2 w-75" role="alert">
                  {{ session('error') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
              <form class="mt-3" method="POST" action="{{ route('auth') }}">
                @csrf
                <div class="form-group">
                  <label>Email</label>
                  <input
                    type="email"
                    class="form-control w-75  @error('email') is-invalid @enderror"
                    name="email"
                    aria-describedby="emailHelp"
                  />
                   @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control w-75 @error('password') is-invalid @enderror" name="password" />
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit"
                  class="btn btn-success btn-block w-75 mt-4"
                >
                  Login
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="/script/navbar-scroll.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var successAlert = document.getElementById('successAlert');
        if (successAlert) {
            setTimeout(function() {
                let SAlert = new bootstrap.Alert(successAlert);
                SAlert.close();
            }, 3000);
        }
    });
  </script>
  </body>
</html>
