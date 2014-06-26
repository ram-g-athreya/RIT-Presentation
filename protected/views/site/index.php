<?php
$quote = $finance->quote->quote;
$chart = $finance->chart;
$table_data = array(
    'Prev Close' => $quote->PreviousClose,
    'Open' => $quote->Open,
    'Volume' => $quote->Volume,
    'Avg Vol' => $quote->AverageDailyVolume,
    'MarketCap' => $quote->MarketCapitalization
);
?>

<div class="col-md-12">
    <h5>
        <?php echo "{$quote->Name} ({$quote->symbol})"; ?>
    </h5>
    <h3>
        <?php
        echo "\$ {$quote->LastTradePriceOnly} ";
        $change = floatval($quote->Change);
        ?>

        <small class="<?php echo ($change >= 0) ? "green" : "red"; ?>">
            <span class="glyphicon <?php echo ($change >= 0) ? "glyphicon-arrow-up" : "glyphicon-arrow-down"; ?>"></span>
            <?php echo $change . " ({$quote->ChangeinPercent})"; ?>
        </small>
    </h3>
</div>

<div class="container-fluid col-md-12" style="padding-left: 0px;">
    <div class="col-md-6 col-xs-4">
        <table class="table">
            <?php
            foreach ($table_data as $key => $value) {
                ?>
                <tr>
                    <td>
                        <?php echo $key; ?>
                    </td>
                    <td>
                        <strong>
                            <?php echo $value; ?>
                        </strong>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
    <div class="col-md-6 col-xs-12" style="padding-left: 0px;">
        <img src="<?php echo $chart; ?>" class="col-md-12 col-xs-4" />
    </div>

</div>

<?php
var_dump($finance);
?>