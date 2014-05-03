<?hh
class :bs:pagination extends :bs:base {
    attribute :ul,
            enum {'sm','md','lg'} size;
    
    protected function compose() {
        $this->addClass('pagination');
        
        if ($this->getAttribute('size')) {
            $this->addClass('pagination-'.$this->getAttribute('size'));
        }
        
        return <ul>{$this->getChildren()}</ul>;
    }
}