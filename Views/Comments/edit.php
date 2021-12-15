<h1>Editar Comentario</h1>

<form method='post' action='#'>
 
    <div class="form-group">
        
        <label for="description">Comentario</label>
        
        <input type="text" class="form-control" id="description" placeholder="Intorduce un Comentario" name="commentBody" value="<?php if (isset($comments["body"])) echo $comments["body"];?>">

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>