<?php

include 'src/jpgraph.php';
  include 'src/jpgraph_bar.php';
  
  $array = array(3, 4, 5);
  $graph = new Graph(900,660);
  $graph->SetScale('textint');
  $graph->SetBackgroundImage('headphones.jpg');
  $graph->SetBackgroundImageMix(70);
  $graph->SetShadow();
  $graph->SetMarginColor("#5599FF");

  $graph->title->Set("Playlist!");
  //$graph->subtitle->Set("Don't you think so?");

  $plot = new BarPlot($array);
  $plot->SetFillColor(array('orange', '#FFEE00', '#FFDD00', '#FFCC00', '#FFBB00', '#FFAA00', '#FF9900'));
 // $bplot->SetColor("orange");
  $plot->SetWeight(2);
  $graph->Add($plot);
  
  $genre=array('rock','pop','jazz');
  
  $graph->yaxis->SetTitle("No. of songs", "middle");
  $graph->xaxis->SetTitle("Genre", "middle");
  
  //$days = $gDateLocale->GetShortDay();
  $graph->xaxis->SetTickLabels($genre);

  $graph->Stroke();
  
 ?>
