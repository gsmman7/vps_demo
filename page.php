<?php 
include 'header.php';
	

	
	$STH =  $DBH->query("SELECT * FROM info wHERE id=$page_id ");
	//$STH-> setFetchMode(PDO::FETCH_ASSOC);
	$result = $STH->fetch();







	
 ?>



		<section>
			<h2><?php echo $result['title']; ?></h2>
			<img src="img/<?php echo $result['image'] ; ?>">
			<?php echo $result['tekst'];?>

		</section>
		<section class="features">
		<ul>
			<?php
				$STH = $DBH->query("SELECT value FROM specs wHERE info_id = $page_id");
				while ($row = $STH->fetch()) {
					echo "<li>".$row['value']."</li>";
					}
				  ?>
			
			<ul>


			<?php
				$STH = $DBH->query("SELECT value FROM os wHERE info = $page_id");
				while ($row = $STH->fetch()) {
					echo "<li>".$row['value']."</li>";
					}
				  ?>
				
			</ul>
		</section>
		<section>
			<table>
				<tr>
					<th>Starter 1</th>
					<th>Starter 2</th>
					<th>Starter 3</th>
					<th>Starter 4</th>
					<th>Starter 5</th>
				</tr>
				<tr>
					<td><b>512 MB</b> RAM</td>
					<td><b>1 GB</b> RAM</td>
					<td><b>2 GB</b> RAM</td>
					<td><b>4 GB</b> RAM</td>
					<td><b>8 GB</b> RAM</td>
				</tr>
				<tr class="even">
					<td><b>25 GB</b> diskspace</td>
					<td><b>50 GB</b> diskspace</td>
					<td><b>100 GB</b> diskspace</td>
					<td><b>200 GB</b> diskspace</td>
					<td><b>400 GB</b> diskspace</td>
				</tr>
				<tr>
					<td><b>250 GB</b> traffic</td>
					<td><b>500 GB</b> traffic</td>
					<td><b>1000 GB</b> traffic</td>
					<td><b>2000 GB</b> traffic</td>
					<td><b>4000 GB</b> traffic</td>
				</tr>
				<tr class="even">
					<td><b>&euro; 0</b> setup</td>
					<td><b>&euro; 0</b> setup</td>
					<td><b>&euro; 0</b> setup</td>
					<td><b>&euro; 0</b> setup</td>
					<td><b>&euro; 0</b> setup</td>
				</tr>
				<tr>
					<td><b>&euro; 7</b> p/m</td>
					<td><b>&euro; 10</b> p/m</td>
					<td><b>&euro; 15</b> p/m</td>
					<td><b>&euro; 25</b> p/m</td>
					<td><b>&euro; 50</b> p/m</td>
				</tr>
				<tr class="order even">
					<td><button>Order</button></td>
					<td><button>Order</button></td>
					<td><button>Order</button></td>
					<td><button>Order</button></td>
					<td><button>Order</button></td>
				</tr>

			</table>
		</section>
		<footer>
			Copyright &copy; 2013
		</footer>
	</div>
</body>
</html>