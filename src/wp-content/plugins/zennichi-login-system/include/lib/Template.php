<?php

/**
 * Description of Template
 *
 * @author khangld
 * 
 * return string
 * 
 * $string = new Template($template, $data);
 * template is string or file
 * data is an array(key => value)
 * 
 */
class Template {

    /**
     * @var string
     */
    private $content;
    public $pattern = '/!!%s!!/';     // /{{%s}}/   /!!%s!!/
    public $clean = false;
    public $clean_pattern = array(); // /{{.*}}/   /!!.*!!/     /* clean purpose */
    
    /**
     * @var string[] varname => string value
     */
    private $vars;

    public function __construct($file, array $vars = array()) {
        $this->content = (string) $file;
        $this->setVars($vars);
    }

    public function setVars(array $vars) {
        $this->vars = $vars;
    }

    public function getTemplateText() {
        if (is_file($this->content)){
            return file_get_contents($this->content);
        } else {
            return $this->content;
        }
    }

    public function __toString() {
        $template_pairs = strtr($this->getTemplateText(), $this->getReplacementPairs());
        if ($this->clean == TRUE){
            $template_pairs = preg_replace($this->clean_pattern, '', $template_pairs);
        }
        return $template_pairs;
    }

    private function getReplacementPairs() {
        $pairs = array();
        $i = 0;
        foreach ($this->vars as $name => $value) {
            if(preg_match_all($this->pattern, $this->content, $out)){
//                echo $i++;
//                echo $this->vars;
            }
            $pairs[sprintf($this->pattern, $name)] = $value;
        }
        return $pairs;
    }
    
    public function render(){
        //
        $template = strtr($this->getTemplateText(), $this->getReplacementPairs());
        if ($this->clean == TRUE){
            $template = preg_replace($this->clean_pattern, '', $template);
        }
        return $template;
    }

}
