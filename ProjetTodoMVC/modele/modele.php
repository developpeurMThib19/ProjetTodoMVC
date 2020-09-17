<body>
    <div class="heading">
        <h2> Todos </h2>
    </div>

    <form method="POST" action="index.php">
    <?php if (isset($errors)) { ?>
        <p><?php echo $errors; ?></p>
    <?php } ?>

        <input type="text" name="tache" class="tache_input">
        <button type="submit" class="add_btn" name="submit">Ajouter de la tache</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>N</th>
                <th>Tâche</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1; while ($row = mysqli_fetch_array($taches)) { ?>
        <tr>
                <td><?php echo $i;?></td>
                <td class="tache"><?php echo $row['tache'];?></td>
                <td class="delete">
                    <a href="index.php?del_tache=<?php echo $row['id'];?>">x</a>
                </td>
            </tr>
            <?php $i++; } ?>
    </tbody>
    </table>
</body>
