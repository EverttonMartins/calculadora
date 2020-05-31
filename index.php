<?php

include('connection_API.php');
?>
<!doctype html>
<html lang="PT-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DA TERRA</title>

    <!--Global css-->
    <link rel="stylesheet" href="css/global.css">

    <!--Icon fav-->
    <link rel="icon" href="">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

</head>

<body>
        <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="img/img_icons/logo.png" width="142" alt="">
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-principal">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link">Página inicial</a></li>
                        <li class="nav-item"><a href="produtos.php" class="nav-link">Produtos</a></li>
                        <li class="nav-item"><a href="contato.php" class="nav-link">Contato</a></li>
                        <li class="nav-item"><a href="sobre_nos.php" class="nav-link">Sobre nós</a></li>
                        <li class="nav-item"><a href="Página [Cadastrar-Login]/pag_login_fornecedor.php" class="btn btn-outline-warning ml-2">Entrar</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    <!--Seção carousel-->
      <!-- carousel -->
      <section id="home" class="home banner section-site">
      <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselIndicators" data-slide-to="1"></li>
          <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/banner-01.jpg" alt="Primeiro Slide">
            <div class="carousel-caption d-none d-md-block">
              <div class="carousel-content p-3">
                <div class=" border border-white rounded p-5">
                  <h2 class="font-weight-bold text-uppercase">Entradas</h2>
                  <p>
                    Alias voluptatem nulla facilis laborum voluptatum non voluptas, quo dolorem exercitationem ea?
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/banner-02.jpg" alt="Segundo Slide">
            <div class="carousel-caption d-none d-md-block">
              <div class="carousel-content p-3">
                <div class=" border border-white rounded p-5">
                  <h2 class="font-weight-bold text-uppercase">Pratos principais</h2>
                  <p>
                    Velit fugit blanditiis tenetur nostrum dicta ipsum eius ad mollitia assumenda eos.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/banner-03.jpg" alt="Terceiro Slide">
            <div class="carousel-caption d-none d-md-block">
              <div class="carousel-content p-3">
                <div class=" border border-white rounded p-5">
                  <h2 class="font-weight-bold text-uppercase">Sobremesas</h2>
                  <p>
                    Deleniti sapiente ratione eligendi aliquam eum tenetur reiciendis est atque nostrum ducimus.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </section>
    <!-- carousel /-->

    <section class="borda">
        <h3>Principais categorias</h3>
        <div class="custom-container">
            <div class="box-costumizado">
                <div class="icon"><img src="img/img_icons/food.png" width="80px" height="80px"></div>
                <div class="conteudo-caixa">
                    <h3>Orgânico</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and
                        scrambled it to make a type
                    </p>
                    <a href="#" class="btn btn-danger">Leia mais</a>
                </div>
            </div>

            <div class="box-costumizado">
                <div class="icon"><img src="img/img_icons/healthy-food.png" width="80px" height="80px"></div>
                <div class="conteudo-caixa">
                    <h3>Leve</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and
                        scrambled it to make a type
                    </p>
                    <a href="#" class="btn btn-success">Leia mais</a>
                </div>
            </div>

            <div class="box-costumizado">
                <div class="icon"><img src="img/img_icons/location.png" width="80px" height="80px"></div>
                <div class="conteudo-caixa">
                    <h3>Entregas</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and
                        scrambled it to make a type
                    </p>
                    <a href="#" class="btn btn-primary">Leia mais</a>
                </div>
            </div>
        </div>
    </section>

  

    <div id="map"></div><br><br>
   



  

   
  <!-- footer -->
  <section class="footer">
      <div class="container">
        <div class="row pt-4">
          <div class="col-md-4 text-white pt-4 pb-3">
            <h4 class="font-weight-bold text-uppercase">DATERRA</h4>
            <p>
             DaTerra é uma plataforma que conecta pequenos produtores e estabelecimentos a seus clientes oferendo aos usuários um sistema de busca inteligente, que pode ser feita por região ou categoria de produtos, diminuindo trabalho e otimizando o tempo dos nossos clientes ao procurar o que deseja.
            </p>
            <ul class="nav social-media mt-3">
              <li class="px-2">
                <a href="#" class="text-white">
                  <i class="fab fa-facebook-square"></i>
                </a>
              </li>
              <li class="px-2">
                <a href="#" class="text-white">
                  <i class="fab fa-twitter-square"></i>
                </a>
              </li>
              <li class="px-2">
                <a href="#" class="text-white">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="px-2">
                <a href="#" class="text-white">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4 text-white pt-4 pb-3">
            <h4 class="font-weight-bold text-uppercase">Fotos</h4>
            <img class="rounded m-1 folat-left img-fluid" alt="stagram-" src="img/footer-01.jpg">
            <img class="rounded m-1 folat-left img-fluid" alt="stagram-" src="img/footer-02.jpg">
            <img class="rounded m-1 folat-left img-fluid" alt="stagram-" src="img/footer-03.jpg">
            <img class="rounded m-1 folat-left img-fluid" alt="stagram-" src="img/footer-04.jpg">
            <img class="rounded m-1 folat-left img-fluid" alt="stagram-" src="img/footer-05.jpg">
            <img class="rounded m-1 folat-left img-fluid" alt="stagram-" src="img/footer-06.jpg">
          </div>
          <div class="col-md-4 text-white pt-4 pb-3">
            <h4 class="font-weight-bold text-uppercase">Contato</h4>
            <ul class="list-unstyled">
              <li>
                <p>
                  <i class="fas fa-map-marker-alt mr-2"></i>
                  Avenida Guararapes,233 - Santo Antônio, Recife - PE
                </p>
              </li>
              <li>
                <p>
                  <i class="fas fa-mobile-alt mr-2"></i>
                  (81) 9999-9999
                </p>
              </li>
              <li>
                <p>
                  <i class="far fa-envelope mr-2"></i>
                  daterraprodutoslocais@gmail.com
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- footer /-->







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script>

      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -8.0520181, lng: -34.8957943},
          zoom: 13
        });
        
        map.addListener('click', function(event) {
          $('#add_place').modal('toggle');
          document.getElementById('latMap').value = event.latLng.lat();
          document.getElementById('lngMap').value = event.latLng.lng();
          console.log(event);
        });
    

        var places = <?= readAll() ?>;
        
        var infowindow = new google.maps.InfoWindow();



        for(var i=0; i < places.length; i++) {
     
          var marker = new google.maps.Marker({
            map: map,
            draggable: false,
            animation: google.maps.Animation.DROP, //OR BOUNCE DROP
            title: 'Produtor Local',
            position: {
              lat: parseFloat(places[i].lat), 
              lng: parseFloat(places[i].lng)
              }  
          });

       

         
          var content = '<div class="jstext"><strong>' + places[i].name + '</strong><br>' +
           '<strong>Endereço:</strong> ' + places[i].address +'<br>' +
           '<strong>Sobre: </strong> ' + places[i].sobre +'<br>' +
           '<strong>Contato: </strong> ' + places[i].contato +'<br>' +
           '<strong>Tipo: </strong> ' + places[i].type + '</div><br>' +
           '<a class="btn btn-primary" href="?action=edit&id=' + places[i].id +'">Editar</a> ' +
           '<a class="btn btn-danger" href="crud.php?action=delete&id=' + places[i].id +'">Excluir</a>';

         
          
          //Um closure (fechamento) é uma função que se "lembra" do ambiente — ou escopo léxico — em que ela foi criada.
          google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
                return function() {
                    infowindow.setContent(content);
                    infowindow.open(map,marker);
                };
            })(marker,content,infowindow));
          }
         
          /*
         */
      }
  
      
      
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUK4IYdQOZWnQ84u95LyVwSaCy30YjtjU&callback=initMap"
    async defer></script>
  </body>
</html>

<!-- Modal -->
<div class="modal fade" id="add_place" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Place</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="crud.php?action=create">
        <div class="modal-body">
            <div class="form-group row">
              <div class="col-md-12">
                <label>Nome</label>
                <input class="form-control" type="text" name="name">
              </div>
              <div class="col-md-12">
                <label>Endereço</label>
                <input class="form-control" type="text" name="address">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label>Latitude</label>
                <input id="latMap" class="form-control" type="text" name="lat">
              </div>
              <div class="col-md-6">
                <label>Longitude</label>
                <input id="lngMap" class="form-control" type="text" name="lng">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label>Tipo</label>
                <input class="form-control" type="text" name="type">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="edit_place" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Place</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="crud.php?action=update&id=<?= $_GET['id'] ?>">
        <div class="modal-body">
        <?php $place = read($_GET['id']) ?>
            <div class="form-group row">
              <div class="col-md-12">
                <label>Nome</label>
                <input class="form-control" type="text" name="name" value="<?= $place['name'] ?>">
              </div>
              <div class="col-md-12">
                <label>Endereço</label>
                <input class="form-control" type="text" name="address" value="<?= $place['address'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label>Latitude</label>
                <input class="form-control" type="text" name="lat" value="<?= $place['lat'] ?>">
              </div>
              <div class="col-md-6">
                <label>Longitude</label>
                <input class="form-control" type="text" name="lng" value="<?= $place['lng'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label>Tipo</label>
                <input class="form-control" type="text" name="type" value="<?= $place['type'] ?>">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div> 
<!-- Modal -->

<script>
  <?php if($_GET['action'] == 'edit'): ?>
          $('#edit_place').modal('toggle')
          <?php endif; ?>   
</script>

</body>
</html>