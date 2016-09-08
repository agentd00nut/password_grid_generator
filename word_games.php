<?php
// encrypt-php53
// 21productions/truoptik © 2015
// written by andrew brothers
// phpstorm:formatter:off

$log_root = "/21devel/abrothers/rando_shit/word_games/";

$root_dir = new DirectoryIterator($log_root);
$restricted_characters = array();
$valid_words = array();

if($argv[2])
	if(count($argv[2]) != 6)
		die("use a 6 letter word ");

foreach ($root_dir as $file) {
    if (!$file->isDot()) {

		$file_name = $file->getFilename();

		if(strpos($file_name, ".txt") !== false){

			$fh 		= fopen($file_name, "r");

			while($line = fgets($fh))
			{
				$word_list[] = trim($line);
			}
		}
	}
}
$continue = true;
while($continue){

	shuffle($word_list);
	$count[word_list] = count($word_list);

	if(!$argv[2])
		$valid_words[] = $word_list[rand(0,$count[word_list])-1];
	else
		$valid_words = $argv[2];

	$restricted_characters = str_split($valid_words[0]);

	#echo "Seed Word: ". $valid_words[0]."\r";
	$time_start = microtime(true);

	while(count($valid_words) < 3)
	{

		#echo $potential_word."\r";
		$potential_word = $word_list[rand(0,$count[word_list]-1)];

		$intersect_array = array_intersect(str_split($potential_word), $restricted_characters);
		if(count($intersect_array) == 0)
		{


			$valid_words[] = $potential_word;
			$r_chars =str_split($potential_word);

			foreach($r_chars as $restriced_char)
				$restricted_characters[] = $restriced_char;

			#echo "Next Word: ".$potential_word."\n";
		}

		if(microtime(true)-$time_start > .25){

			#echo "5 seconds passed, flushing the seed word and restricted chars\n";
			$valid_words = array($word_list[rand(0,$count[word_list])-1]);
			$restricted_characters = str_split($valid_words[0]);
			$time_start = microtime(true);

		}
	}

	$valid_combos[] = $valid_words;
	echo "Seed Word: ". $valid_words[0]."\n";
	print_r($valid_words);
	unset($valid_words);

	if($argv[1] != "repeat")
		$continue = false;
}
