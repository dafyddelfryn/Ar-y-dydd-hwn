//MAE ANGEN JQUERY ER MWYN RHEDEG Y SCRIPT YMA

var yql = "http://www.dafyddelfryn.co.uk/gwaith/API_Wicipedia/dydd-hwn.php";

$.ajax({
    url: yql,
    dataType: 'json',
    success: llwyddiant,
    error:methiant
    
});

function llwyddiant(data){
    $("#heddiw").html(data.responseText);  
}

function methiant(data){
    $("#heddiw").html(data.responseText);
};
