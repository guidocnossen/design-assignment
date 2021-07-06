<?php 
	$items = [
		0 => [
			'most_chosen' => true,
			'title' => 'Basic',
			'price' => '1296',
			'content' => 'Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti iduciumet as molectatur solut fuga. Lacesti aut adiciendio. Et es aut Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti iduciumet as molectatur solut fuga. Lacesti aut adiciendio. Et es aut Eos wer dolenEhenimus.',
			'link' => [
				'url' => '#',
				'title' => 'bestel',
				'target' => '',
			],
		],
		1 => [
			'most_chosen' => false, 
			'title' => 'Premium',
			'price' => '1576',
			'content' => 'Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti iduciumet as molectatur solut fuga. Lacesti aut adiciendio. Et es aut Eos wer dolenEhenimus. Nit ra sequi vera venimus rate doloresti iduciumet as molectatur solut fuga. Lacesti aut adiciendio. Et es aut Eos wer dolenEhenimus.',
			'link' => [
				'url' => '#',
				'title' => 'bestel',
				'target' => '',
			],
		],
	];
?>
<section class="section">
	<div class="section__inner">
		<div class="container">

			<div class="section-title section-title--x-small text-center centered">
                <h2 class="title title--uppercase">
                    Prijzen
                </h2>

                <hr>
            </div>

            <div class="plans centered">
                <div class="plans__grid">

                    <?php foreach ($items as $item): ?>
                        <?php
                        	$most_chosen = $item['most_chosen'];
                            $title = $item['title'];
                            $price = $item['price']; 
                            $content = $item['content'];
                            $cta = $item['link'];
                        ?>
                        <div class="plan">
                            <div class="plan__header<?php if ($most_chosen): ?> header--most-chosen<?php endif; ?>">
                                <h3 class="plan__title">
                                    <?php echo $title; ?>
                                </h3>
                                <div class="plan__price">
                                    &euro;<?php echo $price; ?>,-
                                </div>
                            </div>
                            <div class="plan__body">
                            	<p>
									<?php echo $content; ?>
								</p>
                            </div>
                            <?php if ($cta): ?>
                                <div class="plan__footer">
                                    <?php if ($cta['title']): ?>
                                        <a <?php if ($cta['url']): ?> href="<?php echo $cta['url']; ?>" <?php endif; ?> class="plan__btn btn btn--full btn--large <?php if ($most_chosen): ?>btn--primary<?php else: ?>btn--secondary<?php endif; ?>" target="<?php echo $cta['target']; ?>">
                                            <?php echo $cta['title']; ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div><!-- /.plans -->
		</div>
	</div>
</section>