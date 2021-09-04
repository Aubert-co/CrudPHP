<?php 


namespace App\Controller;

use App\model\Produtos;
class Actions{
    
    private function Connetion(){
       return $Product = new Produtos;
    }
    public function AddDatas($name,$quantit){
        if(is_string($name) && is_numeric($quantit)){
            $SanitizedName = filter_input($name,FILTER_SANITIZE_STRING);
            $SanitizedQuantit = filter_input($quantit,FILTER_SANITIZE_NUMBER_INT);
            $Product = $this->Connetion();
            $Product->Add($SanitizedName,$SanitizedQuantit);
         
            return ;
        }
        echo('error ao inserir datas');
        
    }

    public function DeleteDatas($id)
    {
        if(is_numeric($id))
        {
            $SanitizeId =filter_var($id,FILTER_SANITIZE_NUMBER_INT);
            $Product = $this->Connetion();
            $Product->Delete($SanitizeId);
            return;
        }
        echo('algo deu errado');
    }
    public function  Layout(){
        $Product = $this->Connetion();
        $resultado = $Product->SelectP();
        if(count($resultado) === 0 )
        {
            return "<h1> No datas </h1>";
        }
        $layout1 ="<div class='layout'> </div>";
        $layout1 =' 
        <table >
        <thead>
        <tr>
            <th>Actions</th>
            <th>Produto</th>
            <th>Quantidade</th>
        </tr>
        </thead>
        <tbody>';
        
        foreach($resultado as $data)
        {
            $id = $data['id'];
            $name = $data['name'];
            $quantit = $data['quantidade'];
            $layout1 .= '
            <td>
                <i class="large material-icons" onClick=DeleteFunc('.$id.')>delete</i>
                <i class="large material-icons" onClick=ChangeFunc('.$id.',"'.$name.'",'.$quantit.')>create</i>
            </td>
            <td>  '.$name.'</td>
            <td>'.$quantit.'</td>
            </tr>
            </tr>';
        }
      $layout1 .=  '
      </tbody>
      </table> ';
     
    return $layout1;
    }

    public function ChangeDatas($id,$name,$quantit){
        if(is_numeric($id) && is_string($name) && is_numeric($quantit) )
        {
            $SanitizeId =filter_var($id,FILTER_SANITIZE_NUMBER_INT);
            $SanitizedName = filter_input($name,FILTER_SANITIZE_STRING);
            $SanitizedQuantit = filter_input($quantit,FILTER_SANITIZE_NUMBER_INT);
            echo($SanitizedName);
            echo($SanitizeId);
            echo($SanitizedQuantit);
            // $Product = $this->Connetion();
            //$Product->Update($SanitizeId,$SanitizedName,$SanitizedQuantit);

        }
    }
}

?>