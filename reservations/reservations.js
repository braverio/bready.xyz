$(function(){
    $("#datepicker").datepicker({
        minDate:0,
        maxDate:"+2W",
        onSelect:function(){
            var now = new Date();
            var input = new Date($(this).val());

            if(now.getDate() == input.getDate()){
                if(input.getDay() == 0){
                    $("#time-hr option[value='7']").attr('disabled','disabled');
                    $("#time-hr option[value='18']").attr('disabled','disabled');
                    $("#time-hr option[value='19']").attr('disabled','disabled');
                    $("#time-hr option[value='20']").attr('disabled','disabled'); 
                }
                $("#time-hr option").each(function(n,e){
                    var n = parseInt($(this).val());
                    if(n <= now.getHours()){
                        $(this).attr('disabled','disabled');
                    }else{
                         $(this).removeAttr('disabled');
                    }
                });
                
            }else{
                if(input.getDay() == 0){
                    $("#time-hr option[value='7']").attr('disabled','disabled');
                    $("#time-hr option[value='18']").attr('disabled','disabled');
                    $("#time-hr option[value='19']").attr('disabled','disabled');
                    $("#time-hr option[value='20']").attr('disabled','disabled');                
                }else{
                     $("#time-hr option").each(function(n,e){
                        $(this).removeAttr('disabled');
                     });
                }
            }
            $('#time-hr').removeAttr('disabled');
            updateTime();
        }
    });
    
    $("#time-hr").change(function(){
        $('#time-min').removeAttr('disabled');
        updateTime();
    });
    
    $("#time-min").change(function(){
        updateTime();
    });
});

function updateTime(){
    var pl = "XM";
    var hrs = "00";
    var minu = "00";
    
    var h = parseInt($("#time-hr option:selected").val());
    
    if (h == 12){
        pl = "PM";
        hrs = "12";
    }else if(h > 12){
        pl = "PM";
        hrs = h-12;
    }else{
        pl = "AM";
        hrs = h;
    }
    
    var minu = $("#time-min option:selected").val();
    
    $('#time').text("Time: " + hrs + ":" + minu + " " + pl);
    

    var date = new Date($('#datepicker').val() + " " + hrs + ":" + minu + ":" + pl);
    console.log(date.toISOString());
    $('#time-process').val(date.toISOString());
}


