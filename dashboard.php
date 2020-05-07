<?php
include 'connection.php';
include 'sql.php';
$result=mysqli_query($conn,$listOfTeachers);
$rowcount=mysqli_num_rows($result);
?>
<div class="container">
  <h2>List of Teachers</h2>
  <p>We are displying teachers deatil here:</p> 

  <button class="btn-danger"onclick="logoutUser()"> Logout</button>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>User Name</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
   	  <?php if($rowcount){ ?>
   	  <?php while($row = mysqli_fetch_assoc($result)){?>	
      <tr>
        <td><?php echo $row["uname"];?></td>
         <td><?php echo $row["uemail"];?></td>
         <td><?php echo $row["uphone"];?></td>
      </tr>
  <?php }?>
  <?php } ?>
    </tbody>
  </table>
</div>


<script>
function logoutUser(){
  var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
  window.location.href="http://localhost/myschool";
}
  </script>
