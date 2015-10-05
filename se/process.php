<?php
	$awal = microtime(true);
	set_time_limit(0);

	if(isset($_POST['searchinput'])) {
		extract($_POST);
		// include composer autoloader
		require_once __DIR__ . '/vendor/autoload.php';
		require_once __DIR__ . '/helpers/files.class.php';
		require_once __DIR__ . '/helpers/arrays.class.php';
		require_once __DIR__ . '/helpers/textmining.class.php';

		// create stemmer
		// cukup dijalankan sekali saja, biasanya didaftarkan di service container
		$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
		$stemmer  = $stemmerFactory->createStemmer();

		// stem
		$keywords = strtolower($searchinput);
		$output   = $stemmer->stem($keywords);

		//echo $output . "\n";
	

		$files = new Files();
		$tm = new TextMining();
		$arrays = new Arrays();

		$folder_text = "files/text/";
		$folder_tes = "files/testfile/";
		$file_stopword = $folder_tes."stopword.txt";

		
		$array_file = $files->openFolder($folder_text);
		//echo "<p align = 'left'>Daftar File yang akan di Mining : </p>";
		// $arrays->printArray($array_file);
		$str_stopword = $files->readDokumen($file_stopword);

		$words_stemmed = $stemmer->stem($keywords); //steming
		$words_tokenized = $tm->tokenizing($words_stemmed);
		$words_filtered = $tm->filtering($words_tokenized, $str_stopword);

		// print_r($words_tokenized);
		// echo "<BR/>";

		//echo "<p align = 'left'>Kata kunci Anda : </p>";
		// $arrays->printArray($hasil_filtering_key);

		$array = array();
		$a = 0;
		$count_results = 0;
		foreach($array_file as $file){
			//echo "Hasil Pencarian Keyword Pada File : <a href = '$folder_text$file'>".$file."</a>\n";
			$doc = $files->readDokumen($folder_text.$file); //baca file
			$doc_stemmed = $stemmer->stem($doc); //steming
			$doc_tokenized = $tm->tokenizing($doc_stemmed);
			$doc_filtered = $tm->filtering($doc_tokenized, $str_stopword); //buang stopword
			$result_analyzed = $tm->analyzing($doc_filtered, $words_filtered); //analisis
			//$arrays->printArray($hasil_analyzing);
			// print_r($result_analyzed);
			// echo "<BR/>";
			// echo "<BR/>";
			$tmp_score = 0;
			foreach ($result_analyzed as $ha) {
				$tmp_score += $ha;
			}

			if($tmp_score) {
				$tmp_arr = array();
				$tmp_arr = array(
					'file' 	=> $file,
					'score'	=> $tmp_score
				);

				array_push($array, $tmp_arr);
				$count_results++;
			}
		}

		// print_r($array);

		

		$urut = $arrays->sorting($array);

		/*
		echo "-------------------------------------------";

		foreach($urut as $u){
			echo "Hasil Pencarian Keyword Pada File : <a href = '$folder_text".$u['file']."'>".$u['file']."</a><BR/>";
			echo "Ranking: ". $u['rank'] ."<BR />";
		}
		*/		
	}
	$akhir = microtime(true);
?>


<div class="big-search-result-info clearfix">
  <div class="pull-left">Showing results for <strong><?=$keywords?></strong>.</div>
  <div class="pull-right"><strong><?=$count_results;?></strong> documents found.</div>
</div>

<div>
	<ul class="big-search-results">

      	<?php
	      	foreach($urut as $u){
				// echo "Hasil Pencarian Keyword Pada File : <a href = '$folder_text".$u['file']."'>".$u['file']."</a><BR/>";
				// echo "Ranking: ". $u['rank'] ."<BR />";

				$file = file_get_contents($folder_text.$u['file'], true);
				$file = substr($file, 0, 200) ."...";
			
      	?>
	      <li>
	        <div class="row">
	          <div class="col-md-2">
	            <div class="result-meta">
	              <i class="fa fa-file-text"></i>
	              <span><strong><?=$u['score'];?></strong> word(s) match</span>
	            </div>
	          </div>
	          <div class="col-md-10">
	            <div class="result-main">
	              <h4>
	              	<a target="_blank" href="<?php echo $folder_text.$u['file']; ?>"><?=$u['file']?></a>
	              </h4>
	              <p><?=$file;?></p>
	            </div>
	          </div>
	        </div>
	      </li>
		<?php } ?>

		<?php 
			if($count_results == 0)
				echo "
					<BR />
					<div style='text-align: center;'>
						<h1>Sorry, no result found.</h1>
					</div>
					<BR />";

		?>

    </ul>
</div>

<hr />

<div>
	<?php $lama = $akhir-$awal; echo "Time elapsed: <strong>$lama second</strong>"; ?>
</div>