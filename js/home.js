var from = null, start = 0, url = "http://home.nda.ac.jp/~s67956/modules/chat.php";

function checkString(str){
    let i=0;
    let ans="";
    for (i=0; i<str.length; i++) {
        if (str[i] == "'" || str[i]== '"' || str[i]=='\\'){
            ans += "\\";
        }
        ans += str[i];
    }
    return ans;
}

$(document).ready(function() {
    from = "<?php echo $_SESSION['username']; ?>"
    load();
    $('form').submit(function(e){
        $.post(url, {
            message: checkString($('#message').val()), 
            from: from
        });
        $('#message').val('');
        return false;
    })
})

function load(){
    $.get(url + '?start=' + start, function(result){
        if (result.items){
            result.items.forEach(item =>{
                start = item.id;
                $('#messages').append(renderMessage(item));
            })
            $('#messages').animate({scrollTop: $('#messages')[0].scrollHeight});
        }
        load();
    })
}

function renderMessage(item){
    let time = new Date(item.created);
    time = `${time.getHours()}:${time.getMinutes() < 10 ? '0' : ''}${time.getMinutes()}`;
    if (from === item.from) {
        return `<div class="msg moveRight"><p>${item.from}</p><h2>${item.message}</h2><span><h3>${time}</h3></span></div><div class="clear"></div>`;
    }
    else {
        return `<div class="msg"><p>${item.from}</p><h2>${item.message}</h2><span><h3>${time}</h3></span></div><div class="clear"></div>`;
    }
}