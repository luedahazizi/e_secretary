<?php include('server1.php'); ?>
<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type="text/css" href="style1.css">
</head>
<body>
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
<tr>
<td>23412334</td>
<td>6</td>
<td>10</td>
<td>Me goje</td>
<td>hssjakd</td>
<td>
<a href="#" >Edit</a>
</td>
<td>
<a href="#">Delete</a>
</td>
</tr>
</tbody>
</table>

<form method="post" action="server1.php">
<div class="input-group">
<label>NxenesID</label>
<input type="number" name="nxenesid">
</div>

<div class="input-group">
<label>LendaID</label>
<input type="number" name="lendaid">
</div>

<div class="input-group">
<label>NotatID</label>
<input type="number" name="notatid">
</div>

<div class="input-group">
<label>Vleresimi</label>
<input type="text" name="vleresimi">
</div>

<div class="input-group">
<label>Pershkrimi</label>
<input type="text" name="pershkrimi">
</div>

<div class="input-group">
<button type="submit" name="save" class="btn" >Save</button>

</form>

</body>
</html>
