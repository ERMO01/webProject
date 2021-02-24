<?php
session_start();
include_once 'userMapper.php';
if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
} else {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Elise</title>
  <link rel="stylesheet" href="styleDashboard.css" />
</head>

<body>
  <div class="header">
    <img id="myLogo" class="logo" src="logo.png" alt="logo" />
    <ul class="headerList">
          <li class="active"><a href="contact.php"> Contact</a></li>    
          <li> <a href="aboutUs.php">About Us</a></li>
          <li><a href="index.php">Home</a></li>
      <?php
      if (isset($_SESSION["role"])) {
      ?>
        <a href="logout.php">
          <li>Logout</li>
        </a>
      <?php
      }
      ?>


    </ul>
  </div>
<div>
    <h1 class="txt">This is Dashboard page</h1>
    <div>
        
        <table>
          
            <thead>
              <tr>
                <td>USER LIST</td>
              </tr>
                <tr>
                    <td>Emri</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Fshij Userin</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['password']; ?></td>
                        <td><a href=<?php echo "deleteUser.php?id=" . $user['id'];
                                    ?>>Fshij</td>
                                    
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>

</html>