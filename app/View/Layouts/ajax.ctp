<?php
/**
 * @copyright     Copyright (c) NLWare B.V. (http://www.nlware.com)
 * @link          http://docs.qdnatool.org qDNAtool(tm) Project
 * @package       app.View.Layouts
 * @license       http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_GB CC BY-NC-SA 3.0 License
 */
?>
<?php
echo $this->fetch('content');
echo $this->fetch('script');
echo $this->Js->writeBuffer();
