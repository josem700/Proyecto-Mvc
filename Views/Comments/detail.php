<h1>Comentarios</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Usuario</th>
            <th>ID Post</th>
            <th>Cometario</th>
            <th>Creado</th>
            <th>Modificado</th>

        </tr>
        </thead>
        <?php
            echo '<tr>';
            echo "<td>" . $comments['id'] . "</td>";
            echo "<td>" . $users['name'] . "</td>";
            echo "<td>" . $comments['post_id'] . "</td>";
            echo "<td>" . $comments['body'] . "</td>";
            echo "<td>" . $comments['created_at'] . "</td>";
            echo "<td>" . $comments['updated_at'] . "</td>";
            echo "</tr>";
        
        ?>
    </table>
</div>