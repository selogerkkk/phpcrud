<h1>Edit user</h1>
<?php
$sql = "SELECT * FROM users WHERE id = " . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();

?>

<form action="?page=save" method="POST">
    <input type="hidden" name="action" value="edit">
    <input type="hidden" name="id" value="<?= $row->id; ?>">
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="<?= $row->name ?>" autocomplete=on required>
    </div>
    <div class=" mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?= $row->email ?>" autocomplete=on required>
    </div>
    <div class="mb-3">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="birthdate">Birthdate</label>
        <input type="date" name="birthdate" id="birthdate" class="form-control" value="<?= $row->birthdate ?>" required>
    </div>
    <div class="mb-3 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>