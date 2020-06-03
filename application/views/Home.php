<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>FoodShala</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

     <script>
        $(document).ready( function () {
             $('#example').DataTable({});
              });

    </script>

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

        <div class="container mx-5">
      <li class="nav-item">
        <b><?= anchor('Admin_home/Display_product','Foods'); ?></b>
      </li>
      </div>

      <div class="container mx-5">
      <li class="nav-item">
        <b><?= anchor('admin_login','Restaurant Login'); ?></b>
      </li>
       </div>

       <div class="container mx-5">
      <li class="nav-item">
        <b><?= anchor('user_login','User Login'); ?></b>
      </li>
       </div>

    </ul>
  </div>

</nav>

<div class="alert alert-dismissible alert-info">
   Click on the Foods to see the available Items :)
 </div>
 <div class="container mx-5" align="right">
  <div class="container" >
    <div class="container" >
       
   <b>Search the Items Here!</b>
   
   </div>
 </div>
  </div>


<div class="mx-3 my-3 container">
    <table id="example" class="display" style="width:100%">
     <thead>
        <tr>
          <th>ID</th>
           <th>Name</th>
           <th>Price</th>
           <th>Category</th>
        </tr>
     </thead>
     <tbody>
      <?php
      if(isset($d1)){
        foreach ($d1 as $d2) {
        ?>

        <tr>

           <td><?= $d2->id;?></td>
           <td><?= $d2->name;?></td>
           <td><?= $d2->price;?></td>
           <td><?= $d2->category;?></td>

        </tr>

      <?php
         }
         }
      ?>

     </tbody>
     <tfoot>
       <tr>
          <th>ID</th>
           <th>Name</th>
           <th>Price</th>
           <th>Category</th>
        </tr>
     </tfoot>
  </table>
</div>
<br>
<br>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>