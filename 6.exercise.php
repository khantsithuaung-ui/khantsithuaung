<?php


Class Inventory{
    private $item_list=[];
    private $sale_list=[];

   function add(string $item_name,int $item_qty){

       $new_item=$this->build($item_name,$item_qty);
       array_push($this->item_list, $new_item);
       var_dump ($this->item_list);
   }
    
    private function build(string $item_name,int $item_qty){
        return ['name'=>$item_name,'qty'=>$item_qty];
    }
    
    
   /*function sale(string $item_name,int $sold_qty){
    $a=array_column($this->item_list,'name','qty');
    $b=array_search($item_name,$a);//i cant use this is :3
    array_push($this->item_list, $b);
    $update=array_map('reduce',$this->item_list);
    var_dump($update);

   }
   function reduce($a,$b){
       $a-=$b;
       return $a;
   }*/
   function sale(string $item_name,int $sold_qty){
       $name_array=array_column($this->item_list,'name');
       $index=array_search($item_name,$name_array);
       if($index!==false){
           $this->item_list[$index]['qty']-=$sold_qty;
       }
       var_dump($this->item_list);
   }
 
}

$inventory=new Inventory();
$inventory->add('apple',20);
$inventory->add('orange',20);
$inventory->sale('apple',10);
//$inventory->sale('apple',20);
//Create Inventory Class
//function add(string $name,int $qty){
      //  $abc=array_push

    //}
//Search array with the item name
        //qty reduce
        //Update in the $item-list

//There should be add item method which can add the new item and qty into the list property
//There should be a sale method which will reduce the qty of the item