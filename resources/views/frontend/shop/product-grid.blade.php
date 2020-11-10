<div class="row">
    <?php
        if (!isset($columns)) {
            $columns = 4;
        }
    ?>
        <?php $clearDivIndex = 0 ?>
        @foreach ($products as $key => $product)
            <?php
                $clearDivIndex++;
                $isClearDiv = !($clearDivIndex % $columns);
            ?>
            <div class="col-md-{{ 12 / $columns }} product-container">
                @include("frontend.shop.item", ['product' => $product])
            </div>
            @if ($isClearDiv)
                    <div class="clearfix">

                    </div>
            @endif
        @endforeach
</div>

{{ $products->render() }}
