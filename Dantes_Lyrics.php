

<?php
$title = "Free";
$artist = "Artist: Rumi & Jinu";
$nouns = ["hand", "chains", "secrets", "past", "hope"];
$verbs = ["hide", "sing", "breathe", "change", "break"];
$adjectives = ["broken", "dark", "dangerous", "free"];
$mood = "Mood: Hopeful";

$info = $title . " by " . $artist;

$verses = 2;
$chorus = 2;

$verse1 = ["I tried to hide but something broke", "I tried to sing, couldn't hit the notes", 
"The words kept catching in my throat", "I tried to smile, I was suffocating though", "But here with you, I can finally breathe", 
"You say you're no good, but you're good for me", "I've been hoping to change, now I know we can change", 
"But I won't if you're not by my side"];

$chorus = ["Why does it feel right every time I let you in?", "Why does it feel like I can tell you anything?", 
"All the secrets that keep me in chains, and", "All the damage that might make me dangerous", "You got a dark side, 
guess you're not the only one", "What if we both tried fighting what we're running from?", "We can't fix it if we never face it", 
"What if we find a way to escape it?"];

$post_chorus = ["We could be free, free", "We can't fix it if we never face it", "Let the past be the past 'til it's weightless"];

$verse2 = ["Ooh, time goes by, and I lose perspective", 
"Yeah, hope only hurts, so I just forget it", 
"But you're breaking through all the dark in me 
when I thought that nobody could", "And you're waking up 
all these parts of me that I thought were buried for good",
 "Between imposter and this monster, I've been lost inside my head", 
 "Ain't no choice when all these voices keep me pointing towards no end", 
 "It's just easy when I'm with you, no one sees me the way you do", 
 "I don't trust it, but I want to, I keep coming back to"];

$bridge = ["Oh, so take my hand, it's open", 
"What if we heal what's broken?"];

$outro = ["I tried to hide but something broke", 
"I couldn't sing, but you give me hope", 
"We can't fix it if we never face it", 
"Let the past be the past 'til it's weightless"];
?>

<!DOCTYPE html>

<html>
<head>
    
  <title><?php echo $title; ?></title>
  <style>
    body {
      background-color: #DAB1DA;
      font-family: Georgia;
      color: white;
      background-image: url(https://img.freepik.com/free-vector/gradient-galaxy-background_23-2148988608.jpg?semt=ais_hybrid&w=740&q=80);
      background-size: cover;
    }

    img {
        height: 10%;
        width: 10%;
        float: left;
        margin-right: 30px;
    }
    
  </style>
</head>
<body>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwNQN35wm45sCcq__mYwCYTILQDBTeKezmP08frRPSF4gc-R8Lemtv_QSKi2fgn_ASkSw&usqp=CAU" alt="Free">
  <div class="container">
    <h1><?php echo $title; ?></h1>
    <h2><?php echo $artist; ?></h2>
    <h2><?php echo $mood; ?></h2>

<h2>Verse 1</h2>
<?php foreach($verse1 as $line) { echo $line . "<br>"; } ?>

<h2>Chorus</h2>
<?php foreach($chorus as $line) { echo $line . "<br>"; } ?>

<h2>Verse 2</h2>
<?php foreach($verse2 as $line) { echo $line . "<br>"; } ?>

<h2>Post-Chorus</h2>
<?php foreach($post_chorus as $line) { echo $line . "<br>"; } ?>

<h2>Bridge</h2>
<?php foreach($bridge as $line) { echo $line . "<br>"; } ?>

<h2>Outro</h2>
<?php foreach($outro as $line) { echo $line . "<br>"; } ?>
```

  </div>
</body>
</html>

