<x-masterDash title="Paiements">

{{-- <!-- Button to trigger the modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrationModal">
    Register
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registrationModalLabel">Registration Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstName" required>
            </div>
            <div class="mb-3">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastName" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div> --}}
  




  <button type="button" class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#modalLoginAvatar">
    Register
  </button>
  <!--Modal: Login with Avatar Form-->
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
  <!--Content-->
  <div class="modal-content">

    <!--Header-->
    <div class="modal-header">
      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.webp" alt="avatar" class="rounded-circle img-responsive">
    </div>
    <!--Body-->
    <div class="modal-body text-center mb-1">

      <h5 class="mt-1 mb-2">Maria Doe</h5>

      <div class="md-form ml-0 mr-0">
        <input type="password" type="text" id="form29" class="form-control form-control-sm validate ml-0">
        <label data-error="wrong" data-success="right" for="form29" class="ml-0">Enter password</label>
      </div>

      <div class="text-center mt-4">
        <button class="btn btn-cyan mt-1">Login <i class="fas fa-sign-in ml-1"></i></button>
      </div>
    </div>

  </div>
  <!--/.Content-->
</div>
</div>
<!--Modal: Login with Avatar Form-->

{{-- <div class="text-center">
<a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginAvatar">Launch
  Modal Login with Avatar</a>
</div> --}}

</x-masterDash>    
