<style>
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 25%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

body {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding-left: 100px;
  padding-right:100px;
  font-family: Arial, Helvetica, sans-serif;
}
</style>
<body>
    <center><h1>Registration Form</h1></center>

    <form method="post" action="Registration">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name"><br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>
        <center>
        <input type="Submit" name="submit" id="submit"></center>
    </form>
</body>
</html>