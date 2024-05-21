<main>
  <h2> Next Marvel's Movie</h2>
  <section>
    <img 
      src="<?= $data["poster_url"]; ?>" 
      alt="poster de <?= $data["title"]?>"
      width="300"
      style="border-radius: 16px"
    />
  </section>
  <hgroup>
    <h2><?= $data["title"];?></h2>
    <p><?= $untilMessage ?></p>
    <p>Release date: <?= $data["release_date"]?></p>
    <p>Following production: <?= $data["following_production"]["title"]; ?></p>
  </hgroup>

</main>