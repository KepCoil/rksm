<?php include("_head.php") ?>
<?php include("_header.php") ?>
<?php include("_audit-menu-inner.php") ?>

<main>
	<div id="wrap">

		<div class="container">

			<h2 class="inner-title">Карта корпусов</h2>
			
			<div class="wrap-corpuses-map">
				<div class="row">
					<div class="col-md-6">
						<div id="js-corpuses-list" class="map-corpuses"></div>
					</div>
					<div class="col-md-18">
						<div id="js-corpuses-map" class="ya-maps"></div>
					</div>
				</div>
			</div>

			<div style="color: #555; margin:2rem 0 3rem 0">
				<i>*в случае нахождения ошибки и для добавления новых объектов на карту, необходимо сообщить через  
					<a href="#">"Форму обратной связи"</a>
				</i>
			</div>
			
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th style="width: 3rem">№</th>
							<th style="width: 7rem">Корпус</th>
							<th>Адрес</th>
							<th>Подразделения</th>
							<!-- <th>Контакты</th> -->
							<th>Ближайшие остановки</th>
						</tr>
					</thead>
					<tbody>
						<!-- ИНСТИТУТЫ  -->
						<tr>
							<td colspan="5"><h4>Институты</h4></td>
						</tr>
						<tr>
							<td>1.</td>
							<td>«А»</td>
							<td>пр. им. газеты «Красноярский рабочий», 31</td>
							<td>Институт космической техники (каб. 202)</td>
							<!-- <td>
								<p>Директор института Левко Валерий Анатольевич</p>
								<p><strong>E-mail: </strong>levko@sibsau.ru</p>
								<p><strong>Тел.: </strong>(391) 262-93-76, 291-90-16</p>
							</td> -->
							<td>«Аэрокосмический университет»</td>
						</tr>
						<tr>
							<td>2.</td>
							<td>«В»</td>
							<td>пр. им. газеты «Красноярский рабочий», 29</td>
							<td>Военный институт (каб. 37)</td>
							<!-- <td>
								<p><strong>E-mail: </strong>uvc@sibsau.ru</p>
							</td> -->
							<td>«Аэрокосмический университет», «ДК 1-го Мая», «Школа»</td>
						</tr>
						
						<tr>
							<td>3.</td>
							<td>«Л»</td>
							<td>пр. им. газеты Красноярский рабочий, 31</td>
							<td>Научно-образовательный центр "Институт космических исследований и высоких технологий" (каб. 806)</td>
							<!-- <td>
								<p>Директор института Кузнецов Александр Алексеевич </p>
								<p><strong>E-mail: </strong>kuznetsov@sibsau.ru</p>
								<p><strong>Тел.: </strong>+7(391) 213-96-52</p>
							</td> -->
							<td>«Аэрокосмический университет»</td>
						</tr>


						<tr>
							<td>4.</td>
							<td>«Н»</td>
							<td>пр. им. газеты Красноярский рабочий, 31</td>
							<td>
								<p>Инженерно-экономический институт (каб. 606а),</p>
								<p>Институт информатики и телекоммуникаций (каб. 206), </p>
								<p>Институт социального инжиниринга (каб. 404)</p>
							</td>
							<!-- <td>
								<p>Директор института Ерыгина Лилия Викторовна </p>
								<p><strong>E-mail: </strong>+7(391) 291-92-92</p>
								<p><strong>Тел.: </strong>erigina@sibsau.ru</p>
							</td> -->
							<td>«Аэрокосмический университет»</td>
						</tr>

						<tr>
							<td>5.</td>
							<td>«О»</td>
							<td>ул. 60 лет Октября, 109</td>
							<td>
								<p>Институт гражданской авиации и таможенного дела (каб. 500а)</p>
							</td>
							<td>«Лукас»</td>
						</tr>

						<tr>
							<td>6.</td>
							<td>«С»</td>
							<td>ул. Семафорная, 433/1</td>
							<td>
								<p>Институт машиноведения и мехатроники (каб. 221)</p>
							</td>
							<td>«Площадь 50 лет Победы»</td>
						</tr>

						<tr>
							<td>7.</td>
							<td>«Ал»</td>
							<td>ул. Марковского, 57</td>
							<td>
								<p>Институт дополнительного образования (каб. 315а)</p>
							</td>
							<td>«Стадион Локомотив», «Марковского»</td>
						</tr>

						<tr>
							<td>8.</td>
							<td>«Бл»</td>
							<td>ул. Марковского, 57</td>
							<td>
								<p>Институт электронно-дистанционного обучения (каб. 414),</p>
							</td>
							<td>«Стадион Локомотив», «Марковского»</td>
						</tr>
						

						<!-- ФАКУЛЬТЕТЫ  -->
						<tr>
							<td colspan="5"><h4>Факультеты</h4></td>
						</tr>

						<tr>
							<td>1.</td>
							<td>«Гл»</td>
							<td>пр. Мира, 82</td>
							<td>
								<p>Лесоинженерный факультет (каб. 204),</p>
								<p>Лесохозяйственный факультет (каб. 310),</p>
								<p>Факультет механической технологии древесины (каб. 213),</p>
								<p>Факультет переработки природных соединений (каб. 353)</p>
							</td>
							<td>«Технологический университет», «Стадион Локомотив», «Перенсона»</td>
						</tr>

						<tr>
							<td>2.</td>
							<td>«7»</td>
							<td>пр. Мира, 82</td>
							<td>
								<p>Факультет экономики и управления бизнес-процессами (каб. 2/308)</p>
							</td>
							<td>«Технологический университет», «Стадион Локомотив», «Перенсона»</td>
						</tr>

						<tr>
							<td>3.</td>
							<td>«Бл»</td>
							<td>ул. Марковского, 57</td>
							<td>
								<p>Факультет химических технологий (каб. 327)</p>
							</td>
							<td>«Стадион Локомотив», «Марковского»</td>
						</tr>

						<tr>
							<td>4.</td>
							<td>«Ю»</td>
							<td>ул. Юности, 18а</td>
							<td>
								<p>Факультет физической культуры и спорта</p>
							</td>
							<td>«ДК 1 Мая»</td>
						</tr>

						<!-- Колледж  -->
						<tr>
							<td colspan="5"><h4>Колледж</h4></td>
						</tr>

						<tr>
							<td>1.</td>
							<td>«К»</td>
							<td>пр. им. газеты Красноярский рабочий, 31</td>
							<td>Аэрокосмический колледж (каб. 314)</td>
						<!-- 	<td>
								<p><strong>Тел.: </strong>(391) 264-15-88, 264-06-59</p>
								<p><strong>Приемная комиссия: </strong>(391) 264-57-35</p>
								<p><strong>E-mail:  </strong>ak@sibsau.ru</p>
							</td> -->
							<td>«Аэрокосмический университет»</td>
						</tr>

					
					</tbody>
				</table>
			</div>

		
		</div>

	
		<script src="libs/yandex-map/yandex-api.js"></script>
		<script src="libs/yandex-map/map.js"></script>

	</div>
</main>

<?php include ("_footer.php"); ?>
<?php include ("_end.php"); ?>