<?php include 'inc/header.php' ?>

<h2 class="page-header">Create Job Listing</h2>
<form method="post" action="create.php">
    <div class="form-group">
        <label>Company</label>
        <input class="form-control" type="text" name="company">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control">
            <option value="0">Choose Category</option>
            <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Job Title</label>
        <input class="form-control" type="text" name="job_title">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Location</label>
        <input class="form-control" type="text" name="location">
    </div>
    <div class="form-group">
        <label>Salary</label>
        <input class="form-control" type="text" name="salary">
    </div>
    <div class="form-group">
        <label>Contact User</label>
        <input class="form-control" type="text" name="contact_user">
    </div>
    <div class="form-group">
        <label>Contact Email</label>
        <input class="form-control" type="text" name="contact_email">
    </div>
    <input type="submit" class="btn btn-default" value="submit" name="submit">
</form>

<?php include 'inc/footer.php' ?>

