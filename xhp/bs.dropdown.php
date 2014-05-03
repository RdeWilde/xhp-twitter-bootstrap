<?hh
class :bs:dropdown extends :bs:base {
    attribute   :div;
    
    protected function compose() {
        $this->addClass('dropdown');
        
        return <div><ul class="dropdown-menu" role="menu">{$this->getChildren()}</ul></div>;
    }
}