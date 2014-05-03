<?hh
class :bs:button extends :bs:base {
    attribute :button,
            enum {'xs','sm','md','lg'} size = 'md',
            enum {'default','primary','success','info','warning','danger','link'} color,
            bool block,
            bool active;
            
    protected function compose() {
        $this->addClass('btn');
        
        if ($this->getAttribute('size') !== 'md') {
            $this->addClass('btn-'.$this->getAttribute('size'));
        }
        
        if ($this->getAttribute('color') !== '') {
            $this->addClass('btn-'.$this->getAttribute('color'));
        }
        
        if ($this->getAttribute('block')) {
            $this->addClass('btn-block');
        }
        
        if ($this->getAttribute('active')) {
            $this->addClass('active');
        }
        
        //<a> only
        //if ($this->getAttribute('disabled')) {
        //    $this->addClass('disabled');
        //}
        
        return <button>{$this->getChildren()}</button>;
    }
}