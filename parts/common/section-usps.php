<?php
    $usps = [
        0 => [
            'icon' => '<i class="fas fa-users"></i>',
            'title' => 'Veel meer leads',
            'description' => 'Optas solestissin eos wer dolen'
        ],
        1 => [
            'icon' => '<i class="fas fa-tag"></i>',
            'title' => 'Duidelijke prijsbepaling',
            'description' => 'Optas solestissin eos wer dolen'
        ],
        2 => [
            'icon' => '<i class="fas fa-chart-line"></i>',
            'title' => 'Hoger rendement',
            'description' => 'Optas solestissin eos wer dolen'
        ],
    ];
?>    
<section class="section section--larger-margin">
    <div class="section__inner">
        <div class="container">

            <div class="usps-large">
                <div class="usps-large__inner">
                    <?php foreach ($usps as $usp): ?>
                        <div class="usp">
                            <div class="usp__icon">
                                <?php echo $usp['icon']; ?>
                            </div>
                            <div class="usp__content text-center">
                                <h3 class="usp__title"><?php echo $usp['title']; ?></h3>
                                <p class="usp__description">
                                    <?php echo $usp['description']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div><!-- /.usps-large -->

            <hr class="dark">
            
        </div>
    </div>


</section><!-- /.section--usps -->