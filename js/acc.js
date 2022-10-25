var bool = true;
var ab = true;
var cp;

$('.reload').bind('click',function(){
    if(bool == true || cp == $(this).attr('t'))
    {
        cp = $(this).attr('t');
        if ($(this).attr('fl') == 0)
        {
            let name = $(this).attr('t');
            name = String(name);
            $(this).attr('fl','1');
            let text = $("."+name).text();
            $("."+name).empty();
            $("."+name).addClass('input-style');
            $("."+name).removeClass("data-change-descr");
            $("."+name).append('<input placeholder="Введите" value="'+text+'"><span></span>');
            bool = false;
        }
        else
        {
            let name = $(this).attr('t');
            name = String(name);
            let texts = $('.'+name).find('input').val();
            var o = $(this);
            if(texts != "" && texts != " ")
            {
                $.ajax({
                    type:"POST",
                    url:"../php/user/reload_info.php",
                    dataType:"json",
                    data:{
                        pole:name,
                        val:texts,
                    },
                    success:function(data){
                        if(data['status'] == 200)
                        {
                            o.attr('fl','0');
                            $("."+name).empty();
                            $("."+name).removeClass('input-style');
                            $("."+name).addClass("data-change-descr");
                            $('.'+name).text(texts);
                            bool = true;
                        }
                    }
                })
            }
            else
            {
                Snackbar.show({
                    text: 'Нужно заполнить поля',
                    pos: 'top-center'
                });
            }
        }
    }
    else{
        Snackbar.show({
            text: 'Завершите редактирование поля',
            pos: 'top-center'
        });       
    }
});

$('.ab-i').bind('click',function(){
    if(ab == true)
    {
        let text = $('.ab-t').text();
        ab = false;
        $('.ab-t').empty();
        $('.ab-t').append('<textarea rows="5" cols="33">'+text+'</textarea>');
    }
    else
    {
        let t = $('.ab-t').find('textarea').val();
        if(t != "" && t != " ")
        {
            $.ajax({
                    type:"POST",
                    url:"../php/user/reload_info.php",
                    dataType:"json",
                    data:{
                        pole:'about',
                        val:t,
                    },
                    success:function(data){
                        if(data['status'] == 200)
                        {
                            $('.ab-t').empty();
                            $('.ab-t').text(t);
                            ab = true;
                        }
                    }
                })
        }
        else
        {
            Snackbar.show({
                text: 'Нужно заполнить поля',
                pos: 'top-center'
            });
        }
    }
});