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
            $input = "beowulf begins";
            $result = $test_TitleCaseGenerator->makeTitleCase($input);
            $this->assertEquals("Beowulf Begins", $result);
        }

        function test_titleCase_designatedWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf from brighton beach";
            $result = $test_TitleCaseGenerator->makeTitleCase($input);
            $this->assertEquals("Beowulf from Brighton Beach", $result);
        }

        function test_titleCase_firstWord()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "from beowulf to the hulk";
            $result = $test_TitleCaseGenerator->makeTitleCase($input);
            $this->assertEquals("From Beowulf to the Hulk", $result);
        }

        function test_titleCase_unexpectedInput()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "57 beowulf alternative endings!!";
            $result = $test_TitleCaseGenerator->makeTitleCase($input);
            $this->assertEquals("57 Beowulf Alternative Endings!!", $result);
        }

        function test_titleCase_toLower()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "BeOwULF ON ThE RocKS";
            $result = $test_TitleCaseGenerator->makeTitleCase($input);
            $this->assertEquals("Beowulf on the Rocks", $result);
        }
    }

?>
