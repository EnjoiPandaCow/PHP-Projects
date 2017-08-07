<?php include 'includes/header.php'; ?>
<?php
    //Create DB Object
    $db = new Database();

    //Create Query
    $query = "SELECT * FROM posts ORDER BY id DESC ";
    //Run Query
    $posts = $db->select($query);

    //Create Query
    $query = "SELECT * FROM categories";
    //Run Query
    $categories = $db->select($query);
?>

<?php if($posts) : ?>
    <?php while($row = $posts->fetch_assoc()) : ?>

            <div class="blog-post">
                <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
                <p class="blog-post-meta"><?php echo format_date($row['date']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>
                <?php echo shorten_text($row['body']); ?>
                <a class="readmore" href="post.php?id=<?php echo urlencode($row['id']); ?>">Read More</a>
            </div><!-- /.blog-post -->
    <?php endwhile; ?>

<?php else : ?>
    <p>There are no posts yet</p>
<?php endif; ?>
<?php include 'includes/footer.php' ?>


