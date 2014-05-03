<?hh
class :bs:alert extends :bs:base {
    attribute :div,
                enum{'success','info','warning','danger'} color,
                bool dismissable;
                
    protected function compose() {
        $this->addClass('alert');
        
        if ($this->getAttribute('color')) {
            $this->addClass('alert-'.$this->getAttribute('color'));
        }
        
        if ($this->getAttribute('dismissable')) {
            // TODO
        }
        
        return <div>{$this->getChildren()}</div>;
    }
}