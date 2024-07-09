<?php

// echo "Is it running";
include './database.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $age = $_POST['age'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact_info`(`name`, `age`, `contact_number`, `email`, `message`) VALUES('$name', '$age', '$contact_number', '$email', '$message')";

    echo mysqli_query($conn, $sql);
}


?>


<form action="form.php" method="post" class="appointment">
    					<div class="row">
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="name" class="form-control" placeholder="Your Name">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="age" class="form-control" placeholder="Age">
			            </div>
								</div>
<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="contact_number" class="form-control" placeholder="Contact Number">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="email" class="form-control" placeholder="Email">
			            </div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group">
			              <textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="Message"></textarea>
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
			            </div>
								</div>
    					</div>
	          </form>