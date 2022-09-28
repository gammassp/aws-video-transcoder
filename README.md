# AWS S3 file upload progress and transcode with Elastic Transcoder Service
AWS S3 file upload with progress bar, transcoding video with Amazon Elastic Transcoder

## Feature 
1. File Upload 
2. Progress bar 
3. Create job
4. Read job

#### Usage ###

```php
AWS_ET::setAuth($awsAccessKey, $awsSecretKey, $awsRegion);
```

<strong>Note:</strong> us-east-1 is the default AWS region setting. The third parameter is optional for us-east-1 users.

#### Job Operations ####

Creating a transcoding job:

```php
$pipelineId = 'pipelineId';
$input = array('Key' => 'inputFile');
$output = array(
  'Key' => 'Sample.mp4',
  'PresetId' => 'presetId'
 );

$result = AWS_ET::createJob($input, array($output), $pipelineId);

if (!$result) {
  echo AWS_ET::getErrorMsg();
} else {
  echo 'New job ID: ' . $result['Job']['Id'];
}
```

Get job info:

```php
AWS_ET::readJob( string $jobId );
```

## Reference : 
https://docs.aws.amazon.com/sdk-for-javascript/v2/developer-guide/s3-example-photo-album.html
http://docs.aws.amazon.com/elastictranscoder/latest/developerguide/getting-started.html
