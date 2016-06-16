<?php
/**
 * @author: Cesar Hernandez
 * getLanguage: This method return the name of the language according to the language code
 */
class LangCodes{
    public function getLanguage($code){
        $all_lang=array(
            'fr_FR'=>'fr_FR',
            'en_US'=>'en_US'//,
            //'zh_CN'=>'zh_CN',
            //'zh_TW'=>'zh_TW',
            //'de_DE'=>'de_DE'
        );
        return array_key_exists($code, $all_lang) ? $all_lang[$code] : "en_US";
    }
    public function getNameLang($code_lang){
        $name_lang=array(
            'fr_FR'=>'Français',
            'en_US'=>'English'//,
            //'zh_CN'=>'中文 (中国)',
            //'zh_TW'=>'中文 (台灣)',
            //'de_DE'=>'Deutsch'
        );
        return array_key_exists($code_lang, $name_lang) ? $name_lang[$code_lang] : "English";
    }
}
?>