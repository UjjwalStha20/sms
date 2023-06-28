<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Form</title>
    <link rel="stylesheet" href="teacherform.css">
</head>

<body>
    <div class="container">
        <h1>Teacher Form</h1>
        <p>Fill all the details for new teacher:</p>

        <form class="form" action="teacherphp.php" method="post" >
            <div class="divform">
                <fieldset>
                    <legend>Personal Information</legend>

                    <div class="field">
                        <div class="inputfield">
                            <label for="firstname">Name:</label>
                            <input class="firstname" name="fristname" id="firstname" placeholder="First Name">
                        </div>
                        <div class="inputfield">
                            <label for="middlename"><br></label>
                            <input class="middlename" name="middlename" id="middlename" placeholder="Middle Name">
                        </div>
                        <div class="inputfield">
                            <label for="lastname"><br></label>
                            <input class="lastname" name="lastname" id="lastname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="genderbox">
                        <label for="gender">Gender:</label>
                        <div class="gender-option">
                            <div class="gender">
                                <input type="radio" id="check-male" name="gender" selected>
                                <label for="check-male">Male</label>
                            </div>
                            <div class="gender">
                                <input type="radio" id="check-female" name="gender">
                                <label for="check-female">Female</label>
                            </div>
                            <div class="gender">
                                <input type="radio" id="check-others" name="gender">
                                <label for="check-others">Others</label>
                            </div>
                        </div>
                    </div>
                    <div class="others">
                        <label for="email">E-mail:</label>
                        <input class="email" id="email" name="email" type="email" placeholder="Enter your email id">
                    </div>
                    <div class="others">
                        <label for="phone">Phone No.:</label>
                        <input class="phone" id="phone" type="tel" name="phone" placeholder="Enter your Mobile Number">
                    </div>
                    <div class="others">
                        <label for="address">Address:</label>
                        <input class="address" type="text" name="address" id="address" placeholder="Enter your address">
                    </div>
                    <div class="others">
                        <label for="subject">Teaching Subject:</label>
                        <input class="subject" type="text" name="subject" id="subject" placeholder="Enter your teaching subject">
                    </div>
                </fieldset>
            </div>
            <div class="submit">
              <button type="submit">Submit</button>
            </div>
    </div>
    </form>
    </div>

</body>

</html>