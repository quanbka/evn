<div class="sidebar sidebar-main">
    <div class="block filter" id="layered-filter-block">
        <div class="block-content filter-content">
            <div class="filter-options" id="narrow-by-list" data-role="content">

                <?php
                    $baseCategory = \App\Models\Category::whereNull('category_id')->orderBy('sorder', 'desc')->get();
                ?>
                @foreach ($baseCategory as $categoryItem)
                    <div class="box_list_category">
                        <div class="title_category"><a href="{{ $categoryItem->url() }}">{{ $categoryItem->name }}</a></div>
                        <div class="">

                            <div data-role="content" class="filter-options-content">
                                <ol class="items">
                                    <?php
                                    $categoryChildren = \App\Models\Category::where('category_id', $categoryItem->id)->get();
                                    // print_r($categoryChildren); exit;
                                    ?>
                                    @foreach ($categoryChildren as $item)
                                        <li class="my item  active ">
                                            <a class="one" title="Sofa bộ" href="{{ $item->url() }}">{{ $item->name }}<span class="count">{{ $item->countProduct() }}</span></a>
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                    <hr>
            @endforeach
        </div>
    </div>
</div>
