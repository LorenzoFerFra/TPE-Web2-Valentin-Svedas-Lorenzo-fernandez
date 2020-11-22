{literal}

  <div id="vue-comments">
    <p class="text-dark">Comentarios:<p>
        <ul id="comment-list"class="list-group" >
            <li  
                v-for="comment in comments" 
                :key="comment.id"
                 class="list-group-item"> 
                <div class="row">
                    <div class="col">
                    <p><span class="badge badge-secondary">{{comment.usuario}}</span></p>
                    </div>
                    <div class="col">
                    </div>
                    <div >
                    <button type="button" v-on:click="deleteComment(comment.id)" class="btn btn-outline-danger btn-sm">Borrar</button>
                    </div> 
                </div>   
                <p> {{comment.id_usuario}} {{comment.comentario}}</p>
                <p class="text-muted">puntaje: {{comment.puntaje}}</p>
            </li>
        </ul>

    </div>
    

{/literal}

