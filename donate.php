<?php

include 'common.php';
include 'header.php';

$donate_base_href="https://sourceforge.net/donate/index.php?group_id=61828&amp;type=0";
$amounts = array( 10, 20, 50, 100 );

?>

<body>

<h3 class="title">Donate</h3>
<br />
<br />
<br />
<p style="text-align: center"><?php echo $lang['donation_instructions']; ?></p>
<br />

<table style="width: 100%; font-size: 12px">
<tr>
<?php foreach( $amounts as $amount ) { ?>

    <td align="center">
        <a 
            href="<?php echo $donate_base_href; ?>&amp;amt=<?php echo $amount; ?>"
            target="new"><img 
            src="images/paypal-donate.png" 
            alt="[<?php echo sprintf( $lang['donate_amount'], '$US ' . $amount ); ?>]"
            title="<?php echo sprintf( $lang['donate_amount'], '$US ' . $amount ); ?>" /></a>
    </td>

<?php } ?>
</tr>

<tr>
<?php foreach( $amounts as $amount ) { ?>

    <td align="center"><?php echo sprintf( $lang['donate_amount'], '$' . $amount ); ?></td>

<?php } ?>
</tr>

</table>

<br />
<br />
<center>
<?php echo $lang['wish_list_option']; ?>
<br />
<br />
<a href="http://www.amazon.com/gp/registry/22APPYURX48VA"><?php echo $lang['wish_list']; ?></a>
</center>



</body>
</html>