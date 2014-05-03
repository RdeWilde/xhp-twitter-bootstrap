<?hh
class :bs:label extends :bs:base {
    attribute :bs:span,
            enum {'default','primary','success','info','warning','danger'} color;
            
    children (pcdata)*;
            
    protected function compose() {
        $this->addClass('label');
        
        if ($this->getAttribute('color')) {
            $this->addClass('label-'.$this->getAttribute('color'));
        }
        
        return <bs:span>{$this->getChildren()}</bs:span>;
    }
}