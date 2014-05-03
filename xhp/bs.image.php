<?hh
class :bs:image extends :bs:base {
    attribute :img,
        enum {'round','circle','thumbnail'} shape,
        bool responsive;
        
    protected function compose() {
        if ($this->getAttribute('responsive')) {
            $this->addClass('img-responsive');
        }
        
        if ($this->getAttribute('shape') !== '') {
            $this->addClass('img-'.$this->getAttribute('shape'));
        }
        
        return <img />;
    }
}