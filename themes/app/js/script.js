function loadItem(){
    
}


function AjxAddItems(item_name,item_amount) {
    
     $.ajax({
        url: 'index.php?r=Ajax/LoadItems&item_name='+item_name+'&item_amount='+item_amount,
        //dataType:'json',
        success: function(data) {
             $("#myTable > tbody").append(data);
        }
    });
    return false;

   
}

