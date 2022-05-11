url = "program_action.php";
modal_body = "modal_md_body";
modal = "md";

var action_data = {
    'url': url,
    'div': modal_body, 
    'load': 0
};


function get_program_form(type, id = 0) {
    if (type == "insert") {
        header = "Add program";
        data_key = "add_program_form";
        val = 1;
    } else if (type == "update") {
        console.warn(update);
        header = "Update program";
        data_key = "update_program_form";
        val = id;
    } else {
        header = "Delete program";
        data_key = "delete_program_form";
        val = id;
    }

    modal_open(modal, header);
    loader(modal_body);

    var data = {
        [data_key]: val
    }
    action_data['div']="modal_md_body";

    get_ajax(action_data, data);
}


function select_year(pid){
    year=get_value("select_year");
    var data1 = {
        'program_id':pid, 
        'year': year
    }

    var data={
        'select_year': data1
    }

    action_data1=action_data;
    action_data1['div']="select_month";
    get_ajax(action_data, data);
}


function program_action(type, id = 0) {

    delete_type = 0;
    if (type == "insert") {
        data_key = "insert_program";
        val = 0;
    } else if (type == "update") {
        data_key = "update_program";
        val = id;
    } else {
        data_key = "delete_program";
        val = id;
        delete_type = 1;
    }

    if (delete_type == 0) {
        data_val = get_data(id);
        error = filter_data(data_val);
    } else {
        var data_val = {
            'id': val
        }
        error = 0;
    }

    var data = {
        [data_key]: data_val
    }

    if (error == 0) {
        action_data['load'] = 1;
        //console.log(data);

        loader(modal_body);
        get_ajax(action_data, data);
    }
}


function get_data(id) {
    var data_val = {
        'id': id,
        'name': get_value("name"),
        'start': get_value("start"),
        'end': get_value("end"),
        'batch':get_checkbox_value('batch[]')
    }

    return data_val;
}




function filter_data(data) {
    name = data['name'];
    start = data['start'];
    end = data['end'];


    error = 0;
    if (name == "") {
        alert("Enter program Name");
        error = 1;
    } else if (start == "") {
        alert("Enter program Start Time");
        error = 1;
    } else if (end == "") {
        alert("Enter program End Time");
        error = 1;
    }
    else if(data['type']==-1){
    	alert("Select Program Type");
        error = 1;
    }
    
    
    return error;
}