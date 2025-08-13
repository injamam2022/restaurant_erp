<div class="collapse"id="food">
    <h3 style="margin-top:15px;">Food Items</h3>
    <div class="row">
        <div class="col-md-12">
                <select class="form-control select2all" id="food_id_food" onchange="priceChange(this.value,1)">
                    <option value="">Select Food</option>
                    <?php 
                    if($foodData['stat']==200)
                        {
                            for($i=0;$i<count($foodData['all_list']);$i++)
                                {
                                    if($foodData['all_list'][$i]['category_id']==2)
                                        continue
                    ?>
                    <option  value="<?php echo $foodData['all_list'][$i]['food_id'];?>"><?php echo $foodData['all_list'][$i]['food_name'];?> <?php echo "(".$foodData['all_list'][$i]['food_item_code'].")";?></option>
                    <?php } } ?>
                </select>
        </div>
        
        <div class="col-md-3 d-none">
            <label>Quantity</label>
            <input class="form-control" id="quantity_food" type="number" min="1" max="100" value="1" placeholder="0" 
            onchange="priceChange(this.value,1)"/>
        </div>
        <div class="col-md-3 d-none">
                <label>Price</label>
                <input class="form-control" type="text" id="price_food" placeholder="0.00" disabled/>
        </div>
        <div class="col-md-3 d-none">
                <label>Sub Total</label>
                <input class="form-control" type="text" id="sub_total_food" placeholder="0.00" disabled/>
        </div>
        <div class="col-md-6 d-none">
            <label>Food Comments</label>
            <input class="form-control" type="text" id="comments_food" />
        </div>
        <div class="col-md-3 plus-button">
            <button type="button" class="btn btn-primary d-none" onclick="addItems(1)">+ Add</button>
        </div>
    </div>
    <table class="table table-responsive" style="font-weight: bold;">
        <thead>
            <th>No.</th>
            <th>Food Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Subtotal</th>
            <th>Comments</th>
            <th>Action</th>
        </thead>
        <tbody id="food_content">
        </tbody>
    </table>
</div>