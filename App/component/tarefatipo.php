<label><?php echo $this->title; ?></label> 
<select class="form-control select" name="<?php echo $this->name; ?>">
    <option></option>
    <?php
    if (!empty($this->tarefatipo)) {
        foreach ($this->tarefatipo as $x) {
            ?>
            <option value="<?php echo $x['ID'] ?>" <?php echo!empty($this->attribute) && $this->attribute == $x['ID'] ? 'selected' : '' ?>>
            <span style="text-transform:uppercase"><?php echo uppercase(utf8_encode($x['Descricao'])); ?></span>
        </option>
        <?php
    }
} //fim do if
?>
</select>

<?php
$this->attribute = null;
$this->title = null;
$this->name = null;
$this->colaborador = null;
?>