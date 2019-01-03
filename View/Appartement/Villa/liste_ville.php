<?php
      require_once '../../header.php';
      require_once '../../Model/villa.php';
      require_once '../../Model/immobiliere.php';
      require_once '../../Controller/Villa/liste.php';
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../../css/style3.css"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <br>
    <h4>Liste de Villa </h2>
	<br>
    <?php foreach($lesvilla as $ligne)  { ?>
	     <div class="row" id="ads">
    <!-- Category Card -->
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" <?php echo " <img src ='../../uploads/".$ligne['image_ville']  ;  ?>   alt="Card image cap">
        <div class="card-body">
        <?php 


          echo"<td>".$ligne['reference']."</td>";
          echo"<td>".$ligne['proprietaire']."</td>";
          echo"<td>".$ligne['localite']."</td>";
          echo"<td>".$ligne['surface']."</td>";
          echo"<td>".$ligne['domaineUsage']."</td>";
          echo"<td>".$ligne['nbPieces']."</td>";
          echo"<td>".$ligne['nbEtages']."</td>";
          echo"<td> <img src ='../../uploads/".$ligne['image_ville']." ' height='200' width='200'> </td>";
          
          echo"<td><a href=../../View/Villa/modif_villa.php?id=$ligne[reference]>  UPDATE</a></td>";
          echo"<td><a href=../../Controller/Villa/delete.php?id=$ligne[0]> DELETE </a></td>";

  echo "</tr>";

 

?>
        
        
        ?>
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  

    </div>

    <?php } ?> 
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../../images/villa/louer-villa" alt="Card image cap">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

    </div>

    <div class="col-md-4">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">Price Reduced</span>
                <span class="card-notify-year">2018</span>
                <img class="img-fluid" src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC091A021001.jpg&width=440&height=262" alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">Used</span>
                <span class="card-detail-badge">$22,000.00</span>
                <span class="card-detail-badge">8000 Kms</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>Honda Accord Hybrid LT</h5>
                </div>
                <a class="ad-btn" href="#">View</a>
            </div>
        </div>
    </div>

</div>
</div>
