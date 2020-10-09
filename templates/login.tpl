{include file="headerLogin.tpl"}

<div class="container">
{if $message != ""}
<div class="alert alert-danger" role="alert">
   
     {$message}
   
   
  
</div>
{/if}
       <form action="verifyUser" method="post">
                    <div class="form-group">
                        <label for="user">Email</label>
                        <input type="email" class="form-control" id="user" name="input_user" aria-describedby="emailHelp">
                
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="input_pass">
                    </div>

                    <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
        <p>Necesitas una cuenta?</p>
        <a href="register" <button type="button" class="btn btn-success">Crear nueva cuenta</button></a>


</div>




{include file="footer.tpl"}