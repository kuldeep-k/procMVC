<?php

function base_controller_index($request)
{
    render(VIEW_DIR.'/base/welcome.php', array());
}