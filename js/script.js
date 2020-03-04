let expcounter = 0;

function limparCampos()
{
    $("#startdate").val("");
    $("#enddate").val("");
    $("#cargo").val("");
    $("#empresa").val("");
    $("#descricao").val("");
}

$(function(){
    $("#addexp").click(function(){
        let divexp = $(".divexp");
        if(divexp.find('.existexp').length == 0)
        {
            divexp.prepend(`<div class="col-md-12 existexp">
                                <fieldset id="expfield" class="border p-2 mb-3">
                                </fieldset>
                            </div>`);
        }

        $("#expfield").append(`<div id="exp${expcounter}" class="expline">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <b>DE ${$("#startdate").val()} ATÉ ${$("#enddate").val()}</b><br>
                                            <b style="color: blue;">${$("#cargo").val()},</b> ${$("#empresa").val()}<br>
                                            <small>${$("#descricao").val()}</small>
                                        </div>
                                        <div class="col-md-1">
                                            <br>
                                            <b name="exp${expcounter}" class="btn btn-danger removeexp">X</b>
                                        </div>
                                    </div>
                                    <hr>
                                </div>`);
        expcounter++;
        limparCampos();
    });

    $("#cleanexp").click(limparCampos);

    $(document).on('click', '.removeexp', function(){
        $('#' + $(this).attr('name')).remove();

        if($('.divexp').find('.expline').length == 0)
        {
            $('.existexp').remove();
            expcounter = 0;
        }
    });
});