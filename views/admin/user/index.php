<h1>Admiasdn</h1>
<table>
<?php for( $i = 0; $i <= $rand_num; $i++): ?>
    <tr>
        <?php if ($i < ($rand_num / 2)): ?>
            <?php for ( $j = 0; $j <= $i; $j++): ?>
                <?php if ($j % 2 != 0 && $i % 2 == 0): ?>
                    <td>-o-</td>
                <?php else: ?>
                    <th>-O-</th>
                <?php endif; ?>
            <?php endfor; ?>
        <?php else: ?>
            <?php for ( $j = 0; $j <= ($rand_num-$i); $j++): ?>
                <?php if ($j % 2 != 0 && $i % 2 == 0): ?>
                    <td>-o-</td>
                <?php else: ?>
                    <th>-O-</th>
                <?php endif; ?>
            <?php endfor; ?>
        <?php endif; ?>
    </tr>
<?php endfor; ?>