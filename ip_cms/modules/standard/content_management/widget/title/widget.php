<?php
/**
 * @package ImpressPages
 * @copyright   Copyright (C) 2011 ImpressPages LTD.
 * @license GNU/GPL, see ip_license.html
 */
namespace Modules\standard\content_management;

if (!defined('CMS')) exit;

require_once(BASE_DIR.MODULE_DIR.'standard/content_management/widget.php');

class WidgetTitle extends Widget{

    public function __construct() {
        
    }
    
    public function getTitle(){
        return 'Title';
    }
    
    public function getIcon(){
        return MODULE_DIR.'standard/content_management/widget/title/icon.gif';
    }
    
    public function getName(){
        return 'title';
    }    
    
    public function addHtml(){  
        $answer = '';
        
        $answer .= 'TEST';
        
        return $answer;
    }
    
    public function previewHtml(int $id,array $data) {
        
        
    }
    
    public function adminHtml(int $id,array $data) {
        
        
    }    
    
}