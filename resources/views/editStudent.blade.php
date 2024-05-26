<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Edit Student</title>
  </head>
<body>
  @include('includes.studentNav');

  <div class="container" style="margin-left: 20px">
    <h2>Edit Student</h2>

    <form action="{{ route('updateStudent', $students->id) }}" method="POST"> 
        @csrf
        @method('put')
      <label for="studentName">Student name:</label><br>
      <p style="color: red;">
        @error('studentName')
          {{ $message }}
        @enderror
      </p>
      <input type="text" id="studentName" name="studentName" class="form-control" value="{{ $students->studentName }}"><br>

      <label for="age">Age:</label><br>
      <p style="color: red;">
        @error('age')
          {{ $message }}
        @enderror
      </p>
      <input type="text" id="age" name="age" class="form-control" value="{{ $students->age }}"><br><br>

      <label for="city">City:</label><br>
      <p style="color: red;">
        @error('city')
          {{ $message }}
        @enderror
      </p>
      <select name="city" id="city" class="form-control" onchange="getChangedValues()">
        <option value="">Please select city</option>
        <option value="Cairo" {{ $students->city == 'Cairo' ? 'selected' : '' }}>Cairo</option>
        <option value="Giza" {{ $students->city == 'Giza' ? 'selected' : '' }}>Giza</option>
        <option value="Alexandria" {{ $students->city == 'Alexandria' ? 'selected' : '' }}>Alexandria</option>
      </select> 

      <label for="active">active:</label><br>
      <input type="checkbox" id="active" name="active" class="form-control"  value="1" {{ $students->active ? 'checked' : '' }} ><br><br>

      <label for="image">Image:</label><br>
      <input type="file" id="image" name="image" class="form-control" value="{{ $students->image }}"><br><br>
      <p><img src = "{{ asset('assets/studentsImages/' . $students->image) }}" alt = ""></p>

      <input type="submit" value="Submit">
    </form> 

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
  </div>


</body>
</html>

