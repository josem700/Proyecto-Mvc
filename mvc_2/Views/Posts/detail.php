<h1>Detalle Post</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <tr>
            <th>ID</th>
            <th>ID Usuario</th>
            <th>Titulo</th>
            <th>Estado</th>
            <th>Creado</th>
            <th>Modificado</th>

        </tr>
        </thead>
        <?php
            echo '<tr>';
            echo "<td>" . $posts['id'] . "</td>";
            echo "<td>" . $posts['user_id'] . "</td>";
            echo "<td>" . $posts['title'] . "</td>";
            echo "<td>" . $posts['status'] . "</td>";
            echo "<td>" . $posts['created_at'] . "</td>";
            echo "<td>" . $posts['updated_at'] . "</td>";
            echo "</tr>";
        
        ?>
    </table>
</div>