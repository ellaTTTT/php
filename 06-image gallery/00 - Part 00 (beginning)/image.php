<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';
$image = $_GET['image'];
?>
<?php include './views/header.php'; ?>

<?php if($image && !empty($imageTitles[$image])): ?>
    <h3><?php echo e($imageTitles[$image]); ?></h3>
    <img src="./images/<?php echo rawurldecode($image); ?>" />
    <?php echo str_replace("\n", "<br />", e($imageDescriptions[$image])); ?>
<?php else: ?>
    <div>This image couldn't be found.</div>
<?php endif; ?>
</br>
</br>
<a href="gallery.php">Back to gallery</a>
<br />
<br />
<br />

<?php include './views/footer.php'; ?>
