<?hh
class :bs:dropdown-header extends :bs:base {
    attribute   :li;
    
    protected function compose() {
        $this->addClass('dropdown-header');
        
        return <li role="presentation">{$this->getChildren()}</li>;
    }
}