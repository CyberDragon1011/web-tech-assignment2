<!DOCTYPE html>
<html lang = "en">
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Webber</title>
        <meta charset = "UTF-8">
        <meta name="description" content="Webber Job Application Page">
        <meta name="keywords" content="Webber, job application, form">
        <meta name="author" content="Webber">
    </head>
    <body>
        <section id="header">
            <header>
                <h1>Job Application Form</h1>
                <p>We would love to see you on our team!</p>
                <p>Please submit the form below and we will get back to you as soon as possible!</p>
                <h3>For more information and webpages, click on one of the links below:</h3>
                <nav>
                    <a href= "index.php">Home Page</a>
                    <a href= "jobs.php">Job Descriptions</a>
                    <a href= "apply.php">Job Applications</a>
                    <a href= "about.php">About us</a>
                </nav>
            </header>
        </section>
        <section id="main">
           <form action="process_eoi.php" method="post" id="form">
                <legend>Job Application Form</legend>
                <fieldset>
                    <label for="Job_Ref_Number">Job Reference Number:</label>
                    <select id="Job_Ref_Number" name="Job_Ref_Number" title="Please select one of the following Job Roles" required>
                        <option value="" disabled selected>Select a Job Role</option> <!-- Disabling this value means it cannot be selected. Selected means that it is initally selected however cannot be selected again. -->
                        <option value="Support_Technician">Front-End Developer</option>
                        <option value="Web_Designer">Web Designer</option>
                    </select>
                    <br>
                    <label for="First_Name">First Name</label> 
                    <input type="text" id="First_Name" name="First_Name" pattern="[A-Za-z]{1,20}"  title="Please Enter your First Name" required> <!-- Add 20 alpha character limit -->
                    <br>
                    <label for="Last_Name">Last Name</label> 
                    <input type="text" id="Last_Name" name="Last_Name" pattern="[A-Za-z]{1,20}" title="Please Enter your Last Name" required> <!-- Add 20 alpha character limit -->
                    <br>
                    <label for="DOB">Date of Birth</label>
                    <input type="date" id="DOB" name="DOB" required>
                    <br>
                    <fieldset id="Gender" >
                        <legend>Gender</legend>
                        <label for="Male">
                            <input type="radio" id="Male" name="gender" value="Male" required>
                            Male
                        </label>

                        <label for="Female">
                            <input type="radio" id="Female" name="gender" value="Female">
                            Female
                        </label>

                        <label for="PNS">
                            <input type="radio" id="PNS" name="gender" value="Prefer Not To Say">
                            Prefer not to say
                        </label>
                    </fieldset>
                    <br>
                    <label for="Street_Address">Street Address</label>
                    <input type="text" id="Street_Address" name="Street_Address" pattern="[A-Za-z0-9 ]{1,40}" title="Max 40 Characters allowed" required> <!-- Add 40 Character Limit -->
                    <br>
                    <label for="Suburb_Town">Suburb/Town</label>
                    <input type="text" id="Suburb_Town" name="Suburb_Town" pattern="[A-Za-z0-9 ]{1,40}" title="Max 40 Characters allowed" required> <!-- Add 40 Character Limit -->
                    <br>
                    <label for="State">State</label>
                    <select id="State" name="State" required>
                        <option value=" " disabled selected> </option> <!-- Disabling this value means it cannot be selected. Selected means that it is initally selected however cannot be selected again. -->
                        <option value="VIC">VIC</option>
                        <option value="NSW">NSW</option>
                        <option value="QLD">QLD</option>
                        <option value="NT">NT</option>
                        <option value="WA">WA</option>
                        <option value="SA">SA</option>
                        <option value="TAS">TAS</option>
                        <option value="ACT">ACT</option>
                    </select>
                    <br>
                    <label for="Postcode">Postcode</label>
                    <input type="text" id="Postcode" name="Postcode" pattern="[0-9]{4}" title="Max 4 Digits allowed" required>
                    <br>
                    <label for="Email">Email</label>
                    <input type="email" id="Email" name="Email" title="Ensure that your email address is written correctly" required> <!-- type="email" ensures that a valid email address is inputted from user -->
                    <br>
                    <label for="Phone_Number">Phone Number</label>
                    <input type="text" id="Phone_Number" name="Phone_Number"  pattern="[\d\s]{8,12}" title="Phone number must be 8 to 12 characters with at least one digit" required> <!-- Title display comment for any invalid answer. -->
                    <br>
                    <br>
                    <fieldset>
                        <legend>Required Technical List</legend>
                        <label for="Programming_Experience">
                            <input type="checkbox" id="Programming_Experience" name="Programming_Experience" value="Yes">
                            Experience in HTML and CSS</label>
                        
                        <label for="Customer_Service">
                            <input type="checkbox" id="Customer_Service" name="Customer_Service" value="Yes">
                            Customer Service Skills</label>
                        
                        <label for="Team_Projects">
                            <input type="checkbox" id="Team_Projects" name="Team_Projects" value="Yes">
                            Experience in Team-Based Work
                        </label>
                    </fieldset>
                    <br>
                    <label for="Other_Skills">Other Skills:</label>
                    <textarea id="Other_Skills" name="Other_Skills" rows="4" cols="30"></textarea>
                    <br>
                    <input type="submit" value="Apply">
                </fieldset>
            </form>
        </section>
        <footer>
            <p>Webber Developers: Jake Robertson, Heng Tech, Thourn</p>
            <p>Job Application Page Author: Mustapha Zeitoune</p>
            <p>Here's our email: <a href="mailto:info@webber.com">info@webber.com</a></p>
            <p><a target="_blank" href="">How we did we do it? Ask Jira!</a></p>
        </footer>
    </body>
</html>
