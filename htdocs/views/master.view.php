<?php

require_once('./mvc.inc.php');

abstract class MasterView
    extends ViewBase
    implements IHtmlView
{
    protected abstract function renderBody($viewdata);

    public function renderHtmlHeaders($viewdata)
    {
    }

    public function renderHtml($viewdata)
    {
        echo '<?xml version="1.0" encoding="UTF-8" ?>';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo htmlspecialchars($viewdata['title']) ?></title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h1><?php echo htmlspecialchars($viewdata['title']) ?></h1>

<?php $this->renderBody($viewdata) ?>

    </body>
</html>

<?php
    }
}
