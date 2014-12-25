<main>
    <div class="container vcard">
        <div class="row">
            <div class="col-md-6 text-center">
                <img class="photo img-responsive center-block img-circle"
                     src="https://s.gravatar.com/avatar/<?= $profile['gravatar'] ?>?s=80" alt=""/>

                <h1 class="fn"><?= $profile['name'] ?></h1>
                <h4 class="title"><?= $profile['role'] ?></h4>

                <div class="org"> <?= $profile['company'] ?></div>
                <div class="addr"><?= $profile['address'] ?></div>
                <div class="url"><a href="<?= $profile['website'] ?>"></a><?= $profile['website'] ?></div>
            </div>
            <div class="col-md-3">
                <h3>Social</h3>
                <?= parse_resume($profile['social']) ?>
            </div>
            <div class="col-md-3">
                <h3>Contact</h3>
                <?= parse_resume($profile['contact']) ?>
            </div>
        </div>
        <hr/>
        <div class="row col-md-12">
            <?= parse_resume($resume); ?>

        </div>
    </div>
</main>
