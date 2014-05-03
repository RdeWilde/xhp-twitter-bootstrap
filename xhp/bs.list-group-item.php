<?hh
class :bs:list-group-item extends :bs:base {
    attribute :li,
        enum {'success','info','warning','danger'} color;
        
    protected function compose() {
        $this->addClass('list-group-item');
        
        if ($this->getAttribute('color')) {
            $this->addClass('list-group-item-'.$this->getAttribute('color'));
        }
        
        return <li>{$this->getChildren()}</li>;
    }
}