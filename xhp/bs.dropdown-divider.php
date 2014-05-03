<?hh
class :bs:dropdown-divider extends :bs:base {
    attribute   :li;
    
    protected function compose() {
        $this->addClass('divider');
        
        return <li role="presentation" />;
    }
}