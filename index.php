<?php 
$title = 'Home';
require_once 'include/header.php'; ?>

<h1 class="text-center"> Registration For Conference </h1>

<!-- Registration Form -->

<form method="get" action="success.php">
    <div class="form-group">
        <label for="first">First Name</label>
        <input type="text" class="form-control" id="first" name="first" aria-describedby="emailHelp"
            placeholder="Surname">

    </div>
    <div class="form-group">
        <label for="last">Last Name</label>
        <input type="text" class="form-control" id="last" name="last" aria-describedby="emailHelp"
            placeholder="Other Names">

    </div>

    <div class="form-group">
        <label for="Address">Address</label>
        <input type="text" class="form-control" id="Address" name="Address" placeholder="1234 Main St">
    </div>

    <div class="form-group">
        <label for="dob">Date Of Birth</label>
        <input type="" class="form-control" id="dob" name="dob" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="speciality">Speciality</label>
        <select id="speciality" class="form-control" name="speciality">
            <option selected>Database Admin</option>
            <option>Web Administrator</option>
            <option>Frontend Engineer</option>
            <option>Backend Engineer</option>
            <option>Others</option>
        </select>
    </div>

    <div class="form-group">
        <label for="address">Email address</label>
        <input type="email" class="form-control" id="Email" name="email" aria-describedby="emailHelp"
            placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="contact">Contact Number</label>
        <input type="number" class="form-control" id="contact" name="contact" aria-describedby="emailHelp"
            placeholder="Phone Number">

    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>


    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="check" name="check">
        <label class="form-check-label" for="exampleCheck1">I confirm that all information provided are accurate</label>
    </div>

    <button type="submit" class="btn btn-primary .col-auto " id="button" name="submit">Submit</button>


</form>

<?php require_once 'include/footer.php'; ?>