(function(){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            //console.log(this.response); 
            document.getElementById('output').innerHTML = this.response;
        }
    }

    xmlhttp.open('get', 'api.php?sort=status');
    xmlhttp.send();
})();

function search(i){
    console.log(i);

    $('#output').children('div').each(function(){
        console.log($(this.childNodes[1].childNodes));
    });

    document.getElementById('searchbar').value = '';
}