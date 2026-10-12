<div class="tab-pane fade show active order-section" id="food" role="tabpanel" aria-labelledby="food-tab">
    <div class="section-loader"><div class="table-modal-spinner"></div></div>
    <h3>Food Items</h3>
    <div class="row field-grid">
        <div class="col-12">
                <label for="food_id_food">Add a food item</label>
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
    <div class="order-table-wrap">
    <table class="table order-table">
        <thead>
            <tr>
            <th>No.</th>
            <th>Food Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Subtotal</th>
            <th>Comments</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody id="food_content">
        </tbody>
    </table>
    </div>
</div>