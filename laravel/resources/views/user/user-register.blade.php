<x-layout>
  <form method="POST" action="/register">
    @csrf

    <div class="container">
      <h3>Register</h3>

      <label for="firstname"><b>Firstname</b></label>
      <input type="text" placeholder="Enter Prename" name="firstname" required>

      <label for="surname"><b>Surname</b></label>
      <input type="text" placeholder="Enter Surname" name="surname" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="psw" required>

      <label for="password-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="password-repeat" id="psw-repeat" required>
      <hr>

      <label for="street"><b>Street</b></label>
      <input type="text" placeholder="Enter Street" name="street" required>

      <label for="house_number"><b>House number</b></label>
      <input type="text" placeholder="Enter Housenumber" name="house_number" required>
      <hr>

      <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
      <p>Already have an account? <a href="/login">Sign in</a>.</p>
    </div>
  </form>
</x-layout>