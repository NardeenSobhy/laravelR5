<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  @include('includes.studentNav');

<div class="container" style="margin-left: 20px">
  <h2>Insert Student</h2>

  <form action="{{ route('insetStudent') }}" method="POST" enctype="multipart/form-data"> 
      @csrf 
    <label for="studentName">Student name:</label><br>
    <p style="color: red;">
        @error('studentName')
          {{ $message }}
        @enderror
      </p>
    <input type="text" id="studentName" name="studentName" class="form-control" value="{{ old ('studentName') }}"><br>

    <label for="age">age:</label><br>
    <p style="color: red;">
        @error('age')
          {{ $message }}
        @enderror
      </p>
    <input type="text" id="age" name="age" class="form-control" value="{{ old ('age') }}"><br><br>

    <label for="city">City:</label><br>
      <p style="color: red;">
        @error('city')
          {{ $message }}
        @enderror
      </p>
      <select name="city" id="city" class="form-control">
        <option value="">Please select city</option>
        <option value="Cairo" {{ old('city') == 'Cairo' ? 'selected' : '' }}>Cairo</option>
        <option value="Giza" {{ old('city') == 'Giza' ? 'selected' : '' }}>Giza</option>
        <option value="Alexandria" {{ old('city') == 'Alexandria' ? 'selected' : '' }}>Alexandria</option>
      </select>

      <label for="active">active:</label><br>
      <input type="checkbox" id="active" name="active" class="form-control" value="1" {{ old('active') ? 'checked' : '' }}><br><br>

      <label for="image">Image:</label><br>
      <input type="file" id="image" name="image" class="form-control"><br><br>
      
    <input type="submit" value="Submit">
  </form> 

  <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</div>
</body>
</html>

