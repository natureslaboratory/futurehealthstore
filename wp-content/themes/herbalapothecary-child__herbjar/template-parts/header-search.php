<form class="c-search <?= array_key_exists("cat", $args) ? "" : "c-search--navigation" ?>">
    <?php if (array_key_exists("cat", $args)) { ?>
        <select class="c-search__dropdown search-category">
            <option value="" selected="selected">All</option>
        </select>
    <?php } ?>
    <input class="c-search__box search-text" type="text" placeholder="I'm shopping for...">
    <button type="submit" class="c-button search-submit">Search</button>
</form>