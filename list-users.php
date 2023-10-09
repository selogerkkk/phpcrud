<h1>List users</h1>

<?php
$sql = "SELECT * FROM users";
$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Name</th>";
    print "<th>E-mail</th>";
    print "<th>Birthdate</th>";
    print "<th>Actions</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->name . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->birthdate . "</td>";

        print "<td>
        <button onclick=\"location.href='?page=edit&id=" . $row->id . "';\" class='btn btn-success'>Edit</button>
        <button onclick=\"if(confirm('Are you sure you want to delete?')){location.href='?page=save&action=delete&id=" . $row->id . "';}else{false;}\" class='btn btn-danger'>Delete</button>
        </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print("<p class='alert alert-danger'>Users not found.</p>");
}
?>