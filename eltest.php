<?
require_once 'vendor/autoload.php';
$elemeno = new \Elemeno\Client('6339f1b0-8caa-11e7-a31a-3feebadaf301');

// $test = $elemeno->getSingle('about-us')
// print_r($test.content.markdown);

// print_r($elemeno->getSingle('about-us')->data->content->aboutUs->markdown);

// print_r($elemeno->getCollection('services'));

$items = $elemeno->getCollectionItems('services')->data;

// foreach($info as $item):
// 	print_r($item);
// 	end foreach;


    foreach($items as $item):
	?>
	<b>item: </b> <?php echo $item->title; ?> <br />
	<?php
		endforeach;
	?>

?>


<!-- 
<?
							print_r($elemeno->getSingle('hero-line')->data->content->heroLine);

							print_r($elemeno->getSingle('hero-line')->data->content->heroTitle);
							print_r($elemeno->getSingle('hero-line')->data->content->menu1);
							print_r($elemeno->getSingle('hero-line')->data->content->menu2);
							print_r($elemeno->getSingle('hero-line')->data->content->act1);
							print_r($elemeno->getSingle('hero-line')->data->content->act2);

							print_r($elemeno->getSingle('hero-line'));

?>
 -->
 
<!-- 
 
 stdClass Object (
 	 [status] => success 
 	 [data] => stdClass Object ( 
 	 	[id] => bfa60952-8b1a-11e7-bead-bf61160ec5c8 
 	 	[slug] => services [title] => Services 
 	 	[projectId] => b1f364f2-8297-11e7-94e6-5fc31aa583fe 
 	 	[dateCreated] => 2017-08-27T11:27:45.882Z 
 	 	[dateUpdated] => 2017-08-27T11:29:58.323Z [published] => 1 
 	 		) 
 	 [links] => stdClass Object ( 
 	 	[self] => https://api.elemeno.io/v1/collections/services 
 	 	[items] => https://api.elemeno.io/v1/collections/services/items
 	 		) 
 	 [meta] => stdClass Object ( 
 	 	[totalRecords] => 1 
 	 	[totalPages] => 1 
 	 		) 
 	 	)
 -->


 	 