<?php

function user_controller_index($request)
{
    require_once(MODEL_DIR.'/User.php');
    $data = user_model_list($request);
    render(VIEW_DIR.'/user/index.php', $data);
}