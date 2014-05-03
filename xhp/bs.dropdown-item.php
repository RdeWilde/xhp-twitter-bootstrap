<?hh
class :bs:dropdown-item extends :bs:base {
    attribute   :li,
                bool disabled;
    
    protected function compose() {
        if ($this->getAttribute('disabled')) {
            $this->addClass('disabled');
        }
        
        return <li role="presentation"><a role="menuitem" tabindex="-1" href="#">{$this->getChildren()}</a></li>;
    }
}