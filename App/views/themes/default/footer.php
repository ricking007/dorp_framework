<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

<?php
if (isset($this->js) && is_array($this->js)) {
    foreach ($this->js as $js) {
        echo '<script src="' . $js . '"></script>' . PHP_EOL;
    }
}
?>
</body>

</html>