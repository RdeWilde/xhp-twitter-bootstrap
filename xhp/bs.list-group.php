<?hh
class :bs:list-group extends :bs:base {
    attribute :ul;
    
    children (:bs:list-group-item)+;
    
    protected function compose() {
        return <ul>{$this->getChildren()}</ul>;
    }
}