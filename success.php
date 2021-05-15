<?php 

$title = 'Success';

require_once 'include/header.php'; ?>

<h1 id="success"> Congratulations! <?php echo $_GET['last']; ?> Your form registration was submitted successfully.</h1>

<button type="submit" class="btn btn-primary .col-auto " id="button"><a href="index.php"> Back Home Here!</a></button>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Full Name </h5>
        <h6 class="card-subtitle mb-2 text-muted"> <?php echo $_GET['first']. " ". $_GET['last'] ?> </h6>
        <p class="card-text"> Address: <?php echo $_GET['Address']; ?> </p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
</div>




<?php


?>

<?php require_once 'include/footer.php'; ?>