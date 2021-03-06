<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex">
	<title>Start - T.A.R.D.I.S.</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="icon" type="ico" href="../assets/img/tardis.ico">
	<link rel="stylesheet" href="../assets/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body style="background-image: url(&quot;../assets/img/bg1.jpg&quot;);">
<?php include_once('../statsServ.php'); 
$uptime = getUpTime()[0];
if(getUpTime()[0] === 1): $uppy = $uptime . " jour"; else: $uppy = $uptime . " jours"; endif;
$json = file_get_contents('./service.json');
$data = json_decode($json, true);
?>

<!-- particles.js container -->
<div id="particles-js"></div>

<!-- contenu -->
<div class="center">
	<div class="content" id="form" style="top: 0px; opacity: 1;">
		<!-- logo -->
		<div id="logotop"></div>
		<br>
<?php foreach ($data[dashboard] as $menu => $liens) { ?>
      <table>
        <thead>
        <tr> <td class= "editable" id=menu_<?= $menu?>><?=$liens[nom] ?> </td></tr>
          <tr>
            <th>Lien</th>
            <th>Titre</th>
            <th>Icone</th>
            <th>Preview</th>
          </tr>
        </thead>
        <tbody>
        
          
          <?php foreach ($liens[menus] as $item) { ?>
            <tr>           
            <td class= "editable" id=liens_<?= $menu.'_'.$item[id] ?>_lien><?= $item[lien] ?></td>
            <td class= "editable" id=liens_<?= $menu.'_'.$item[id] ?>_titre><?= $item[titre] ?></td>
            <td class= "editable" id=liens_<?= $menu.'_'.$item[id] ?>_icone><?= $item[icone] ?></td>
            <td><i class="fa fa-2x <?= $item[icone] ?>"></i></td>
            </tr>
          <?php } ?>
           
        </tbody>
      </table>
<?php } ?>
		</div>
	</div>

<!-- script recherche -->
<script src='../assets/bower/jquery/dist/jquery.min.js'></script>
<script src="../assets/bower/particles.js/particles.min.js"></script>
<script src="../assets/bower/jeditable/jquery.jeditable.js"></script>
<script src="../assets/js/search.js"></script>
<script src="../assets/js/app.js"></script>
<script src="../assets/js/admin.js"></script>
</body>
</html>
