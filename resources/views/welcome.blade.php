<x-layout>
  <div class="container py-md-5">
      <div class="row align-items-center">
          <div class="col-lg-7 py-3 py-md-5">
              <h1 class="display-4">Good Day!</h1>
              <p class="lead text-muted">
                  <span id="current-date">{{ now()->format('F j, Y') }}</span>, 
                  <span id="current-time">{{ now()->format('h:i:s A') }}</span>
              </p>
          </div>
          <div class="col-lg-5 pl-lg-5 pb-3 py-lg-5">
              <form action="/register" method="POST" id="registration-form">
                  @csrf
                  <div class="form-group">
                      <label for="username-register" class="text-muted mb-1"><small>Username</small></label>
                      <input name="username" id="username-register" class="form-control" type="text" placeholder="Pick a username" autocomplete="off" />
                      @error('username')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="username-register" class="text-muted mb-1"><small>Full Name</small></label>
                      <input name="fullname" id="username-register" class="form-control" type="text" placeholder="Full Name" autocomplete="off" />
                      @error('fullname')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
                      <input name="email" id="email-register" class="form-control" type="text" placeholder="you@example.com" autocomplete="off" />
                      @error('email')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
                      <input name="password" id="password-register" class="form-control" type="password" placeholder="Create a password" />
                      @error('password')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="password-register-confirm" class="text-muted mb-1"><small>Confirm Password</small></label>
                      <input name="password" id="password-register-confirm" class="form-control" type="password" placeholder="Confirm password" />
                      @error('password')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>
                  <input name="UserType"  class="form-control" type="hidden" value="hslrc"  />
                     
                  <button type="submit" class="py-3 mt-4 btn btn-lg btn-success btn-block">Sign up for OurApp</button>
              </form>
          </div>
      </div>
  </div>

  <script>
      function updateTime() {
          const now = new Date();
          const dateOptions = { month: 'long', day: 'numeric', year: 'numeric' };
          const timeOptions = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true };

          document.getElementById('current-date').textContent = now.toLocaleDateString('en-US', dateOptions);
          document.getElementById('current-time').textContent = now.toLocaleTimeString('en-US', timeOptions);
      }

      // Call updateTime immediately and set an interval to update it every second
      updateTime();
      setInterval(updateTime, 1000);
  </script>
</x-layout>
