<x-layout>

@auth
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Card with Shadow and Padding -->
            <div class="card shadow-lg rounded-lg">
                <div class="card-header text-white text-center" style="background-color:#0a095f;">
                    <h3><b>Student Registration</b></h3>
                </div>

                <!-- Form Body -->
                <div class="card-body">
                    <form action="/stud_reg" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label for="fullname" class="form-label">Full Name:</label>
                                <input type="text" name="fullname" class="form-control" id="fullname">
                            </div>

                            <!-- Student Number -->
                            <div class="col-md-6">
                                <label for="stud_number" class="form-label">Student Number:</label>
                                <input type="text" name="stud_number" class="form-control" id="stud_number">
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address:</label>
                                <input type="text" name="email" class="form-control" id="email">
                            </div>


                            <!-- Grade Level -->
                            <div class="col-md-6 mt-4">
                                <label for="dropdown" class="form-label">Grade Level:</label>
                                <select class="form-select" name="grade_level" id="dropdown">
                                    <option selected>Grade 7</option>
                                    <option value="Grade 8">Grade 8</option>
                                    <option value="Grade 9">Grade 9</option>
                                    <option value="Grade 10">Grade 10</option>
                                    <option value="Grade 11">Grade 11</option>
                                    <option value="Grade 12">Grade 12</option>
                                    <option value="College">College</option>
                                    
                                </select>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit"  style="background-color: #ffd230; font-family: 'Montserrat', sans-serif;" class="btn mt-3 w-100">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@else
<div class="container py-md-5">
    <div class="row align-items-center">
      <div class="col-lg-7 py-3 py-md-5">
        <h1 class="display-4">Oops!</h1>
        <p class="lead text-muted">I think you are lost. Please return.   <a href="/" >Click me!</a></p>
        
      </div>
      
    </div>
  </div>
@endauth
   
</x-layout>