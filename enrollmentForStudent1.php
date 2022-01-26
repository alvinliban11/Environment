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
                    Email:<input class="form-control"  id="email" type="text"  placeholder="Email"> 
                </div>
                <div class="form-group">
                    Full Name:<input class="form-control" id="fullname" type="text" placeholder="Last Name"> 
                </div>
                <div class="form-group">
                    Birthdate:<input class="form-control" type="date" placeholder="Birthdate"> 
                </div>
                <div class="form-group">
                    Age:<input class="form-control col-5" type="text" placeholder="Select Birthdate First" disabled> 
                </div>
                <div class="form-group">
                    Gender:
                   <select name="" id="" class="form-control col-4">
                       <option value="" disabled>Gender</option>
                       <option value="">Male</option>
                       <option value="">Female</option>
                       <option value="">Others</option>
                   </select>
                </div>
                <div class="form-group">
                    Address:<input class="form-control" type="text" placeholder="Address"> 
                </div>
                <div class="form-group">
                    Contact #:<input class="form-control" type="text" placeholder="Contact"> 
                </div>
       <div class="form-group">
                    School:<input class="form-control" type="text" placeholder="Work"> 
                </div>
                    <div class="form-group">
                    Student ID:<input class="form-control" type="text" placeholder="Student ID"> 
                </div>
            <div class="form-group">
                    School Address:<input class="form-control" type="text" placeholder="Work Adress"> 
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

<script>
       $(document).ready(function(){
           $("#btns").click(function(){
                var email = $("#email").val();

                $.ajax({
                    type: "POST",
                    url: "include/add.php",
                    data: {
                        email
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