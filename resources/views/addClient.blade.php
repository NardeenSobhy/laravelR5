<!DOCTYPE html>
<html>
<body>

<h2>Insert Client</h2>

<form action="{{ route('insetClient') }}" method="POST"> <!-- {{}} = echo -->
    @csrf           <!-- security token ben2l code mn el page de llpage ele hrme aleha el info -->
  <label for="clientName">Client name:</label><br>
  <input type="text" id="clientName" name="clientName"><br>

  <label for="phone">Phone:</label><br>
  <input type="text" id="phone" name="phone"><br><br>

  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br><br>

  <label for="website">website:</label><br>
  <input type="text" id="website" name="website"><br><br>

  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

