<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Edit Client</title>
  </head>
<body>
  @include('includes.nav');

  <div class="container" style="margin-left: 20px">
    <h2>Edit Client</h2>

    <form action="{{ route('updateclient', $client->id) }}" method="POST"> 
        @csrf
        @method('put')
      <label for="clientName">Client name:</label><br>
      <p style="color: red;">
        @error('clientName')
          {{ $message }}
        @enderror
      </p>
      <input type="text" id="clientName" name="clientName" class="form-control" value="{{ $client->clientName }}"><br>

      <label for="phone">Phone:</label><br>
      <p style="color: red;">
        @error('phone')
          {{ $message }}
        @enderror
      </p>
      <input type="text" id="phone" name="phone" class="form-control" value="{{ $client->phone }}"><br><br>

      <label for="email">Email:</label><br>
      <p style="color: red;">
        @error('email')
          {{ $message }}
        @enderror
      </p>
      <input type="text" id="email" name="email" class="form-control" value="{{ $client->email }}"><br><br>

      <label for="website">website:</label><br>
      <p style="color: red;">
        @error('website')
          {{ $message }}
        @enderror
      </p>
      <input type="text" id="website" name="website" class="form-control" value="{{ $client->website }}"><br><br>

      <label for="city">City:</label><br>
      <p style="color: red;">
        @error('city')
          {{ $message }}
        @enderror
      </p>
      <select name="city" id="city" class="form-control" onchange="getChangedValues()">
        <option value="">Please select city</option>
        <option value="Cairo" {{ $client->city == 'Cairo' ? 'selected' : '' }}>Cairo</option>
        <option value="Giza" {{ $client->city == 'Giza' ? 'selected' : '' }}>Giza</option>
        <option value="Alexandria" {{ $client->city == 'Alexandria' ? 'selected' : '' }}>Alexandria</option>
      </select> 

      <label for="active">active:</label><br>
      <input type="checkbox" id="active" name="active" class="form-control"  value="1" {{ $client->active ? 'checked' : '' }} ><br><br>

      <label for="image">Image:</label><br>
      <input type="file" id="image" name="image" class="form-control" value="{{ $client->image }}"><br><br>
      <p><img src = "{{ asset('assets/clientsImages/' . $client->image) }}" alt = ""></p>

      <input type="submit" value="Submit">
    </form> 

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
  </div>


</body>
</html>

