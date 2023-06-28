<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="student form.css">
</head>

<body>

    <div class="container">
        <h1>Student Form</h1>
        <p>Fill all the details for new students:</p>

        <form class="form" action="studentphp.php" method="post" enctype="multipart/form-data">
            <div class="divform">
                <fieldset>
                    <legend>Personal Information</legend>
                    <div class="field">
                        <div class="inputfield">
                            <label for="firstname">Name:</label>
                            <input name="firstname" class="firstname" id="firstname" placeholder="First Name" required>
                        </div>
                        <div class="inputfield">
                            <label for="middlename"><br></label>
                            <input name="middlename" id="middlename" placeholder="Middle Name">
                        </div>
                        <div class="inputfield">
                            <label for="lastname"><br></label>
                            <input name="lastname" id="lastname" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="genderbox">
                        <label for="gender" >Gender:</label>
                        <div class="gender-option" required>
                            <div class="gender">
                                <input type="radio" id="check-male" name="gender" value="Male">
                                <label for="check-male">Male</label>
                            </div>
                            <div class="gender">
                                <input type="radio" id="check-female" name="gender" value="Female">
                                <label for="check-female">Female</label>
                            </div>
                            <div class="gender">
                                <input type="radio" id="check-others" name="gender" value="Others">
                                <label for="check-others">Others</label>
                            </div>
                        </div>
                    </div>
                    <div class="date">
                        <label for="date">Date of Birth:</label>
                        <input class="dates" name="date" type="date" placeholder="dd-mm-yyyy" required>
                    </div>
                    <div class="others">
                        <label for="email">E-mail:</label>
                        <input class="email" name="email" type="email" placeholder="Enter your email id" required>
                    </div>
                    <div class="others">
                        <label for="phone">Phone No.:</label>
                        <input class="phone" name="phone" type="tel" placeholder="Enter your Mobile Number" required>
                    </div>
                    <div class="others">
                        <label for="parentname">Parents Name:</label>
                        <input class="parentname" type="text" name="parentname" placeholder="Enter your parents name"
                            required>
                    </div>
                    <div class="others">
                        <label for="address">Address:</label>
                        <input class="address" type="text" name="address" placeholder="Enter your address" required>

                    </div>
                    <div class="others">
                        <label for="department">Department:</label>
                        <input class="department" type="text" name="department" placeholder="Enter your Department"
                            required>

                    </div>
                </fieldset>
                <fieldset>
                    <legend>Qualification</legend>
                    <div class="qualifi">
                        <div class="see">
                            <p>Your SEE details:</p>
                            <div class="seedetails">
                                <div class="seedetail">
                                    <div class="gpa">
                                        <label for="gpa">GPA:</label>
                                        <input type="number" step="any" name="seegpa" placeholder="GPA(out of 4)">
                                    </div>
                                    <div class="gpa">
                                        <label for="seegrade">Grade:</label>
                                        <select name="seegrade" id="grade">
                                            <option value="A+">A+</option>
                                            <option value="A">A</option>
                                            <option value="B+">B+</option>
                                            <option value="B">B</option>
                                            <option value="C+">C+</option>
                                            <option value="C">C</option>
                                            <option value="F">F</option>
                                        </select>
                                    </div>
                                    <div class="gpa">
                                        <label for="year">Year:</label>
                                        <input type="number" id="year" name="seeyear" placeholder="Passed out year">
                                    </div>
                                </div>
                                <div class="school">
                                    <label for="school">School:</label>
                                    <input type="text" id="school" name="seeschool" placeholder="Passed out school">
                                </div>
                                <div class="certificate">
                                    <label for="certificate">Certificate:</label>
                                    <input type="file" id="certificate" name="seecertificate">
                                </div>
                            </div>
                        </div>

                        <div class="qualifi">
                            <div class="see">
                                <p>Your +2 details:</p>
                                <div class="seedetails">
                                    <div class="seedetail">
                                        <div class="gpa">
                                            <label for="gpa">GPA:</label>
                                        <input type="number" step="any" name="xiigpa" placeholder="GPA(out of 4)" for="gpa">
                                        </div>
                                        <div class="gpa">
                                            <label for="grade">Grade:</label>
                                            <select name="xiigrade" id="grade">
                                                <option value="A+">A+</option>
                                                <option value="A">A</option>
                                                <option value="B+">B+</option>
                                                <option value="B">B</option>
                                                <option value="C+">C+</option>
                                                <option value="C">C</option>
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                        <div class="gpa">
                                            <label for="year">Year:</label>
                                            <input type="number" id="year" name="xiiyear" placeholder="Passed out Year">
                                        </div>
                                    </div>
                                    <div class="school">
                                        <label for="college">College :</label>
                                        <input type="text" name="xiicollege" id="college" placeholder="Passed out College">
                                    </div>
                                    <div class="certificate">
                                        <label for="certificate">Certificate:</label>
                                        <input type="file" id="certificate" name="xiicertificate">
                                    </div>
                                </div>
                            </div>

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