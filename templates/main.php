<main>
  <h2> Next Marvel's Movie</h2>
  <section>
    <img 
      src="<?= $poster_url; ?>" 
      alt="poster de <?= $title?>"
      width="300"
      style="border-radius: 16px"
    />
  </section>
  <hgroup>
    <h2><?= $title ;?></h2>
    <p><?= $until_message ?></p>
    <p>Release date: <?= $release_date ?></p>
    <p>Following production: <?= $following_production; ?></p>
  </hgroup>

</main>