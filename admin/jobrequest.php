<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job request</title>
</head>
<body>
    <?php
    include("../include/header.php");
    ?>
    <div class="container-fluid">
        <div class="col-md-12" style="margin-left:-30px;">
            <div class="row">
                <div class="col-md-2">
                    <?php
                    include("sidenav.php");
                    ?>
                </div>
                <div class="col-md-10">
                    <h5 class="text-center my">JOB REQUEST</h5>
                    <div id="show"></div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
           alert("done");
        });
        show();
        function  show(){
            $.ajax({
                url: "show.php",
                type: "POST",
                success: function(data){
                    $("#show").html(data);
                }
            });
        }
       $(document).on('click', '.approve', function(){
        var id=$(this).attr('id');
        alert(id || "approved")
         $.ajax({
                url: "ajax_approve.php",
                method: "POST",
                data: {id: $(this).data('id')},
                success: function(data){
                    show();
                }
            }); //end of        
         });
         $(document).on('click', '.reject', function(){
        var id=$(this).attr('id');
        alert(id || "Rejected")
         $.ajax({
                url: "ajax_reject.php",
                type: "POST",
                data: {id: $(this).data('id')},
                success: function(data){
                    show();
                }
            }); //end of        
         });
    </script>

</body>

</html>