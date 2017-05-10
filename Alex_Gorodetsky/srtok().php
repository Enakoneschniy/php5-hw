$token = strtok($feedback, " ");
echo $token."<br>";
while ($token!="")
{
   $token = strtok(" ");
   echo $token."<br>";
};