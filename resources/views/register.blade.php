@extends('layouts.app')
@section('content')
@php
if (isset($route) && $route === 'registered') {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>You are successfully registered.</strong>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
@endphp
    <div class="container pb-5">
        <div class="text-center pb-3 title">register</div>
        <form  action="{{ route('registered') }}">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" required class="form-control" id="firstName" aria-describedby="firstName">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="mb-3">
                        <label for="LastName" class="form-label">Last name</label>
                        <input type="text" required class="form-control" id="LastName" aria-describedby="LastName">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" required class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" required id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">I accept <span class="terms"> Terms of Use</span></label>
            </div>
            <button type="submit" class="btn btn-primary col-12 col-md-2 col-xl-1">Register</button>
        </form>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Terms and Conditions</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Lorempsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor, lectus ut pulvinar ullamcorper, lacus mi maximus sapien, a convallis sapien tortor vitae odio. Quisque non sapien maximus libero rutrum ornare nec quis quam. In magna sem, placerat et eros in, ultrices posuere lorem. Duis eget dui nec massa pretium egestas non a sapien. Donec non ex dolor. Fusce eget neque ac erat porttitor ullamcorper. Sed vel sollicitudin nulla. Proin vitae dictum leo. Nunc elementum ex sit amet accumsan semper. Aliquam lacinia purus tortor, et vulputate orci egestas sit amet. Quisque vehicula eu magna et vehicula. Curabitur vel ipsum nisl. Sed sollicitudin dapibus ex, sodales malesuada purus. In blandit felis porttitor ullamcorper imperdiet.
            <div class="pt-1">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed blandit vel nibh convallis venenatis. Mauris vel quam vitae diam aliquam maximus ut ac velit. Pellentesque nec mattis nisi. Donec tincidunt, sem congue bibendum pharetra, mi urna ornare enim, sed vestibulum lacus nunc sit amet velit. Curabitur non tellus ultrices, volutpat turpis id, elementum elit. Sed pharetra et mi in dapibus. Cras posuere mi non quam cursus malesuada.</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
        </div>
      </div>
    </div>
  </div>

@endsection
