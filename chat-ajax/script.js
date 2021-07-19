var jsonUsers;
var jsonMessage;
var jsonUsersSize = 0;
var jsonMessageSize = 0;

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

function getIdUser(nomUser){
    xhr = getxhr();
    xhr.open("GET", "http://localhost/SLAM5/chat-ajax/listeUtilisateurs.php");
    xhr.send();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)){
            jsonUsers = eval(xhr.responseText);
            jsonUsersSize = Object.keys(jsonUsers).length;
            alert(jsonUsersSize)
            for(let i = 0 ; i < jsonUsersSize ; i++){
                if(jsonUsers[i].nom === nomUser){
                    console.log("Je suis laaaa")
                    let idUser = jsonUsers[i].id;
                    console.log(idUser)
                    return idUser;
                }
            }
        }
    }
}

function getMessage(DestinataireId){
    xhr = getxhr();
    xhr.open("GET", "http://localhost/SLAM5/chat-ajax/listeMessage.php");
    xhr.send();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)){
            //jsonMessage = eval(xhr.responseText);
            jsonMessage = JSON.parse(xhr.responseText)
            jsonMessageSize = Object.keys(jsonMessage).length;
            
        }
        console.log(jsonMessage)
        console.log(jsonMessageSize)

        for (let i = 0 ; i < jsonMessageSize ; i++){
            if(jsonMessage[i].iddestinataire === DestinataireId){
                let iddest = jsonMessage[i].iddestinataire
                console.log(iddest);
                console.log(DestinataireId)
                let message = jsonMessage[i].message;
                console.log(message);
            }
            /*
            var divUser = document.createElement('div');
            divUser.className = "message";
            divUser.textContent = json[i].nom + ' ' + json[i].prenom;
            users.insertBefore(divUser, document.querySelector('.btn'));*/
        } 
    }

    
}

function getUsers(){

    var users = document.querySelector('.users');
    xhr = getxhr();
    xhr.open("GET", "http://localhost/SLAM5/chat-ajax/listeUtilisateurs.php");
    xhr.send();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)){
            jsonUsers = eval(xhr.responseText);
            jsonUsersSize = Object.keys(jsonUsers).length;
        }
    }

    // si les utilisateurs sont déjà affichés, ils sont supprimés du DOM pour être réaffichés
    var listeUser = document.querySelectorAll('.user');
    if(listeUser.length != 0){
        for (let i = 0 ; i < jsonUsersSize ; i++){
            users.removeChild(listeUser[i])
        }  
    }

    // on affiche les utilisateurs
    for (let i = 0 ; i < jsonUsersSize ; i++){
        var divUser = document.createElement('a');
        var divNom = document.createElement('span');
        var divPrenom = document.createElement('span');

        divUser.className = "user";
        divNom.className = "nom";
        divPrenom.className = "prenom";

        divNom.textContent = jsonUsers[i].nom;
        divPrenom.textContent = jsonUsers[i].prenom;
        divUser.appendChild(divNom);
        divUser.appendChild(divPrenom);
        //divUser.textContent = json[i].nom + ' ' + json[i].prenom;
        users.insertBefore(divUser, document.querySelector('.btn'));
    } 

    var listeUser = document.querySelectorAll('.user');
    for (let i = 0 ; i < listeUser.length ; i++){
        listeUser[i].addEventListener('click', function(){
            let nom = listeUser[i].querySelector('.nom').innerHTML;
            console.log(nom);
            let idDeUser = getIdUser(nom);
            getMessage(idDeUser);
        })
    }
}

setInterval(getUsers(), 2000);