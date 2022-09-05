<?php

	namespace ZingChart\PHPWrapper;

	enum Types: string
	{
		case line = 'line';
		case area = 'area';
		case bar = 'bar';
		case boxplot = 'boxplot';
		case bubblePie = "bubble-pie";
		case bubble = "bubble";
		case bubblePack = "bubble-pack";
		case bullet = "vbullet";
		case calendar = "calendar";
		case chord = "chord";
		case depth = "depth";
		case flame = "flame";
		case funnel = "funnel";
		case gauge = "gauge";
		case grid = "grid";
		case piano = "piano";
		case null = "null";
		case maps = "zingchart.maps";
		case mixed = "mixed";
		case nestedPie = "nestedpie";
		case tree = "tree";
		case pareto = "pareto";
		case pie = "pie";
		case pie3D = "pie3d";
		case popPyramid = "pop-pyramid";
		case radar = "radar";
		case rankFlow = "rankflow";
		case scatter = "scatter";
		case scorecard = "scorecard";
		case stock = "stock";
		case stream = "stream";
		case tileMap = "tilemap";
		case treeMap = "treemap";
		case variwide = "variwide";
		case vectorPlot = "vectorplot";
		case venn = "venn";
		case waterFall = "waterfall";
		case wordCloud = "wordcloud";
	}
