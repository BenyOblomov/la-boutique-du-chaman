<?php

foreach ($pages as $value) {
    echo '<li class="nav-item">
    <a aria-current="page" class="text-warning nav-link " href="' . $value['href'] . '">' . $value['name'] . '</a>
</li>';
}
