<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Product_ID')->nullable();
            $table->string('SKU_ID')->nullable();
            $table->string('SKU')->nullable();
            $table->string('UPC')->nullable();
            $table->string('Product_Title')->nullable();
            $table->string('Details')->nullable();
            $table->string('Retail_Price')->nullable();
            $table->string('Vendor_Price')->nullable();
            $table->string('Sale_Price')->nullable();
            $table->string('Wholesale_Price')->nullable();
            $table->string('MAP_Price')->nullable();
            $table->string('Quantity')->nullable();
            $table->string('IsDiscontinued')->nullable();
            $table->string('Product_Width')->nullable();
            $table->string('Product_Height')->nullable();
            $table->string('Product_Depth')->nullable();
            $table->string('Product_Weight')->nullable();
            $table->string('Country_of_Manufacture')->nullable();
            $table->string('Meta_Description')->nullable();
            $table->string('Meta_Keywords')->nullable();
            $table->string('Manufacturer_ID')->nullable();
            $table->string('Category_ID')->nullable();
            $table->string('Active')->nullable();
            $table->string('Sellable')->nullable();
            $table->string('IsBackOrdered')->nullable();
            $table->string('BackOrder_Date')->nullable();
            $table->string('Option_Group_ID_1')->nullable();
            $table->string('Option_Group_1')->nullable();
            $table->string('Option_Value_ID_1')->nullable();
            $table->string('Option_Value_1')->nullable();
            $table->string('Package_ID_Box_1')->nullable();
            $table->string('Package_Width_Box_1_inches')->nullable();
            $table->string('Package_Height_Box_1_inches')->nullable();
            $table->string('Package_Depth_Box_1_inches')->nullable();
            $table->string('Package_Weight_Box_1_lbs')->nullable();
            $table->string('Package_Quantity_Box_1')->nullable();
            $table->string('Package_ID_Box_2')->nullable();
            $table->string('Package_Width_Box_2_inches')->nullable();
            $table->string('Package_Height_Box_2_inches')->nullable();
            $table->string('Package_Depth_Box_2_inches')->nullable();
            $table->string('Package_Weight_Box_2_lbs')->nullable();
            $table->string('Package_Quantity_Box_2')->nullable();
            $table->string('Package_ID_Box_3')->nullable();
            $table->string('Package_Width_Box_3_inches')->nullable();
            $table->string('Package_Height_Box_3_inches')->nullable();
            $table->string('Package_Depth_Box_3_inches')->nullable();
            $table->string('Package_Weight_Box_3_lbs')->nullable();
            $table->string('Package_Quantity_Box_3')->nullable();
            $table->string('Image_filename')->nullable();
            $table->string('Additional_Image_2')->nullable();
            $table->string('Additional_Image_3')->nullable();
            $table->string('Additional_Image_4')->nullable();
            $table->string('Additional_Image_5')->nullable();
            $table->string('Additional_Image_6')->nullable();
            $table->string('Additional_Image_7')->nullable();
            $table->string('Additional_Image_8')->nullable();
            $table->string('Additional_Image_9')->nullable();
            $table->string('Additional_Image_10')->nullable();
            // additional fields
            $table->text('Prod_Size_sm')->nullable();
            $table->text('Prod_Size_md')->nullable();
            $table->text('Prod_Size_lg')->nullable();
            $table->text('Prod_Size_xl')->nullable();
            $table->text('Prod_Size_xxl')->nullable();
            $table->text('Product_URL_Text')->nullable();
            $table->text('Photo_Alt_Text')->nullable();
            $table->text('Meta_Title')->nullable();
            $table->text('Taxable')->nullable();
            $table->text('Free_Ship')->nullable();
            $table->text('Availability')->nullable();
            $table->text('Shipping_Cost')->nullable();
            $table->text('Product_Description')->nullable();
            $table->text('Product_Features')->nullable();
            $table->text('Product_Technical')->nullable();
            $table->text('Product_Extended')->nullable();
            $table->text('Product_Description_Above')->nullable();
            $table->text('Product_Caption_Text')->nullable();
            $table->text('List_Price_Name')->nullable();
            $table->text('Product_Price_Name')->nullable();
            $table->text('Sale_Price_Name')->nullable();
            $table->text('Feature_Product_Homepage')->nullable();
            $table->text('Private_Customer')->nullable();
            $table->text('Logo_Manufacturer')->nullable();
            $table->text('Min_Order_Qty')->nullable();
            $table->text('Add_Accessories')->nullable();
            $table->text('Free_Accessories')->nullable();
            $table->text('Discount_Price_1')->nullable();
            $table->text('Discount_Price_2')->nullable();
            $table->text('Discount_Price_3')->nullable();
            $table->text('Discount_Price_4')->nullable();
            $table->text('Discount_Price_5')->nullable();
            $table->text('Stock_Status')->nullable();
            $table->text('Stock_Low_Qty_Alarm')->nullable();
            $table->text('Stock_Re_Order_Qty')->nullable();
            $table->text('Auto_Dropship')->nullable();
            $table->text('Vendor_Part_No')->nullable();
            $table->text('EAN')->nullable();
            $table->text('Vendor_ID')->nullable();
            $table->text('Vendor_Name')->nullable();
            $table->text('Min_Qty')->nullable();
            $table->text('Max_Qty')->nullable();
            $table->text('Deactive_Until')->nullable(); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
