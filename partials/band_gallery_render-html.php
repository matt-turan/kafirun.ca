  <?php
    if (file_exists($galleryJsonFile)) {
      $jsonDataFile = $galleryJsonFile;
      $jsonDataFromFile = file_get_contents($jsonDataFile);
      $rows = json_decode($jsonDataFromFile);
    } else {
      echo '<div class="alert alert-danger" role="alert">';
        echo '<strong>Warning!</strong> The file <strong> ' + $galleryJsonFile; + '</strong> does not exist.';
      echo '</div>';
      return;
    }

    if (isset($rows->rows) && is_array($rows->rows) && isset($rows->rows[0])) {
      $rowsData = $rows->rows;
      $rowData = $rowsData;
    } else {

    }
  ?>

  <?php foreach ($rowData as $rows) { ?>
    <div class="row">
     <!-- <p>Number of columns: <?php // echo count($rows->columns); ?></p> -->
      <?php foreach ($rows->columns as $column) { ?>
          <div class="<?php echo $columnsClass ?> text-center block-margin-bottom">
            <img src="<?= $column->imgSrc; ?>" class="img-responsive center-block member-img" alt="<?= $column->altText; ?>" data-toggle="modal" data-target="<?= $column->dataTarget; ?>" tabindex="0">
            <div id="<?= $column->modalContent->modalId; ?>" class="modal fade" tabindex="-1" role="dialog" aria-label="<?= $column->modalContent->ariaLabel; ?>" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered <?= $column->modalContent->class; ?>">
                <button class="button modal-close-btn" data-dismiss="modal" aria-label="Close">X</button>
                <div class="modal-content modal-content-cst">
                    <div class="modal-body text-center">
                      <img src="<?= $column->modalContent->imgSrc; ?>" class="img-responsive center-block" alt="<?= $column->altText; ?>">
                    </div>
                </div>
              </div>
            </div>
          </div>
      <?php } ?>
    </div>
    <hr>
  <?php } ?>