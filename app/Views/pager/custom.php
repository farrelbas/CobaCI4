<?php $pager->setSurroundCount(2) ?>

<ul class="pagination justify-content-end">
    <?php if ($pager->hasPrevious()) : ?>
        <li class="page-item">
            <a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
    <?php endif ?>
    <?php foreach ($pager->links() as $link) : ?>
        <li <?= $link['active'] ? 'class="active"' : '' ?> class="page-item"><a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a></li>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
        <li class="page-item">
            <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    <?php endif ?>
</ul>