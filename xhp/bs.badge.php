<?hh
class :bs:badge extends :bs:base {
    attribute :bs:span;
    
    children (pcdata)*;
    
    protected function compose() {
        $this->addClass('badge');
        
        return <bs:span>{$this->getChildren()}</bs:span>;
    }
}