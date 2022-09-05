<?php
	require_once __DIR__ . '/../vendor/autoload.php';

	use ZingChart\PHPWrapper\ZC;

	$datay = array();
	$a = 6.619;
	$b = 0.113;
	$index = 0;
	for ($x = 50; $x < 600; $x += 50, $index++) {
		array_push($datay, $a + $b*$x);
	}

	$zc = new ZC("myChart");
	$zc->setChartType(\ZingChart\PHPWrapper\Types::line);
	$zc->setTitle("PHP 5.6 render");
	$zc->setSeriesData(0, $datay);
	$zc->setChartHeight("400px");
	$zc->setChartWidth("100%");
	$zc->render();