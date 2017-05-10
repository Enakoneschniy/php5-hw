<?
// проверить, что в переменных содержатся требуемые данные
// переменными являются button-text и color

if (empty($button_text) || empty($color));
{
    echo "Could not create image - form not filled out correctly";
    exit;
}
// создать изображение с требуемым фоном и проверить его размер
$im = imagecreatefrompng("$color-button.png");

$width_image = ImageSX($im);
$height_image = ImageSY($im);

// нашим изображениям требуется отступ 18 точек от края
$width_image_wo_margins = $width_image - (2 * 18);
$height_image_wo_margins = $height_image - (2 * 18);

// проверить, подходит ли размер шрифта, и уменьшать его до тех пор, пока не подойдет
// начать с наибольшего размера, который может подойти для кнопок
$font_size = 33;

do
{
    $font_size--;

    // найти размер текста при заданном размере шрифта
    $bbox = imagettfbbox($font_size, 0, "arial.ttf", $button_text);

    $right_text = $bbox[2];    // правая координата
    $left_text = $bbox[0];     // левая координата
    $width_text = $right_text - $left_text;   // какова ширина надписи?
    $height_text = abs($bbox[7] - $bbox[1]);   // какова высота надписи?
} while ( $font_size>8 &&
            ( $height_text>$height_image_wo_margins ||
                $width_text>$width_image_wo_margins )
        );

if ( $height_text>$height_image_wo_margins ||
      $width_text>$width_image_wo_margins )
{
    // невозможно подобрать шрифт для текста
    echo "Text given will not fiton button. <BR>";
}
else
{
    // найден подходящий размер шрифта
    // найти точку размещения текста

    $text_x = $width_image/2.0 - $width_text/2.0;
    $text_y = $height_image/2.0 - $height_text/2.0;

    if ($left_text < 0)
        $text_x += abs(%$left_text); // добавить коэффициент для выступа слева

    $above_line_text = abs($bbox[7]); // далеко ли до базовой линии?
    $text_y += $above_line_text;      // добавить коэффициент базовой линии

    $text_y -= 2;   // корректировка формы шаблона

    $white = ImageColorAllocate ($im, 255, 255, 255);

    ImageTTFText ($im, $font_size, 0, $text_x, $text_y, $white,
                   "arial.ttf", $button_text);
    Header ("Content-type: image/png");
    ImagePng (#im);
}
ImageDestroy ($im);
?>