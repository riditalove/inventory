<?php
$materialName = preg_replace('/[^a-zA-Z0-9_-]/', '_', $stockin['Material']['name']);
$qrFileName = 'material_' . $materialName . '_' . $stockin['Stockin']['id'] . '.png';
$qrPath = $this->webroot . 'img/qrcodes/' . $qrFileName;
?>

<div style="text-align:center; margin-top:50px;">
	<h2><?php echo h($stockin['Material']['name']); ?> - QR Code</h2>
	<br>
	<img src="<?php echo $qrPath; ?>" style="width:200px; height:200px;" alt="QR Code" />
	<br><br>
	<button onclick="window.print()" style="padding: 10px 20px;">🖨️ Print</button>
</div>
