<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="catppuccin.css">
    <title>Fisio com a Ana</title>
</head>
  <?php 
    include 'header.php';
  ?>

<body>
  <div class="centro fundo">
    <div class="textinho">
      <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus elit neque, non consequat lacus malesuada vel. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque pharetra vulputate egestas. Fusce est nibh, egestas at aliquam et, lacinia ac felis. Suspendisse potenti. Praesent ex lacus, rhoncus eget rutrum vel, fermentum vitae ligula. Nam mattis, enim euismod scelerisque tempor, arcu orci vestibulum augue, at mollis nibh odio at metus. Aenean odio dui, gravida eget arcu in, pharetra ornare lorem.

Proin vitae dapibus dolor. Duis eget massa risus. Vivamus at justo laoreet lectus dapibus elementum scelerisque sed ante. Morbi sit amet tortor vitae erat convallis euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. In vitae venenatis felis. Curabitur viverra magna est, et aliquam nisl consequat quis. Aenean hendrerit, lorem sed viverra lacinia, ante erat condimentum lorem, nec interdum dolor justo vitae sem. Sed in metus eleifend, rutrum sapien nec, dapibus velit. Aliquam massa massa, condimentum eu ante at, hendrerit posuere lacus. Integer faucibus nibh sed nisi interdum, a tempor massa eleifend. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi luctus magna sit amet cursus lobortis. Suspendisse volutpat risus et ante tempus ullamcorper. Donec facilisis viverra vehicula.

Mauris et turpis aliquam, varius neque auctor, porta nisl. Maecenas eget turpis mollis urna consequat maximus id a eros. In ut erat gravida, placerat felis in, fringilla leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque non magna faucibus, lacinia tellus vitae, viverra metus. Phasellus vitae sem blandit, dictum lorem vitae, facilisis nisi. Phasellus sollicitudin urna id massa venenatis blandit. Curabitur tempor sodales dui, sed aliquet magna venenatis rutrum. Fusce condimentum diam sit amet velit volutpat, a aliquet ante suscipit. Ut aliquet a ex sed mattis. Aenean sed pellentesque velit. Aliquam erat volutpat. Vivamus iaculis lacus arcu, sed ornare felis commodo id. Integer eget sapien sit amet lorem laoreet blandit eu sed est. Sed at mauris eget metus porta posuere.

Mauris faucibus mauris at consequat viverra. Nunc tincidunt pulvinar lorem vel tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In sed risus sit amet tellus euismod faucibus sit amet sed tortor. Nullam quis lorem euismod, iaculis massa eu, pretium risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam erat volutpat. Etiam ligula nisi, vulputate at sollicitudin vitae, viverra id augue. Etiam neque felis, feugiat eu neque at, rhoncus malesuada nisl. Donec vitae nisl nisi.

In suscipit laoreet massa, ut elementum felis pulvinar quis. Aliquam tincidunt tellus metus, et laoreet felis posuere eget. Phasellus et odio fermentum, auctor ante et, commodo ante. Sed mattis placerat sem, quis pulvinar sem tristique nec. Nulla facilisis quam ante, quis malesuada massa ultricies eget. Nulla facilisi. Curabitur commodo imperdiet ante sit amet porta. Sed maximus tincidunt libero, eget pulvinar lacus hendrerit eu. Aenean sed elit scelerisque diam feugiat iaculis eget at orci. Etiam vitae mauris in diam semper dapibus.

Donec vel urna ac neque tincidunt congue ac vitae mauris. Morbi rutrum nunc cursus tellus auctor, non semper sem consectetur. Maecenas efficitur velit nisl, non aliquet orci pretium ac. Quisque faucibus ipsum id erat eleifend, non feugiat dui vulputate. Suspendisse massa nunc, interdum id tempus et, interdum ac mi. Curabitur et lacus nec urna aliquet faucibus. In eget metus at risus elementum facilisis. Duis lorem quam, lobortis vel vehicula sit amet, volutpat in lectus. Donec non placerat mauris, vel ultrices massa. Donec molestie pellentesque ultrices.
</h1>    
</div>
  </div>
</body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['entryEmail'] = $_POST['entryEmail'];
    header('Location: login.php'); 
    exit();
}

?>