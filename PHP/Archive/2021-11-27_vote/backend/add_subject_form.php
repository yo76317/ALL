<?php
$subjet=find('topics',$_GET['id']);
$options_all('options',['topic_id'=>$_GET['id']]);
?>


<!-- 以下是修改功能 -->
<form action="api/save_subject.php" method='post' class='col-6 m-auto'>
    <label>問卷主題: <input type="text" name="subject" value='<?=$subject['topic'];?>'></label>

<?php
foreach($options as $key=>$opt){

echo"<label class='list-group-item'>";
echo "選項" . ($key+1); //算式要加括號
echo "<input type='text' name='option[]' value='{$opt['pot']}'>";
echo "</label>";
}
?>

<input type="submit" value="送出">
</form>