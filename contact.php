<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['send'])){

   $msg_id = create_unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $message = $_POST['message'];
   $message = filter_var($message, FILTER_SANITIZE_STRING);

   $verify_contact = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $verify_contact->execute([$name, $email, $number, $message]);

   if($verify_contact->rowCount() > 0){
      $warning_msg[] = 'message sent already!';
   }else{
      $send_message = $conn->prepare("INSERT INTO `messages`(id, name, email, number, message) VALUES(?,?,?,?,?)");
      $send_message->execute([$msg_id, $name, $email, $number, $message]);
      $success_msg[] = 'message send successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">
      <div class="image">
         <img src="https://media.istockphoto.com/id/1176438482/photo/digital-lifestyle-blog-writer-or-business-person-using-smart-device-working-on-internet.jpg?s=612x612&w=0&k=20&c=Vm22H_raAHUYqrF7kUe6-f8bNf6GcqhNlHisyLEPXE0=" alt="">
      
      </div>
      <form action="" method="post">
         <h3>get in touch</h3>
         <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
         <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box">
         <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

      <div class="box active">
         <h3><span>when will I get the possession?</span><i class="fas fa-angle-down"></i></h3>
         <p>Follow these steps to cancel your property booking:

Log in to your account on the website.
Navigate to the My Bookings or My Transactions section.
Locate the property booking you want to cancel.
Check the cancellation policy associated with your booking.
If eligible, click on the Cancel Booking or Request Cancellation option and follow the instructions.</p>
</div>

<div class="box active">
<h3><span>when will I get the possession?</span><i class="fas fa-angle-down"></i></h3>
<p>The possession date is usually mentioned in the property agreement, booking documents, or on the websites listing.</p>
</div>

<div class="box">
<h3><span>where can I pay the rent?</span><i class="fas fa-angle-down"></i></h3>
<p>No, shifters is primarily a property listing platform. It does not facilitate direct rent payments. Rent payments need to be made directly to the property owner, landlord, or as per the payment terms agreed upon in the rental agreement.</p>
</div>

<div class="box">
<h3><span>how to contact with the buyers?</span><i class="fas fa-angle-down"></i></h3>
<p>

1. Log in to Your Account: Sign in to your account using your credentials.<br>
2.Access Your Listings: Go to the My Listings section on your dashboard.<br>
Check Buyer Inquiries:</p>
</div>

<div class="box">
<h3><span>why my listing not showing up?</span><i class="fas fa-angle-down"></i></h3>
<p> Possible reasons include:<br>Pending Approval,Incomplete Details,Expired/Inactive Listing,Guideline Violations,Technical Issues</p>
</div>

<div class="box">
<h3><span>how to promote my listing?</span><i class="fas fa-angle-down"></i></h3>
<p>Upgrade to Paid Services,Optimize Your Listing,Use Relevant Keywords,Promote Externally</p>
</div>

</div>

</section>

<!-- faq section ends -->










<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>