{literal}
    <div id="vue-comments">
    <p class="text-dark">Comentarios:<p>
        <ul id="comment-list" class="list-group" >
            <li v-for="comment in comments" class="list-group-item"> 
                <p><span class="badge badge-secondary">{{comment.usuario}}</span></p>
                <p> {{comment.id_usuario}} {{ comment.comentario }}</p>
                <p class="text-muted">puntaje: {{comment.puntaje}}</p>
            </li>
        </ul>

    </div>

{/literal}
