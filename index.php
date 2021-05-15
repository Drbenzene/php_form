<?php 
$title = 'Home';
require_once 'include/header.php'; ?>

<h1 class="text-center"> Registration For Conference </h1>

<!-- Registration Form -->

<form>
    <div class="form-group">
        <label for="exampleInputEmail1">First Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Surname">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Last Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Other Names">

    </div>

    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>

    <div class="form-group">
        <label for="dob">Date Of Birth</label>
        <input type="" class="form-control" id="dob" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="speciality">Speciality</label>
        <select id="speciality" class="form-control">
            <option selected>Database Admin</option>
            <option>Web Administrator</option>
            <option>Frontend Engineer</option>
            <option>Backend Engineer</option>
            <option>Others</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Contact Number</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Phone Number">

    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>


    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">I confirm that all information provided are accurate</label>
    </div>

    <button type="submit" class="btn btn-primary .col-auto " id="button">Submit</button>


</form>

<?php require_once 'include/footer.php'; ?>