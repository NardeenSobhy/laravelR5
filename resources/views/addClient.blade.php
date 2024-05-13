<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
  @include('includes.nav');

  <div class="container" style="margin-left: 20px">
    <h2>Insert Client</h2>

    <form action="{{ route('insetClient') }}" method="POST"> <!-- {{}} = echo -->
        @csrf           <!-- security token ben2l code mn el page de llpage ele hrme aleha el info -->
      <label for="clientName">Client name:</label><br>
      <input type="text" id="clientName" name="clientName" class="form-control"><br>

      <label for="phone">Phone:</label><br>
      <input type="text" id="phone" name="phone" class="form-control"><br><br>

      <label for="email">Email:</label><br>
      <input type="text" id="email" name="email" class="form-control"><br><br>

      <label for="website">website:</label><br>
      <input type="text" id="website" name="website" class="form-control"><br><br>

      <input type="submit" value="Submit">
    </form> 

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
  </div>


</body>
</html>

