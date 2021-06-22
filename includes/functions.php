<?php 

function set_message($type, $message, $title=null){
    $toastr = "toastr.$type('$message','$title', 
              {
                  'closeButton': true, 
                  'showMethod' : 'slideDown', 
                  'hideMethod' : 'slideUp'
              })";  


    echo "<script>$toastr</script>";
}



?>