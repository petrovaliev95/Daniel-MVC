<!-- Blog Entries Column -->
<div class="col-md-8">
    <?php foreach ($this->___data['posts'] as $post): ?>

        <h2>
            <a href="<?= $this->getBaseUrl() . "posts/get/" . $post['post_id'] ?>"><?= htmlspecialchars($post['post_title']) ?></a>
            <div style="font-size: 14px;">
                <span class="glyphicon glyphicon-eye-open"></span> <?= htmlspecialchars($post['visits']) ?>
            </div>
        </h2>
        <i>
            <p class="lead">
                by <a href="#">
                    <?= htmlspecialchars($post['username']) ?>
                </a>
            </p>
        </i>
        <p><span class="glyphicon glyphicon-time"></span> Posted on <?= $post['post_created'] ?></p>
        <hr>
        <p>
            <?= htmlspecialchars($post['post_content']) ?>
        </p>
        <a class="btn btn-primary" href=" <?= $this->getBaseUrl() . "posts/get/" . $post['post_id'] ?> ">Read More <span
                class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>

    <?php endforeach; ?>

    <!-- Pager -->
    <ul class="pager">
        <!-- TODO Pagination -->
        <li class="previous">
            <a href="#">&larr; Older</a>
        </li>
        <li class="next">
            <a href="#">Newer &rarr;</a>
        </li>
    </ul>

</div>