<?php

// Task 1;

for ($i = 0; $i <= 50; $i++) {
    if ($i%2!=0) {
        echo "$i <br> \n";
    }
}

// Task 1.2;

$cols = 10;
$rows = 10;

// Task 2;
echo '<h3>Task 2</h3>';

echo '<table cellpadding="1" cellspacing="1" border="1">';

for ($r = 1; $r <= $rows; $r++ ) {
    if ($r == 1) {
        echo '<tr align="center" bgcolor="#5f9ea0">';
    } else {
        echo '<tr>';
    }
    for ($c = 1; $c <= $cols; $c++) {
        if ($c == 1) {
            echo '<td align="center" bgcolor="#5f9ea0">' . $c * $r . '</td>';
        } else {
            echo '<td>' . $c * $r . '</td>';
        }
    }
    echo '</tr>';
}
echo '</table>';
?>

<!--// Task 2.1 (html version, not short tags);-->
<h3>Task 2.1</h3>

<table cellpadding="1" cellspacing="1" border="1">
    <?php $cols = 10; $rows = 10; ?>
    <?php for ($r = 1; $r <= $rows; $r++): ?>
        <?php if ($r == 1): ?>
            <tr align="center" bgcolor="#5f9ea0">
        <?php else: ?>
            <tr>
        <?php endif; ?>
        <?php for ($c = 1; $c <= $cols; $c++): ?>
            <?php if ($c == 1): ?>
                <td align="center" bgcolor="#5f9ea0"><?php echo $c*$r ?></td>
            <?php else: ?>
                <td><?php echo $c*$r ?></td>
            <?php endif; ?>
        <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>