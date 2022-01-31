<?php include 'include/header.php'; ?>
<head>
    <title>Enrollment For Student</title>
    <link rel="stylesheet" href="style/enrollmentForStudent.css">
</head>
<main id="main">
<form action="#">
    <div class="container">
        <h3>ENROLLMENT FORM FOR STUDENT</h3>        
        <div class="row">
            <div class="col-md-12 col-md-12 col-xl-6">
                <div class="form-group">
                    Last Name:<input class="form-control" type="text" placeholder="Last Name"> 
                </div>

                <div class="form-group">
                    Last Name:<input class="form-control" type="text" placeholder="First Name"> 
                </div>
                <div class="form-group">
                    Middle Name:<input class="form-control" type="text" placeholder="Middle Name"> 
                </div>
                <div class="form-group">
                    Suffix:<input class="form-control col-3" type="text" placeholder="Suffix"> 
                </div>
                <div class="form-group">
                    Age:<input class="form-control col-3" type="text" placeholder="Age"> 
                </div>
                <div class="form-group">
                    Gender:
                   <select name="" id="" class="form-control col-4">
                       <option value="" disabled>Gender</option>
                       <option value="">Male</option>
                       <option value="">Female</option>
                   </select>
                </div>
                <div class="form-group">
                   <input class="form-control" type="text" placeholder="Religion"> 
                </div>
                <div class="form-group">
                    Birthdate:<input class="form-control" type="date" placeholder="Birthdate"> 
                </div>
                <div class="form-group">
                    Address:<input class="form-control" type="text" placeholder="Address"> 
                </div>
                <div class="form-group">
                    Contact #:<input class="form-control" type="number" placeholder="Contact"> 
                </div>
                <div class="form-group">
                    Email:<input class="form-control" type="email" placeholder="Email"> 
                </div>
            </div> 
            <div class="col-md-12 col-sm-12 col-xl-6">
            <div class="form-group">
                    School:<input class="form-control" type="text" placeholder="School"> 
                </div>
            <div class="form-group">
                    Student Id:<input class="form-control" type="text" placeholder="Student Id"> 
                </div>
            <div class="form-group">
                    Adviser:<input class="form-control" type="text" placeholder="Adviser"> 
                </div>
            <div class="form-group containerFiles">
                    <label><p class="font-weight-bold">Attachment the ff. files below:</p>
                        <li>Birth Certificate</li>
                        <li>Registration Form</li>
                        <li>Formal Picture</li>
                    </label><br>
                   <label class="btn btn-primary">Upload File
                    <input class="form-control files" type="file"> 
                    </label>
                </div>
            </div>
</div>
            <div class="form-group text-center mb-3">
            <input class="btn btn-danger form-inline" type="submit" name="cancel" value="Cancel">
            <input class="btn btn-success form-inline" type="submit" name="submit" value="Submit">
                </div>
            </div>
</form>
</main>
<?php include 'include/footer.php'?>