<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">    
    <!-- font-awsome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>PHP Code Test</title>
  </head>
  <body>
      <section class="choosePeople">
       <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <h5><i class="fa fa-users"></i> Choose number of <strong>people</strong></h5>
        <ul class="people">
          <li>
            <div class="row">
              <div class="col-lg-6">
                <p><i class="fa fa-bed"></i> Rooms</p>  
              </div>
              <div class="col-lg-6">
              <div class="count">
                  <span class="minus bg-dark" onclick="qty_operation('room',0)">-</span>
                  <input type="text" class="qty room_qty" name="qty" value="1">
                  <span class="plus bg-dark" onclick="qty_operation('room',1)">+</span>
              </div> 
            </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-lg-6">
                <p><i class="fa fa-user"></i> adults</p>  
              </div>
              <div class="col-lg-6">
              <div class="count">
                  <span class="minus bg-dark adult_minus" onclick="qty_operation('adult',0)">-</span>
                  <input type="text" class="qty adult_qty" name="qty" value="1">
                  <span class="plus bg-dark adult_plus" onclick="qty_operation('adult',1)">+</span>
              </div> 
            </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-lg-6">
                <p><i class="fa fa-child"></i> Children</p>  
              </div>
              <div class="col-lg-6">
              <div class="count">
                  <span class="minus bg-dark children_minus" onclick="qty_operation('children',0)">-</span>
                  <input type="text" class="qty children_qty" name="qty" value="0">
                  <span class="plus bg-dark children_plus" onclick="qty_operation('children',1)">+</span>
              </div> 
            </div>
            </div>
          </li>
        </ul>
       </div>
      </section>  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
