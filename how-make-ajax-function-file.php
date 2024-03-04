


<script>

				
$.ajax({
            url: 'ajax_functions_file.php',
            data: 'function_name=user&data='+$(this).val(), 
            type:'POST',
            dataType : 'json',
            success:function(result){   
                    $('#workshop_type').append(result['data']);
                } 
}); 




						
// ajax_functions_file.php code

<?php

if (isset($_POST['type']) && $_POST['type'] == 'level') {
    fees($dbc, $_POST);
} elseif (isset($_POST['type']) && $_POST['type'] == 'type') {
    userExist($dbc, $_POST);
}

function fees($dbc, $data)
{
    include("include/config.php");
    $dd = '';
    $res = mysqli_fetch_assoc(mysqli_query($dbc, "select fees from " . $database_table_prefix . $workshop_settings_table . " where workshop_id = '" . mysqli_real_escape_string($dbc, $data['data']) . "'"));

    echo json_encode(array('success' => true, 'data' => $res['fees']));
    exit;
}


function userExist($dbc, $data)
{
    include("include/config.php");

    $is_user_exist = 0;
    if (isset($data['workshop_type']) && $data['workshop_type'] && isset($data['email']) && $data['email']) {
        $user_exist_query = mysqli_query($dbc, "select email,workshop_id from " . $database_table_prefix . $workshop_registration_table . " where email='" . $data['email'] . "' and workshop_id='" . $data['workshop_type'] . "'");
        $is_user_exist = mysqli_num_rows($user_exist_query);
    }



    echo json_encode(array('count' => $is_user_exist));
    exit;

}