<?hh
class :bs:page-header extends :bs:base {
    attribute :h1;
    
    protected function compose() {
        return <div class="page-header"><h1>{$this->getChildren()}</h1></div>;
    }
}