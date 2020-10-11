<?php
$img = "img/avatar_m.png";
if (!empty($this->getUser('Foto'))) {
    $img = file_exists($this->getUser('Foto')) ? $this->getUser('Foto') : "img/avatar_m.png";
}
?>
<img src="<?php echo $img; ?>" 
     class="rounded-circle <?php echo!empty($this->attribute) ? "" : "circle-border m-b-md"; ?>" 
     alt="profile" 
     <?php echo!empty($this->attribute) ? "width=48" : ""; ?>>

<?php $this->attribute = null; ?>