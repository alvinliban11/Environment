<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Course Manage</title>
  <?php include 'include/header.php'; ?>
  <link rel="stylesheet" href="style/home.css">
</head>

<body>

    <?php include 'include/nav.php'; ?>

<div class="container">
<br>
    
    <div class="jumbotron p-4" style="border-top:4px solid green;">
    <h3>Course Manage</h3>
        <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#addBook"><i class="fas fa-plus"></i> Add Course</button><br><br>

    <div class="table-responsive">
    <table class="table table-hover bg-light" id="book_table">
    <thead>
      <tr>
        <th>Book ID</th>
        <th>Book Name</th>
        <th>Author/s</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>0001</td>
        <td>Environmental Book</td>
        <td>John Doe</td>
        <td>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Doloremque ipsa dolore perspiciatis esse voluptatibus.</td>
        <td>
            <div class="btn-group">
              <button type="button" class="btn btn-warning btn-sm" id="showBook"><i class="fas fa-eye"></i></button>
              <button type="button" class="btn btn-danger btn-sm " id="removeBook"><i class="fas fa-trash"></i></button>
            </div>
        </td>
      </tr>
    </tbody>
  </table>
  </div>
    </div>

  
<!-- ADD BOOK Modal -->
<div class="modal" id="addBook">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Course</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form action="include/book_manage.inc.php" method="POST">
      <!-- Modal body -->
      <div class="modal-body">
            
            <div class="form-group">
              <label for="book_name">Book Name</label>
              <input type="text" class="form-control" placeholder="Enter Book Name" id="book_name" name="book_name">
            </div>
            <div class="form-group">
              <label for="book_author">Author/s</label>
              <input type="text" class="form-control" placeholder="Enter Author/s" id="book_author" name="book_author">
            </div>
            <div class="form-group">
              <label for="book_desc">Book Desctription</label>
              <textarea class="form-control" rows="5" id="book_desc" name="book_desc"></textarea>
            </div>
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="addBookBtn">Save</button>
      </div>
  </form>

    </div>
  </div>
</div>


<!-- SHOW BOOK Modal -->
<div class="modal" id="showBookModal">
  <div class="modal-dialog" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Course Information</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

  <form id="updateForm">
      <!-- Modal body -->
      <div class="modal-body">
            <div id="showResult">
            </div>
            <div class="form-group">
              <label for="ubook_id">Book ID</label>
              <input type="text" class="form-control" placeholder="Enter email" id="ubook_id" name="ubook_id" readonly>
            </div>
            <div class="form-group">
              <label for="ubook_name">Book Name</label>
              <input type="text" class="form-control" placeholder="Enter Book Name" id="ubook_name" name="ubook_name">
            </div>
            <div class="form-group">
              <label for="ubook_author">Author/s</label>
              <input type="text" class="form-control" placeholder="Enter Author/s" id="ubook_author" name="ubook_author">
            </div>
            <div class="form-group">
              <label for="ubook_desc">Book Desctription</label>
              <textarea class="form-control" rows="5" id="ubook_desc" name="ubook_desc"></textarea>
            </div>
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="updateFormBtn">Update</button>
      </div>
  </form>



    </div>
  </div>
</div>


<!-- DELETE BOOK Modal -->
<div class="modal" id="removeBookModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Remove Course</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form  id="deleteForm">
      <!-- Modal body -->
      <div class="modal-body">
            <div class="form-group">
              <label for="dbook_id">Course Code</label>
              <input type="text" class="form-control" placeholder="Enter email" id="dbook_id" name="dbook_id" readonly>
            </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Remove</button>
      </div>
  </form>

    </div>
  </div>
</div>




</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#book_table').DataTable();
//SHOW MODAL 
$('#showBook').on('click',function(){
    $('#showBookModal').modal('show');

    $tr =$(this).closest('tr');
    var data = $tr.children("td").map(function(){
    return $(this).text();
    }).get();

    console.log(data);

     $.ajax({
    type: 'POST',
    url: 'include/book_manage.inc.php',
    data: { 'sbook_id'  : data[0] },
    dataType: "json",
    success: function(response) {
      console.log(response);
       $('#ubook_id').val(response[0]);
      // $('#ubook_name').val(response[1]);
      // $('#ubook_author').val(response[2]);
      // $('#ubook_desc').val(response[3]);

    }
    });

});
// REMOVE MODAL
$('#removeBook').on('click',function(){
    $('#removeBookModal').modal('show');

    $tr =$(this).closest('tr');
    var data = $tr.children("td").map(function(){
    return $(this).text();
    }).get();

    console.log(data);

     $.ajax({
    type: 'POST',
    url: 'include/book_manage.inc.php',
    data: { 'sdbook_id'  : data[0] },
    dataType: "json",
    success: function(response) {
      console.log(response);
       $('#dbook_id').val(response[0]);
    }
    });

});

//UPDATE BUTTON SUBMIT
$("#updateForm").submit(function(e) {
  $('#showBookModal').modal({'backdrop': 'static'});

    e.preventDefault(); // avoid to execute the actual submit of the form.
    
    $.ajax({
        type: "POST",
        url: 'include/book_manage.inc.php',
        data: $(this).serialize(), // serializes the form's elements.
        success: function(data)
        {     
           $('#showResult').html(data);
        }
    });
    
});

//DELETE BUTTON SUBMIT
$("#deleteForm").submit(function(e) {
  $('#removeBookModal').modal({'backdrop': 'static'});

    e.preventDefault(); // avoid to execute the actual submit of the form.
    
    $.ajax({
        type: "POST",
        url: 'include/book_manage.inc.php',
        data: $(this).serialize(), // serializes the form's elements.
        success: function(data)
        {     
           //$('#showResultAll').html(data);
           console.log(data);
        }
    });
    
});



});
</script>
</body>
</html>