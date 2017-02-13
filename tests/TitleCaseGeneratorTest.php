<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_titleCase_oneWord()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = 'beowulf';
            $result = $test_TitleCaseGenerator->makeTitleCase($input);
            $this->assertEquals("Beowulf", $result);

        }

        function test_titleCase_multipleWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";
            $result = $test_TitleCaseGenerator->makeTitleCase($input);
            $this->assertEquals("the Little Mermaid", $result);
        }

        function test_titleCase_designatedWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf from brighton beach";
            $result = $test_TitleCaseGenerator->makeTitleCase($input);
            $this->assertEquals("Beowulf from Brighton Beach", $result);
        }
    }

?>
