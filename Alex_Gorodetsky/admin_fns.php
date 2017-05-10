<?php
function display_book_form($book = "")
// Отображает форму для книги.
// Она во многом подобна форме для категорий.
// Эта форма может применяться для вставки и редактирования информации о книгах.
// Для вставки не нужна передача параметров.
// Переменная $edit получит значение false и форма вызовет сценарий insert_book.php.
// Для обновления данных следует передать массив, содержащий данные книги. Будет
// отображена форма с прежними данными и запущен сценарий update_book.php.
// Кроме того, добавляется кнопка "Delete book".
{
    // если передаётся существующая книга, переход к режиму редактирования
    $edit = is_array($book);

    // большую часть формы составляет простой HTML-код с небольшими вставками PHP-кода
?>
    <form method=post
          action="<?=$edit?"edit_book.php":"insert_book.php";?>">
    <table border=0>
    <tr>
        <td>ISBN:</td>
        <td><input type=text name=isbn
                    value="<?=$edit?$book["isbn"]:""; ?>"></td>
        </tr>
        <tr>
            <td>Book Title:</td>
            <td><input type=text name=title
                   value="<?=$edit?$book["title"]:""; ?>"></td>
        </tr>
        <tr>
            <td>Book Author:</td>
            <td><input type=text name=author
                   value="<?=$edit?$book["author"]:""; ?>"></td>
        </tr>
        <tr>
            <td>Category:</td>
            <td><select name=catid>
                    <?
                        // список существующих категорий поступает из базы данных
                        $cat_array=get_categories();
                        foreach ($cat_array as $thiscat)
                        {
                            echo "<option value=\"";
                            echo $thiscat["catid"];
                            echo "\"";
                            // если книга существует, она помещается в текущую категорию
                            if ($edit ss $thiscat["catid"] == $book["catid"])
                                echo " selected";
                            echo ">";
                            echo $thiscat["catname"];
                            echo "\n";
                        }
                        ?>
                    </select>
                </td>
            </tr>
        <tr>
            <td>Price:</td>
            <td><input type=text name=price
                          value="<?=$edit?$book["price"]:""; ?>"></td>
            </tr>
        <tr>
            <td>Description:</td>
            <td><textarea rows=3 cols=50
                          name=description>
                    <?=$edit?$book["description"]:""; ?>
                    </textarea></td>
            </tr>
        <tr>
            <td> <? if (!$edit) echo "colspan=2"; ?> align=center>
                <?
                    if ($edit)
                        // если обновляется номер ISBN, для поиска книги в базе
                        // данных потребуется прежний номер ISBN
                        echo "<input type=hidden name=oldisbn
                                value=\"".$book["isbn"]."\">";
                ?>
                <input type=submit
                       value="<?=$edit?"Update":"Add"; ?> Book">
                </form></td>
                <?
                    if ($edit)
                    {
                        echo "<td>";
                        echo "<form method=post action=\"delete_book.php\">";
                        echo "<input type=hidden name=isbn
                                value=\"".$book["isbn"] "\">";
                        echo "<input type=submit
                                value=\"Delete book\">";
                        echo "</form></td>";
                    }
                ?>
               </td>
             </tr>
    </table>
    </form>
<?
}