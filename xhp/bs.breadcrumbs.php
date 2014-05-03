<?hh
class :bs:breadcrumbs extends :bs:base {
    attribute :ol;
    
    protected function compose() {
        $this->addClass('breadcrumbs');
        
        return <ol>{$this->getChildren()}</ol>;
    }
}