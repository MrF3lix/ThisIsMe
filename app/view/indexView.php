<?php

class View{
    public function showContent($article){
        ob_start();
        include('./template/header.php');
        include('./template/nav.php');           
        include('./template/_article.php'); 
        include('./template/footer.php');
        $output = ob_get_contents();
        ob_end_clean();

        return $output;
    }
    
    public function showPublicContent(){
        ob_start();
        include('./template/header.php');
        include('./template/nav.php');           
        include('./template/_home.php');  
        include('./template/footer.php');
        $output = ob_get_contents();
        ob_end_clean();

        return $output;        
    }
}

?>