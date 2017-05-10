<?
@ $fp = fopen($name, $mode);
  if (!$fp)
  {
  echo "<p><strong> Oh No! i could not open the file.</strong></p>";
  return 0;
  }
  else
  {
  return 1;
  }
?>