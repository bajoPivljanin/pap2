<?php 
    include "inc/header.php";
    $user = getuser();
?>
<h2 class="userInformation">User information</h2>
<table class="userTable">
    <tr>
      <td class="tdName">First Name</td>
      <td class="tdPHP"><?php echo $user['firstName']?></td>
    </tr>
    <tr>
      <td class="tdName">Last Name</td>
      <td class="tdPHP"><?php echo $user['lastName']?></td>
    </tr>
    <tr>
      <td class="tdName">Number</td>
      <td class="tdPHP"><?php echo $user['phoneNumber']?></td>
    </tr>
    <tr>
      <td class="tdName">Username</td>
      <td class="tdPHP"><?php echo $user['username']?></td>
    </tr>
    <tr>
      <td class="tdName">Email</td>
      <td class="tdPHP"><?php echo $user['email']?></td>
    </tr>
    <tr>
      <td class="tdName">Country</td>
      <td class="tdPHP"><?php echo $user['country']?></td>
    </tr>
    <tr>
      <td class="tdName">State</td>
      <td class="tdPHP"><?php echo $user['state']?></td>
    </tr>
    <tr>
      <td class="tdName">Post code</td>
      <td class="tdPHP"><?php echo $user['postCode']?></td>
    </tr>
   
  </table>

<?php 
    include "inc/footer.php";
?>
