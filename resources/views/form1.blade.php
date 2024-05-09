<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ route('recieveForm1') }}" method="POST"> <!-- {{}} = echo -->
    @csrf <!-- security token ben2l code mn el page de llpage ele hrme aleha el info -->
  <label for="fname">First name:</label><br>
  <!-- <input type="text" id="fname" name="fname" value="John"><br> -->
  <input type="text" id1="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id2="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

