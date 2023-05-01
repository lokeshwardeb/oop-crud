<?php
function alert_success($msg){
    return '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success !</strong> '.$msg.'.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
function alert_error($msg){
    return '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error !</strong> '.$msg.'.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>