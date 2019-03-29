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
    <title>PHP Code Test</title>
    <style type="text/css">
      .choosePeople h5
      {
        color: #29338e;
        font-weight: 400;
        margin-bottom: 10px;
      }
      .choosePeople h5 strong
      {
        font-weight: 600;
      }
      .choosePeople h5 i
      {
        margin-right: 10px;
      } 
      .choosePeople ul li
      {
        list-style: none;
        text-transform: uppercase;
        color: #29338e;
        line-height: 30px;
        border-bottom: 1px solid #adabab;
        padding: 15px 0;
      }
      .choosePeople ul li:last-child
      {
        border-bottom: 0;
      }
      .choosePeople ul li p
      {
        margin-bottom: 0;
      }
      .choosePeople .content i
      {
        margin-right: 10px; 
      }   
      .count 
      {
        display: inline-flex;
        font-size: 25px;
        line-height: 30px;
        padding: 0 2px;
        min-width: 45px;
        text-align: right;
        float: right;
      }
      .count .plus 
      {
        cursor: pointer; 
        vertical-align: top;
        color: white;
        width: 30px;
        height: 30px; 
        text-align: center;
        border-radius: 50%;
        background-color: #eb375d !important;
        line-height: 23px;
      }
      .count .minus 
      {
        cursor: pointer; 
        vertical-align: top;
        color: white;
        width: 30px;
        height: 30px; 
        text-align: center;
        border-radius: 50%;
        background-clip: padding-box;
        background-color: #29338e !important;
        line-height: 23px;
      } 
      .count .minus:hover,
      .count .plus:hover
      {
        opacity: 0.8 !important;
      } 
      /*Prevent text selection*/
      .count span
      {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
      }
      .count input
      {  
          border: 0; 
          text-align: center;
          font-size: 20px;
          width: 50px;
      }
      .count input::-webkit-outer-spin-button,
      .count input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
      }
      .count input:disabled{
          background-color:white;
      }
      .people
      {
          border: 1px solid #adabab;
          padding: 0 10px;
          width: 100%;
      }
    </style>
  </head>
  <body style="padding: 100px;">

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

    <script type="text/javascript">
	
        var lookup_arr = { "room": { "min": 1, "max": 5} ,
                            "adult": { "min": 1, "max": 4},
                            "children": { "min": 0, "max": 3} };
							
        function qty_operation(field,op){
            var current_val = parseInt($('.'+field+'_qty').val());
            //console.log(lookup_arr);
            if(op == 1){
                var max_val = lookup_arr[field]['max'];
                if(current_val < max_val){
                    $('.'+field+'_qty').val(current_val + 1 );
					var estimated_adult = parseInt($('.room_qty').val()) * 4;
					if(field == 'room'){
						lookup_arr.adult.max = estimated_adult;
						lookup_arr.adult.min = $('.room_qty').val();
						lookup_arr.children.max = estimated_adult - parseInt($('.room_qty').val());
						if(parseInt($('.room_qty').val()) > parseInt($('.adult_qty').val())){
							$('.adult_qty').val(current_val + 1 );
						}
					}else if(field == 'adult'){
						var total = parseInt($('.adult_qty').val()) + parseInt($('.children_qty').val());
						//alert($('.adult_qty').val()+'----'+lookup_arr.adult.min);
						if(total > estimated_adult){
							$('.children_qty').val( parseInt($('.children_qty').val()) - 1 );
						}
					}else if(field == 'children'){
						var total = parseInt($('.adult_qty').val()) + parseInt($('.children_qty').val());
						if(total > lookup_arr.adult.max){
							$('.adult_qty').val( parseInt($('.adult_qty').val()) - 1 );
						}
					}
				}			
            }else{
                var min_val = lookup_arr[field]['min']; 
                if(current_val > min_val){
                    $('.'+field+'_qty').val(current_val - 1 );
					var estimated_adult = parseInt($('.room_qty').val()) * 4;
					if(field == 'room'){
						if(parseInt($('.room_qty').val()) < parseInt($('.adult_qty').val())){
							lookup_arr.adult.max = estimated_adult;
							lookup_arr.adult.min = $('.room_qty').val();
							lookup_arr.children.max = estimated_adult - parseInt($('.room_qty').val());
							if(parseInt($('.adult_qty').val()) > estimated_adult){
								$('.adult_qty').val(estimated_adult);
							}
							var total = parseInt($('.adult_qty').val()) + parseInt($('.children_qty').val());
							if(total > estimated_adult){
								$('.children_qty').val( estimated_adult - parseInt($('.adult_qty').val()) );
							}
						}
					}
				}
            }
        }
    </script>
  </body>
</html>
