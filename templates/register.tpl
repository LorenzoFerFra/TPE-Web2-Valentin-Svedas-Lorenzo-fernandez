{include file="header.tpl"}

<div class="container">
{if $message != ""}
<div class="alert alert-danger" role="alert">
   
     {$message}
   
   
  
</div>
{/if}
       <form action="registerUser" method="post">
                    <div class="form-group">
                        <label for="user">Email</label>
                        <input class="form-control" id="user" name="input_user" aria-describedby="emailHelp">
                
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="input_pass">
                    </div>
                    


                    <button type="submit" class="btn btn-success">Registrarse</button>
        </form>
        <p>Ya tienes una cuenta?</p>
         <a href="login"><button class="btn btn-primary">Login</button></a>
</div>




{include file="footer.tpl"}