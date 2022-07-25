<?php
print 'echo print 打印';
?>
<br>
<?php
$mode  = '$xxx变量';
print $mode;
print '@错误屏蔽符';
//php
print '<br />';
//if ($mode != 'a' && $mode == 1) {
//    echo 'a';
//} else {
//    echo 'b';
//}
//print 'a' == 'a'?'ac':'b';
//
//switch ($mode) {
//    case '1':
//        echo '1';
//        break;
//    case '2':
//        echo '2';
//        break;
//    case '3':
//        echo '干嘛';
//        break;
//    case '$xxx变量':
//        echo  '777';
//        break;
//    default;
//        break;
//
//
//}
$i = 1;
while ($i < 10) {
    echo $i;
    echo '<br />';
    $i++;
}
$j = 1;
do {
    echo $j.'<br />';
    $j++;
} while($j < 10);

$array = array(10,20,30,40);