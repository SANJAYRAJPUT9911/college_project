<!-- signup form start -->
<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="signupLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="signupLabel">Signup</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <form class="container " id="signupform">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><i class="fa-solid fa-person"></i> Name</label>
            <input type="text" placeholder="name" class="form-control" id="inputname" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><i class="fa-solid fa-envelope"></i> Email address</label>
            <input type="email" class="form-control" id="inputemail" placeholder="name@example.com">
            <div id="sameusr"></div>

          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><i class="fa-solid fa-key"></i> New Password</label>
            <input type="Password" placeholder="Password" class="form-control" id="inputpassword" aria-describedby="emailHelp">
          </div>

          <div class="modal-footer">
            <div id="response" class=""></div>
            <button type="button" class="btn btn-primary" id="signupbtn">Signup</button>

          </div>
        </form>


      </div>
    </div>
  </div>
</div>
<!--signup form end -->

<!-- login form start -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <form class="container " id="loginform">

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><i class="fa-solid fa-envelope"></i> Email address</label>
            <input type="email" class="form-control" id="loginmail" placeholder="name@example.com">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><i class="fa-solid fa-key"></i> New Password</label>
            <input type="Password" placeholder="Password" class="form-control" id="loginpass" aria-describedby="emailHelp">

          </div>

          <div class="modal-footer">
            <div id="loginspinner"></div>
            <div id="loginresponse"></div>
            <button type="button" class="btn btn-primary" id="loginbtn">Login</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- login form end -->

<!-- admin form login start-->
<div class="modal fade" id="adminlogin" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginLabel">Admin Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="container " id="adminloginform">

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><i class="fa-solid fa-envelope"></i> Email address</label>
            <input type="email" class="form-control" id="adminmail" placeholder="name@example.com">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><i class="fa-solid fa-key"></i> New Password</label>
            <input type="Password" placeholder="password" class="form-control" id="adminpassword" aria-describedby="emailHelp">

          </div>

          <div class="modal-footer">
            <div id="adminloginspinner"></div>
            <div id="adminloginresponse"></div>
            <button type="button" class="btn btn-primary" id="adminloginbtn">Login</button>
          </div>
        </form>

      </div>
    </div>
  </div>
  <!-- admin form login end -->