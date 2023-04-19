<?php foreach($data as $users){ ?>
<h1>Пользователь <?= $users['name'] ?></h1>
<p>
	Возраст: <?= $users['age'] ?>
</p>
<p>
	Зарплата: <?= $users['salary'] ?>
</p>
<?php } ?>