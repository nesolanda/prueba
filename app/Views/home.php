

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="<?= base_url(); ?>/assets/img/car-1.jpg" alt="Avengers">
            
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="<?= base_url(); ?>/assets/img/guardians-l.webp" alt="Guardianes de la Galaxia">
            
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="<?= base_url(); ?>/assets/img/car-2.jpg" alt="Hombres X">
            
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container">
        <div class="row">
            <div class="col-lg-8">
                

                <div class="row featurette">
                  <div class="col-md-12">
                    <p>Conoce los Super Heroes</p>
                    <table id="datos" class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Super Heroe</th>
                                <th>Imagen</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $val) { ?>
                                <tr>
                                    <td><?= $val['id'] ?></td>
                                    <td><?= $val['name'] ?></td>
                                    <td><img src="<?= $val['thumbnail']['path'] ?>.jpg" height="40"></td>
                                    <td><a href="<?= base_url(); ?>/personaje?id=<?= $val['id'] ?>" class="btn btn-primary">Ver mas</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                  </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                  <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Comics</h2>
                    <p class="lead"><a href="https://www.marvel.com/articles/comics/august-17-2022-new-marvel-comics-collections-releases-full-list" target="_blank">August 17's New Marvel Comics: The Full List</a></p>
                  </div>
                  <div class="col-md-5 order-md-1">
                    <img src="<?= base_url(); ?>/assets/img/not-1.jpg" width="100%">
                  </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                  <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Comics</h2>
                    <p class="lead"><a href="https://www.marvel.com/articles/comics/leonardo-romero-latin-american-heroes-variant-covers" target="_blank">Artist Leonardo Romero Celebrates Marvel's Latin & Latinx Heroes in New Variant Covers</a></p>
                  </div>
                  <div class="col-md-5 order-md-1">
                    <img src="<?= base_url(); ?>/assets/img/not-2.jpg" width="100%">
                  </div>
                </div>

                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->
            </div>

            <div class="col-lg-4 d-none d-sm-block">
                
                <div class="card mb-4">
                    <div class="card-header">Cosas Emocionantes</div>
                    <div class="card-body">
                        <p>¡No te puedes perder las noticias y actualizaciones de todo el Universo Marvel!</p>
                        
                    </div>
                </div>
                
                <div class="card mb-4">
                    <div class="card-header">Cultura y Estilo de Vida</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="<?= base_url(); ?>/assets/img/mision.jpg" width="120">
                            </div>
                            <div class="col-sm-6">
                                Marvel Mission: ‘T.E.S.T. Kitchen’s’ Tonkatsu Torta
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card mb-4">
                    <div class="card-header">Comics</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="<?= base_url(); ?>/assets/img/comics.jpg" width="120">
                            </div>
                            <div class="col-sm-6">
                                Nuevos Comics de MArvel de Agosto 10: El Listado
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card mb-4">
                    <div class="card-header">Comics</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="<?= base_url(); ?>/assets/img/spider.jpg" width="120">
                            </div>
                            <div class="col-sm-6">
                                Escritores de Spider-Man revelan nuevos juguetes del Spider-Verse & Sus Heroes
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card mb-4">
                    <div class="card-header">Colecionables</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="<?= base_url(); ?>/assets/img/trajes.png" width="120">
                            </div>
                            <div class="col-sm-6">
                                World of EPI Revela nuevos juguetes coleccionables inspirados por 'Black Panther: Wakanda Forever'
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card mb-4">
                    
                    <div class="card-body">
                        <div class="row">
                            <img src="<?= base_url(); ?>/assets/img/poster.jpg" width="100%">
                        </div>
                    </div>
                </div>


            </div>
        </div>
      </div><!-- /.container -->



