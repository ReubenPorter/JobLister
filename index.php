<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$template = new Template('templates/frontpage.php');

//if there is a category in the url then set the variable to _GET, if not set it to null
$category = isset($_GET['category']) ? $_GET['category'] : null;

//get selected category
if($category){
    $template->jobs = $job->getByCategory($category);
    $template->title = 'Jobs in '. $job->getCategory($category)->name;
}
else{
    $template->title = 'Latest Jobs';
    $template->jobs = $job->getAllJobs();
}


$template->categories = $job->getCategories();

echo $template;