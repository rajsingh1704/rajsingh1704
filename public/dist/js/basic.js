function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)) {
       return false;
    }else{
       return true;
    }
  }

function onlyNumberKey(evt) { 

// Only ASCII charactar in that range allowed 
var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
  return false; 
return true; 
} 

// ################################################ Product Form Data #################################################################################
    // ***************************************  Cloth Section ************************************************
    function addDynamicClothField() {
        var count_table_tbody_tr = $("#cloth_count_section").val();
        var row_id = ++count_table_tbody_tr;
        $("#cloth_count_section").val(row_id);
        $('#cloth_info_table tbody').append(` <tr id="row_${row_id}">
            <td>
                <input type="text" name="barcode[]" id="barcode_row_${row_id}" class="form-control"  maxlength="20" placeholder="Enter barcode No"autocomplete="off">
            </td> 
            <td>
                <input type="text" name="color[]" id="color_row_${row_id}" class="form-control" placeholder="Enter color name"autocomplete="off" required>
            </td> 
            <td>
                <input type="text" name="measurement[]" id="measurement_row_${row_id}" class="form-control"  placeholder="Enter measurement " autocomplete="off">
            </td>
            <td>
                <select name="size[]" id="size_row_1" class="form-control">
                    <option hidden="true" value="" selected="selected" >Select Size</option>
                    <option value="PC">PC</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XS">XS</option>
                    <option value="XXL">XXL</option>
                    <option value="XXXL">XXXL</option>
                </select>
            </td>
            <td>
                <input type="text" name="qty[]" id="qty_row_${row_id}" onkeyup="subQuantity('cloth_info_table');" class="form-control" autocomplete="off"  placeholder="Enter qty"onkeypress="return isNumber(event)" required value="">
            </td>

            <td>
                <input type="text" name="min_qty[]" id="min_qty_row_${row_id}" class="form-control" autocomplete="off"  placeholder="Enter min qty" onkeypress="return isNumber(event)" value="" required>
            </td>
            
            <td>
                <input type="text" name="price[]" onkeypress=" return isFloatNumberKey(event)" id="price_row_${row_id}" class="form-control" placeholder="Enter price" autocomplete="off" required>
            </td>
            <td>
                <input type="text" name="discount_rate[]" value="0" id="discount_rate_row_${row_id}" onkeypress=" return isFloatNumberKey(event)" class="form-control " placeholder="Enter Discount Rate (ex-10)"  required>
            </td>
            <td>
                <input type="file" name="image1[]" id="image1_row_${row_id}" class="form-control" accept="image/*" autocomplete="off">
                <input type="hidden" name="hImg1[]" id="preImg1_row_${row_id}" value="">
            </td>
            <td>
                <input type="file" name="image2[]" id="image2_row_${row_id}" class="form-control" accept="image/*" autocomplete="off">
                <input type="hidden" name="hImg2[]" id="preImg2_row_${row_id}" value="">

            </td>
            <td>
                <input type="file" name="image3[]" id="image3_row_${row_id}" class="form-control accept="image/*"" autocomplete="off">
                <input type="hidden" name="hImg3[]" id="preImg3_row_${row_id}" value="">

            </td>
            <td>
                <input type="file" name="image4[]" id=image4_row_${row_id}" class="form-control" accept="image/*" autocomplete="off">
                <input type="hidden" name="hImg4[]" id="preImg4_row_${row_id}" value="">

            </td>
            <td><button type="button" class="btn btn-default" onclick="removeClothRow('${row_id}')"><i class="fa fa-close" style="color: red;"></i></button></td>
        </tr>`);
    }
    function removeClothRow(tr_id) {
        $("#cloth_info_table tbody tr#row_" + tr_id).remove();
        subQuantity('cloth_info_table')
    }

  // ***************************************************************** Grocery Section  *************************************************
      function addDynamicGroceryField() {
        var count_table_tbody_tr = $("#glocery_count_section").val();
        var row_id = ++count_table_tbody_tr;
        $("#glocery_count_section").val(row_id);
        $('#grocery_info_table tbody').append(` <tr id="row_${row_id}">
            <td>
                <input type="text" name="barcode[]" id="barcode_row_${row_id}" class="form-control"  maxlength="20" placeholder="Enter barcode No"autocomplete="off">
            </td>
            <td>
            <input type="text" name="volume[]" id="volume_row_${row_id}" class="form-control"  placeholder="Enter volume" autocomplete="off" required>
            </td> 
            <td>
                <select name="valType[]" id="valType_row_${row_id}" class="form-control" required>
                    <option hidden="true" selected="selected" value="" >Selecte Type</option>
                    <option value="Ltr">Ltr</option>
                    <option value="Kg">Kg</option>
                    <option value="Gm">Gm</option>
                    <option value="ml">ml</option>
                    <option value="Set">Set</option>
                </select>
            </td>
            <td>
                               
                <select name="packType[]" id="packType_row_${row_id}" class="form-control" required>
                    <option hidden="true" selected="selected" value="" >Selecte Type</option>
                    <option value="Loose">Loose</option>
                    <option value="Pack">Pack</option>
                    <option value="PC">PC</option>
                    <option value="Bottle">Bottle</option>
                    <option value="Pouch">Pouch</option>
                </select>
            </td>
            <td>
                <input type="text" name="price[]" onkeypress=" return isFloatNumberKey(event)" id="price_row_${row_id}" class="form-control" placeholder="Enter price" autocomplete="off" required>
            </td>
            <td>
                <input type="text" name="discount_rate[]" id="discount_rate_row_${row_id}" value="0" onkeypress=" return isFloatNumberKey(event)" class="form-control " placeholder="Enter Discount Rate (ex-10)"  required>
            </td>
            <td>
                <input type="text" name="qty[]" id="qty_row_${row_id}" onkeyup="subQuantity('grocery_info_table');" class="form-control" autocomplete="off"  placeholder="Enter qty"onkeypress="return isNumber(event)" value="" required>
            </td>

            <td>
                <input type="text" name="min_qty[]" id="min_qty_row_${row_id}" class="form-control" autocomplete="off"  placeholder="Enter qty" onkeypress="return isNumber(event)" value="" required>
            </td>
            
            <td>
                <input type="date" name="mfg_date[]" id="mfg_date_row_${row_id}" class="form-control" autocomplete="off">
            </td>

            <td>
                <input type="date" name="exp_date[]" id="exp_date_row_${row_id}" class="form-control" autocomplete="off">
            </td>
            
            
            <td>
                <input type="file" name="image1[]" id="image1_row_${row_id}" class="form-control" accept="image/*" autocomplete="off">
                <input type="hidden" name="hImg1[]" id="preImg1_row_${row_id}" value="">

            </td>
            <td>
                <input type="file" name="image2[]" id="image2_row_${row_id}" class="form-control" accept="image/*" autocomplete="off">
                <input type="hidden" name="hImg2[]" id="preImg2_row_${row_id}" value="">

            </td>
            <td>
                <input type="file" name="image3[]" id="image3_row_${row_id}" class="form-control" accept="image/*" autocomplete="off">
                <input type="hidden" name="hImg3[]" id="preImg3_row_${row_id}" value="">

            </td>
            <td>
                <input type="file" name="image4[]" id=image4_row_${row_id}" class="form-control" accept="image/*" autocomplete="off">
                <input type="hidden" name="hImg4[]" id="preImg4_row_${row_id}" value="">

            </td>
            <td><button type="button" class="btn btn-default" onclick="removeGroceryRow('${row_id}')"><i class="fa fa-close" style="color: red;"></i></button></td>
        </tr>`);
    }
    function removeGroceryRow(tr_id) {
        $("#grocery_info_table tbody tr#row_" + tr_id).remove();
        subQuantity('grocery_info_table')
    }

    // Add Electronics Dynamic fields---------------------

    function addDynamicElectronicField() { 
        var count_table_tbody_tr = $("#electronic_count_section").val();
        var row_id = ++count_table_tbody_tr;
        $("#electronic_count_section").val(row_id);
        $('#electronic_info_table tbody').append(` <tr id="row_${row_id}">
            <td>
                <input type="text" name="barcode[]" id="barcode_row_${row_id}" class="form-control"  maxlength="20" placeholder="Enter barcode No"autocomplete="off">
            </td>      
            <td>
                <input type="text" name="color[]" id="color_row_${row_id}" class="form-control mb-1"  placeholder="Color"autocomplete="off">
                <input type="text" name="capacity[]" id="capacity_row_${row_id}" class="form-control mb-1"  placeholder="Capacity"autocomplete="off">
                <input type="text" name="storage[]" id="storage_row_${row_id}" class="form-control mb-1"  placeholder="Storage"autocomplete="off">
                <input type="text" name="ram[]" id="ram_row_${row_id}" class="form-control mb-1"  placeholder="RAM (ex-4GB)"autocomplete="off">
                <input type="text" name="inch[]" id="inch_row_${row_id}" class="form-control mb-1"  placeholder="Inch"autocomplete="off">
            </td>
            <td>
                <input type="text" name="price[]" onkeypress=" return isFloatNumberKey(event)" id="price_row_${row_id}" class="form-control" placeholder="Enter price" autocomplete="off" required>
            </td>
            <td>
                <input type="text" name="discount_rate[]" id="discount_rate_row_${row_id}" value="0" onkeypress=" return isFloatNumberKey(event)" class="form-control " placeholder="Enter Discount Rate (ex-10)"  required>
            </td>
            <td>
                <input type="text" name="qty[]" id="qty_row_${row_id}" onkeyup="subQuantity('electronic_info_table');" class="form-control" autocomplete="off"  placeholder="Enter qty"onkeypress="return isNumber(event)" required value="">
            </td>

            <td>
                <input type="text" name="min_qty[]" id="min_qty_row_${row_id}" class="form-control" autocomplete="off"  placeholder="Enter qty" onkeypress="return isNumber(event)" required value="">
            </td>
            
            
            <td>
                <input type="file" name="image1[]" id="image1_row_${row_id}" class="form-control" autocomplete="off" accept="image/*">
                <input type="hidden" name="hImg1[]" id="preImg1_row_${row_id}" value="">

            </td>
            <td>
                <input type="file" name="image2[]" id="image2_row_${row_id}" class="form-control" accept="image/*" autocomplete="off">
                <input type="hidden" name="hImg2[]" id="preImg2_row_${row_id}" value="">

            </td>
            <td>
                <input type="file" name="image3[]" id="image3_row_${row_id}" class="form-control" accept="image/*" autocomplete="off">
                <input type="hidden" name="hImg3[]" id="preImg3_row_${row_id}" value="">

            </td>
            <td>
                <input type="file" name="image4[]" id=image4_row_${row_id}" class="form-control" accept="image/*" autocomplete="off">
                <input type="hidden" name="hImg4[]" id="preImg4_row_${row_id}" value="">
            </td>
            <td>
                 <textarea type="text" rows="2" cols="3" name="other_features[]" id="other_features_row_${row_id}" class="form-control" autocomplete="off"></textarea>
            </td>
            <td><button type="button" class="btn btn-default" onclick="removeElectronicRow('${row_id}')"><i class="fa fa-close" style="color: red;"></i></button></td>
        </tr>`);
    }
    function removeElectronicRow(tr_id) {
        $("#electronic_info_table tbody tr#row_" + tr_id).remove();
        subQuantity('electronic_info_table')
    }
    // End of electronic Dynamic fields------------------

    // Add Home Decor Dynamic fields---------------------

    function addDynamicHomeDecorField() { 
        var count_table_tbody_tr = $("#homeDecor_count_section").val();
        var row_id = ++count_table_tbody_tr;
        $("#homeDecor_count_section").val(row_id);
        $('#homeDecor_info_table tbody').append(` <tr id="row_${row_id}">
            <td>
                <input type="text" name="barcode[]" id="barcode_row_${row_id}" class="form-control"  maxlength="20" placeholder="Enter barcode No"autocomplete="off">
            </td>    
            <td>
            <label>Color : <span style="color: red;">*</span></label>
                <input type="text" name="color[]" id="color_row_${row_id}" class="form-control" placeholder="Enter color name"autocomplete="off" required>
            <label>Size : <span style="color: red;">*</span></label>
                <select name="size[]" id="size_row_${row_id}" class="form-control" required>
                    <option hidden="true" value="" selected="selected" >Select Size</option>
                    <option value="PC">PC</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XS">XS</option>
                    <option value="XXL">XXL</option>
  
                </select>
                <label>No. Of pcs : <span style="color: red;">*</span></label>
                <input type="text" name="pcs[]" id="pcs_row_${row_id}" class="form-control" placeholder="Enter No. Of pcs" value="1 Pcs" autocomplete="off" required>
            </td> 

            <td>
            
                <input type="text" name="width[]" id="width_row_${row_id}" class="form-control mb-1"  placeholder="Width (100 MM) " autocomplete="off" required >
                <input type="text" name="height[]" id="height_row_${row_id}" class="form-control mb-1"  placeholder="height (100 MM) " autocomplete="off" required >
                <input type="text" name="length[]" id="length_row_${row_id}" class="form-control mb-1"  placeholder="Length (100 MM) "autocomplete="off" required >
                <input type="text" name="weight[]" id="weight_row_${row_id}" class="form-control mb-1"  placeholder="Weight (2 KG) " autocomplete="off" required>
            </td>
            <td>
                <textarea class="form Control" rows="6" name="material" required id="material_row_${row_id}" placeholder="Enter Here"></textarea>
            </td>
            <td>
                <input type="text" name="price[]" onkeypress=" return isFloatNumberKey(event)" id="price_row_${row_id}" class="form-control" placeholder="Enter price" autocomplete="off" required>
            </td>
            <td>
                <input type="text" name="discount_rate[]" id="discount_rate_row_${row_id}" value="0" onkeypress=" return isFloatNumberKey(event)" class="form-control " placeholder="Enter Discount Rate (ex-10)"  required>
            </td>
            <td>
                <label>Qty<span style="color:red" >*</span></label>
                <input type="text" name="qty[]" id="qty_row_${row_id}" onkeyup="subQuantity('homeDecor_info_table');" class="form-control" autocomplete="off"  placeholder="Enter Qty"onkeypress="return isNumber(event)" required value="">
                <label>Min Qty <span style="color:red" >*</span></label>
                <input type="text" name="min_qty[]" id="min_qty_row_${row_id}" class="form-control" autocomplete="off"  placeholder="Enter Min Qty" onkeypress="return isNumber(event)" required value="">
            </td>

    
            
            
            <td>
                <input type="file" name="image1[]" id="image1_row_${row_id}" class="form-control" autocomplete="off" accept="image/*" >
                <input type="hidden" name="hImg1[]" id="preImg1_row_${row_id}" value="">

            </td>
            <td>
                <input type="file" name="image2[]" id="image2_row_${row_id}" class="form-control" accept="image/*" autocomplete="off">
                <input type="hidden" name="hImg2[]" id="preImg2_row_${row_id}" value="">

            </td>
            <td>
                <input type="file" name="image3[]" id="image3_row_${row_id}" class="form-control" accept="image/*" autocomplete="off">
                <input type="hidden" name="hImg3[]" id="preImg3_row_${row_id}" value="">

            </td>
            <td>
                <input type="file" name="image4[]" id=image4_row_${row_id}" class="form-control" accept="image/*" autocomplete="off">
                <input type="hidden" name="hImg4[]" id="preImg4_row_${row_id}" value="">
            </td>
         
            <td><button type="button" class="btn btn-default" onclick="removeHomeDecorRow('${row_id}')"><i class="fa fa-close" style="color: red;"></i></button></td>
        </tr>`);
    }
    function removeHomeDecorRow(tr_id) {
        $("#homeDecor_info_table tbody tr#row_" + tr_id).remove();
        subQuantity('homeDecor_info_table')
    }
    // End of Home Decor Dynamic fields------------------

  // ******************************************************* Common Product  Form  Calculation **********************************

      function subQuantity(table) {
        // alert('hi');
        var tableProductLength = $("#"+table+" tbody tr").length;
        // var opening_stock=($('#opening_stock').val()== '') ? '0' : $('#opening_stock').val();;

        var stock=0;
        for(x = 0; x < tableProductLength; x++) {
        var tr = $("#"+table+" tbody tr")[x];
        var count = $(tr).attr('id');
        count = count.substring(4);
        // alert(count);

        var oldQty=($('#qty_row_'+count).val() == '') ? "0" : $('#qty_row_'+count).val();

        stock = parseFloat(stock) + parseFloat(oldQty);

      
        $("#opening_stock").val(stock);

        }
    }
  
// ##################################################  End Product Form Data #########################################################
