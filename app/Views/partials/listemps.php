<?php if(empty($emprendimientos)):?>
    <div class="alert alert-info mt-5 text-center" role="alert">
         No se han encontrado emprendimientos en esta zona!
    </div>
<?php endif?>


<?php
    foreach($emprendimientos as $emp):
 ?>

        <div class="col-md-6 col-lg-4">
            <div class="business-card">
                <img src="../public/uploads/<?= $emp->nomcarpeta?>/logo.jpg">
                <div class="business-overlay" onclick='window.location.href="<?=base_url("/single/$emp->id");?>"'></div>
                <div class="business-content">
                    <h5><?= $emp->nombre?></h5>
                    <p class="small"><?= $emp->slogan?></p>
                    <span class="badge-custom tech"><?= $emp->categoria?></span>
                </div>
            </div>
        </div>
<?php endforeach; ?>