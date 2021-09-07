<?php 


namespace App\Controller;

use App\model\Produtos;
class Actions{
    private $Conection;

    private function getConnection()
    {
        $this->Conection = new Produtos;
        return $this->Conection;
    }
 

    public function AddDatas($name,$email,$job){
        if(is_string($name) && is_string($email) && is_string($job)){
            $SanitizedName = filter_var($name,FILTER_SANITIZE_STRING);
            $SanitizedEmail = filter_var($email,FILTER_SANITIZE_EMAIL);
            $SanitizedJob = filter_var($job,FILTER_SANITIZE_STRING);
            $Product = $this->getConnection();
            $Product->Add($SanitizedName,$SanitizedEmail,$SanitizedJob);
         
            return ;
        }
        echo('error ao inserir datas');
        
    }

    public function DeleteDatas($id)
    {
        if(is_numeric($id))
        {
            $SanitizeId =filter_var($id,FILTER_SANITIZE_NUMBER_INT);
            $Product = $this->getConnection();
            $Product->Delete($SanitizeId);
            return;
        }
        echo('algo deu errado');
    }
    public function  Layout(){
        $Product = $this->getConnection();
        $resultado = $Product->SelectP();
        if(count($resultado) === 0 )
        {
            return "<h1> No datas </h1>";
        }
        
        $layout1 =' 
        <table class="centered">
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
            $job = $data['job'];
            $email = $data['email'];
            $layout1 .= '
            <td >
                <div class="actions">
                <span class="delete" onClick=DeleteFunc('.$id.')>
                    <i class="material-icons" >delete</i>
                    </span>
                    <span class="create" onClick=
                    ChangeFunc('.$id.',"'.$name.'","'.$email.'","'.$job.'")>  
                        <i class="material-icons" >create</i>
                    </span> 
                    </div>
                 </td>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$job.'</td>
            </tr>
            </tr>';
        }
      $layout1 .=  '
      </tbody>
      </table> ';
     
    return $layout1;
    }

    public function ChangeDatas($id,$name,$email,$job){
        if(is_numeric($id) && is_string($job) &&  is_string($name) && is_string($email) )
        {
            $SanitizeId =filter_var($id,FILTER_SANITIZE_NUMBER_INT);
            $SanitizedName = filter_var($name,FILTER_SANITIZE_STRING);
            $SanitizedEmail = filter_var($email,FILTER_SANITIZE_EMAIL);
            $SanitizedJob = filter_var($job,FILTER_SANITIZE_STRING);

            echo($SanitizedName);
            $Product = $this->getConnection();
            $Product->Update($SanitizeId,$SanitizedName,$SanitizedEmail,$SanitizedJob);

        }
    }
}

?>