<?php
$quote = $finance->quote->quote;
$chart = $finance->chart;
$news = $finance->news;
$table_data = array(
    'Prev Close' => $quote->PreviousClose,
    'Open' => $quote->Open,
    'Volume' => $quote->Volume,
    'Avg Vol' => $quote->AverageDailyVolume,
    'MarketCap' => $quote->MarketCapitalization,
    'Beta' => $quote->ShortRatio
);
?>

<div class="col-md-12">
    <h5>
        <?php echo "{$quote->Name} ({$quote->symbol})"; ?>
    </h5>
    <h3>
        <?php
        echo "\$ " . round($quote->LastTradePriceOnly, 2);
        $change = floatval($quote->Change);
        ?>

        <small class="<?php echo ($change >= 0) ? "green" : "red"; ?>">
            <span class="glyphicon <?php echo ($change >= 0) ? "glyphicon-arrow-up" : "glyphicon-arrow-down"; ?>"></span>
            <?php echo $change . " ({$quote->ChangeinPercent})"; ?>
        </small>
    </h3>
</div>

<div class="container-fluid col-md-12" style="padding-left: 0px;">
    <div class="col-md-6 col-xs-12">
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
    <div class="col-md-6" style="padding-left: 0px;">
        <img src="<?php echo $chart; ?>" class="col-md-12 col-xs-12" />
    </div>
</div>

<div class="container-fluid col-md-12" style="padding-left: 0px; padding-top: -30px;">
    <?php
    foreach ($news as $value) {
        ?>
        <div class="list-group-item col-md-3 col-xs-12" style='min-height: 72px; margin-bottom: 20px;'>
            <a href="<?php echo $value['link']; ?>" target='_blank'>
                <h5>
                    <strong class='two-lines'>
                        <?php echo $value['title']; ?>
                    </strong>
                </h5>
            </a>
        </div>
        <?php
    }
    ?>
</div>