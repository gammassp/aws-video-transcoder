<?php

require "class/AWS_ET.class.php";

//aws config
$aws_access_key = "ACCESS_KEY";
$aws_private_key = "SECRET_KEY";
$aws_region = "ap-southeast-1";
$aws_output_bucket_name = "OUTPUT_BUCKET_NAME";
$aws_cloudfront_bucket_name = "CLOUDFRONT_DOMAIN_NAME";
$pipelineId = "PIPLINE_ID";

//file info
$filename = "SampleFile.mp4";
$filenameInputPath = "Document/";

//authentication
AWS_ET::setAuth($aws_access_key, $aws_private_key, $aws_region);

//create job
$input = array('Key' => $filenameInputPath.$filename);
$filenameOutputPath = $filenameInputPath."/";
$outputKeyPrefix = $filenameOutputPath;
$output[] = array('Key' => '1080-'.$filename,'PresetId' => '1351620000001-000001');
$output[] = array('Key' => '720-'.$filename,'PresetId' => '1351620000001-000010');
$output[] = array('Key' => '480-'.$filename,'PresetId' => '1351620000001-000020');
$output[] = array('Key' => '360-'.$filename,'PresetId' => '1351620000001-000040');

$result = AWS_ET::createJob($input, $output, $pipelineId, $outputKeyPrefix);

$jobId = $result['Job']['Id'];