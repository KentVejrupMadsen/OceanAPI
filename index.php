<?php 
    include './vendor/autoload.php';

    use IOJaegers\OceanApi\OceanAPIFramework as Framework;

    $application = new Framework();

    $application->initialise();
    $application->execute();
?>