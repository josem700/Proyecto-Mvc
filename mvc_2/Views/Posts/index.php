<h1>Posts</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
       <!-- <a href="<?php echo WEBROOT;?>posts/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Añadir Post</a>-->
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Status</th>
            <th class="text-center">Accion</th>
        </tr>
        </thead>
        <?php
        foreach ($posts as $post)
        {
            echo '<tr>';
            echo "<td>" . $post['id'] . "</td>";
            echo "<td>" . $post['title'] . "</td>";
            echo "<td>" . $post['status'] . "</td>";
            echo "<td class='text-center'><a href='". WEBROOT."posts/delete/" . $post["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a><a href='". WEBROOT."posts/detail/" . $post["id"] . "' class='btn btn-info btn-xs'><span class='glyphicon glyphicon-remove'></span> Detalle</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>