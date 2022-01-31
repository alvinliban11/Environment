<script type="text/javascript">

function getAge(){
    var dob = document.getElementById('Birthdate').value;
    dob = new Date(dob);
    var today = new Date();
    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
    document.getElementById('Age').value=age;
}

</script>

   <div class="form-group">
Your age: <input type="text" id="Age" name="Age" value="" class="form-control" placeholder="Age">
    </div>
                    <div class="form-group">

                    Birthdate:<input onblur="getAge();" class="form-control" id="Birthdate" name="dob" type="date" placeholder="Birthdate"> 
               
                    </div>