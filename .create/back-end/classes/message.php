<?php

class message{
    var $to;
    var $from;
    var $theme;
    
    var $name;
    var $email;
    var $phone;
    
	var $data;    
    var $_time;    
        
    public function __constructor($to, $from, $name, $phone, $description)
    {   
        echo "constructor=\n";
        echo "constructor=".$this->to."    'to'=".$to;
        $this->to = $to;                
        $this->theme = "Content-type: text/plain; charset=\"utf-8\"\n From: $from";
        $this->name = $name;
        $this->phone = $phone;
        $this->description = $description;
    }
    
    public function send()
    {        
        $message = "Имя: $this->name \nТелефон: $this->phone";
        
        if (empty($this->data)!=1)
        {
            $message = "$message\nДата: $this->data\nЧас: $this->_time";
        }
            
        return mail($this->to, $this->from, $message, $this->theme);        
    }    
}
