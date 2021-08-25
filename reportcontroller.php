<?php
    include 'Manager.php';
    //include 'singleton.php';
    //session_start();
    //$Db= DbConnection::getInstance();
    //$conn = $Db->getConnection();

    $Report = new manager();

    $Type = $_POST["Report"];
    
    if($Type == "ReportDonation")
    {
        if(isset($_POST["DonationOption"]))
        {
            $Option = $_POST["DonationOption"];
            $Report->GenerateReport($Type,$Option);
        }
        else
        {
            $Report->GenerateReport($Type,null);
        }
    }
    else
    {
      $Option = null;
    }
?>