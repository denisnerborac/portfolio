
	<?php
	foreach($projects as $key => $project) {

		$project_time = strtotime($project['date']);
		$project_date = date('F Y', $project_time);
	?>
	<!-- Portfolio Modals -->
	<div class="portfolio-modal modal fade" id="portfolioModal<?= $project['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<h2><?= $project['title'] ?></h2>
							<hr class="star-primary">
							<img src="img/portfolio/<?= $project['picture'] ?>" class="img-responsive img-centered" alt="">
							<p>
								<?= nl2br($project['description']) ?>
							</p>
							<ul class="list-inline item-details">
								<li>Client: <strong><a href=""><?= $project['client'] ?></a></strong>
								</li>
								<li>Date:
									<strong><a href=""><?= $project_date ?></a></strong>
								</li>
								<li>Service:
									<strong><a href=""><?= $project['tags'] ?></a></strong>
								</li>
							</ul>
							<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>