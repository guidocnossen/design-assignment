<?php
    $items = [
        0 => [
            'title' => 'Leads',
            'content' => 'Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti iduciumet as molectatur solut fuga. Lacesti aut adiciendio. Et es aut',
            'icon' => '<i class="fas fa-users"></i>',
        ],
        1 => [
            'title' => 'Prijzen',
            'content' => 'Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti iduciumet as molectatur solut fuga. Lacesti aut adiciendio. Et es aut',
            'icon' => '<i class="fas fa-tag"></i>',
        ],
        2 => [
            'title' => 'Grafieken',
            'content' => 'Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti iduciumet as molectatur solut fuga. Lacesti aut adiciendio. Et es aut',
            'icon' => '<i class="fas fa-chart-line"></i>',
        ],
    ];
?>

<section class="section section--content-image-blocks nomargin">
    <div class="section__inner">

        <div class="content-image-blocks">
            <div class="block">
                <div class="block__image">
                    <div class="block__image-inner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/placeholder/placeholder-large-1.jpg');"></div>
                </div>
                <div class="block__inner">
                    <div class="block__content">
                        <div class="section-title section-title--small section-title--small-margin section-title--inverted narrow">
                            <h2 class="title">
                                Uitleg
                            </h2>
                            <p class="subtitle">
                                Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti iduciumet as molectatur solut fuga. Lacesti aut adiciendio. Et es aut Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti iduciumet as molectatur solut fuga. Lacesti aut adiciendio. Et es aut
                            </p>
                        </div><!-- /.section-title -->

                        <div class="content content--inverted narrow">
                            <?php foreach($items as $item): ?>
                                <?php 
                                    $title = $item['title'];
                                    $content = $item['content'];
                                    $icon = $item['icon'];
                                ?>
                                <div class="content_block">
                                    <div class="content_text">
                                        <h2 class="title">
                                            <?php echo $title; ?>
                                        </h2>
                                        <p class="description">
                                            <?php echo $content; ?>
                                        </p>
                                    </div>
                                    <div class="content_icon">
                                        <?php echo $icon; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div><!-- /.content -->
                    </div>
                </div>
            </div>
        </div><!-- /.content-image-blocks -->

    </div>
</section><!-- /.section--content-image-blocks -->