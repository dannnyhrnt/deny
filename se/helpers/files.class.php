<?php
	class Files {
		function openFolder($nama_direktori){
			$iterator = new FilesystemIterator($nama_direktori);
			$filter = new RegexIterator($iterator, '/.(txt)$/');
			$filelist = array();
			foreach($filter as $entry) {
				$filelist[] = $entry->getFilename();
			}		
			return $filelist;
		}
		
		function readDokumen($nama_file){
			$fopen = fopen($nama_file, "r");
			$fread = fread($fopen,filesize($nama_file)); 
			fclose($fopen);   	
			return $fread;
		}
	}
?>