<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package piestukas.lt
 */

get_header();


			$query = new WP_Query(array(
'post_type' => 'pencils'

));


?>

<head>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>



	<main id="primary" class="site-main">

<!-- <a class="bi" ><img height= "30" width="30" src="data:image/png;base64,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"/></a> -->

<h1 class="item" align="center"> Item list 

<img class="logo" src="https://cdn.pixabay.com/photo/2018/05/04/17/42/pencil-3374506_1280.png" width="50px" height="50px" alt="">

</h1>
			




	


<table class="table table-striped">
			<thead>
				<tr class="table-white">
					<th> Title </th>
					<th> Price </th>
					<th> Category </th>
					<th> About </th>
					<th> Stock </th>
				</tr></thead>
			<tbody>
	<?php
			if($query->have_posts()){
		while($query->have_posts()){
			$query->the_post();
	?>
				<tr class="line">
					<td><?=get_field('title',get_the_ID())?></td>
					<td><?=get_field('price',get_the_ID())?></td>
					<td><?=get_field('category',get_the_ID())?></td>
					<td><?=get_field('about',get_the_ID())?></td>
					<td><?=get_field('stock',get_the_ID())?></td>

				</tr>		
				<?php		
					}
				}
				?>
		</tbody>
			
		</table>
		

		

		
	</main><!-- #main -->




<?php


// get_footer();

