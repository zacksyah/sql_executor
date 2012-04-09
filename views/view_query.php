
<html>
    <title>
        Query SQL
    </title>
    <h1>MySQL eksekutor</h1>

    <h3>Input Mahasiswa</h3>
    <table>
        <form action="<?php echo site_url() ?>/controller_query/index" method="POST">
            <tr>            
                <td>Perintah MySQL:</td>
            </tr>
            <tr><td><textarea name="eksekusi" cols="35" rows="5"> </textarea></td></tr>
            <tr><td><input type="submit" value="Coba"/></td></tr>
        </form>
    </table>

    
        <tr>
            <td>Hasil Eksekusi:</td>
        </tr>
        <table border ="1" id="zebra-table" cellspacing="1" width="1000">
        <tr>
            <?php
            echo "<tr>";
            $z = 0;
            foreach ($column as $nama) {
                $arr[$z] = $nama;
                echo "<td>" . $nama . "</td>";
                $z++;
            }
            echo "</tr>";
            ?>
        </tr>
        <?php
        foreach ($isi as $row) {
            echo "<tr>";
            for ($i = 0; $i < $z; $i++) {
                echo "<td>";
                echo $row->$arr[$i];
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <p><br/>Query took {elapsed_time} seconds</p>
</html>
