<?php include 'include/header.php';  ?>


<head>
    <title>Enrollment For Student</title>
    <link rel="stylesheet" href="style/enrollmentForNonStudent.css">
</head>
<main id="main">

       
      
            <div class="col-md-6 col-md-6">
    <form method="POST">

  


        <h3>ENROLLMENT FORM FOR LEARNER</h3>  
                <div class="form-group">
                    Email:<input class="form-control"  id="Email" name="Email" type="text"  placeholder="Email"> 
                </div>
                <div class="form-group">
                    First Name:<input class="form-control" id="FirstName" name="FirstName" type="text" placeholder="First Name"> 
                </div>
                <div class="form-group">
                    Middle Name:<input class="form-control" id="MiddleName" name="MiddleName" type="text" placeholder="Middle Name"> 
                </div>
                <div class="form-group">
                    Last Name:<input class="form-control" id="LastName" name="LastName" type="text" placeholder="Last Name"> 
                </div>
                <div class="form-group">
                    Suffix:<input class="form-control" id="Suffix" name="Suffix" type="text" placeholder="Suffix"> 
                </div>
                <div class="form-group">
                    Birthdate:<input onblur="getAge();" class="form-control" id="Birthdate" name="Birthdate" type="date" placeholder="Birthdate"> 
                </div>
                <div class="form-group">
                    Age:<input class="form-control col-5"  id="Age" name="Age" type="text" value="" placeholder="Select Birthdate First" disabled> 
                </div>
                <div class="form-group">
                    Gender:
                   <select name="Gender" id="Gender" class="form-control col-4">
                       <option value="" disabled>Gender</option>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
                       <option value="Others">Others</option>
                   </select>
                </div>
                <div class="form-group">
                    Address:<input class="form-control" id="Address" name="Address" type="text" placeholder="Address"> 
                </div>
                <div class="form-group">
                    Contact #:<input class="form-control" id="Contact" name="Contact" type="text" placeholder="Contact"> 
                </div>
       <div class="form-group">
                    School:<input class="form-control" id="School" name="School" type="text" placeholder="Work"> 
                </div>
                    <div class="form-group">
                    Student ID:<input class="form-control" id="StudentId" name="StudentId" type="text" placeholder="Student ID"> 
                </div>
            <div class="form-group">
                    School Address:<input class="form-control" id="SchoolAdd" name="SchoolAdd" type="text" placeholder="Work Adress"> 
                </div>


                  <div class="form-group text-center mb-3">
            <a class="btn btn-danger form-inline" type="submit" name="cancel" href="enrollmentForm.php">Cancel</a>
            <button type="button" id="btns" class="btn btn-success form-inline" onclick="msg()" name="update"  >Update</button>
                </div>


    </form>
            </div> 
                 <!--
            <div class="col-md-12 col-sm-12 col-xl-6">
     
           
            <div class="form-group containerFiles">
                    <label><p class="font-weight-bold">Attachment the ff. files below:</p>
                        <li>Birth Certificate</li>
                        <li>Barangay Certificate</li>
                        <li>Formal Picture</li>
                    </label><br>
                   <label class="btn btn-primary">Upload File
                    <input class="form-control files" type="file"> 
                    </label>
                </div>
        
            </div>
                -->

          
     

</main>

<script type="text/javascript">

function getAge(){
    var dob = document.getElementById('Birthdate').value;
    dob = new Date(dob);
    var today = new Date();
    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
    document.getElementById('Age').value=age;
}

</script>



<script>
       $(document).ready(function(){
           $("#btns").click(function(){

                var Email = $("#Email").val();
                var FirstName = $("#FirstName").val();
                var MiddleName = $("#MiddleName").val();
                var LastName = $("#LastName").val();
                var Suffix = $("#Suffix").val();
                var Birthdate = $("#Birthdate").val();
                var Age = $("#Age").val();
                var Gender = $("#Gender").val();
                var Address = $("#Address").val();
                var Contact = $("#Contact").val();
                var School = $("#School").val();
                var StudentId = $("#StudentId").val();
                var SchoolAdd = $("#SchoolAdd").val();

                $.ajax({
                    type: "POST",
                    url: "include/add.php",
                    data: {
                        Email , FirstName , MiddleName , LastName , Suffix , Birthdate , Age , Gender , Address , Contact , School , StudentId , SchoolAdd
                    },
                    success: function(data){
                        console.log(data);
                    }
                });
           });
       });
    </script>

<script type="text/javascript">
        function msg(){
        swal({
    icon: "success",
    title: "Profile Update",
    text: "Profile Updated!",
    type: "success"
    }).then(function() {
        window.location.href = "course_list.php";
    });
    }    




</script>

<?php include 'include/footer.php'?>