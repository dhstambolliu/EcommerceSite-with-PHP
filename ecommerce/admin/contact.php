<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contact Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contact form</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php

$connect = mysqli_connect('localhost','root','','ecomm');
if(!$connect){
    echo "Error on Database".mysqli_connect_errno($connect);
}

$query = "SELECT * FROM contact";
$query_result = mysqli_query($connect,$query);
if(!$query_result){
    echo "Error".mysqli_error();
}
$array_user = array();

while($row = mysqli_fetch_array($query_result)){
    $array_user[$row['id']]['id'] = $row['id'];
    $array_user[$row['id']]['name'] = $row['name'];
    $array_user[$row['id']]['email'] = $row['email'];
    $array_user[$row['id']]['telephone'] = $row['telephone'];
    $array_user[$row['id']]['subject'] = $row['subject'];
    $array_user[$row['id']]['message'] = $row['message'];
}

mysqli_close($connect);
?>
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Telephone</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Tools</th>
                </thead>
                  <tbody>
                    <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM contact");
                      $stmt->execute();
                      foreach($stmt as $row){
                        echo "
                          <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['telephone']."</td>
                            <td>".$row['subject']."</td>
                            <td><button class='btn btn-info btn-sm btn-flat edit transact' data-id='".$row['id']."'><i class='fa fa-search'></i> View</button></td>
                              <td><button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button></td>
                            </td>
                          </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>
                    </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include 'includes/contact_modal.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
    
  $(document).on('click', '.desc', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'contact_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.contactid').val(response.id);
      $('#edit_name').val(response.name);
      $('#edit_email').val(response.email);
      $('#edit_subject').val(response.subject);
      $('#edit_message').val(response.message);
      $('.fullname').html(response.firstname+' '+response.lastname);
    }
  });
}
</script>
</body>
</html>
