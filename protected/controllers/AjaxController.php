<?php

class AjaxController extends Controller {

    public function actionLoadItems($item_name=null,$item_amount=null) {
       
        $tag = "<tr>";
        $tag.="<td><i class=\"glyphicon glyphicon-shopping-cart\"></i></td>";
        $tag.="<td>$item_name</td>";
        $tag.="<td>$item_amount</td>";
        $tag.='<td>
            <a href="#" class="btn  btn-danger" onClick="$(this).closest(\'tr\').remove();">
             <i class="glyphicon glyphicon-remove"></i>
            </a>
            </td>';
        $tag.="</tr>";
        echo $tag;
    }

}

?>
