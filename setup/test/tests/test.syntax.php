<?php
require_once "class.test.php";

class SyntaxTest extends Test {
    var $name = "PHP Syntax Checks";

    static function ignore3rdparty() {
        return false;
    }

    function testCompileErrors() {
        $exit = 0;
        foreach (static::getAllScripts() as $s) {
            ob_start();
            system("php -l $s", $exit);
            $line = ob_get_contents();
            ob_end_clean();
            if ($exit != 0)
                $this->fail($s, 0, $line);
            else
                $this->pass();
        }
    }
}

return 'SyntaxTest';
?>
