<?php

include ('notat.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" type="text/css" href="notat.css">
</head>
<body>
    <?php if (isset($_SESSION['msg'])): ?>
        <div class="msg">
            <?php
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            ?>
            </div>
            <?php endif ?>
<table>
    <thead>
    <tr>
        <th>NxenesID</th>
        <th>LendaID</th>
        <th>NotatID</th>
        <th>Vleresimi</th>
        <th>Pershkrimi</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
              <tr>
        <td><?php echo $row['nxenesid']; ?></td>
        <td><?php echo $row['lendaid']; ?></td>
        <td><?php echo $row['notatid']; ?></td>
        <td><?php echo $row['vleresimi']; ?></td>
        <td><?php echo $row['pershkrimi']; ?></td>
        <td>
            <a href="#" >Edit</a>
        </td>
        <td>
            <a href="#">Delete</a>
        </td>
    </tr>
    <?php } ?>
  
    </tbody>
</table>

<form method="post" action="notat.php">

    <div class="input-group">
        <label>NxenesID</label>
        <input type="number" name="nxenesid" required>
    </div>

    <div class="input-group">
        <label>LendaID</label>
        <input type="number" name="lendaid" required  >
    </div>

    <div class="input-group">
        <label>NotatID</label>
        <input type="number" name="notatid" required>
    </div>

    <div class="input-group">
        <label>Vleresimi</label>
        <input type="text" name="vleresimi" required >
    </div>

    <div class="input-group">
        <label>Pershkrimi</label>
        <input type="text" name="pershkrimi" required>
    </div>

    <div class="input-group">
        
        <button type="submit" name="save" class="btn" >Save</button>
        
    </div>
</form>

</body>
</html>