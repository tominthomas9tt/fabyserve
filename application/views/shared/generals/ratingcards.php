<?php 
// echo $rating;

$noOfFullStars = floor($rating);
$noOfHalfStar = ($rating - $noOfFullStars) > 0 ? 1 : 0;
$noOfEmptyStars = 5 - ($noOfFullStars + $noOfHalfStar);

while ($noOfFullStars > 0) {
?>
    <i class="fa fa-star" style="color: yellow;"></i>

<?php
    $noOfFullStars--;
}

while ($noOfHalfStar > 0) {
?>
    <i class="fa fa-star-half-o" style="color: yellow;"></i>
<?php
    $noOfHalfStar--;
}
while ($noOfEmptyStars > 0) {
?>
    <i class="fa fa-star-o" style="color: yellow;"></i>
<?php
    $noOfEmptyStars--;
}
?>