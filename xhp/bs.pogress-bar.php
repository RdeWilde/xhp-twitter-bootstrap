<?hh
class :bs:progress-bar extends :bs:base {
    attribute :div,
        int min = 0,
        int max = 100,
        int value = 0,
        enum {'success','info','warning','danger'} color,
        bool striped,
        bool animated,
        bool show-number;
}
