
<div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
    <aside class="aa-sidebar">
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
            <h3>Kategorie</h3>
            <ul class="aa-catg-nav">

                <!-- Categories -->
                {foreach $rsCategories as $item}
                    <li><a href="/category/{$item['id']}/">{$item['name']}</a></li>
                {/foreach}

            </ul>
        </div>
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
            <h3>Stan</h3>
            <div class="tag-cloud">
                <a href="#" onclick="selectTag(this)">Nowe</a>
                <a href="#" onclick="selectTag(this)">Używane</a>
            </div>
        </div>
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
            <h3>Cena (zł)</h3>
            <!-- price range -->
            <div class="aa-sidebar-price-range">
                <form action="">
                    <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                    </div>
                    <span id="skip-value-lower" class="example-val">30.00</span>
                    <span id="skip-value-upper" class="example-val">100.00</span>
                    <button class="aa-filter-btn" type="submit">Filter</button>
                </form>
            </div>
        </div>
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
            <h3>Producent części</h3>
            <div class="tag-cloud">
                <a href="#" onclick="selectTag(this)">Bosch</a>
                <a href="#" onclick="selectTag(this)">Filtron</a>
                <a href="#" onclick="selectTag(this)">Knecht</a>
                <a href="#" onclick="selectTag(this)">Mann Filter</a>
                <a href="#" onclick="selectTag(this)">Inny</a>
            </div>
        </div>
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
            <h3>Marka samochodu</h3>
            <div class="tag-cloud">
                <a href="#" onclick="selectTag(this)">Audi</a>
                <a href="#" onclick="selectTag(this)">Opel</a>
                <a href="#" onclick="selectTag(this)">Seat</a>
                <a href="#" onclick="selectTag(this)">Volkswagen</a>
                <a href="#" onclick="selectTag(this)">Inne marki</a>
            </div>
        </div>
    </aside>
</div>