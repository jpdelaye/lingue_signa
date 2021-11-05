<?php
/**
 * lingue_signa Class
 * Php to find the lenguage signature.
 * input: Debug: yes/not, "file whit words to find and count", "name of the signature"
 * Output: word count
 * @author Jean Paul Delaye 
 */

require_once('class.lingue_signa.php');

  $transcription = new lingue_signa("yes","negative-words.csv","Negative Words");

	return   $transcription ->signa_stats();
?>


 	
 
 
