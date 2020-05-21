@extends('layouts.guest')

@section('page-title')
    Registration
@endsection

@section('page-content')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Register</h3></div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group"><label class="small mb-1" for="inputName">Name</label><input class="form-control py-4" id="inputName" name="name" type="text" placeholder="Full Name" /></div>

                                    <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" name="email" type="email" placeholder="Enter email address" /></div>

                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter Password" /></div>

                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Password</label><input class="form-control py-4" id="inputConfirmPassword" type="password" name="password_confirmation" placeholder="Confirm Password" /></div>


                                        <div class="form-group mt-4 mb-0">                                    <button type="submit" class="btn btn-primary">
                                            {{ __('Create an Account') }}
                                        </button>
                                    </div>

                                
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="{{url('login')}}">Have an account? Go to login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; HD 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection
