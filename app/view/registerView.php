<?php

class View{
    public function showPublicContent(){
        ob_start();
        include('./template/header.php');
        include('./template/nav.php');           
        include('./template/_register.php');    
        include('./template/footer.php');
        $output = ob_get_contents();
        ob_end_clean();

        return $output;
    }
}

?>