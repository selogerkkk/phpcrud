<h1>New user</h1>

<form action="?page=save" method="POST">
    <input type="hidden" name="action" value="register">
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" autocomplete=on required>
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" autocomplete=on required>
    </div>
    <div class="mb-3">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="birthdate">Birthdate</label>
        <input type="date" name="birthdate" id="birthdate" class="form-control" required>
    </div>
    <div class="mb-3 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>