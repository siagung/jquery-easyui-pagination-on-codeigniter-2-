<?php
if ( ! function_exists('rupiah_format'))
{
 function rupiah_format($rp) {
    $rupiah = "";
    $pjg = strlen($rp);
    while ($pjg > 3) {
        $rupiah = "." . substr($rp, -3) . $rupiah;
        $lbr = strlen($rp) - 3;
        $rp = substr($rp, 0, $lbr);
        $pjg = strlen($rp);
    }

    $rupiah = $rp . $rupiah;
    return $rupiah;
}
}

?>
