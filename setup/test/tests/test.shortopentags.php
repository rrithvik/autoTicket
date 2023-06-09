<?php
require_once "class.test.php";

class ShortOpenTag extends Test {
    var $name = "PHP Short Open Checks";

    function testFindShortOpens() {
        foreach (static::getAllScripts() as $s) {
            $matches = array();
            $content = file_get_contents($s);
            if (preg_match_all('/<\?\s*(?!php|xml).*$/m',
                    $content, $matches,
                    PREG_OFFSET_CAPTURE) > 0) {
                foreach ($matches[0] as $match)
                    $this->fail(
                        $s,
                        $this->line_number_for_offset($content, $match[1]),
                        $match[0]);
            }
            else $this->pass();
        }
    }
}
return 'ShortOpenTag';
?>
