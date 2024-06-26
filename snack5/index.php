<!--Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.--->

<?php
    $paragrafo = '
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec maximus sem. Fusce efficitur dapibus lacus eget mattis. Sed lacinia elit eget eros convallis semper. In hac habitasse platea dictumst. Duis interdum, lectus id convallis interdum, metus ante ornare mi, id pulvinar elit elit ac orci. Suspendisse egestas nunc porta, bibendum ligula sit amet, convallis eros. Nunc tristique, leo vel pulvinar pharetra, tortor ante pulvinar elit, non ultricies orci nisi sit amet nulla. In sit amet volutpat metus. Quisque ullamcorper nulla vel elit ultricies, at consectetur turpis condimentum. Vestibulum luctus arcu lectus. Nam eu tempus orci. Phasellus et ipsum egestas, blandit justo eget, molestie nunc. In nec auctor risus. Quisque lacus ligula, bibendum et felis sit amet, auctor consectetur enim. Vivamus facilisis arcu quam, sed gravida erat lobortis ut. Pellentesque aliquet hendrerit erat quis ullamcorper.
        Praesent condimentum est quam, vel eleifend augue molestie et. Vestibulum tempor ante vitae lectus interdum hendrerit eget et velit. Aliquam ornare ultrices dolor ut faucibus. Nunc id venenatis arcu. Sed eu lectus finibus, consectetur est at, finibus nibh. Quisque nec est ac lacus elementum tempor eu et nibh. Nam eu sagittis augue. Cras ut fringilla tortor, a gravida dolor.
        Nulla tincidunt sem odio, imperdiet pretium libero porttitor ut. Nam id aliquam neque. Mauris non lacus hendrerit felis viverra cursus ut sed odio. Ut justo leo, cursus eget rutrum non, semper quis ex. Proin lacinia tortor velit, non efficitur est semper in. Curabitur eleifend nulla id mollis blandit. Sed bibendum dapibus sodales. Donec eget odio lorem. Ut porta ante vel mi rutrum pretium. Donec facilisis, orci id volutpat auctor, nisl sem aliquam leo, consequat tempor dolor nisi eget lorem. Maecenas a dignissim felis, vitae pellentesque mi.
        Nam nec tincidunt dui, at semper elit. Suspendisse vel diam porta, rhoncus ante at, suscipit erat. Suspendisse accumsan urna vel massa consectetur dignissim. Sed tellus massa, congue ac scelerisque et, blandit ut sem. In hac habitasse platea dictumst. Vivamus vel tincidunt mauris. Cras ac hendrerit massa. Nunc at lectus tellus. Duis quis iaculis felis.
        Fusce ut porta tellus, et vulputate velit. Morbi sed mauris eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi consequat nibh at nisl lacinia, sed molestie purus posuere. Proin ut sollicitudin velit, feugiat interdum ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent viverra, mi ut consequat ultricies, leo elit accumsan augue, in feugiat risus metus non turpis.';

    $frasi = explode('.', $paragrafo);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h2>Paragrafo e Frasi</h2>
        <h4>Paragrafo originale</h4>
        <p>
            <?php echo $paragrafo;?>
        </p>
        <?php
            foreach ($frasi as $frase){
                echo '<p>'.$frase.'</p><br>';
            }
        ?>
        <script src="" async defer></script>
    </body>
</html>