var base_url = $("#base_url").val();
var file_url = $("#file_url").val();
var GlobId="";


        
function get_order_details(order_id,student_id)
        {
            
               $.ajax({
            type: "POST",
            url: base_url+"SchoolOrders/get_single_order",
            data: {
            order_id:order_id,
            student_id:student_id
            },
            success: function(response) {
              //  console.log(response); 
                var res = JSON.parse(response);
//                console.log("dddd");
//                console.log(res.all_list[0].all_sub_order[0].length);
                if(res.stat  == 200){  
                    var j = 0;
                 
                    var content = "";
                    var totals  = 0;
                    var calories = 0;
                    
                        content+='<tr>';
                        content+='<th>Time Slot</th>';
                        content+='<th>Product</th>';
                        content+='<th>Pick up time</th>';
                        content+='<th>Quantity</th>';
                        content+='<th>Price</th>';
                        content+='<th>Calories</th>';
                        content+='<th>Order Status</th>';
                        content+='<th>Action</th>';
                        content+='</tr>';
                    var j = 1;
                      for(var i=0;i<res.all_list.length;i++)
                          {
                          console.log("vfdsv");
                          console.log(res.all_list[i].all_sub_order[0].food_image);
                              
                              
                            content+='<tr>'; 
                            content+='<th>'+res.all_list[i].date_of_food+'</th>';
                            content+='</tr>';
                              
                              
                            for(var m=0;res.all_list[i].all_sub_order.length;m++)
                                {
                              
                              var values = res.all_list[i].all_sub_order[m];
                                     //console.log("vfdsv");
                                 // console.log(res.all_list[i].all_sub_order[m].food_image);
                             content+='<tr>';
                             content+='<td>'+values.timeslot_name+'</td>';
                             content+='<td>';
                             content+='<div class="meal_content">';
                             content+='<div class="meal_img">';
                           content+='<img src="'+base_url+'master_images/FoodImage/'+values.food_image+'" width="50" height="50" alt="">';

                             content+='</div>';
                             content+='<div class="meal_info">';
                             content+='<p>'+values.food_name+'</p>';
                             content+='<span>Quantity '+values.quantity+'</span>';
                             content+='</div>';

                             content+='</div>';
                             content+='</td>';
                             content+='<td>'+values.timeslot_interval+'</td>';
                             content+='<td>'+values.quantity+'</td>';
                             content+='<td>€ '+values.food_price+'</td>';
                             content+='<td>'+values.food_calorie+'</td>';
                             content+='<td>';
                             content+='<h4 id=status_'+values.orderdetails_id+'>';
                            if(values.details_order_status == 1)
                                {
                                       content+='Placed';
                                }
                            else if(values.details_order_status == 2)
                                {
                                     content+='Delivered';
                                }
                                  
                             content+='</h4>';
                             content+='</td>';
                             content+='<td><select id="update_orderstat_'+values.orderdetails_id+'" onchange="update_order_status('+values.orderdetails_id+',\''+values.orderdetails_id+'\')">';
                             content+='<option value="">Select</option>';
                             content+='<option value="2">Delivered</option>';
                             content+='</select></td>';
                             content+='</tr>';
                                    
                                    
                              
                             totals = parseInt(totals)+parseInt(values.food_price*values.quantity);
                              
                             calories = parseInt(calories)+parseInt(values.food_calorie);
                                    
                                    if(res.all_list[i].all_sub_order.length == parseInt(m+j))
                                        {
                                            break;
                                        }
                                    
                                }
                              
                          }
                           
                        
                        content+='<tr>';
                        content+='<th></th>';
                        content+='<th></th>';
                        content+='<th></th>';
                        content+='<th>Totals : -</th>';
                        content+='<th>€ '+totals+'</th>';
                        content+='<th>'+calories+'</th>';
                        content+='</tr>';
                    
       
                    
                    console.log(totals);
                  
                    $("#modal_table").html(content);
                    
                   $("#exampleModalLong").modal('show');
                }
                else if(res.stat == 400){
             
         
                }
            },
            error: function(response) {
                console.log(response);
            }
    }); 
           
            
        }

function update_order_status(order_id,counter)
{
    
    var status = $("#update_orderstat_"+counter).val();
    if(status == "")
        {
            alert("Please Provide A status");
        }
    
        $.ajax({
            type: "POST",
            url: base_url+"SchoolOrders/update_order_details",
            data: {
            order_details_id:order_id,        
            status:status    
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.stat  == 200){  
                  
                   ///alert("Order Status Updated");
                    
                    if(status == 2)
                        {
                            $("#status_"+counter).html("Delivered");
                        }
                    
                }
                else if(res.stat == 400){
             
         
                }
            },
            error: function(response) {
                console.log(response);
            }
    }); 
}


