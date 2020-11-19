<form id="form-comment" method="post">
    <div class="form-group">
    <label for="exampleFormControlTextarea1" id="user" name_user={$userEmail}>Agregar comentario</label>
    <textarea class="form-control" name="input_comentario" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Puntaje</label>
    <select class="form-control"  name="input_puntaje" id="exampleFormControlSelect1">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
    <button type="submit" class="btn btn-primary">Comentar</button>
 </form>