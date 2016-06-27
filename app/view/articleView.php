<?php

class View{
    public function showContent($article){
        ob_start();
        include('./template/header.php');
        include('./template/nav.php');       
        include('./template/_edit_article.php'); 
        include('./template/footer.php');
        $output = ob_get_contents();
        ob_end_clean();

        return $output;
    }
}

?>