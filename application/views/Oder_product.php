<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> Add product</title>

    <script href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>

</head>
<body >

<style type="text/css">
   body { background: DarkCyan   !important; }
</style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">FoodShala</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">

      <div class="container mx-5">
      <li class="nav-item active">

        <b><?= anchor('Admin_home/Display_product','Home'); ?></b>

      </li>
        </div>

    </ul>
  </div>
</nav>

<div class="container" align="center">
    
    <div class="container mx-5 my-5 " style="width: 400px">
<br><br><br>
      
    <?= form_open('User_home/insert_order');?>

    <div class="form-group" align="left">
      <label ><b>Product Name</b></label>

      <?= form_input(['name'=>'name','placeholder'=>'Enter Name' , 'class'=>'form-control']); ?>
      <b><?=form_error('name');?></b>

    </div>
    <br>


     <div class="form-group" align="left">
      <label ><b>Quantity</b></label>

      <?= form_input(['name'=>'quantity','placeholder'=>'Enter quantity', 'class'=>'form-control']); ?>
      <b><?=form_error('quantity');?></b>


    </div>
    <br>

    <div class="form-group" align="left">
      <label ><b>Phone Number</b></label>

      <?= form_input(['name'=>'pno','placeholder'=>'Phone Number', 'class'=>'form-control']); ?>
      <b><?=form_error('pno');?></b>
      

    </div>
    <br>

    <div class="form-group" align="left">
      <label ><b>Address</b></label>

      <?= form_input(['name'=>'address','placeholder'=>'Address', 'class'=>'form-control']); ?>
      <b><?=form_error('address');?></b>

    </div>

        <?= form_submit(['name'=>'submit','value'=>'Save','class'=>'btn btn-primary']); ?>
        <br>
        <br>
    <?php
        if(isset($flag)){
          ?>

               <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p class="mb-0">Booking successful</p>
                  </div>

          <?php
           // echo "Product successfully added";
        }else{
          ?>
          <?php
           // echo "Insert The Details";
        }
    ?>

</div>

</div>



    
<script>

</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>