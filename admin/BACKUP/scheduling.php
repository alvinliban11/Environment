<?php $currentPage = 'scheduling' ?>
<?php include 'include/header.php' ?>
<head>
    <title>Scheduling</title>
    <link rel="stylesheet" href="style/scheduling.css?v=<?php echo time() ?>">
</head>
      
    <main id="main">
     <div class="container">
         <div class="form-inline p-2 col-6">
         <input type="search" class="form-control" placeholder="Search...">
        </div>

         <table class="table table-striped table-bordered">
            <thead> 
            <tr>
                 <th>Last Name</th>
                 <th>First Name</th>
                 <th>Middle Name</th>
                 <th>Schedule</th>
             </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Doe</td>
                    <td>John</td>
                    <td>W</td>
                    <td>Mondays</td>      
                </tr>
            </tbody>
         </table>
         <div class="form-inline buttons">
             <button class="btn btn-success">Add</button>
             <button class="btn btn-success">Edit</button>
             <button class="btn btn-success">Archive</button>
         </div>
     </div>
    </main>

    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <?php include 'include/footer.php' ?>
</body>
</html>