<!--Task 2
Используя циклы отрисовать таблицу умножения 10x10. Закрасить и выделить первый tr и первый td-->

<h3>Task 2</h3>

<table border="1">

    <?php
    $max = 10;
    for ($r = 1; $r <= $max; $r++): ?>
        <?php if ($r == 1): ?>
            <tr align="center" bgcolor="#5f9ea0" style="font-weight: bold">
        <?php else: ?>
            <tr>
        <?php endif; ?>
        <?php for ($c = 1; $c <= $max; $c++): ?>
            <?php if ($c == 1): ?>
                <td align="center" bgcolor="#5f9ea0" style="font-weight: bold"><?php echo $c * $r ?></td>
            <?php else: ?>
                <td><?php echo $c * $r ?></td>
            <?php endif; ?>
        <?php endfor; ?>
        </tr>
    <?php endfor; ?>

</table>