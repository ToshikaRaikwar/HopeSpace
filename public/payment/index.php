<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="formstyle.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    
    
    <title>Therapist's Appointment Request Form</title>
</head>
<body>
    <div class="container">
        <header>Therapist's Appointment Request Form</header>

        <form action="payscript.php" method="post" id="appointmentForm">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="name">First Name</label>
                            <input type="text" name="name" placeholder="Enter your First Name"  >
                        </div>
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter your Last Name"  >
                        </div>
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter your D.O.B"  >
                        </div>
                        <div class="input-field">
                            <label for="">Phone Number</label>
                            <input type="tel" name="mobile" placeholder="Enter your Phone No."  >
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your mailid"  >
                        </div>
                        <div class="input-field">
                            <label>City</label>
                            <input type="text" placeholder="Enter your City"  >
                        </div>
                    </div>
                    
                    
                </div>

                <div class="details ID">
                    <span class="title">Preffered Appointment Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Appointment Date</label>
                            <input type="date" placeholder="Enter Appointment date"  >
                        </div>
                        <div class="input-field">
                            <label>Appointment Time(Start)</label>
                            <input type="time" placeholder="Enter start time"  >
                        </div>
                        <div class="input-field">
                            <label>Appointment Time(End)</label>
                            <input type="time" placeholder="Enter end time"  >
                        </div>
                       
                       
                    </div>

                    
            
                    <input  type="submit"  value="Pay Now" class="btn">

                    
                </div>
            </div>
        </form>
    </div>

    <script>
        const form = document.getElementById("appointmentForm");
        const nextBtn = form.querySelector(".btn");
        const allInput = form.querySelectorAll(".first input");
    
        nextBtn.addEventListener("click", (e) => {
            e.preventDefault();
            let isValid = true;
    
            allInput.forEach((input) => {
                if (input.value.trim() === "") {
                    isValid = false;
                       }
            });
    
            if (isValid) {
            
                const paymentAmount = 50000; 
                document.getElementById("paymentAmount").value = paymentAmount;
    
                form.submit();
            } else {
                alert("Please fill in all required fields.");
            }
        });
    </script>
</body>
</html>
