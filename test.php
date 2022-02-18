<?php

/**
 * Please fix the items marked with "@TODO" in this class
 * 
 * Follow the https://www.php-fig.org/psr/psr-2/ coding style guide.
 * 
 * One exception to PSR-2: opening braces MUST always be on the same line 
 * for classes, methods, functions, and control structures
 */
class Singleton {
    
    private static $instance = null;
    // @TODO Implement Singleton functionality
    public static function getInstance(){
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
    // Singleton::getInstance()

    /**
     * Display user name
     * 
     * @param string $name User-provided name
     */
    public function userEcho($name) {
        // @TODO Validate & sanitize $name
        $name = htmlspecialchars($name ?? '');
        echo "The value of 'name' is '{$name}'";
    }
    
    /**
     * Query by user name
     * 
     * @param string $name User-provided name
     */
    public function userQuery($name) {
        // @TODO Validate & sanitize $name
        mysql_query("SELECT * FROM `test` WHERE `name` = ? LIMIT 1",[$name]);
    }
    
    /**
     * Output the contents of a file
     * 
     * @param string $path User-provided file path
     */
    public function userFile($path) {
        // @TODO Validate & sanitize $path
        if (!file_exists($path)) {
            return false;
        } else {
            readfile($path);
        }
    }
    
    /**
     * Nested conditions
     */
    public function nestedConditions() {
        // @TODO Untangle nested conditions
        if($conditionA && $conditionB && $conditionC){
            echo 'ABC';
        }
        if($conditionA && $conditionB && !$conditionC){
            echo '^C';
        }
        if($conditionA && !$conditionB){
            echo '^B';
        }
        if(!$conditionA){
            echo '^A';
        }
    }
    
    /**
     * Return statements
     * 
     * @return boolean
     */
    public function returnStatements() {
        // @TODO Fix
        if ($conditionA) {
            //echo 'A';
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * Null coalescing
     */
    public function nullCoalescing() {
        // @TODO Simplify
        $name = $_GET['name'] ?? $_POST['name'] ?? 'nobody';
        return $name;
    }
    
    /**
     * Method chaining
     */
    public function methodChained() {
        // @TODO Implement method chaining
        $this->setTitle('title')->setColor('red');
    }

    public function setTitle($title){
        //$this->title = $title;
        return $this;
    }

    public function setColor($color){
         //$this->color = $color;
        return $this;
    }



    
    /**
     * Immutables are hard to find
     */
    public function checkValue($value) {
        $result = null;
        
        // @TODO Make all the immutable values (int, string) in this class 
        // easily replaceable
        switch ($value) {
            case 'stringA':
                $result = 1;
                break;
                
            case 'stringB':
                $result = 2;
                break;
        }
        
        return $result;
    }
    
    /**
     * Check a string is a 24 hour time
     * 
     * @example "00:00:00", "23:59:59", "20:15"
     * @return boolean
     */
    public function regexTest($time24Hour) {
        // @TODO Implement RegEx and return type; validate & sanitize input
        return preg_match('/^([01][0-9]|2[0-3]):([0-5][0-9])(:([0-5][0-9]))?$/', $time24Hour);
    }
    
}

/*EOF*/
