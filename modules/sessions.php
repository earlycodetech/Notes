<?php
session_start();
function error_msg ()
{

    if (isset($_SESSION['error_msg'])) {
        $output =  "<div class=\"alert alert-danger position-fixed end-0 animate__animated animate__fadeInRight\" style=\"z-index: 9999; top: 25%;\">";
    
        $output .= htmlentities($_SESSION['error_msg']);
    
        $output .= "</div>";
    
        echo $output;
        $_SESSION['erro_msg']=null;
    }
}
function success_msg ()
{

    if (isset($_SESSION['success_msg'])) {
        $output =  "<div class=\"alert alert-success position-fixed end-0 animate__animated animate__fadeInRight\" style=\"z-index: 9999; top: 25%;\">";
    
        $output .= htmlentities($_SESSION['success_msg']);
    
        $output .= "</div>";
    
        echo $output;
        $_SESSION['success_msg']=null;
    }
}

?>
