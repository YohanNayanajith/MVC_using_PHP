<style>
body{
    padding-left : 50px;
    padding-right : 50px;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f2f2f2;
}

#user_details {
  border-collapse: collapse;
  width: 100%;
}

#user_details td, #user_details th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#user_details tr:nth-child(even){background-color: #f2f2f2;}

#user_details tr:hover {background-color: #ddd;}

#user_details th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<body>
    <h1>Search User Details</h1>
    <?php //print_r($this->users[0][1]); 
    $i = 0;
    $j = 0;
    echo "<table id='user_details'><tr>
            <th>Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Password</th></tr>";

    for($i=0;$i<count($this->users);$i++){
        echo "<tr>
            <td>{$this->users[$i][$j]}</td>
            <td>{$this->users[$i][$j+1]}</td>
            <td>{$this->users[$i][$j+2]}</td>
            <td>{$this->users[$i][$j+3]}</td>
        </tr>";
    }
    echo "</table>"

    ?>
</body>
</html>