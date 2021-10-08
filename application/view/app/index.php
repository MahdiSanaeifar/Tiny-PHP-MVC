<?php $this->include("app.layouts.header", ["categories" => $categories]); ?>
<section class="container my-5">
    <section class="row">
        <section class="col-md-4">
            <?php foreach ($articles as $article){ ?>
            <h2><?= $article['title'] ?></h2>
            <p><?= substr($article['body'], 0, 120) ?></p>
            <p><a class="btn btn-primary" href="<?= $this->url('home/show/' . $article['id']) ?>" role="button">View details »</a></p>
        </section>
        <?php } ?>
    </section>
</section>
<?php $this->include("app.layouts.footer"); ?>
