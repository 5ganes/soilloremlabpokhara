<?php
function top($title, $css){
	echo '<!DOCTYPE html>';
	echo '<html>';
	echo '<head>';
	echo '<title> '.$title.' </title>';
	echo '<link rel="stylesheet" href="'.$css.'"/>';
	echo '</head>';
	echo '<body>';
}

function bottom(){
	echo '<footer>Copyright '.date('Y').'</footer>';
	echo '</body>';
	echo '</html>';
}

function html($tag, $content){
	$result = '<'.$tag.'>'.$content.'</'.$tag.'/>';
	return $result;
}

function digit_sum($n){
	$sum=0;
	while($n!=0){
		$d=$n%10;
		$sum+=$d;
		$n/=10;
	}
	return $sum;
}

$title='About Us';
$css='website.css';
top($title, $css);

echo html('h1', 'Heading');

echo '<ul>';
echo html('li','my first link');
echo html('li', 'my second link');
echo '</ul>';

echo html('p', 'Paragraph content');

$n=123;
$sum = digit_sum($n);
echo 'Sum of digits of '.$n. ' = '.$sum;

bottom();


?>