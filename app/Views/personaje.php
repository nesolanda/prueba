    <div>
        <img src="<?= base_url(); ?>/assets/img/pers.jpg" width="100%" alt="Marvel Personajes">
      </div>

    <div class="container">
      <div class="row">
        <div class="col-md-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title"><?= $results[0]['name'] ?></h2>
            <p class="blog-post-meta"><?= $results[0]['modified'] ?> </p>
            <p><img src="<?= $results[0]['thumbnail']['path'] ?>.jpg" width="100%"></p>
            <p><?= $results[0]['description'] ?></p>
            
          </div><!-- /.blog-post -->


          <hr class="featurette-divider">
        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar d-none d-sm-block">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">Comics</h4>
            <ol class="list-unstyled mb-0">
              <?php foreach ($results[0]['comics']['items']  as $val) { ?>
                <li><?= $val['name'] ?></li>
              <?php } ?>
            </ol>
          </div>

        </aside><!-- /.blog-sidebar -->

      </div>
    </div>
