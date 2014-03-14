<table class="listing">
<thead>
<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City</th>
</tr>
<thead>
<tbody>
<?php foreach($data as $row) { ?>
    <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['sname'] ?></td>
        <td><?php echo $row['city'] ?></td>
    </tr>
<?php } ?>
<tbody>
</table>