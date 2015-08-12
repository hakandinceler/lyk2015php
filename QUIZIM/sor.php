
<?php
include_once("inc/sorular.php");
session_start();
if (!isset ($_SESSION["answredQuestionCount"]))
{

    $_SESSION["answeredQuestionCount"]=0;
    $_SESSION["totalQuestionCount"]=count($sorular);
    $_SESSION["correctAnswerCount"]=0;
    $_SESSION["startTime"]=time();
}
?>