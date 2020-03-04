let expcounter = 0;
let formcounter = 0;
let skillcounter = 0;

function limparCampos()
{
    $("#startdate").val("");
    $("#enddate").val("");
    $("#cargo").val("");
    $("#empresa").val("");
    $("#descricao").val("");
}

function limparCamposForm()
{
    $("#completedate").val("");
    $("#graduacao").val("");
    $("#instituicao").val("");
    $("#formdesc").val("");
}

$(function(){

    $("#telefone").mask('(00) 0000-0000', {placeholder: "(XX) XXXX-XXXX"});
    $("#celular").mask('(00) 0 0000-0000', {placeholder: "(XX) X XXXX-XXXX"});
    $("#cep").mask('00000-000');

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

    $("#addform").click(function(){
        let divform = $(".divform");
        if(divform.find('.existform').length == 0)
        {
            divform.prepend(`<div class="col-md-12 existform">
                                <fieldset id="formfield" class="border p-2 mb-3">
                                </fieldset>
                            </div>`);
        }

        $("#formfield").append(`<div id="form${formcounter}" class="formline">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <b>${$("#completedate").val()}</b><br>
                                            <b style="color: blue;">${$("#graduacao").val()},</b> ${$("#instituicao").val()}<br>
                                            <small>${$("#formdesc").val()}</small>
                                        </div>
                                        <div class="col-md-1">
                                            <br>
                                            <b name="form${formcounter}" class="btn btn-danger removeform">X</b>
                                        </div>
                                    </div>
                                    <hr>
                                </div>`);
        formcounter++;
        limparCamposForm();
    });

    $("#cleanform").click(limparCamposForm);

    $(document).on('click', '.removeform', function(){
        $('#' + $(this).attr('name')).remove();

        if($('.divform').find('.formline').length == 0)
        {
            $('.existform').remove();
            formcounter = 0;
        }
    });

    $("#addskill").click(function(){
        let divskill = $(".divskill");
        if(divskill.find('.existskill').length == 0)
        {
            divskill.prepend(`<div class="col-md-12 existskill">
                                <fieldset id="skillfield" class="border p-2 mb-3">
                                </fieldset>
                            </div>`);
        }

        $("#skillfield").append(`<div id="skill${skillcounter}" class="skillline">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <b>-</b> ${$("#skill").val()}
                                        </div>
                                        <div class="col-md-1">
                                            <b name="skill${skillcounter}" class="btn btn-danger removeskill">X</b>
                                        </div>
                                    </div>
                                    <hr>
                                </div>`);
        skillcounter++;
        $("#skill").val("");
    });

    $(document).on('click', '.removeskill', function(){
        $('#' + $(this).attr('name')).remove();

        if($('.divskill').find('.skillline').length == 0)
        {
            $('.existskill').remove();
            skillcounter = 0;
        }
    });
});