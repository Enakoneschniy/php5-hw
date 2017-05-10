<?
function display_cart($cart, $change = true, $images = 1)
{
    // отображение элементов в покпательской тележке
    // возможно внесение изменений (true или false)
    // возможно включение изображений (1 - да, 0 - нет)

    global $items;
    global $total_price;

    echo "<table border = 0 width = 100% cellspacing = 0>
          <form action = show_cart.php method = post>
          <tr><th colspan = ". (1+$images) ." bgcolor=\"#cccccc\">Item</th>
          <th bgcolor=\"#cccccc\">Price</th><th bgcolor=\"#cccccc\">Quantity</th>
          <th bgcolor=\"#cccccc\">Total</th></tr>";
    // отображение каждого элемента в виде строки таблицы
    foreach ($cart as $isbn => $qty)
    {
        $book = get_book_details($isbn);
        echo "<tr>";
        if($images == true)
        {
            echo "<td align = left>";
            if (file_exists("images/$isbn.jpg"))
            {
                $size = GetImageSize("images/".$isbn.".jpg");
                if ($size[0]>0 && $size[1]>0)
                {
                    echo "<img src=\"images/".$isbn.".jpg\" border=0 ";
                    echo "width = ". $size[0]/3 ." height = " .$size[1]/3 . ">";
                }
            }
            else
                echo "&nbsp;";
            echo "</td>";
        }
        echo "<td align = left>";
        echo "<a href = \"show_book.php?isbn=".$isbn."\">"
                            .$book["title"]."</a>by " .$book["author"];
        echo "</td><td align = center>$".number_format($book["price"], 2);
        echo "</td><td align = center>";

        // если изменения допускаются, количества указываются
        // в текстовых полях
        if ($change == true)
            echo "<input type = text name = \"$isbn\" value = $qty size = 3>;
        else
            echo $qty;
        echo "</td><td align = center>$".number_format($book["price"]*$qty,2)
                ."</td></tr>\n";
    }
    
    // отображение итоговой строки
    echo "<tr>
              <th colspan = ". (2+$images) ." bgcolor=\"#cccccc\">&nbsp;</td>
              <th align = center bgcolor=\"#cccccc\">
                    $items
              </th>
              <th align = center bgcolor=\"#cccccc\">
                    \$".number_format($total_price, 2).
              "</th>
          </tr>";
        // отображение кнопки сохранения изменений
        if($change == true)
        {
            echo "<tr>
                      <tв colspan = ". (2+$images) .">&nbsp;</td>
                      <th align = center>
                            <input type = hidden name = save value = true>
                            <input type = image src = \"images/save-changes.gif\"
                                    border = 0 alt = \"Save Changes\">
                      </td>
                      <td>&nbsp;</td>
                  </tr>";
        }
        echo "</form></table>";
    }
}