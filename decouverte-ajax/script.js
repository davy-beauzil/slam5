let bouton = document.querySelector('.bouton');
let champ = document.querySelector('.champ');
let boutonForm = document.querySelector('.boutonForm');

function getxhr(){
    try{
        xhr=new XMLHttpRequest();
    }catch(e){
        try {
            xhr=new ActiveXObject("Microsoft.XMLHTTP");
        }catch(e1){
            try{
                xhr=new ActiveXObject("Msxml2.XMLHTTP");
            }catch(e2){
                alert("AJAX non supporté!");
            }
        }
    }
    return xhr;
}

bouton.addEventListener('click', function(){
    xhr = getxhr();
    xhr.open('GET', 'model.php?bouton=Oui&texte=Non', true);
    xhr.send(null);
    
    xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)){
        alert(xhr.responseText);
        bouton.innerHTML=xhr.responseText;
        }
    }
});

boutonForm.addEventListener('click', function(){
    contenu = document.getElementById('dodo').value;
    date = document.querySelector('.date').value;
    alert(contenu + ' ' + date);

    xhr = getxhr();
    xhr.open('GET', 'model.php?champ=' + contenu, true);
    xhr.send(null);
    
    xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)){
        alert(xhr.responseText);
        }
    }
    
});