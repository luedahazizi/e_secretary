<?php include('server.php');

//fetch the record to be updated 
if (isset($_GET['edit'])) {
    $NotatID = $_GET['edit'];
    
    $edit_state = true;
    
    $rec = mysqli_query($db, "SELECT * FROM notat WHERE NotatID=$NotatID");
    $record = mysqli_fetch_array($rec);
    
    $NxenesID = $record['NxenesID'];
    $LendaID = $record['LendaID'];
    $Vleresimi = $record['Vleresimi'];
    $Pershkrimi = $record['Pershkrimi'];
    $NotatID = $record['NotatID'];
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>CRUD </title>
    <link rel="stylesheet" type="text/css" href="stylestyle.css">
</head>

<body>

    <?php if (isset($_SESSION['msg'])) : ?>
        <div class="msg">
            <?php
            echo $_SESSION['msg'];
            unset($_SESSION['msg'])
            ?>
        </div>
    <?php endif ?>
    <table>
        <thread>
            <tr>
                <th>NxenesID</th>
                <th>LendaID</th>
                <th>Vleresimi</th>
                <th>Pershkrimi</th>
                <th colspan="2">Action</th>
            </tr>
        </thread>
        <tbody>
            <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['NxenesID']; ?></td>
                    <td><?php echo $row['LendaID']; ?></td>
                    <td><?php echo $row['Vleresimi']; ?> </td>
                    <td><?php echo $row['Pershkrimi']; ?> </td>
                    <td>
                        <a class="edit_btn" href=" index.php?edit=<?php echo $row['NotatID']; ?>">Edit</a>
                    </td>
                    <td>
                        <a class="del_btn" href="server.php?del=<?php echo $row['NotatID']; ?>">Delete </a>
                    </td>
                </tr>
            <?php   } ?>

        </tbody>
    </table>
    <form method="post" action="server.php">
        <input type="hidden" name="NotatID" value="<?php echo $NotatID; ?>">
        <div class="input-group">
            <label>NxenesID</label>
            <input type="number" name="NxenesID" value="<?php echo $NxenesID; ?>">
        </div>

        <div class="input-group">
            <label>LendaID</label>
            <input type="number" name="LendaID" value="<?php echo $LendaID; ?>">
        </div>

        <div class="input-group">
            <label>Vleresimi</label>
            <input type="number" name="Vleresimi" value="<?php echo $Vleresimi; ?>">
        </div>

        <div class="input-group">
            <label>Pershkrimi</label>
            <input type="text" name="Pershkrimi" value="<?php echo $Pershkrimi; ?>">
        </div>

        <div class="input-group">
            <?php if ($edit_state == false): ?>
                <button type="submit" name="save" class="btn">Save </button>
            <?php else : ?>
                <button type="submit" name="update" class="btn">Update</button>
            <?php endif ?>

        </div>
    </form>
</body>

</html>