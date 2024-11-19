<x-layout>
@auth
<div class="container py-md-5">
    <div class="row align-items-center">
      <div class="col-lg-7 py-3 py-md-5">
        Good Day! {{ auth()->user()->fullname }} 
      </div>
      
    </div>
  </div>

  <div class="container  mb-5  ">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg rounded-lg ">
                <div class="card-header text-center"> 
                    <h2>STUDENTS
                       
                    </h2>
                </div>
                <div class="card-body">
                    <table id="mytable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fullname</th>
                                <th>Student Number</th>
                                <th>Grade Level</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($values as $value)
                            <tr>
                                <td>{{ $value['id'] }}</td>
                                <td>{{ $value['fullname'] }}</td>
                                <td>{{ $value['stud_number'] }}</td>
                                <td>{{ $value['grade_level'] }}</td>
                                <td>{{ $value['email'] }}</td>
                               
                                <td>
                                    
                                    <a href="/edit/{{ $value->id }}"><i style="color: green;" class="bx bxs-edit-alt"></i></a>
                                    <a href="/view/{{ $value->id }}"><i class="bx bx-show"></i></a>
                                    <form action="/delete/{{ $value->id }}" method="POST" style="display: inline-block; margin-right: 5px;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                                            <i style="color: red;" class="bx bxs-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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