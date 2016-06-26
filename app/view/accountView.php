<?php

class View{
    public function showContent($data, $article){
        ob_start();
        include('./template/header.php');
        include('./template/nav.php');           
        include('./template/_account.php');      
        include('./template/_article.php');     
        include('./template/footer.php');
        $output = ob_get_contents();
        ob_end_clean();

        return $output;
    }

    public function editContent($data){
        ob_start();
        include('./template/header.php');
        include('./template/nav.php');           
        include('./template/_edit_account.php');    
        include('./template/footer.php');
        $output = ob_get_contents();
        ob_end_clean();

        return $output;
    }
}

?>