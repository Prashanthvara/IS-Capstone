$(document).ready(function () {
    $("#Specialty").change(function () {
        var sp_id = $(this).val();
        if (sp_id != "") {
            $.ajax({
                url: "get-hpname.php",
                data: {c_id: sp_id},
                type: 'POST',
                success: function (response) {
                    var resp = $.trim(response);
                    $("#hp_name").html(resp);
                }
            });
        } else {
            $("#hp_name").html("<option value=''>------- Select --------</option>");
        }
    });
});