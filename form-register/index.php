<?php
	session_start();
?>
	<?php require "header.php";?>
	<div class="conteiner">
		<?php
			if($_SESSION['login'] == ''):
		?>
		<p>Вы не вошли в аккаунт</p>
			<?php else: ?>
				<ul class="list-group">
					<li class="list-group-item item">
						<h3>Контакт 1</h3>
						<ul>
							<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-099-56-325</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Пушкина</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example1@gmail.com</span>
				  			</li>
						</ul>
						<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
					</li></br>

					<li class="list-group-item item">
				  		<h3>Контакт 2</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-099-87-325</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Ришелье</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example2@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 3</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-098-56-325</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Вожирар</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example3@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>
					
					<li class="list-group-item item">
				  		<h3>Контакт 4</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-066-56-325</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Лепик</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example4@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 5</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-095-86-325</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Розье</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example5@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 6</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-098-56-524</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Риволи</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example6@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 7</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-050-65-540</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Муффтар</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example7@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 8</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-099-75-225</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Гран Виа</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example8@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 9</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-099-02-100</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Алкала</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example9@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 10</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-099-856-055</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Майор</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example10@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li>

				</ul>
			<?php endif;?>
	</div>
				<!--<ul class="list-group">
				  	<li class="list-group-item item">
				  		<h3>Контакт 1</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-099-56-325</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Пушкина</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example1@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 2</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-099-87-325</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Ришелье</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example2@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 3</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-098-56-325</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Вожирар</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example3@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 4</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-066-56-325</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Лепик</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example4@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 5</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-095-86-325</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Розье</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example5@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 6</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-098-56-524</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Риволи</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example6@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 7</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-050-65-540</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Муффтар</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example7@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 8</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-099-75-225</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Гран Виа</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example8@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 9</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-099-02-100</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Алкала</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example9@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li></br>

				  	<li class="list-group-item item">
				  		<h3>Контакт 10</h3>
				  		<ul>
				  			<li class="list-group-item">
				  				<label for="">Номер телефона:</label>
				  				<span class="phoneNumber">380-099-856-055</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Адрес:</label>
				  				<span class="street">Улица Майор</span>
				  			</li>
				  			<li class="list-group-item">
				  				<label for="">Почта:</label>
				  				<span class="mail">example10@gmail.com</span>
				  			</li>
				  		</ul>
				  		<button onclick="return saveContact(this, <?=$_SESSION['id']?>);" style="margin:10px 0 0 400px" type="button" class="btn btn-dark">Save</button>
				  	</li>
				</ul>-->

