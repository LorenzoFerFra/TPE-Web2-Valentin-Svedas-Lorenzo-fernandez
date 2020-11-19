"use strict";

let app = new Vue({
    el: '#vue-comments',
    data: {
        comments: [], 
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const wine = document.querySelector("#id_vino").getAttribute('id_vino');
    const user = document.querySelector("#user").getAttribute('name_user');
    getComments(wine);
    document.querySelector('#form-comment').addEventListener('submit', e => {
        e.preventDefault();
        if (user!= null) {
            insertComment(wine,user);
        }
    });

   
});

function getComments(wine) {
    fetch('http://localhost/TPEweb2/api/comments/' + wine) 
        .then(response => response.json())
        .then(comments => app.comments = comments)
        .catch(error => console.log(error));
}

function insertComment(wine,user){
   const comment= {
        usuario: user,
        comentario: document.querySelector('textarea[name="input_comentario"]').value,
        puntaje: document.querySelector('select[name="input_puntaje"]').value,
        id_vino: wine
    }

    fetch('http://localhost/TPEweb2/api/comments/', {
        method: 'POST',
        headers:{'content-type': 'application/json'},
        body: JSON.stringify(comment),
    })

    .then(response=>response.json())
    .then(comment=>app.comments.push(comment))
    .catch(error=>console.log(error))

}


