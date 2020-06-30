<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Sanbercode</title>

  </head>
  <body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    <form action="/welcome" method="POST">
        @csrf
      <div>
        <label>First name:</label><br /><br />
        <input type="text" name="first_name" required>
      </div>
      <br />

      <div>
        <label>Last name:</label><br><br>
        <input type="text" name="last_name" required>
      </div>
      <br>

      <div>
        <label>Gender:</label><br><br>
        <input type="radio" name="gender" value="male"> Male <br>
        <input type="radio" name="gender" value="female"> Female <br>
        <input type="radio" name="gender" value="other"> Other <br>
      </div>
      <br>

      <div>
        <label>Nationality:</label><br><br>
        <select  name="nationality" value="male" required>
          <option value="indonesia">Indonesian</option>
          <option value="malaysian">Malaysian</option>
          <option value="singaporean">Singaporean</option>
          <option value="australian">Australian</option>
        </select>
      </div>
      <br>

      <div>
        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="language" value="bahasa"> Bahasa Ingonesia <br>
        <input type="checkbox" name="language" value="english"> English <br>
        <input type="checkbox" name="language" value="other"> Other <br>
      </div>
      <br>

      <div>
        <label>Bio:</label><br><br>
        <textarea name="bio" required></textarea>
      </div>
      <br>

      <div>
        <button type="submit">Sign Up</button>
      </div>
    </form>
  </body>
</html>
