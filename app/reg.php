<?php include("_head.php"); ?>
<?php include("_header.php"); ?>


<main>

	<div id="wrap">
		<div class="container">

			<h2 class="page-main-title">Регистрация</h2>

			<div class="reg-page">
				<div class="tabs-container">

					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#tab-1" aria-controls="home" role="tab" data-toggle="tab">Регистрация 1</a>
						</li>
						<li role="presentation">
							<a href="#tab-2" aria-controls="profile" role="tab" data-toggle="tab">Регистрация 2</a>
						</li>
						<li role="presentation">
							<a href="#tab-3" aria-controls="profile" role="tab" data-toggle="tab">Регистрация 3</a>
						</li>
					</ul>

					
					<div class="tab-content">

						<div role="tabpanel" class="tab-pane fade in active" id="tab-1">
							<div class="reg-page__info">Таб 1</div>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="tab-2">
							<div class="reg-page__info">Таб 2</div>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="tab-3">
							<div class="reg-page__info">Таб 3</div>
						</div>

					</div>


				</div>
			</div>
			
		</div>

	</div>

</main>

<?php include("_footer.php"); ?>