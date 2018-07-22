<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$template = new Template('templates/job-single.php');

//if there is a category in the url then set the variable to _GET, if not set it to null
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);

echo $template;