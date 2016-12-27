<?php
// +----------------------------------------------------------------------+
// | Anuko Time Tracker
// +----------------------------------------------------------------------+
// | Copyright (c) Anuko International Ltd. (https://www.anuko.com)
// +----------------------------------------------------------------------+
// | LIBERAL FREEWARE LICENSE: This source code document may be used
// | by anyone for any purpose, and freely redistributed alone or in
// | combination with other software, provided that the license is obeyed.
// |
// | There are only two ways to violate the license:
// |
// | 1. To redistribute this code in source form, with the copyright
// |    notice or license removed or altered. (Distributing in compiled
// |    forms without embedded copyright notices is permitted).
// |
// | 2. To redistribute modified versions of this code in *any* form
// |    that bears insufficient indications that the modifications are
// |    not the work of the original author(s).
// |
// | This license applies to this document only, not any other software
// | that it may be combined with.
// |
// +----------------------------------------------------------------------+
// | Contributors:
// | https://www.anuko.com/time_tracker/credits.htm
// +----------------------------------------------------------------------+

import('form.FormElement');

class CheckboxGroup extends FormElement {
    var $mChecked	= false;
    var $mOptions	= array();
    var $mLayout	= "V";
    var $mGroupIn	= 1;
    var $cClassName	= "CheckboxGroup";
    var $mDataKeys	= array();
    var $mDataDeep	= 1;
    var $lSelAll	= "All";
    var $lSelNone	= "None";

	function CheckboxGroup($name,$value="")
	{
		$this->mName			= $name;
		$this->mValue			= $value;
	}

	function setChecked($value)	{ $this->mChecked = $value; }
	function isChecked() { return $this->mChecked; }
	
	function setData($value)	{ $this->mOptions = $value; }
	function getData() { return $this->mOptions; }
	
	function setDataKeys($keys)	{ $this->mDataKeys = $keys; $this->mDataDeep = 2; }
	function getDataKeys() { return $this->mDataKeys; }
	
	function setLayout($value)	{ $this->mLayout = $value; }
	function getLayout() { return $this->mLayout; }
	
	function setGroupIn($value)	{ $this->mGroupIn = $value; if ($this->mGroupIn<1) $this->mGroupIn = 1;}
	function getGroupIn() { return $this->mGroupIn; }
	
	function setLocalization($i18n) {
		FormElement::setLocalization($i18n);
		$this->lSelAll = $i18n->getKey('label.select_all');
		$this->lSelNone = $i18n->getKey('label.select_none');
	}
		
	function toStringControl()	{
		if (!$this->isRenderable()) return "";
	    
	    if ($this->mId=="") $this->mId = $this->mName;
	    
	    $renderArray = array();
	    $renderCols = 0;
	    $renderRows = 0;
	    
	    if ($this->mLayout=="H") {
	    	$i = 0;
	    	if (is_array($this->mOptions)) {
	    		$renderCols = $this->mGroupIn;
	    		$renderRows = ceil(count($this->mOptions) / $this->mGroupIn);
	    		$col = $row = 0;
			    foreach ($this->mOptions as $optkey=>$optval) {
			    	if ($this->mDataDeep>1) {
						$optkey = $optval[$this->mDataKeys[0]];
						$optval = $optval[$this->mDataKeys[1]];
					}
			    	$html = "<input type=\"checkbox\" name=\"$this->mName[]\" id=\"$this->mId"."_".$i."\"";
			    	if (is_array($this->mValue)) {
			    		foreach ($this->mValue as $value) {
			    			if (($value == $optkey) && ($value != null))
			    				$html .= " checked=\"true\"";
			    		}
			    	}
				   	$html .= " value=\"".htmlspecialchars($optkey)."\">&nbsp;<label for=\"$this->mId"."_".$i."\">".htmlspecialchars($optval)."</label>";
				   	$renderArray[$col][$row] = $html;
				   	
			    	$col++;			    	
				   	if ($col==$this->mGroupIn) { $col = 0; $row++; }
			    	$i++;
			    }
	    	}
	    }
	    
	    if ($this->mLayout=="V") {
			$i = 0;
	    	if (is_array($this->mOptions)) {
	    		$renderCols = ceil(count($this->mOptions) / $this->mGroupIn);
	    		$renderRows = $this->mGroupIn;
	    		$col = $row = 0;
			    foreach ($this->mOptions as $optkey=>$optval) {
			    	if ($this->mDataDeep>1) {
						$optkey = $optval[$this->mDataKeys[0]];
						$optval = $optval[$this->mDataKeys[1]];
					}
			    	$html = "<input type=\"checkbox\" name=\"$this->mName[]\" id=\"$this->mId"."_".$i."\"";
			    	if (is_array($this->mValue)) {
			    		foreach ($this->mValue as $value) {
			    			if (($value == $optkey) && ($value != null))
			    				$html .= " checked=\"true\"";
			    		}
			    	}
				   	$html .= " value=\"".htmlspecialchars($optkey)."\">&nbsp;<label for=\"$this->mId"."_".$i."\">".htmlspecialchars($optval)."</label>";
				   	$renderArray[$col][$row] = $html;

				   	$row++;
			    	if ($row==$this->mGroupIn) { $row = 0; $col++; }
		    		$i++;
			    }
	    	}
	    }
	    
	    
	    $html = "\n\t<table style=\"".$this->mStyle."\"><tr><td align=\"center\" bgcolor=\"eeeeee\">\n";
	    $html .= '<a href="#" onclick="setAll'.$this->getName().'(true);return false;">'.$this->lSelAll.'</a>&nbsp;/&nbsp;<a href="#" onclick="setAll'.$this->getName().'(false);return false;">'.$this->lSelNone.'</a>';
	    $html .= "</td></tr>\n";
	    $html .= "<tr><td>";
	    $html .= "\n\t<table width=\"100%\">\n";
	    for ($i = 0; $i < $renderRows; $i++) {
	    	$html .= "<tr>";
	    	for ($j = 0; $j < $renderCols; $j++) {
    			$html .= "\t<td width=\"".(floor(100/$renderCols))."%\">".(isset($renderArray[$j][$i])?$renderArray[$j][$i]:"&nbsp;")."</td>\n";
	    	}
	    	$html .= "</tr>\n";
	    }
	    $html .= "</table>\n";
	    $html .= "</td></tr></table>\n";
	    
	    $str = "<script>\n";
		$str .= "function setAll".$this->getName()."(value) {\n";
		$str .= "\tvar formInputs = document.getElementsByTagName(\"input\");\n";
		$str .= "\tfor (var i = 0; i < formInputs.length; i++) {\n";
        $str .= "\t\tif ((formInputs.item(i).type=='checkbox') && (formInputs.item(i).name=='".$this->getName()."[]')) {\n";
        $str .= "\t\tformInputs.item(i).checked=value;\n";
        $str .= "\t}\n}\n";
		$str .= "}\n";
		$str .= "</script>\n";
	    
		return $html.$str;
	}
}
