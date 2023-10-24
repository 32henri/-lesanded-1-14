<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 14</title>
</head>
<body>

<!-- Suvaline pilt -->
<div id="myModal" class="modal">
<span class="close">&times;</span>
<div class="modal-content">
<img id="modal-image">
</div>
</div>

<!-- Pisipildid veergudes -->
<div class="thumbnail-container">
<?php
// Pildi lingid
$pildiLingid = [
'https://www.cnet.com/a/img/resize/20d6844768bd3f5f0df41deee97897423bcaf3c5/hub/2021/11/03/3c2a7d79-770e-4cfa-9847-66b3901fb5d7/c09.jpg?auto=webp&fit=crop&height=1200&width=1200',
'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSz6oCYoKoqY2KfciP77zMJWPRkt0P2fBG3_ZkcaFLOVg&s',
'https://m.media-amazon.com/images/I/31GEsNVK8dL.jpg',
'https://prod-printler-front-as.azurewebsites.net/media/photo/115286-1.jpg?mode=crop&width=727&height=1024&rnd=0.0.1',
'https://hips.hearstapps.com/hmg-prod/images/most-interesting-dog-meme-1546529364.png'
];

foreach ($pildiLingid as $link) {
echo '<img class="thumbnail" src="' . $link . '" onclick="displayImage(\'' . $link . '\')">';
}
?>
</div>

<script>
// Kuvab suuremat pilti modaalkastis
function displayImage(imageSrc) {
document.getElementById('myModal').style.display = 'block';
document.getElementById('modal-image').src = imageSrc;
}

// Sulge suure pildi kuvamine klikkides "x" nupule
var closeBtn = document.querySelector('.close');
closeBtn.addEventListener('click', function() {
document.getElementById('myModal').style.display = 'none';
});

// Sulge suure pildi kuvamine klikkides väljaspool suurt pilti
window.addEventListener('click', function(event) {
var modal = document.getElementById('myModal');
if (event.target == modal) {
modal.style.display = 'none';
}
});
</script>

</body>
</html>
