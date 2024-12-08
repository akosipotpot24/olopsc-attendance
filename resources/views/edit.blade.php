<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>OLOPSC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="main.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!--boxicons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>

  

        @auth
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    
                    <!-- Card with Shadow and Padding -->
                    <div class="card shadow-lg rounded-lg">
                        
                        <div class="card-header text-white d-flex justify-content-between align-items-center" style="background-color:#0a095f;">
                            <h3 class="mb-0"><b>Student Registration</b></h3>
                            <a href="/1" class="btn btn-danger">BACK</a>
                        </div>
                        
        
                        <!-- Form Body -->
                        <div class="card-body">
                            
                            <form action="/edit1/{{$value->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <!-- Full Name -->
                                    <div class="col-md-6">
                                        <label for="fullname" class="form-label">Full Name:</label>
                                        <input type="text"  value="{{$value->fullname}}" name="fullname" class="form-control" id="fullname">
                                    </div>
        
                                    <!-- Student Number -->
                                    <div class="col-md-6">
                                        <label for="stud_number" class="form-label">Student Number:</label>
                                        <input type="text" value="{{$value->stud_number}}" name="stud_number" class="form-control" id="stud_number">
                                    </div>
                                </div>
        
                                <div class="row mb-3">
        
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address:</label>
                                        <input type="text" name="email" value="{{$value->email}}" class="form-control" id="email">
                                    </div>
        
        
                                    <!-- Grade Level -->
                                    <div class="col-md-6 mt-4">
                                        <label for="dropdown" class="form-label">Grade Level:</label>
                                        <select class="form-select" name="grade_level" id="dropdown">
                                            <option value="Grade 7" {{ $value->grade_level == 'Grade 7' ? 'selected' : '' }}>Grade 7</option>
                                            <option value="Grade 8" {{ $value->grade_level == 'Grade 8' ? 'selected' : '' }}>Grade 8</option>
                                            <option value="Grade 9" {{ $value->grade_level == 'Grade 9' ? 'selected' : '' }}>Grade 9</option>
                                            <option value="Grade 10" {{ $value->grade_level == 'Grade 10' ? 'selected' : '' }}>Grade 10</option>
                                            <option value="Grade 11" {{ $value->grade_level == 'Grade 11' ? 'selected' : '' }}>Grade 11</option>
                                            <option value="Grade 12" {{ $value->grade_level == 'Grade 12' ? 'selected' : '' }}>Grade 12</option>
                                            <option value="College" {{ $value->grade_level == 'College' ? 'selected' : '' }}>College</option>
                                        </select>
                                    </div>
                                </div>
        
                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit"  style="background-color: #ffd230; font-family: 'Montserrat', sans-serif;" class="btn mt-3 w-100">Update</button>
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
           
        <footer class="border-top text-center small text-muted py-3">
            <p class="m-0">Copyright &copy; 2024 <a href="/" class="text-muted"><b>OLOPSC LRC Attendance System</b></a>. All rights reserved.</p>
          </footer>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
          <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
          <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        
        
        <script>
            $('[data-toggle="tooltip"]').tooltip()
    
    
    
    
    
            function updateTime() {
                const now = new Date();
                const dateOptions = { month: 'long', day: 'numeric', year: 'numeric' };
                const timeOptions = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true };
    
                document.getElementById('current-date').textContent = now.toLocaleDateString('en-US', dateOptions);
                document.getElementById('current-time').textContent = now.toLocaleTimeString('en-US', timeOptions);
            }
    
            // Update every second
            setInterval(updateTime, 1000);
          </script>
    
        <script>
          function selectOption(element) {
            const button = document.getElementById("dropdownMenuButton");
            button.textContent = element.textContent; // Update the button text
          }
        </script>
    
      <script type="text/javascript">
            $('#mytable').DataTable({});
            </script>
        </body>
      </html>
   
