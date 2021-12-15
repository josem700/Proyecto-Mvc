<h1>Editar Usuario</h1>

<form method='post' action='#'>

    <div class="form-group">

        <label for="title">Nombre</label>

        <input type="text" class="form-control" id="title" placeholder="Nombre" name="title" value ="<?php if (isset($users["name"])) echo $users["name"];?>">

    </div>

    <div class="form-group">

        <label for="description">Email</label>

        <input type="text" class="form-control" id="description" placeholder="Email" name="description" value ="<?php if (isset($users["email"])) echo $users["email"];?>">

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    
</form>