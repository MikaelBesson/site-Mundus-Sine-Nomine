<?php


class cleanInput {
    // cleaning of inputs
    /**
     * sanitizes the content of a variable
     * @param $data
     * @return string
     */
    function verifInput($data) : string {
        //remove spaces
        $data = trim($data);
        //remove backslashes
        $data = stripslashes($data);
        //transform HTML into special characters
        $data = htmlspecialchars($data);
        //add slashes to avoid strings character in forms
        $data = addslashes($data);
        return $data;
    }
    // check the parameters if they are empty returns false
    /**
     * check parameters empty return false
     * @param string ...$params
     * @return bool
     */
    function issetPostParams(string ...$params) : bool {
        foreach($params as $param){
            if(!isset($_POST[$param])) {
                return false;
            }
        }
        return true;
    }

}