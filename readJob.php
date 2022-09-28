<?php

require "class/AWS_ET.class.php";

//aws config
$aws_access_key = "ACCESS_KEY";
$aws_private_key = "SECRET_KEY";
$aws_region = "ap-southeast-1";

//jobId
$jobId = "xxxxx";

AWS_ET::setAuth($aws_access_key, $aws_private_key, $aws_region);
$aJobResult = AWS_ET::readJob($jobId);