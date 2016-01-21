<?php 
	 function disktotal() {
		
		$disk = directory_map ( 'uploads', FALSE, TRUE );
		$totaldisk = 0;
		if (is_array ( $disk )) {
			foreach ( $disk as $folder => $files ) {
				if (is_array ( $files )) {
					foreach ( $files as $file ) {
						if (! is_array ( $file )) {
							if (is_file ( 'uploads/' . $folder . '/' . $file ))
								$totaldisk += filesize ( 'uploads/' . $folder . '/' . $file );
						}
					}
				} else {
					if (is_file ( 'uploads/' . $files ))
						$totaldisk += filesize ( 'uploads/' . $files );
				}
			}
		}
		return number_format ( $totaldisk / 1024 / 1024 / 1024, 3 );
	}
	
	 function set_upload_options($type = 'image') {
		$local='../www/uploads/';
		if ($type == 'image') {
			if (! is_dir ( $local.'images/' )) {
				mkdir (  $local.'images/', 0775, TRUE );
			}
			$config = array ();
			$config ['upload_path'] =  $local.'images/';
			$config ['allowed_types'] = 'gif|jpg|png';
			$config ['max_size'] = '10000000';
			$config ['max_width'] = '10240';
			$config ['encrypt_name'] = FALSE;
			$config ['max_height'] = '7680';
			$config ['remove_spaces'] = TRUE;
		} else {
			if (! is_dir ( 'uploads/docs/' )) {
				mkdir ( './uploads/docs/', 0775, TRUE );
			}
			$config = array ();
			$config ['upload_path'] =  $local.'docs';
			$config ['allowed_types'] = 'pdf|doc|docx';
			$config ['encrypt_name'] = FALSE;
			$config ['max_size'] = '20000000';
			$config ['remove_spaces'] = TRUE;
		}
		return $config;
	}
	 function tracker() {
		$tracker_dir = '../www/uxtracker';
		
		$map = directory_map ( $tracker_dir . '/reports', FALSE, TRUE );
		$totaldisk = disktotal ();
		$visitas = array ();
		$graph = '';
		foreach ( $map as $year => $reports ) {
			$visitas [stripslashes ( $year )] ['total'] = 0;
			$visitas ['total'] = 0;
			foreach ( $reports as $month => $report ) {
				$get_report = file_get_contents ( base_url ()   . $tracker_dir . '/?api=view&month=' . $month . '&year=' . $year );
				$array = json_decode ( stripslashes ( $get_report ) );
				$visitas [stripslashes ( $year )] [stripslashes ( $month )] = $array;
				$visitas [stripslashes ( $year )] ['total'] += $array->total;
				$visitas ['total'] += $array->total;
			}
		}
		$uniq = array ();
		$indexa = array ();
		$indexa ['home'] = 0;
		$pageviews = 0;
		$langs = array ();
		$countrys = array ();
		$vista = array ();
		$n = 0;
		$arrayday = array ();
		foreach ( $visitas as $year => $report ) {
			if (is_array ( $report )) {
	
				foreach ( $report as $month => $json ) {
						
					if ($month != 'total') {
						foreach ( $report [$month]->reports as $key => $reportx ) {
								
							foreach ( $reportx->visitas as $day => $repo ) {
								$n += 1;
							}
						}
					}
				}
	
				foreach ( $report as $month => $json ) {
						
					if ($month != 'total') {
	
						$a = 0;
						foreach ( $json->reports as $week => $visits ) {
								
							foreach ( $visits->visitas as $day => $repo ) {
	
								$pagesday = 0;
								$uniques = 0;
								$index = 0;
								foreach ( $repo as $key => $visita ) {
									$pagesday ++;
										
									$url = str_replace ( 'http://projetos/angular-admin/no/', '', $visita->request_url );
									if ($url == '') {
										$indexa ['home'] += 1;
										$index += 1;
									}
									$ip = $visita->ip;
									if (isset ( $uniq [$ip] )) {
										$uniq [$ip] += 1;
									} else {
										$uniq [$ip] = 1;
									}
								}
								$uniques = count ( $uniq );
								$data = $year . '-' . $month . '-' . $day;
								if ($uniques > 0 && $index == 0) {
									$index = 1;
								}
								$arrayday [$year] [$month] [$day] ['visitas'] = $repo;
								$arrayday [$year] [$month] [$day] ['total'] = $pagesday;
								$arrayday [$year] [$month] [$day] ['totalusers'] = $uniques;
								$arrayday [$year] [$month] [$day] ['totalindex'] = $index;
								$arrayday [$year] [$month] [$day] ['period'] = $year . '-' . date ( 'm', strtotime ( $data ) ) . '-' . $day;
								$a = 1;
								$pageviews+=$pagesday;
							}
							
						}
						
					}
				}
			}
		}
		foreach ( $arrayday as $year => $repors ) {
			foreach ( $repors as $mont => $visits ) {
				$data = $year . '-' . $mont;
				$days = date ( 't', strtotime ( $data ) );
				while ( $days > 0 ) {
					if (isset ( $arrayday [$year] [$mont] [$days] )) {
					} else {
						$data2 = $year . '-' . $mont . '-' . $days;
						$arrayday [$year] [$mont] [$days] ['period'] = $year . '-' . date ( 'm', strtotime ( $data2 ) ) . '-' . $days;
						$arrayday [$year] [$mont] [$days] ['total'] = 0;
						$arrayday [$year] [$mont] [$days] ['totalusers'] = 0;
						$arrayday [$year] [$mont] [$days] ['totalindex'] = 0;
					}
					$days --;
				}
			}
		}
		$graph = '';
		$e = 0;
		$go = 0;
		foreach ( $arrayday as $year => $reps ) {
			$con = count ( $reps );
			foreach ( $reps as $month => $day ) {
				$e += 1;
				$ex = 0;
				$dusmon = count ( $day );
				foreach ( $day as $key => $visits ) {
					if ($go == 0) {
						$graph .= "[";
						$go = 1;
					}
					$ex ++;
					$graph .= "{";
					$graph .= '"period":"' . $visits ['period'] . '",';
					$graph .= '"total":' . $visits ['total'] . ',';
					$graph .= '"totalusers":' . $visits ['totalusers'] . ',';
					$graph .= '"totalindex":' . $visits ['totalindex'];
					// echo $key.'a=>'.$a.'---'; echo $n;echo "\n";
					if ($ex == $dusmon && $e == $con) {
						$graph .= '}]';
					} else {
						$graph .= '},';
					}
				}
			}
		}
		$visitas ['diskspace'] = $totaldisk;
		$visitas ['views'] = $vista;
		$visitas ['countrys'] = $countrys;
		$visitas ['langs'] = $langs;
		$visitas ['total_pages'] = $pageviews;
		$visitas ['total_index'] = $indexa ['home'];
		$visitas ['uniques'] = count ( $uniq );
		$visitas ['graph'] = $graph;
		return $visitas;
	}