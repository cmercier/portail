<div class="part" >
  <?php include_partial('infojob/topbar') ?>
  <div class="well"  style="border:1 px grey solid">
    <?php if($sf_user->isAuthenticated() && $annonce->getUserId() == $sf_user->getGuardUser()->getId()): ?>
      <a href="<?php echo url_for('annonce/edit?key=' . $annonce->getId()) ?>"  style="float:left;margin-top:12px; margin-right: 5px;"><i class="icon-pencil"></i></a>
    <?php endif ?>
    <h2>Annonce n° <?php echo $annonce->getId() ?> : <?php echo $annonce->getTitre() ?></h2>
      <p style="font-style: italic;">
      Posté le <?php echo $annonce->getCreatedAt() ?>
    
    </p> 
    <b>Descriptif: </b><p><?php echo $annonce->getTexte() ?></p>
    <div class="row-fluid">
    <?php 
    $file="/images/icones/".$annonce->getCategorie().".jpg";
   
    if (file_exists($file)==0)
	 $file="/images/icones/autre.jpg";
    	
    ?>
      <div class="span2">
      <img src=<?php echo $file ?> style="witdh:90px; height:70px"></div>
    	<div class= "span10">
        <p>
          <?php if($annonce->getRemuneration() != '0.00'): ?><b>Prix :</b> <?php echo $annonce->getRemuneration() ?> €<br /><?php endif ?>
          <?php if($annonce->getLieu()): ?><b>Lieu:</b> <?php echo $annonce->getLieu() ?><br /><?php endif ?>
        </p>
      </div>
    </div>
    <br/>
    <br/>
     
    <br/>
    <br/>
    <div class="row-fluid">
      <div class="span9">
        <?php if($sf_user->isAuthenticated()): ?>
        <p><strong>Email : </strong><a href="mailto:<?php echo $annonce->getEmail(); ?>"><?php echo $annonce->getEmail(); ?></a><br/></p>
        <p><strong>Téléphone : </strong><?php echo $annonce->getTelephone(); ?></p>
        <?php else: ?>
        <a href="<?php echo url_for('cas') ?>" class="btn btn-warning active" style="color: #000000;">Connectez-vous <i class="icon-black icon-user"></i></a>

        <?php endif; ?>
      </div>
      <div class="span3">
        <a href="<?php echo url_for('infojob/offres') ?>" class="btn active"><i class="icon-arrow-left"></i> Retour</a>
        <br/><br/>
        <a href="<?php echo url_for('infojob/signal?id=' . $annonce->getId())?>" rel="nofollow">Signaler l'annonce</a><br/>
        <a href="<?php echo url_for('infojob/myoffer?id=' . $annonce->getId())?>" rel="nofollow">C'est votre offre ?</a>
      </div>
    </div>
  </div>
</div>
