<h1>Crear Comentario</h1>
<form method='post' action='#'>

    <div class="form-group">

    <label for="">Post</label>
        <select name="idpost" class="form-control" >
            <?php
            echo "<option selected>Selecciona un Post </option>";
            foreach($posts as $post){
                echo "<option value=".$post['id'].">".$post['title']."</option>";
            }
            ?>
        </select>

        <label for="">Usuario</label>
        <select name="iduser" class="form-control">

            <?php
            echo "<option selected>Selecciona un Usuario </option>";
            foreach($users as $user){
            echo "<option value=".$user['id'].">".$user['name']."</option>";
            }
            ?>
        </select>

        <label for="title">Comentario</label>
        <input type="text" class="form-control" id="title" placeholder="Introduce un comentario" name="title">
        
    </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>

</form>