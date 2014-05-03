<?hh
abstract class :bs:base extends :ui:base {
    attribute   enum {'muted','primary','success','info','warning','danger'} text-color,
                enum {'primary','success','info','warning','danger'} bg-color,
                enum {'left','right'} pull,
                bool hide;
                // center 
                // clearfix
    
    protected function compose() {
        if ($this->getAttribute('text-color') !== '') {
            $this->addClass('text-'.$this->getAttribute('text-color'));
        }
        
        if ($this->getAttribute('bg-color') !== '') {
            $this->addClass('bg-'.$this->getAttribute('bg-color'));
        }
        
        if ($this->getAttribute('pull') !== '') {
            $this->addClass('pull-'.$this->getAttribute('pull'));
        }
        
        if ($this->getAttribute('hide') !== '') {
            $this->addClass('hide');
        }
        
        return $this->getChildren();
    }
}