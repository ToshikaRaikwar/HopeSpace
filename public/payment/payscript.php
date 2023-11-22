<?php

 $apiKey = "";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" 
    data-amount="50000"
    data-currency="INR" 
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext="Pay with Razorpay"
    data-name="HopeSpace"
    data-description="Mental Health and Wellness"
    data-image="https://cdn3.vectorstock.com/i/1000x1000/15/77/smiley-gray-icon-happy-success-satisfaction-vector-33361577.jpg"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#012652"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
