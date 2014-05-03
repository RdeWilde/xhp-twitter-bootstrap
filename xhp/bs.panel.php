<?hh
class :bs:panel extends :bs:base {
    attribute   :div,
        enum {'primary','success','info','warning','danger'} color;
        
    children (:bs:panel-header?, :bs:panel-body?, :bs:panel-footer?, :bs:list-group*, :bs:table*);
}