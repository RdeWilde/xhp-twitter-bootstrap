<?hh
class :bs:glyphicon extends :bs:base {
    attribute   :bs:span,
                enum{'asterisk','plus','euro','minus','cloud','envelope','pencil','glass',
                    'music','search','heart','star','star-empty','user','film','th-large',
                    'th','th-list','ok','remove','zoom-in','zoom-out','off','signal'
                } icon @required,
                bool zoom;
    
    protected function compose() {
        if ($this->getAttribute('zoom')) {
            $this->addClass('fa-2x');
        }
        
        $this->addClass('glyphicon');
        $this->addClass('glyphicon-'.$this->getAttribute('icon'));
        
        return <span/>;
    }
}