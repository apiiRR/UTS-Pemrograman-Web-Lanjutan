<?php 
    $member = $_SESSION['MEMBER'];
?>
<form class="my-2 mx-2">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $member["username"]; ?>" name="username" readonly>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" value="<?= $member["password"]; ?>" name="password" readonly>
  </div>
</form>