<?php
    class TitleCaseGenerator
    {
        private $designated_words_array = ["and", "a", "the", "on", "in", "from", "at", "for", "by", "of", "like", "to", "if", "till", "upon", "when", "with", "as", "but", "than", "so", "yet", "or", "nor", "once", "off", "near", "into", "onto", "near", "from", "down"];

        function makeTitleCase($input_title)
        {
            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();
            foreach ($input_array_of_words as $word) {
                if (!in_array($word, $this->designated_words_array)) {
                    array_push($output_titlecased, ucfirst($word));
                }
                elseif ($word == [0]){
                    array_push($output_titlecased, ucfirst($word, [0]));    
                }
                else {
                    array_push($output_titlecased, $word);
                }
            }
        return implode(" ", $output_titlecased);
        }
    }
?>
