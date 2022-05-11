url = "dashboard_action.php";
modal_body = "modal_lg_body";
modal = "lg";
first_load=0;


function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': 0
    }
    return data;
}