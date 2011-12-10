<div id="trombi">
  <?php if($membres->count() > 0): ?>
    <ul>
      <?php foreach($membres as $membre) : ?>
        <li class="membre"><?php echo $membre->getUser() ?>
          <img src="https://demeter.utc.fr/pls/portal30/portal30.get_photo_utilisateur?username=<?php echo $membre->getUser()->getUsername() ?>" height="120" style="float: right;" />
          <ul>
            <li>Rôle : <?php echo $membre->getRole()->getName() ?> (<?php echo $membre->getSemestre() ?>)</li>
            <li>Email : <?php echo $membre->getUser()->getEmailAddress() ?></li>
            <li>Semestre : <?php echo $membre->getUser()->getProfile()->getBranche().'0'.$membre->getUser()->getProfile()->getSemestre() ?> <?php echo $membre->getUser()->getProfile()->getFiliere() ?></li>
          </ul>
          </li>
      <?php endforeach; ?>
    </ul>
  <?php else: ?>
    Cette association n'a pas de membre dans son bureau.
  <?php endif ?>
</div>