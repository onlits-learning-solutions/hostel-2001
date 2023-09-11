<form action="/hosteller/create" method="post">
    <div class="mb-4">
        <h2>New Hosteller</h2>
    </div>

    <div class="row mb-4">
        <div class="col">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <label for="date_of_birth" class="form-label">Date of Birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
        </div>
        <div class="col">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-control">
                <option value="M" selected>Male</option>
                <option value="F">Female</option>
            </select>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <label for="contact_no" class="form-label">Contact Number</label>
            <input type="text" name="contact_no" id="contact_no" class="form-control" minlength="10" maxlength="10">
        </div>
        <div class="col">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
    </div>

    <div>
        <button class="btn btn-primary" name="submit" id="submit">Submit</button>
    </div>
</form>