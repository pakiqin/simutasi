<nav aria-label="Page navigation">
    <ul class="pagination justify-content-end">
        <?php if ($pager->hasPrevious()): ?>
            <li class="page-item"><a class="page-link" href="<?= $pager->getFirst() ?>">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="<?= $pager->getPreviousPage() ?>">&lsaquo;</a></li>
        <?php endif; ?>

        <?php foreach ($pager->links() as $link): ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                <a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a>
            </li>
        <?php endforeach; ?>

        <?php if ($pager->hasNext()): ?>
            <li class="page-item"><a class="page-link" href="<?= $pager->getNextPage() ?>">&rsaquo;</a></li>
            <li class="page-item"><a class="page-link" href="<?= $pager->getLast() ?>">&raquo;</a></li>
        <?php endif; ?>
    </ul>
</nav>
