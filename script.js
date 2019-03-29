	var lookup_arr = { "room": { "min": 1, "max": 5} ,
                            "adult": { "min": 1, "max": 4},
                            "children": { "min": 0, "max": 3} };
							
        function qty_operation(field,op){
            var current_val = parseInt($('.'+field+'_qty').val());
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
