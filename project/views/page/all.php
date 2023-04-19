<h1><?= $h1 ?></h1>
<div id="content">
	<table>
		<tr>
			<th>id</th>
            <th>name</th>
			<th>quantity</th>
			<th>price</th>
		</tr>
		<?php foreach ($pages as $product) { ?>
		<tr>
			<td><?= $product['id'] ?></td>
			<td><?= $product['name'] ?></td>
			<td><?= $product['quantity'] ?></td>
            <td><?= $product['price'] ?></td>
		</tr>
		<?php } ?>
	</table>
</div>