
<div class="collapse" id="drink">
    <h3  style="margin-top:15px;">Drink Items</h3>
    <div class="row">
    <div class="col-md-12">
            <select class="form-control select2all" id="food_id_drink" onchange="priceChange(this.value,2)">
                <option value="">Select Drink</option>
                <?php 
                if($drinkData['stat']==200)
                    {
                        for($i=0;$i<count($drinkData['all_list']);$i++)
                            {
                ?>
                <option  value="<?php echo $drinkData['all_list'][$i]['food_id'].','.$drinkData['all_list'][$i]['size_id'];?>"><?php echo $drinkData['all_list'][$i]['food_name'].' '.$drinkData['all_list'][$i]['size_name'];?> <?php echo "(".$drinkData['all_list'][$i]['food_item_code'].")";?></option>
                <?php } } ?>
            </select>
    </div>
    <!-- <div class="col-md-6">
            <select class="form-control select2all" id="size_id_drink" onchange="priceChange(this.value,2)">
                <option value="">Select Size</option>
                <?php 
                if($sizeData['stat']==200)
                    {
                        for($i=1;$i<count($sizeData['all_list']);$i++)
                            {
                ?>
                <option  value="<?php echo $sizeData['all_list'][$i]['size_id'];?>"><?php echo $sizeData['all_list'][$i]['size_name'];?></option>
                <?php } } ?>
            </select>
    </div> -->
    <div class="col-md-3 d-none">
        <label>Quantity</label>
        <input class="form-control" type="number" id="quantity_drink" placeholder="0" value="1" type="number" min="1" max="100" onchange="priceChange(this.value)"/>
    </div>
    <div class="col-md-3 d-none">
            <label>Price</label>
            <input class="form-control" type="text" id="price_drink" placeholder="0.00" disabled/>
    </div>
    <div class="col-md-3 d-none">
            <label>Sub Total</label>
            <input class="form-control" type="text" id="sub_total_drink" placeholder="0.00" disabled/>
    </div>
    
    <div class="col-md-3 plus-button d-none">
            <button  type="button" class="btn btn-primary" onclick="addItems(2)">+ Add</button>
    </div>
    </div>
    <br>
    <table class="table table-responsive" style="font-weight: bold;">
        <thead>
            <th>No.</th>
            <th>Food Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Subtotal</th>
            <th>Action</th>
        </thead>
        <tbody id="drink_content">
        </tbody>
    </table>
</div>