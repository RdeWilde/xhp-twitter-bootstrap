<?hh
class :bs:nav extends :bs:base {
    attribute :nav,
        enum {'top','bottom','static'} fixed,
        bool inverted;
        
    protected function compose() {
        switch ($this->getAttribute('fixed')) {
            case 'top':     $this->addClass('navbar-fixed-top');    break;
            case 'bottom':  $this->addClass('navbar-fixed-bottom'); break;
            case 'static':  $this->addClass('navbar-static-top');   break;
            default:        $this->addClass('navbar-default');
        }
        
        if ($this->getAttribute('inverted') == 'true') {
            $this->addClass('navbar-inverse');
        }
        
        return <nav role="navigation">{$this->getChildren()}</nav>;
    }
}